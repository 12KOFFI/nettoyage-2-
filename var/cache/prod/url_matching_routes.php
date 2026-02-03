<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/client/new' => [[['_route' => 'app_client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/demande/devis/liste' => [[['_route' => 'app_demande_devis_liste', '_controller' => 'App\\Controller\\DemandeDevisController::liste'], null, ['GET' => 0], null, false, false, null]],
        '/demande/devis' => [[['_route' => 'app_demande_devis_index', '_controller' => 'App\\Controller\\DemandeDevisController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/demande/devis/new' => [[['_route' => 'app_demande_devis_new', '_controller' => 'App\\Controller\\DemandeDevisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/local' => [[['_route' => 'app_local_index', '_controller' => 'App\\Controller\\LocalController::index'], null, ['GET' => 0], null, false, false, null]],
        '/local/new' => [[['_route' => 'app_local_new', '_controller' => 'App\\Controller\\LocalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::about'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\PageController::services'], null, null, null, false, false, null]],
        '/services/nettoyage-industriel' => [[['_route' => 'app_service_industriel', '_controller' => 'App\\Controller\\PageController::serviceIndustriel'], null, null, null, false, false, null]],
        '/services/nettoyage-chantier' => [[['_route' => 'app_service_chantier', '_controller' => 'App\\Controller\\PageController::serviceChantier'], null, null, null, false, false, null]],
        '/services/nettoyage-immeuble' => [[['_route' => 'app_service_immeuble', '_controller' => 'App\\Controller\\PageController::serviceImmeuble'], null, null, null, false, false, null]],
        '/services/nettoyage-bureaux' => [[['_route' => 'app_service_bureaux', '_controller' => 'App\\Controller\\PageController::serviceBureaux'], null, null, null, false, false, null]],
        '/services/nettoyage-vitres' => [[['_route' => 'app_service_vitres', '_controller' => 'App\\Controller\\PageController::serviceVitres'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\PageController::team'], null, null, null, false, false, null]],
        '/testimonials' => [[['_route' => 'app_testimonials', '_controller' => 'App\\Controller\\PageController::testimonials'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\PageController::faq'], null, null, null, false, false, null]],
        '/gallery-image' => [[['_route' => 'app_gallery_image', '_controller' => 'App\\Controller\\PageController::galleryImage'], null, null, null, false, false, null]],
        '/gallery-video' => [[['_route' => 'app_gallery_video', '_controller' => 'App\\Controller\\PageController::galleryVideo'], null, null, null, false, false, null]],
        '/before-after' => [[['_route' => 'app_before_after', '_controller' => 'App\\Controller\\PageController::beforeAfter'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'app_404', '_controller' => 'App\\Controller\\PageController::notFound'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'app_prestation_index', '_controller' => 'App\\Controller\\PrestationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/prestation/new' => [[['_route' => 'app_prestation_new', '_controller' => 'App\\Controller\\PrestationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\SecurityController::profile'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/client/([^/]++)(?'
                    .'|(*:26)'
                    .'|/edit(*:38)'
                    .'|(*:45)'
                .')'
                .'|/demande/devis/([^/]++)(?'
                    .'|(*:79)'
                    .'|/(?'
                        .'|e(?'
                            .'|dit(*:97)'
                            .'|mail(*:108)'
                        .')'
                        .'|p(?'
                            .'|df(*:123)'
                            .'|restations(*:141)'
                        .')'
                        .'|valider(*:157)'
                    .')'
                    .'|(*:166)'
                .')'
                .'|/local/([^/]++)(?'
                    .'|(*:193)'
                    .'|/edit(*:206)'
                    .'|(*:214)'
                .')'
                .'|/prestation/([^/]++)(?'
                    .'|(*:246)'
                    .'|/edit(*:259)'
                    .'|(*:267)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        38 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        45 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_demande_devis_show', '_controller' => 'App\\Controller\\DemandeDevisController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        97 => [[['_route' => 'app_demande_devis_edit', '_controller' => 'App\\Controller\\DemandeDevisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        108 => [[['_route' => 'app_demande_devis_email', '_controller' => 'App\\Controller\\DemandeDevisController::sendEmail'], ['id'], ['POST' => 0], null, false, false, null]],
        123 => [[['_route' => 'app_demande_devis_pdf', '_controller' => 'App\\Controller\\DemandeDevisController::downloadPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        141 => [[['_route' => 'app_demande_devis_prestations', '_controller' => 'App\\Controller\\DemandeDevisController::updatePrestations'], ['id'], ['POST' => 0], null, false, false, null]],
        157 => [[['_route' => 'app_demande_devis_valider', '_controller' => 'App\\Controller\\DemandeDevisController::valider'], ['id'], ['POST' => 0], null, false, false, null]],
        166 => [[['_route' => 'app_demande_devis_delete', '_controller' => 'App\\Controller\\DemandeDevisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        193 => [[['_route' => 'app_local_show', '_controller' => 'App\\Controller\\LocalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        206 => [[['_route' => 'app_local_edit', '_controller' => 'App\\Controller\\LocalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        214 => [[['_route' => 'app_local_delete', '_controller' => 'App\\Controller\\LocalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_prestation_show', '_controller' => 'App\\Controller\\PrestationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_prestation_edit', '_controller' => 'App\\Controller\\PrestationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        267 => [
            [['_route' => 'app_prestation_delete', '_controller' => 'App\\Controller\\PrestationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
