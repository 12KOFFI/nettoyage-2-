<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_72a3fee79def6152659c6bcf01db9d69 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Accueil - Multi-Nettoyage Propreté";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<!-- Header avec vidéo de fond 4K -->
    <header class=\"header\">
        <div class=\"video-fullscreen-wrap\">
            <div class=\"video-fullscreen-video\" data-overlay-dark=\"5\">
                <video autoplay loop muted playsinline preload=\"none\" poster=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\">
                    <source src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("video.mp4"), "html", null, true);
        yield "\" type=\"video/mp4\">
                </video>
            </div>
            <div class=\"v-middle\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <h5 class=\"wow fadeInDown\" data-wow-delay=\".1s\">Votre propreté, notre expertise</h5>
                            <h3 class=\"wow zoom-in-place\" data-wow-offset=\"100\" data-wow-duration=\"0.8s\">Services de nettoyage professionnel</h3>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".2s\">Multi-Nettoyage Propreté : votre partenaire pour tous vos besoins de nettoyage professionnel.</p>
                            <div class=\"btn-wrap mt-30 wow fadeInUp\" data-wow-delay=\".3s\">
                                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"button-1\"> <span class=\"text\">En savoir plus</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\" style=\"margin-left: 15px;\"> <span class=\"text\">Demander un devis</span> <span class=\"icon\"><i class=\"fa-solid fa-file-invoice\"></i></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <div class=\"about section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 mb-30\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Présentation</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Multi-Nettoyage Propreté</div>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Créée en <strong>2017</strong> par des professionnels du nettoyage, notre entreprise intervient à <strong>Paris et en Île-de-France</strong> pour offrir des prestations de qualité dans le nettoyage de locaux professionnels.</p>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".35s\" style=\"margin-top: 15px;\"><strong>Notre positionnement :</strong> Qualité, réactivité, professionnalisme. Nous améliorons les conditions de travail dans les lieux publics et privés grâce à notre expertise et notre engagement.</p>
                    <ul class=\"page-list list-unstyled mb-30\">
                        <li class=\"wow fadeInUp\" data-wow-delay=\".4s\">
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Hygiène et propreté garanties</p>
                            </div>
                        </li>
                        <li class=\"wow fadeInUp\" data-wow-delay=\".5s\">
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Équipe professionnelle & Équipements modernes</p>
                            </div>
                        </li>
                        <li class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Méthodologie éprouvée et organisation rigoureuse</p>
                            </div>
                        </li>
                    </ul>
                    <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".7s\">
                        <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"button-1\"> <span class=\"text\">En savoir plus</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                        <div class=\"call-button\"> <a aria-label=\"link\" href=\"tel:+33123456789\" class=\"icon\"><i class=\"fa-solid fa-phone-volume\"></i></a>
                            <div class=\"cont\"> <span class=\"text\">Nous contacter</span> <a class=\"phone\" href=\"tel:+33123456789\">+33 1 23 45 67 89</a> </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 offset-lg-1 col-md-12\">
                    <div class=\"row g-3\">
                        <div class=\"col-6 text-end\"> <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a1.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"margin-top: 25%;\" loading=\"lazy\" width=\"400\" height=\"300\"> </div>
                        <div class=\"col-6 text-start\"> <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a2.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\" width=\"400\" height=\"300\"> </div>
                        <div class=\"col-6 text-end\"> <img class=\"img-fluid rounded w-50 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a3.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\" width=\"400\" height=\"300\"> </div>
                        <div class=\"col-6 text-start\"> <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a4.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\" width=\"400\" height=\"300\"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Box -->
    <section class=\"services-box mb-90\">
        <div class=\"container\">
            <div class=\"row wow zoomIn\" data-wow-delay=\"0.1s\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-certificate\"></i>
                        <div class=\"cont\">
                            <h5>Entreprise certifiée</h5>
                            <p>Nous garantissons un nettoyage professionnel de qualité supérieure pour tous vos espaces.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-screwdriver-wrench\"></i>
                        <div class=\"cont\">
                            <h5>Méthodologie rigoureuse</h5>
                            <p>Organisation et suivi systématique pour des résultats impeccables à chaque intervention.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-user\"></i>
                        <div class=\"cont\">
                            <h5>Personnel qualifié</h5>
                            <p>Équipe formée et professionnelle pour un nettoyage irréprochable et efficace.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services 1 -->
    <section class=\"services1 section-padding bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Nos prestations</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Services de nettoyage professionnel</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 wow zoomIn\" data-wow-delay=\".3s\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\" loading=\"lazy\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_industriel");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-industry\"></i>
                                        <h5>Nettoyage industriel</h5>
                                        <p>Le nettoyage des sols de votre usine, le nettoyage des machines, entretien des locaux sociaux,…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/3.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\" loading=\"lazy\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_chantier");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-hard-hat\"></i>
                                        <h5>Nettoyage de chantiers</h5>
                                        <p>L'entretien des bungalows (bases de vies), le nettoyage final avant livraison, le nettoyage des vitres et encadrements, parkings extérieurs, voiries,…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\" loading=\"lazy\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_immeuble");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-building\"></i>
                                        <h5>Nettoyage d'immeubles</h5>
                                        <p>Nettoyage des parties communes, locaux poubelle, entretien des jardins et parkings de l'immeuble.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/4.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\" loading=\"lazy\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_bureaux");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-briefcase\"></i>
                                        <h5>Nettoyage de bureaux</h5>
                                        <p>Nettoyage suivant besoins de vos bureaux, nettoyage du mobilier, entretien des sols et des murs, sanitaires, salles de réunion,…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/6.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\" loading=\"lazy\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_vitres");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-window-maximize\"></i>
                                        <h5>Nettoyage de vitres</h5>
                                        <p>Notre équipe de laveurs de vitres professionnels et qualifiés (CACES), réalise le nettoyage de toutes vos vitres qu'elles soient accessibles ou inaccessibles avec les moyens adaptés (échafaudage, cordes, nacelles,…)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-30 wow zoomIn\" data-wow-delay=\".2s\">
                    <div class=\"section-info\">
                        <div class=\"tag\">Services</div>
                        <div class=\"desc\">Plus de 1000 clients nous font confiance pour des résultats professionnels.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Services 3 -->
    <section class=\"services3 section-padding\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-4 col-md-12 mb-30\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Ce que nous proposons</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Nos prestations de nettoyage</div>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Services de nettoyage professionnel pour entreprises, industries et particuliers, avec des années d'expérience et une méthodologie éprouvée.</p>
                    <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".4s\">
                        <a href=\"";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" class=\"button-1\"> <span class=\"text\">Tous nos services</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"item wow zoomIn\" data-wow-delay=\".5s\">
                                <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_industriel");
        yield "\"> <i class=\"fa-thin fa-industry\"></i>
                                    <h5>Nettoyage industriel</h5>
                                    <div class=\"shape\"> <i class=\"fa-thin fa-industry\"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"item wow zoomIn\" data-wow-delay=\".6s\">
                                <a href=\"";
        // line 236
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_chantier");
        yield "\"> <i class=\"fa-thin fa-hard-hat\"></i>
                                    <h5>Nettoyage de chantiers</h5>
                                    <div class=\"shape\"> <i class=\"fa-thin fa-hard-hat\"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"item wow zoomIn\" data-wow-delay=\".7s\">
                                <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_immeuble");
        yield "\"> <i class=\"fa-thin fa-building\"></i>
                                    <h5>Nettoyage d'immeubles</h5>
                                    <div class=\"shape\"> <i class=\"fa-thin fa-building\"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"item wow zoomIn\" data-wow-delay=\".8s\">
                                <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_bureaux");
        yield "\"> <i class=\"fa-thin fa-briefcase\"></i>
                                    <h5>Nettoyage de bureaux</h5>
                                    <div class=\"shape\"> <i class=\"fa-thin fa-briefcase\"></i> </div>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-4 col-md-6\">
                            <div class=\"item wow zoomIn\" data-wow-delay=\".9s\">
                                <a href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_vitres");
        yield "\"> <i class=\"fa-thin fa-window-maximize\"></i>
                                    <h5>Nettoyage de vitres</h5>
                                    <div class=\"shape\"> <i class=\"fa-thin fa-window-maximize\"></i> </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section id=\"testimonials\" class=\"testimonials section-padding bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-25 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".2s\">Pourquoi nos clients nous font confiance</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".4s\">Témoignages clients</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 wow fadeInUp\" data-wow-delay=\".6s\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <div class=\"info valign\">
                                <div class=\"full-width\">
                                    <p>Service excellent et nettoyage impeccable. Toujours à l'heure, équipe professionnelle et résultats parfaits à chaque intervention ! </p>
                                    <div class=\"review-title\">
                                        <div class=\"img\">
                                            <div class=\"img-inner\"> <img src=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/1.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\"> </div>
                                            <div class=\"quote-icon\"> <i class=\"fa-solid fa-quote-left\"></i> </div>
                                        </div>
                                        <div class=\"text-block\">
                                            <h6>Dan Martin</h6>
                                            <div class=\"icons\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"info valign\">
                                <div class=\"full-width\">
                                    <p>Équipe très professionnelle et soucieuse des détails. Ils rendent l'entretien de nos locaux complètement sans stress.</p>
                                    <div class=\"review-title\">
                                        <div class=\"img\">
                                            <div class=\"img-inner\"> <img src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/2.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\"> </div>
                                            <div class=\"quote-icon\"> <i class=\"fa-solid fa-quote-left\"></i> </div>
                                        </div>
                                        <div class=\"text-block\">
                                            <h6>Emily Brown</h6>
                                            <div class=\"icons\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"info valign\">
                                <div class=\"full-width\">
                                    <p>Fiables, efficaces et faciles à joindre. Nos bureaux n'ont jamais été aussi propres — vivement recommandé !</p>
                                    <div class=\"review-title\">
                                        <div class=\"img\">
                                            <div class=\"img-inner\"> <img src=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/3.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\"> </div>
                                            <div class=\"quote-icon\"> <i class=\"fa-solid fa-quote-left\"></i> </div>
                                        </div>
                                        <div class=\"text-block\">
                                            <h6>Olivia White</h6>
                                            <div class=\"icons\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"info valign\">
                                <div class=\"full-width\">
                                    <p>Ils prennent soin de chaque détail, de la propreté des sols aux espaces communs. Un service en qui vous pouvez avoir confiance !</p>
                                    <div class=\"review-title\">
                                        <div class=\"img\">
                                            <div class=\"img-inner\"> <img src=\"";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/4.jpg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\"> </div>
                                            <div class=\"quote-icon\"> <i class=\"fa-solid fa-quote-left\"></i> </div>
                                        </div>
                                        <div class=\"text-block\">
                                            <h6>Paul Brown</h6>
                                            <div class=\"icons\"> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> <i class=\"fa-solid fa-star\"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-60 wow zoomIn\" data-wow-delay=\".8s\">
                    <div class=\"section-info\">
                        <div class=\"tag\">Confiance</div>
                        <div class=\"desc\">Plus de 1000 clients font confiance à <span class=\"text-decoration-line-bottom\">Multi-Nettoyage Propreté</span> pour des résultats impeccables.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class=\"team section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 mb-30\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Notre équipe</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Rencontrez nos experts en nettoyage</div>
                    <p class=\"mb-30 wow fadeInUp\" data-wow-delay=\".3s\">Notre équipe qualifiée est dédiée à maintenir vos espaces propres, sécurisés et accueillants, toute l'année.</p>
                    <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".4s\">
                        <a href=\"";
        // line 373
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"button-1\"> <span class=\"text\">Toute l'équipe</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                    </div>
                </div>
                <div class=\"col-lg-8 col-md-12 wow fadeInRight\" data-wow-delay=\".6s\">
                    <div class=\"team-container\">
                        <div class=\"owl-carousel owl-theme\">
                            <div class=\"item\">
                                <div class=\"wrapper\"> <div class=\"img\"><img src=\"";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/01.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 381
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">Martin</h4>
                                        <h6 class=\"position\">Spécialiste nettoyage</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <div class=\"img\"><img src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/02.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 391
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">Sophie</h4>
                                        <h6 class=\"position\">Technicienne nettoyage</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <div class=\"img\"><img src=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/03.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">Natalie</h4>
                                        <h6 class=\"position\">Responsable maintenance</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <div class=\"img\"><img src=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/05.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 411
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">Frank</h4>
                                        <h6 class=\"position\">Expert nettoyage</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <div class=\"img\"><img src=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/04.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 421
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">Chloe</h4>
                                        <h6 class=\"position\">Technicienne propreté</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"wrapper\">
                                    <div class=\"img\"><img src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/06.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\" loading=\"lazy\"></div>
                                    <div class=\"icon\"> <a href=\"";
        // line 431
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                                    <div class=\"text\">
                                        <h4 class=\"name\">David</h4>
                                        <h6 class=\"position\">Expert équipements</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs -->
    <div class=\"faqs section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 col-md-12 mb-30\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Questions fréquentes</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">FAQ</div>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Consultez notre section FAQ pour des réponses rapides et utiles aux questions les plus courantes sur le nettoyage professionnel et l'entretien. Parfait pour des informations rapides et faciles.</p>
                </div>
                <div class=\"col-lg-6 offset-lg-1 col-md-12\">
                    <ul class=\"accordion-box clearfix\">
                        <li class=\"accordion block wow fadeInUp\" data-wow-delay=\".5s\">
                            <div class=\"acc-btn\"><span>1</span> À quelle fréquence faire nettoyer mes bureaux ?</div>
                            <div class=\"acc-content\">
                                <div class=\"content\">
                                    <p>Pour un environnement de travail optimal, nous recommandons un nettoyage quotidien pour les bureaux, et un nettoyage approfondi hebdomadaire. La fréquence peut être adaptée selon vos besoins et le trafic de vos locaux.</p>
                                </div>
                            </div>
                        </li>
                        <li class=\"accordion block wow fadeInUp\" data-wow-delay=\".6s\">
                            <div class=\"acc-btn\"><span>2</span> Quels produits de nettoyage utilisez-vous ?</div>
                            <div class=\"acc-content\">
                                <div class=\"content\">
                                    <p>Nous utilisons exclusivement des produits écologiques et certifiés, respectueux de l'environnement et de la santé. Tous nos produits sont adaptés aux différents types de surfaces et répondent aux normes de sécurité en vigueur.</p>
                                </div>
                            </div>
                        </li>
                        <li class=\"accordion block wow fadeInUp\" data-wow-delay=\".7s\">
                            <div class=\"acc-btn\"><span>3</span> Proposez-vous des contrats d'entretien régulier ?</div>
                            <div class=\"acc-content\">
                                <div class=\"content\">
                                    <p>Oui, nous proposons des contrats d'entretien régulier adaptés à vos besoins : quotidien, hebdomadaire, mensuel ou ponctuel. Ces contrats garantissent une propreté constante et des tarifs préférentiels.</p>
                                </div>
                            </div>
                        </li>
                        <li class=\"accordion block wow fadeInUp\" data-wow-delay=\".8s\">
                            <div class=\"acc-btn\"><span>4</span> Intervenez-vous en dehors des heures ouvrables ?</div>
                            <div class=\"acc-content\">
                                <div class=\"content\">
                                    <p>Absolument. Nous intervenons selon vos contraintes : tôt le matin, en soirée, ou le week-end pour ne pas perturber votre activité. Notre flexibilité s'adapte à vos horaires.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <!-- Call -->
                    <div class=\"col-lg-6 col-md-12 mb-30\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4>Faites confiance à <span>Multi-Nettoyage Propreté</span> pour vos besoins de nettoyage, rejoignez-nous dès aujourd'hui.</h4>
                        </div>
                        <div class=\"help wow fadeInUp\" data-wow-delay=\".2s\">
                            <div class=\"icon\"><i class=\"fa-brands fa-whatsapp\"></i></div>
                            <div class=\"text\">
                                <p>Contactez-nous sur WhatsApp</p> <a href=\"tel:+33123456789\">+33 1 23 45 67 89</a>
                            </div>
                        </div>
                    </div>
                    <!-- CTA Button -->
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"appointment-cta-wrapper wow fadeInUp\" data-wow-delay=\".3s\">
                            <div class=\"btn-wrap\">
                                <a href=\"";
        // line 513
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\"> 
                                    <span class=\"text\">Demander un devis gratuit</span> 
                                    <span class=\"icon\"><i class=\"fa-solid fa-file-invoice\"></i></span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scrolling -->
    <div class=\"scrolling scrolling-ticker\">
        <div class=\"wrapper feather-shadow2\">
            <div class=\"content\"> <span><img src=\"";
        // line 527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Nettoyage</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Propreté</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Bureaux</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Immeubles</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Industrie</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Chantiers</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Vitrerie</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Hygiène</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Qualité</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Sécurité</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Professionnel</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Expertise</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Entretien</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Multi-Nettoyage</span> </div>
            <div class=\"content\"> <span><img src=\"";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Nettoyage</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Propreté</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Bureaux</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Immeubles</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Industrie</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Chantiers</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Vitrerie</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Hygiène</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Qualité</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Sécurité</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Professionnel</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Expertise</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Entretien</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Multi-Nettoyage</span> </div>
        </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  755 => 528,  725 => 527,  708 => 513,  686 => 494,  620 => 431,  616 => 430,  604 => 421,  600 => 420,  588 => 411,  584 => 410,  572 => 401,  568 => 400,  556 => 391,  552 => 390,  540 => 381,  536 => 380,  526 => 373,  490 => 340,  470 => 323,  450 => 306,  430 => 289,  398 => 260,  387 => 252,  376 => 244,  365 => 236,  354 => 228,  344 => 221,  306 => 186,  301 => 184,  285 => 171,  280 => 169,  264 => 156,  259 => 154,  243 => 141,  238 => 139,  222 => 126,  217 => 124,  162 => 72,  158 => 71,  154 => 70,  150 => 69,  139 => 61,  98 => 23,  94 => 22,  80 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\home\\index.html.twig");
    }
}
