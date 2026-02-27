<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig');
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('services/services.html.twig');
    }

    #[Route('/services/nettoyage-industriel', name: 'app_service_industriel')]
    public function serviceIndustriel(): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => 'industriel',
            'image' => 'img/services/2.jpg',
            'title' => 'Nettoyage industriel',
            'description' => 'Le nettoyage des sols de votre usine, le nettoyage des machines, entretien des locaux sociaux,…',
            'details' => [
                'Nettoyage des sols d\'usines',
                'Nettoyage des machines industrielles',
                'Entretien des locaux sociaux',
                'Nettoyage des entrepôts et réserves',
                'Méthodes adaptées aux environnements industriels'
            ]
        ]);
    }

    #[Route('/services/nettoyage-chantier', name: 'app_service_chantier')]
    public function serviceChantier(): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => 'chantier',
            'image' => 'img/services/3.jpg',
            'title' => 'Nettoyage de chantiers',
            'description' => 'L\'entretien des bungalows (bases de vies), le nettoyage final avant livraison, le nettoyage des vitres et encadrements, parkings extérieurs, voiries,…',
            'details' => [
                'Entretien des bungalows (bases de vie)',
                'Nettoyage final avant livraison',
                'Nettoyage des vitres et encadrements',
                'Nettoyage des parkings extérieurs',
                'Nettoyage des voiries'
            ]
        ]);
    }

    #[Route('/services/nettoyage-immeuble', name: 'app_service_immeuble')]
    public function serviceImmeuble(): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => 'immeuble',
            'image' => 'img/services/1.jpg',
            'title' => 'Nettoyage d\'immeubles',
            'description' => 'Nettoyage des parties communes, locaux poubelle, entretien des jardins et parkings de l\'immeuble.',
            'details' => [
                'Nettoyage des parties communes',
                'Entretien des locaux poubelles',
                'Entretien des jardins',
                'Nettoyage des parkings',
                'Maintenance régulière des espaces communs'
            ]
        ]);
    }

    #[Route('/services/nettoyage-bureaux', name: 'app_service_bureaux')]
    public function serviceBureaux(): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => 'bureaux',
            'image' => 'img/services/4.jpg',
            'title' => 'Nettoyage de bureaux',
            'description' => 'Nettoyage suivant besoins de vos bureaux, nettoyage du mobilier, entretien des sols et des murs, sanitaires, salles de réunion,…',
            'details' => [
                'Nettoyage du mobilier de bureau',
                'Entretien des sols et des murs',
                'Nettoyage des sanitaires',
                'Entretien des salles de réunion',
                'Nettoyage adapté à vos besoins (quotidien, hebdomadaire, ponctuel)'
            ]
        ]);
    }

    #[Route('/services/nettoyage-vitres', name: 'app_service_vitres')]
    public function serviceVitres(): Response
    {
        return $this->render('services/show.html.twig', [
            'service' => 'vitres',
            'image' => 'img/services/6.jpg',
            'title' => 'Nettoyage de vitres',
            'description' => 'Notre équipe de laveurs de vitres professionnels et qualifiés (CACES), réalise le nettoyage de toutes vos vitres qu\'elles soient accessibles ou inaccessibles avec les moyens adaptés (échafaudage, cordes, nacelles,…)',
            'details' => [
                'Nettoyage de vitres accessibles',
                'Nettoyage de vitres inaccessibles',
                'Utilisation d\'échafaudages',
                'Utilisation de cordes et nacelles',
                'Personnel qualifié CACES'
            ]
        ]);
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('team/team.html.twig');
    }

    #[Route('/testimonials', name: 'app_testimonials')]
    public function testimonials(): Response
    {
        return $this->render('pages/testimonials.html.twig');
    }

    #[Route('/faq', name: 'app_faq')]
    public function faq(): Response
    {
        return $this->render('pages/faq.html.twig');
    }

    #[Route('/gallery-image', name: 'app_gallery_image')]
    public function galleryImage(): Response
    {
        return $this->render('gallery/gallery-image.html.twig');
    }

    #[Route('/gallery-video', name: 'app_gallery_video')]
    public function galleryVideo(): Response
    {
        return $this->render('gallery/gallery-video.html.twig');
    }

    #[Route('/before-after', name: 'app_before_after')]
    public function beforeAfter(): Response
    {
        return $this->render('pages/before-after.html.twig');
    }

    #[Route('/404', name: 'app_404')]
    public function notFound(): Response
    {
        return $this->render('pages/404.html.twig', [], new Response('', 404));
    }
}
