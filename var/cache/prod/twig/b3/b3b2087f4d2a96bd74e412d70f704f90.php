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

/* layout/navbar.html.twig */
class __TwigTemplate_398aed1506c7bf3bac11aafa8644567b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<nav class=\"navbar navbar-expand-lg\">
        <div class=\"container\">
            <!-- Logo -->
            <div class=\"logo-wrapper\">
                <a class=\"logo\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" class=\"logo-img\" alt=\"\"></a>
            </div>
            <!-- Button -->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"><i class=\"ti-menu\"></i></span> </button>
            <!-- Menu -->
            <div class=\"collapse navbar-collapse\" id=\"navbar\">
                <ul class=\"navbar-nav mx-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "get", ["_route"], "method", false, false, false, 12) == "app_home")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "get", ["_route"], "method", false, false, false, 13) == "app_about")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">À propos</a></li>
                    <li class=\"nav-item dropdown\"> <a class=\"nav-link ";
        // line 14
        if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14)) && is_string($_v1 = "app_services") && str_starts_with($_v0, $_v1))) {
            yield "active";
        }
        yield " dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">Services <i class=\"ti-angle-down\"></i></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\" class=\"dropdown-item\"><span>Tous nos services</span></a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_industriel");
        yield "\" class=\"dropdown-item\"><span>Nettoyage industriel</span></a></li>
                            <li><a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_chantier");
        yield "\" class=\"dropdown-item\"><span>Nettoyage de chantiers</span></a></li>
                            <li><a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_immeuble");
        yield "\" class=\"dropdown-item\"><span>Nettoyage d'immeubles</span></a></li>
                            <li><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_bureaux");
        yield "\" class=\"dropdown-item\"><span>Nettoyage de bureaux</span></a></li>
                            <li><a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_vitres");
        yield "\" class=\"dropdown-item\"><span>Nettoyage de vitres</span></a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item\"><a class=\"nav-link ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "get", ["_route"], "method", false, false, false, 25) == "app_demande_devis_index")) {
            yield "active";
        }
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\">Contact</a></li>
                </ul>
                <div class=\"navbar-right\">
                    <div class=\"btn-wrap\">
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button\" style=\"background-color: #1f9d55; border-color: #1f9d55; color: #fff;\"> <span class=\"text\">Demander un devis</span> <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/navbar.html.twig";
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
        return array (  121 => 29,  110 => 25,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  76 => 14,  68 => 13,  60 => 12,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/navbar.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\layout\\navbar.html.twig");
    }
}
