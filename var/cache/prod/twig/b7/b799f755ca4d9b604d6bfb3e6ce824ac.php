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

/* layout/dashboard/sidebar.html.twig */
class __TwigTemplate_abfb840df899ad35e84cc38de9251028 extends Template
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
        yield "<div class=\"sidebar\" data-background-color=\"dark\">
  <div class=\"sidebar-logo\">
    <div class=\"logo-header\" data-background-color=\"dark\">
      <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"logo\">
        <img
          src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\"
          alt=\"Multi-Nettoyage Propreté\"
          class=\"navbar-brand\"
          height=\"20\"
        />
        <span>Multi‑Nettoyage</span>
      </a>
      <div class=\"nav-toggle\">
        <button class=\"btn btn-toggle toggle-sidebar\">
          <i class=\"gg-menu-right\"></i>
        </button>
        <button class=\"btn btn-toggle sidenav-toggler\">
          <i class=\"gg-menu-left\"></i>
        </button>
      </div>
      <button class=\"topbar-toggler more\">
        <i class=\"gg-more-vertical-alt\"></i>
      </button>
    </div>
  </div>
  <div class=\"sidebar-wrapper scrollbar scrollbar-inner\">
    <div class=\"sidebar-content\">
      <ul class=\"nav nav-secondary\">
        <li class=\"nav-item active\">
          <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
            <i class=\"fas fa-home\"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class=\"nav-item\">
          <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
        yield "\">
            <i class=\"fas fa-file-signature\"></i>
            <p>Devis</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/dashboard/sidebar.html.twig";
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
        return array (  88 => 36,  79 => 30,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/dashboard/sidebar.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\layout\\dashboard\\sidebar.html.twig");
    }
}
