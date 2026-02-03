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

/* demande_devis/liste.html.twig */
class __TwigTemplate_3887c8b3c3e1f2d82744f6978b4d0931 extends Template
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
        yield "Historique des devis";
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
          <h3 class=\"fw-bold mb-3\">Historique des devis</h3>
          <h6 class=\"op-7 mb-2\">Gérez et consultez tous vos devis</h6>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">Filtres de recherche</div>
              </div>
            </div>
            <div class=\"card-body\">
              <form method=\"get\" action=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
        yield "\" class=\"row g-3\">
                <div class=\"col-md-3\">
                  <label for=\"date_debut\" class=\"form-label\">Date début</label>
                  <input type=\"date\" class=\"form-control\" id=\"date_debut\" name=\"date_debut\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_debut", [], "any", false, false, false, 27), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"date_fin\" class=\"form-label\">Date fin</label>
                  <input type=\"date\" class=\"form-control\" id=\"date_fin\" name=\"date_fin\" value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "date_fin", [], "any", false, false, false, 31), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"email\" class=\"form-label\">Email client</label>
                  <input type=\"text\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        yield "\" placeholder=\"Rechercher par email\">
                </div>
                <div class=\"col-md-3\">
                  <label for=\"statut\" class=\"form-label\">Statut</label>
                  <select class=\"form-control\" id=\"statut\" name=\"statut\">
                    <option value=\"tous\" ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 40) == "tous")) {
            yield "selected";
        }
        yield ">Tous</option>
                    <option value=\"en_attente\" ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 41) == "en_attente")) {
            yield "selected";
        }
        yield ">En attente</option>
                    <option value=\"traite\" ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "statut", [], "any", false, false, false, 42) == "traite")) {
            yield "selected";
        }
        yield ">Traité</option>
                  </select>
                </div>
                <div class=\"col-12\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-search me-2\"></i>Rechercher
                  </button>
                  <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
        yield "\" class=\"btn btn-secondary ms-2\">
                    <i class=\"fas fa-redo me-2\"></i>Réinitialiser
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class=\"row mt-4\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  Liste des devis (";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalDevis"] ?? null), "html", null, true);
        yield " résultat";
        yield (((($context["totalDevis"] ?? null) > 1)) ? ("s") : (""));
        yield ")
                </div>
              </div>
            </div>
            <div class=\"card-body p-0\">
              <div class=\"table-responsive\">
                <table class=\"table table-hover align-items-center mb-0\">
                  <thead class=\"thead-light\">
                    <tr>
                      <th scope=\"col\">#</th>
                      <th scope=\"col\">Client</th>
                      <th scope=\"col\">Email</th>
                      <th scope=\"col\">Local</th>
                      <th scope=\"col\">Ville</th>
                      <th scope=\"col\">Date demande</th>
                      <th scope=\"col\">Statut</th>
                      <th scope=\"col\" class=\"text-end\">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["devis"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["devi"]) {
            // line 86
            yield "                      <tr>
                        <td class=\"fw-bold\">#";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                        <td>
                          ";
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 90), "prenom", [], "any", false, false, false, 90), "html", null, true);
                yield "
                          ";
            } else {
                // line 92
                yield "                            <span class=\"text-muted\">-</span>
                          ";
            }
            // line 94
            yield "                        </td>
                        <td>
                          ";
            // line 96
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 96) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 96), "email", [], "any", false, false, false, 96))) {
                // line 97
                yield "                            <a href=\"mailto:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 97), "email", [], "any", false, false, false, 97), "html", null, true);
                yield "\" class=\"text-primary\">
                              ";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "client", [], "any", false, false, false, 98), "email", [], "any", false, false, false, 98), "html", null, true);
                yield "
                            </a>
                          ";
            } else {
                // line 101
                yield "                            <span class=\"text-muted\">-</span>
                          ";
            }
            // line 103
            yield "                        </td>
                        <td>
                          ";
            // line 105
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "local", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 106
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "local", [], "any", false, false, false, 106), "typeLocal", [], "any", false, false, false, 106), "html", null, true);
                yield "
                          ";
            } else {
                // line 108
                yield "                            <span class=\"text-muted\">-</span>
                          ";
            }
            // line 110
            yield "                        </td>
                        <td>
                          ";
            // line 112
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "local", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 113
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "local", [], "any", false, false, false, 113), "ville", [], "any", false, false, false, 113), "html", null, true);
                yield "
                          ";
            } else {
                // line 115
                yield "                            <span class=\"text-muted\">-</span>
                          ";
            }
            // line 117
            yield "                        </td>
                        <td>
                          ";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "dateDemande", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "dateDemande", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true)) : ("-"));
            yield "
                        </td>
                        <td>
                          ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "statut", [], "any", false, false, false, 122) == "en_attente")) {
                // line 123
                yield "                            <span class=\"badge badge-warning\">En attente</span>
                            <span class=\"badge badge-danger ms-2\">
                              <i class=\"fas fa-exclamation-circle me-1\"></i>Nouvelle demande
                            </span>
                          ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 127
$context["devi"], "statut", [], "any", false, false, false, 127) == "traite")) {
                // line 128
                yield "                            <span class=\"badge badge-success\">Traité</span>
                          ";
            } else {
                // line 130
                yield "                            <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "statut", [], "any", false, false, false, 130), "html", null, true);
                yield "</span>
                          ";
            }
            // line 132
            yield "                        </td>
                        <td class=\"text-end\">
                          <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\" title=\"Voir détails\">
                            <i class=\"fas fa-eye\"></i>
                          </a>
                          <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["devi"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning ms-1\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                          </a>
                        </td>
                      </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 142
        if (!$context['_iterated']) {
            // line 143
            yield "                      <tr>
                        <td colspan=\"8\" class=\"text-center py-4\">
                          <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                          <p class=\"text-muted\">Aucun devis trouvé avec ces critères.</p>
                        </td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['devi'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        yield "                  </tbody>
                </table>
              </div>
            </div>

            ";
        // line 155
        if ((($context["totalPages"] ?? null) > 1)) {
            // line 156
            yield "              <div class=\"card-footer\">
                <nav aria-label=\"Page navigation\">
                  <ul class=\"pagination justify-content-center mb-0\">
                    <li class=\"page-item ";
            // line 159
            if ((($context["currentPage"] ?? null) == 1)) {
                yield "disabled";
            }
            yield "\">
                      <a class=\"page-link\" href=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste", Twig\Extension\CoreExtension::merge(($context["filters"] ?? null), ["page" => (($context["currentPage"] ?? null) - 1)])), "html", null, true);
            yield "\">
                        <i class=\"fas fa-chevron-left\"></i>
                      </a>
                    </li>

                    ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 166
                yield "                      ";
                if (($context["page"] == ($context["currentPage"] ?? null))) {
                    // line 167
                    yield "                        <li class=\"page-item active\">
                          <span class=\"page-link\">";
                    // line 168
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                        </li>
                      ";
                } elseif ((((                // line 170
$context["page"] == 1) || ($context["page"] == ($context["totalPages"] ?? null))) || (($context["page"] >= (($context["currentPage"] ?? null) - 2)) && ($context["page"] <= (($context["currentPage"] ?? null) + 2))))) {
                    // line 171
                    yield "                        <li class=\"page-item\">
                          <a class=\"page-link\" href=\"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste", Twig\Extension\CoreExtension::merge(($context["filters"] ?? null), ["page" => $context["page"]])), "html", null, true);
                    yield "\">
                            ";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                          </a>
                        </li>
                      ";
                } elseif (((                // line 176
$context["page"] == (($context["currentPage"] ?? null) - 3)) || ($context["page"] == (($context["currentPage"] ?? null) + 3)))) {
                    // line 177
                    yield "                        <li class=\"page-item disabled\">
                          <span class=\"page-link\">...</span>
                        </li>
                      ";
                }
                // line 181
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            yield "
                    <li class=\"page-item ";
            // line 183
            if ((($context["currentPage"] ?? null) == ($context["totalPages"] ?? null))) {
                yield "disabled";
            }
            yield "\">
                      <a class=\"page-link\" href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste", Twig\Extension\CoreExtension::merge(($context["filters"] ?? null), ["page" => (($context["currentPage"] ?? null) + 1)])), "html", null, true);
            yield "\">
                        <i class=\"fas fa-chevron-right\"></i>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            ";
        }
        // line 192
        yield "          </div>
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
        return "demande_devis/liste.html.twig";
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
        return array (  422 => 192,  411 => 184,  405 => 183,  402 => 182,  396 => 181,  390 => 177,  388 => 176,  382 => 173,  378 => 172,  375 => 171,  373 => 170,  368 => 168,  365 => 167,  362 => 166,  358 => 165,  350 => 160,  344 => 159,  339 => 156,  337 => 155,  330 => 150,  318 => 143,  316 => 142,  306 => 137,  300 => 134,  296 => 132,  290 => 130,  286 => 128,  284 => 127,  278 => 123,  276 => 122,  270 => 119,  266 => 117,  262 => 115,  256 => 113,  254 => 112,  250 => 110,  246 => 108,  240 => 106,  238 => 105,  234 => 103,  230 => 101,  224 => 98,  219 => 97,  217 => 96,  213 => 94,  209 => 92,  201 => 90,  199 => 89,  194 => 87,  191 => 86,  186 => 85,  161 => 65,  142 => 49,  130 => 42,  124 => 41,  118 => 40,  110 => 35,  103 => 31,  96 => 27,  90 => 24,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/liste.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\liste.html.twig");
    }
}
