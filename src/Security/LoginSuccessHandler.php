<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\FlashBagAwareSessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private AuthorizationCheckerInterface $authorizationChecker,
        private TokenStorageInterface $tokenStorage,
        private RequestStack $requestStack,
    ) {}

    public function onAuthenticationSuccess(Request $request, TokenInterface $token): RedirectResponse
    {
        if ($this->authorizationChecker->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->urlGenerator->generate('app_dashboard'));
        }

        if ($this->authorizationChecker->isGranted('ROLE_COM')) {
            return new RedirectResponse($this->urlGenerator->generate('app_demande_devis_liste'));
        }

        // Aucun rôle autorisé : on déconnecte immédiatement
        $this->tokenStorage->setToken(null);
        $session = $this->requestStack->getSession();
        $session->invalidate();
        if ($session instanceof FlashBagAwareSessionInterface) {
            $session->getFlashBag()->add(
                'access_denied',
                'Accès refusé : votre compte ne dispose pas des droits nécessaires pour accéder à cette application.'
            );
        }

        return new RedirectResponse($this->urlGenerator->generate('app_login'));
    }
}
