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

/* dashboard/index.html.twig */
class __TwigTemplate_0a7b2f876e9186cd9a4f9c0d98d9e175 extends Template
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
        yield "Dashboard";
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
          <h3 class=\"fw-bold mb-3\">Dashboard</h3>
          <h6 class=\"op-7 mb-2\">Suivi des demandes de devis</h6>
        </div>
        
      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"card card-stats card-round\">
            <div class=\"card-body\">
              <div class=\"row align-items-center\">
                <div class=\"col-icon\">
                  <div class=\"icon-big text-center icon-primary bubble-shadow-small\">
                    <i class=\"fas fa-file-signature\"></i>
                  </div>
                </div>
                <div class=\"col col-stats ms-3 ms-sm-0\">
                  <div class=\"numbers\">
                    <p class=\"card-category\">Total devis</p>
                    <h4 class=\"card-title\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalDevis"] ?? null), "html", null, true);
        yield "</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"card card-stats card-round\">
            <div class=\"card-body\">
              <div class=\"row align-items-center\">
                <div class=\"col-icon\">
                  <div class=\"icon-big text-center icon-warning bubble-shadow-small\">
                    <i class=\"fas fa-hourglass-half\"></i>
                  </div>
                </div>
                <div class=\"col col-stats ms-3 ms-sm-0\">
                  <div class=\"numbers\">
                    <p class=\"card-category\">En attente</p>
                    <h4 class=\"card-title\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingDevis"] ?? null), "html", null, true);
        yield "</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-sm-6 col-md-4\">
          <div class=\"card card-stats card-round\">
            <div class=\"card-body\">
              <div class=\"row align-items-center\">
                <div class=\"col-icon\">
                  <div class=\"icon-big text-center icon-success bubble-shadow-small\">
                    <i class=\"fas fa-check-circle\"></i>
                  </div>
                </div>
                <div class=\"col col-stats ms-3 ms-sm-0\">
                  <div class=\"numbers\">
                    <p class=\"card-category\">Traités</p>
                    <h4 class=\"card-title\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["processedDevis"] ?? null), "html", null, true);
        yield "</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row card-tools-still-right\">
                <div class=\"card-title\">Dernières demandes de devis</div>
                <div class=\"card-tools\">
                  <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"btn btn-label-info btn-round btn-sm\">
                    Voir toutes les demandes
                  </a>
                </div>
              </div>
            </div>
            <div class=\"card-body p-0\">
              <div class=\"table-responsive\">
                <table class=\"table align-items-center mb-0\">
                  <thead class=\"thead-light\">
                    <tr>
                      <th scope=\"col\">Client</th>
                      <th scope=\"col\">Local</th>
                      <th scope=\"col\">Date</th>
                      <th scope=\"col\" class=\"text-end\">Statut</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["latestDevis"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["devis"]) {
            // line 100
            yield "                      <tr>
                        <td>
                          ";
            // line 102
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "client", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102)), "html", null, true)) : ("Client inconnu"));
            yield "
                        </td>
                        <td>
                          ";
            // line 105
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "local", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "local", [], "any", false, false, false, 105), "typeLocal", [], "any", false, false, false, 105) . " - ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "local", [], "any", false, false, false, 105), "ville", [], "any", false, false, false, 105)), "html", null, true)) : ("Local inconnu"));
            yield "
                        </td>
                        <td>
                          ";
            // line 108
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dateDemande", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "dateDemande", [], "any", false, false, false, 108), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
                        </td>
                        <td class=\"text-end\">
                          <span class=\"badge badge-";
            // line 111
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "statut", [], "any", false, false, false, 111) == "en_attente")) ? ("warning") : ("success"));
            yield "\">
                            ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "statut", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "statut", [], "any", false, false, false, 112), "n/a")) : ("n/a")), "html", null, true);
            yield "
                          </span>
                          ";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devis"], "statut", [], "any", false, false, false, 114) == "en_attente")) {
                // line 115
                yield "                            <span class=\"badge badge-danger ms-2\">
                              <i class=\"fas fa-exclamation-circle me-1\"></i>Nouvelle demande
                            </span>
                          ";
            }
            // line 119
            yield "                        </td>
                      </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 121
        if (!$context['_iterated']) {
            // line 122
            yield "                      <tr>
                        <td colspan=\"4\" class=\"text-center py-4\">Aucune demande de devis pour le moment.</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devis'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                  </tbody>
                </table>
              </div>
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
        return "dashboard/index.html.twig";
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
        return array (  238 => 126,  229 => 122,  227 => 121,  221 => 119,  215 => 115,  213 => 114,  208 => 112,  204 => 111,  198 => 108,  192 => 105,  186 => 102,  182 => 100,  177 => 99,  156 => 81,  138 => 66,  116 => 47,  94 => 28,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "dashboard/index.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\dashboard\\index.html.twig");
    }
}
