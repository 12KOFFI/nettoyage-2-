<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Extension Twig pour le SEO : JSON-LD, Open Graph, meta, canonical
 * Utilisable dans tous les templates via les fonctions seo_*
 */
class SeoExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('seo_jsonld_organization', [$this, 'jsonLdOrganization'], ['is_safe' => ['html']]),
            new TwigFunction('seo_jsonld_local_business', [$this, 'jsonLdLocalBusiness'], ['is_safe' => ['html']]),
            new TwigFunction('seo_jsonld_service', [$this, 'jsonLdService'], ['is_safe' => ['html']]),
            new TwigFunction('seo_jsonld_breadcrumb', [$this, 'jsonLdBreadcrumb'], ['is_safe' => ['html']]),
            new TwigFunction('seo_jsonld_faq', [$this, 'jsonLdFaq'], ['is_safe' => ['html']]),
            new TwigFunction('seo_jsonld_webpage', [$this, 'jsonLdWebPage'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * Données structurées Organisation
     */
    public function jsonLdOrganization(): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Multi-Nettoyage Propreté plus 94',
            'url' => 'https://multinettoyage94.fr',
            'logo' => 'https://multinettoyage94.fr/img/logo.png',
            'description' => 'Entreprise de nettoyage professionnel à Paris et en Île-de-France. Bureaux, immeubles, chantiers, industries.',
            'foundingDate' => '2017',
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Paris et Île-de-France',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+33-6-69-53-75-73',
                'contactType' => 'customer service',
                'availableLanguage' => 'French',
                'areaServed' => 'FR',
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressRegion' => 'Val-de-Marne',
                'postalCode' => '94',
                'addressCountry' => 'FR',
            ],
            'sameAs' => [
                'https://www.facebook.com/multinettoyage94',
                'https://www.instagram.com/multinettoyage94',
                'https://www.tiktok.com/@multinettoyage94',
            ],
        ];

        return $this->renderJsonLd($data);
    }

    /**
     * Données structurées LocalBusiness (pour la page d'accueil)
     */
    public function jsonLdLocalBusiness(): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'CleaningBusiness',
            'name' => 'Multi-Nettoyage Propreté plus 94',
            'image' => 'https://multinettoyage94.fr/img/logo.png',
            'url' => 'https://multinettoyage94.fr',
            'telephone' => '+33669537573',
            'email' => 'Contact@multinettoyage94.fr',
            'address' => [
                '@type' => 'PostalAddress',
                'addressRegion' => 'Val-de-Marne',
                'postalCode' => '94',
                'addressCountry' => 'FR',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 48.7833,
                'longitude' => 2.4667,
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '18:30',
            ],
            'priceRange' => '€€',
            'areaServed' => [
                '@type' => 'GeoCircle',
                'geoMidpoint' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 48.8566,
                    'longitude' => 2.3522,
                ],
                'geoRadius' => '50000',
            ],
        ];

        return $this->renderJsonLd($data);
    }

    /**
     * Données structurées pour un service
     */
    public function jsonLdService(string $name, string $description, string $url): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $name,
            'description' => $description,
            'url' => $url,
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Multi-Nettoyage Propreté plus 94',
            ],
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Paris et Île-de-France',
            ],
            'serviceType' => 'Nettoyage professionnel',
        ];

        return $this->renderJsonLd($data);
    }

    /**
     * Fil d'Ariane (breadcrumb) en JSON-LD
     * @param array $items [ ['name' => 'Accueil', 'url' => '/'], ['name' => 'Services', 'url' => '/services'] ]
     */
    public function jsonLdBreadcrumb(array $items): string
    {
        $listItems = [];
        foreach ($items as $i => $item) {
            $listItems[] = [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $item['name'],
                'item' => $item['url'] ?? null,
            ];
        }

        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $listItems,
        ];

        return $this->renderJsonLd($data);
    }

    /**
     * FAQ en JSON-LD
     * @param array $questions [ ['q' => 'Question?', 'a' => 'Réponse.'] ]
     */
    public function jsonLdFaq(array $questions): string
    {
        $faqItems = [];
        foreach ($questions as $qa) {
            $faqItems[] = [
                '@type' => 'Question',
                'name' => $qa['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $qa['a'],
                ],
            ];
        }

        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqItems,
        ];

        return $this->renderJsonLd($data);
    }

    /**
     * WebPage avec données SEO
     */
    public function jsonLdWebPage(string $name, string $description, string $url): string
    {
        $data = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $name,
            'description' => $description,
            'url' => $url,
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => 'Multi-Nettoyage Propreté plus 94',
                'url' => 'https://multinettoyage94.fr',
            ],
        ];

        return $this->renderJsonLd($data);
    }

    private function renderJsonLd(array $data): string
    {
        return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    }
}
