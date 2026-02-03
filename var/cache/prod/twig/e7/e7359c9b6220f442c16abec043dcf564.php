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

/* services/show.html.twig */
class __TwigTemplate_c661796422a20ebcf3f5ffc68888f040 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield " - Multi-Nettoyage Propreté";
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
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Page -->
    <section class=\"page section-padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 col-md-12\">
                    <h4>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h4>
                    <p class=\"mb-30\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["description"] ?? null), "html", null, true);
        yield "</p>
                    
                    <h6>Nos prestations incluent :</h6>
                    <ul class=\"page-list list-unstyled mb-60\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["details"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 28
            yield "                        <li class=\"wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 28) * 0.1), "html", null, true);
            yield "s\">
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["detail"], "html", null, true);
            yield "</p>
                            </div>
                        </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                    </ul>

                    ";
        // line 37
        if ((($context["service"] ?? null) == "industriel")) {
            // line 38
            yield "                    <div class=\"row mb-60\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"Nettoyage industriel\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <h5>Pourquoi choisir notre service de nettoyage industriel ?</h5>
                            <p>Nous comprenons les exigences spécifiques des environnements industriels. Notre équipe utilise des méthodes et produits adaptés pour garantir sécurité, efficacité et conformité aux normes en vigueur.</p>
                            <p>Que ce soit pour le nettoyage de sols d'usines, l'entretien de machines industrielles ou la maintenance des locaux sociaux, nous adaptons nos prestations à vos contraintes opérationnelles.</p>
                        </div>
                    </div>
                    ";
        } elseif ((        // line 48
($context["service"] ?? null) == "chantier")) {
            // line 49
            yield "                    <div class=\"row mb-60\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/3.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"Nettoyage de chantiers\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <h5>Nettoyage professionnel pour vos chantiers</h5>
                            <p>Nous intervenons sur vos chantiers pour assurer un environnement de travail propre et sécurisé. De l'entretien régulier des bases de vie au nettoyage final avant livraison, nous garantissons des résultats impeccables.</p>
                            <p>Notre expertise couvre tous les aspects du nettoyage de chantier : bungalows, vitres, encadrements, parkings extérieurs et voiries.</p>
                        </div>
                    </div>
                    ";
        } elseif ((        // line 59
($context["service"] ?? null) == "immeuble")) {
            // line 60
            yield "                    <div class=\"row mb-60\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"Nettoyage d'immeubles\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <h5>Entretien complet de votre immeuble</h5>
                            <p>Nous assurons l'entretien régulier de tous les espaces communs de votre immeuble pour maintenir un environnement agréable et professionnel pour tous les résidents.</p>
                            <p>De l'entretien des parties communes aux jardins et parkings, nous couvrons tous vos besoins en matière de propreté immobilière.</p>
                        </div>
                    </div>
                    ";
        } elseif ((        // line 70
($context["service"] ?? null) == "bureaux")) {
            // line 71
            yield "                    <div class=\"row mb-60\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/4.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"Nettoyage de bureaux\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <h5>Un environnement de travail optimal</h5>
                            <p>Nous adaptons nos prestations à vos besoins spécifiques : nettoyage quotidien, hebdomadaire ou ponctuel. Notre objectif est de créer un environnement de travail agréable et professionnel.</p>
                            <p>Mobilier, sols, murs, sanitaires, salles de réunion : nous prenons soin de tous les espaces de vos bureaux pour garantir la propreté et l'hygiène.</p>
                        </div>
                    </div>
                    ";
        } elseif ((        // line 81
($context["service"] ?? null) == "vitres")) {
            // line 82
            yield "                    <div class=\"row mb-60\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/6.jpg"), "html", null, true);
            yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"Nettoyage de vitres\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <h5>Laveurs de vitres professionnels</h5>
                            <p>Notre équipe de laveurs de vitres est composée de professionnels qualifiés (CACES) qui maîtrisent toutes les techniques de nettoyage, y compris pour les vitres difficiles d'accès.</p>
                            <p>Nous utilisons les moyens adaptés à chaque situation : échafaudages, cordes, nacelles pour garantir un résultat impeccable, quelles que soient les contraintes d'accès.</p>
                        </div>
                    </div>
                    ";
        }
        // line 93
        yield "
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Box -->
    <section class=\"services-box mb-90 bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Nos engagements</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Pourquoi nous choisir ?</div>
                </div>
            </div>
            <div class=\"row wow zoomIn\" data-wow-delay=\"0.3s\">
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-user-graduate\"></i>
                        <div class=\"cont\">
                            <h5>Personnel formé et qualifié</h5>
                            <p>Nos équipes sont régulièrement formées aux dernières techniques et normes d'hygiène.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-tools\"></i>
                        <div class=\"cont\">
                            <h5>Matériel professionnel</h5>
                            <p>Nous utilisons des équipements modernes et performants pour garantir des résultats optimaux.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"item\"> <i class=\"icon fa-thin fa-shield-check\"></i>
                        <div class=\"cont\">
                            <h5>Respect des normes</h5>
                            <p>Nous respectons scrupuleusement toutes les réglementations en vigueur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 text-center\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4 class=\"text-white\">Intéressé par notre service de ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["title"] ?? null)), "html", null, true);
        yield " ?</h4>
                            <p class=\"text-white mt-20\">Contactez-nous dès aujourd'hui pour obtenir un devis personnalisé et gratuit.</p>
                        </div>
                        <div class=\"btn-wrap wow fadeInUp\" data-wow-delay=\".2s\">
                            <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\"> <span class=\"text\">Demander un devis</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                            <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" class=\"button-1\" style=\"margin-left: 15px;\"> <span class=\"text\">Voir tous nos services</span> <span class=\"icon\"><i class=\"fa-solid fa-list\"></i></span> </a>
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
        return "services/show.html.twig";
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
        return array (  317 => 155,  313 => 154,  306 => 150,  298 => 145,  249 => 99,  243 => 96,  238 => 93,  226 => 84,  222 => 82,  220 => 81,  209 => 73,  205 => 71,  203 => 70,  192 => 62,  188 => 60,  186 => 59,  175 => 51,  171 => 49,  169 => 48,  158 => 40,  154 => 38,  152 => 37,  148 => 35,  130 => 31,  123 => 28,  106 => 27,  99 => 23,  95 => 22,  82 => 12,  74 => 7,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "services/show.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\services\\show.html.twig");
    }
}
