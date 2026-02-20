<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Contrôleur SEO : sitemap.xml et robots.txt générés dynamiquement
 */
class SeoController extends AbstractController
{
    #[Route('/sitemap.xml', name: 'app_sitemap', defaults: ['_format' => 'xml'])]
    public function sitemap(Request $request, UrlGeneratorInterface $urlGenerator): Response
    {
        $hostname = $request->getSchemeAndHttpHost();

        // Pages statiques avec priorité et fréquence
        $urls = [
            ['loc' => $urlGenerator->generate('app_home', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => $urlGenerator->generate('app_about', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_services', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_service_industriel', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_service_chantier', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_service_immeuble', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_service_bureaux', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_service_vitres', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_team', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_demande_devis_index', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_faq', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => $urlGenerator->generate('app_testimonials', [], UrlGeneratorInterface::ABSOLUTE_URL), 'priority' => '0.5', 'changefreq' => 'monthly'],
        ];

        $response = new Response(
            $this->renderView('seo/sitemap.xml.twig', ['urls' => $urls]),
            200,
            ['Content-Type' => 'application/xml']
        );

        $response->setSharedMaxAge(3600);

        return $response;
    }

    #[Route('/robots.txt', name: 'app_robots', defaults: ['_format' => 'txt'])]
    public function robots(Request $request): Response
    {
        $hostname = $request->getSchemeAndHttpHost();

        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "# Bloquer les pages admin et privées\n";
        $content .= "Disallow: /dashboard\n";
        $content .= "Disallow: /login\n";
        $content .= "Disallow: /register\n";
        $content .= "Disallow: /profile\n";
        $content .= "Disallow: /demande/devis/liste\n";
        $content .= "Disallow: /demande/devis/new\n";
        $content .= "Disallow: /demande/devis/*/edit\n";
        $content .= "Disallow: /demande/devis/*/pdf\n";
        $content .= "Disallow: /client\n";
        $content .= "Disallow: /local\n";
        $content .= "Disallow: /prestation\n";
        $content .= "Disallow: /404\n\n";
        $content .= "# Sitemap\n";
        $content .= "Sitemap: {$hostname}/sitemap.xml\n";

        return new Response($content, 200, ['Content-Type' => 'text/plain']);
    }
}
