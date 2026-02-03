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

/* layout/dashboard/footer.html.twig */
class __TwigTemplate_889c3f099bd53755fbd21e054148d17c extends Template
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
        yield "<footer class=\"footer\">
  <div class=\"container-fluid d-flex flex-column flex-md-row justify-content-between align-items-center gap-2\">
    <div class=\"text-muted\">
      <strong>Multi-Nettoyage Propreté Plus 94</strong> — Services de nettoyage professionnel
    </div>
    <div class=\"text-muted small\">
      Tél. : 06.69.53.75.73 • Email : multinettoyage94@gmail.com
    </div>
    <div class=\"text-muted small\">
      SIRET : RCS CRÉTEIL 990 875 155 00014 • APE : 8122Z • TVA : FR 46990875155
    </div>
  </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/dashboard/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/dashboard/footer.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\layout\\dashboard\\footer.html.twig");
    }
}
