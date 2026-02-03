<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\SecurityBundle\Security;

#[AsEventListener(event: KernelEvents::EXCEPTION, priority: 2)]
class AccessDeniedListener
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private Security $security
    ) {
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        // Vérifier si c'est une exception d'accès refusé
        if ($exception instanceof AccessDeniedException || $exception instanceof AccessDeniedHttpException) {
            if (!$this->security->getUser()) {
                $response = new RedirectResponse($this->urlGenerator->generate('app_login'));
            } else {
                $response = new RedirectResponse($this->urlGenerator->generate('app_404'));
            }

            $event->setResponse($response);
        }
    }
}
