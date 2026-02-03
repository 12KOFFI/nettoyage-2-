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

/* base_web.html.twig */
class __TwigTemplate_4ce9c243847d7f0562898247642a72d5 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta
      content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\"
      name=\"viewport\"
    />
    <link
      rel=\"icon\"
      href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/img/kaiadmin/favicon.ico"), "html", null, true);
        yield "\"
      type=\"image/x-icon\"
    />

    <!-- Fonts and icons -->
    <script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/webfont/webfont.min.js"), "html", null, true);
        yield "\"></script>
    <script>
      WebFont.load({
        google: { families: [\"Public Sans:300,400,500,600,700\"] },
        custom: {
          families: [
            \"Font Awesome 5 Solid\",
            \"Font Awesome 5 Regular\",
            \"Font Awesome 5 Brands\",
            \"simple-line-icons\",
          ],
          urls: [\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/css/fonts.min.css"), "html", null, true);
        yield "\"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/css/bootstrap.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/css/plugins.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/css/kaiadmin.min.css"), "html", null, true);
        yield "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dashboard.css"), "html", null, true);
        yield "\" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/css/demo.css"), "html", null, true);
        yield "\" />
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 45
        yield "  </head>
  <body>
    <div class=\"wrapper\">
      ";
        // line 48
        yield from $this->load("layout/dashboard/sidebar.html.twig", 48)->unwrap()->yield($context);
        // line 49
        yield "
      <div class=\"main-panel\">
        ";
        // line 51
        yield from $this->load("layout/dashboard/header.html.twig", 51)->unwrap()->yield($context);
        // line 52
        yield "
        ";
        // line 53
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 54
        yield "
        ";
        // line 55
        yield from $this->load("layout/dashboard/footer.html.twig", 55)->unwrap()->yield($context);
        // line 56
        yield "      </div>

    </div>

    <!--   Core JS Files   -->
    <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/core/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/core/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/core/bootstrap.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Scrollbar -->
    <script src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Chart JS -->
    <script src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/chart.js/chart.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Sparkline -->
    <script src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Chart Circle -->
    <script src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/chart-circle/circles.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Datatables -->
    <script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/datatables/datatables.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Bootstrap Notify -->
    <script src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        yield "\"></script>

    <!-- jQuery Vector Maps -->
    <script src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/jsvectormap/jsvectormap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/jsvectormap/world.js"), "html", null, true);
        yield "\"></script>

    <!-- Sweet Alert -->
    <script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/plugin/sweetalert/sweetalert.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Kaiadmin JS -->
    <script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/js/kaiadmin.min.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 93
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 94
        yield "  </body>
</html>
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Kaiadmin - Bootstrap 5 Admin Dashboard";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base_web.html.twig";
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
        return array (  261 => 93,  251 => 53,  241 => 44,  230 => 5,  223 => 94,  221 => 93,  216 => 91,  210 => 88,  204 => 85,  200 => 84,  194 => 81,  188 => 78,  182 => 75,  176 => 72,  170 => 69,  164 => 66,  158 => 63,  154 => 62,  150 => 61,  143 => 56,  141 => 55,  138 => 54,  136 => 53,  133 => 52,  131 => 51,  127 => 49,  125 => 48,  120 => 45,  118 => 44,  114 => 43,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  84 => 28,  70 => 17,  62 => 12,  52 => 5,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base_web.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\base_web.html.twig");
    }
}
