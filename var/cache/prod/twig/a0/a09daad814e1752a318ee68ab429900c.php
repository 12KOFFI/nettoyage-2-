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

/* pages/about.html.twig */
class __TwigTemplate_5e72e8d74159d3f88b7761439883c951 extends Template
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
        yield "À propos - Multi-Nettoyage Propreté";
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
        yield "<!-- Banner Header -->
    <section class=\"banner-header valign bg-img bg-imgfixed bg-position-bottom\" data-overlay-dark=\"7\" data-background=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/9.jpg"), "html", null, true);
        yield "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Notre histoire</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">À propos de nous</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->
    <div class=\"about section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5 mb-30\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Historique</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Créée en 2017</div>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".3s\">Multi-Nettoyage Propreté a été fondée en <strong>2017</strong> par des professionnels du secteur du nettoyage, dotés d'une solide expérience et d'une passion pour l'excellence opérationnelle.</p>
                    <p class=\"wow fadeInUp\" data-wow-delay=\".35s\" style=\"margin-top: 15px;\">Depuis notre création, nous avons développé une expertise reconnue dans le nettoyage de locaux professionnels, en intervenant principalement à Paris et en Île-de-France.</p>
                </div>
                <div class=\"col-lg-6 offset-lg-1 col-md-12\">
                    <div class=\"row g-3\">
                        <div class=\"col-6 text-end\"> <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.1s\" src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a1.jpg"), "html", null, true);
        yield "\" alt=\"\" style=\"margin-top: 25%;\"> </div>
                        <div class=\"col-6 text-start\"> <img class=\"img-fluid rounded w-100 wow zoomIn\" data-wow-delay=\"0.3s\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a2.jpg"), "html", null, true);
        yield "\" alt=\"\"> </div>
                        <div class=\"col-6 text-end\"> <img class=\"img-fluid rounded w-50 wow zoomIn\" data-wow-delay=\"0.5s\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a3.jpg"), "html", null, true);
        yield "\" alt=\"\"> </div>
                        <div class=\"col-6 text-start\"> <img class=\"img-fluid rounded w-75 wow zoomIn\" data-wow-delay=\"0.7s\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/a4.jpg"), "html", null, true);
        yield "\" alt=\"\"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision & Mission -->
    <section class=\"services-box mb-90\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Notre engagement</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Vision & Mission</div>
                </div>
            </div>
            <div class=\"row wow zoomIn\" data-wow-delay=\"0.3s\">
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-bullseye\"></i>
                        <div class=\"cont\">
                            <h5>Notre Vision</h5>
                            <p>Offrir des prestations de qualité supérieure qui répondent aux besoins spécifiques de chaque client, en améliorant les conditions de travail dans les lieux publics et privés.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-flag\"></i>
                        <div class=\"cont\">
                            <h5>Notre Mission</h5>
                            <p>Répondre aux besoins spécifiques de chaque client avec professionnalisme, réactivité et engagement, en garantissant des résultats impeccables à chaque intervention.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Valeurs -->
    <div class=\"about section-padding bg-navy\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle text-white wow fadeInUp\" data-wow-delay=\".1s\">Nos valeurs</div>
                    <div class=\"section-title text-white wow zoomIn\" data-wow-delay=\".2s\">Valeurs professionnelles</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-30\">
                    <div class=\"item text-center text-white wow fadeInUp\" data-wow-delay=\".3s\">
                        <i class=\"icon fa-thin fa-award\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Qualité</h5>
                        <p>Nous nous engageons à fournir des prestations de la plus haute qualité, en respectant les normes les plus strictes.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-30\">
                    <div class=\"item text-center text-white wow fadeInUp\" data-wow-delay=\".4s\">
                        <i class=\"icon fa-thin fa-handshake\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Engagement</h5>
                        <p>Notre engagement envers nos clients se traduit par une écoute attentive et une adaptation constante à leurs besoins.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-30\">
                    <div class=\"item text-center text-white wow fadeInUp\" data-wow-delay=\".5s\">
                        <i class=\"icon fa-thin fa-lock\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Confidentialité</h5>
                        <p>Nous respectons scrupuleusement la confidentialité de nos clients et de leurs informations.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 mb-30\">
                    <div class=\"item text-center text-white wow fadeInUp\" data-wow-delay=\".6s\">
                        <i class=\"icon fa-thin fa-heart\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Respect</h5>
                        <p>Respect des clients, des salariés et de l'environnement dans toutes nos interventions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Métiers & Compétences -->
    <section class=\"services1 section-padding bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Notre expertise</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Les métiers du nettoyage</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item wow fadeInLeft\" data-wow-delay=\".3s\">
                        <h5><i class=\"fa-thin fa-graduation-cap\"></i> Compétences techniques</h5>
                        <p>Nos équipes maîtrisent toutes les techniques de nettoyage professionnel, des méthodes traditionnelles aux technologies les plus modernes. Formation continue garantie.</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item wow fadeInRight\" data-wow-delay=\".4s\">
                        <h5><i class=\"fa-thin fa-sitemap\"></i> Organisation du travail</h5>
                        <p>Une organisation rigoureuse et méthodique pour garantir l'efficacité de chaque intervention, dans le respect des délais et des contraintes de nos clients.</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item wow fadeInLeft\" data-wow-delay=\".5s\">
                        <h5><i class=\"fa-thin fa-user-graduate\"></i> Formation continue</h5>
                        <p>Nos salariés bénéficient d'une formation continue pour rester à jour avec les dernières normes, techniques et équipements du secteur.</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 mb-30\">
                    <div class=\"item wow fadeInRight\" data-wow-delay=\".6s\">
                        <h5><i class=\"fa-thin fa-user-check\"></i> Motivation et comportement professionnel</h5>
                        <p>Un personnel motivé, respectueux et professionnel, garantissant des prestations de qualité et une relation de confiance avec nos clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Engagement clients -->
    <section class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Notre engagement</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Envers nos clients</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-12 mb-30\">
                    <div class=\"item text-center wow fadeInUp\" data-wow-delay=\".3s\">
                        <i class=\"icon fa-thin fa-ear-listen\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Écoute</h5>
                        <p>Nous écoutons attentivement vos besoins et vos contraintes pour vous proposer des solutions adaptées.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 mb-30\">
                    <div class=\"item text-center wow fadeInUp\" data-wow-delay=\".4s\">
                        <i class=\"icon fa-thin fa-sliders\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Adaptation</h5>
                        <p>Adaptation aux contraintes spécifiques de chaque site pour garantir des prestations sur mesure.</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12 mb-30\">
                    <div class=\"item text-center wow fadeInUp\" data-wow-delay=\".5s\">
                        <i class=\"icon fa-thin fa-users\" style=\"font-size: 48px; margin-bottom: 20px;\"></i>
                        <h5>Collaboration</h5>
                        <p>Collaboration étroite entre nos équipes et vos équipes pour un travail efficace et harmonieux.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4 class=\"text-white\">Prêt à travailler avec nous ?</h4>
                            <p class=\"text-white mt-20\">Contactez-nous dès aujourd'hui pour discuter de vos besoins en nettoyage professionnel.</p>
                        </div>
                        <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".2s\">
                            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\"> <span class=\"text\">Demander un devis</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                            <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\" style=\"margin-left: 15px;\"> <span class=\"text\">Nous contacter</span> <span class=\"icon\"><i class=\"fa-solid fa-phone\"></i></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/about.html.twig";
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
        return array (  278 => 191,  274 => 190,  262 => 181,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/about.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\pages\\about.html.twig");
    }
}
