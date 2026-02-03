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

/* services/services.html.twig */
class __TwigTemplate_7fbf042d09787f2ea2fe07548f23ee62 extends Template
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
        yield "Services - Multi-Nettoyage Propreté";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Nos prestations</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">Services de nettoyage professionnel</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Services 1 -->
    <section class=\"services1 section-padding bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-12 wow fadeInLeft\" data-wow-delay=\".1s\">
                        <div class=\"item mb-60\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 26
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
                </div>
                <div class=\"col-lg-6 col-md-12 wow fadeInRight\" data-wow-delay=\".2s\">
                        <div class=\"item mb-60\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 43
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
                </div>
                <div class=\"col-lg-6 col-md-12 wow fadeInLeft\" data-wow-delay=\".3s\">
                        <div class=\"item mb-60\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/3.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 60
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
                </div>
                <div class=\"col-lg-6 col-md-12 wow fadeInRight\" data-wow-delay=\".4s\">
                        <div class=\"item mb-60\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 77
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
                </div>
                <div class=\"col-lg-6 col-md-12 wow fadeInLeft\" data-wow-delay=\".5s\">
                        <div class=\"item  mb-60\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/6.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 94
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
            <div class=\"row\">
                <div class=\"col-md-12 text-center wow zoomIn\" data-wow-delay=\".7s\">
                    <div class=\"section-info\">
                        <div class=\"tag\">Services</div>
                        <div class=\"desc\">Plus de 1000 clients nous font confiance pour des résultats professionnels.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Call -->
                    <div class=\"col-lg-5 col-md-12 mb-30 mt-60\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4 class=\"text-white\">Besoin d'un devis pour nos services ?</h4>
                            <p class=\"text-white mt-20\">Contactez-nous dès aujourd'hui pour discuter de vos besoins en nettoyage professionnel.</p>
                        </div>
                        <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".2s\">
                            <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\"> <span class=\"text\">Demander un devis</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
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
        // line 139
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
        // line 140
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
        return "services/services.html.twig";
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
        return array (  274 => 140,  244 => 139,  231 => 129,  218 => 119,  190 => 94,  185 => 92,  167 => 77,  162 => 75,  144 => 60,  139 => 58,  121 => 43,  116 => 41,  98 => 26,  93 => 24,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "services/services.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\services\\services.html.twig");
    }
}
