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

/* demande_devis/edit.html.twig */
class __TwigTemplate_a2be5e21ea3d83532682a35a1f21f2e0 extends Template
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
        return "base_web.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_web.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier la demande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande_devi"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
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
        yield "  <div class=\"container\">
    <div class=\"page-inner\">
      <div class=\"d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4\">
        <div>
          <h3 class=\"fw-bold mb-3\">Modifier la demande de devis #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["demande_devi"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</h3>
          <h6 class=\"op-7 mb-2\">Édition des informations de la demande</h6>
        </div>
        <div class=\"ms-md-auto py-2 py-md-0\">
          <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
        yield "\" class=\"btn btn-secondary btn-round\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
          </a>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-edit me-2\"></i>Formulaire d'édition
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              ";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "demande_devis/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
            </div>
          </div>
        </div>
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
        return "demande_devis/edit.html.twig";
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
        return array (  104 => 31,  84 => 14,  77 => 10,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/edit.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\edit.html.twig");
    }
}
