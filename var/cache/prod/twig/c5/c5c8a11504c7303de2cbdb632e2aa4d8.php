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

/* demande_devis/show.html.twig */
class __TwigTemplate_3ed565d9edc4970b7a9e2da7d19e3215 extends Template
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
        yield "Demande #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
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
          <h3 class=\"fw-bold mb-3\">Demande de devis #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</h3>
          <h6 class=\"op-7 mb-2\">Visualisation des données client</h6>
        </div>
        <div class=\"ms-md-auto py-2 py-md-0 d-flex gap-2\">
          <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
        yield "\" class=\"btn btn-secondary btn-round\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
          </a>
          <div class=\"dropdown\">
            <button class=\"btn btn-primary btn-round dropdown-toggle\" type=\"button\" id=\"gestionDevisDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <i class=\"fas fa-cog me-2\"></i>Gestion du devis
            </button>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"gestionDevisDropdown\">
              ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "              <li>
                <form action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_valider", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("valider" . CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 25))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"dropdown-item\">
                    <i class=\"fas fa-check text-success me-2\"></i>Valider le devis
                  </button>
                </form>
              </li>
              <li>
                <form action=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_email", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" method=\"post\" style=\"display: inline;\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("email" . CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 33))), "html", null, true);
            yield "\">
                  <button type=\"submit\" class=\"dropdown-item\">
                    <i class=\"fas fa-envelope text-primary me-2\"></i>Envoyer par email
                  </button>
                </form>
              </li>
              <li><hr class=\"dropdown-divider\"></li>
              <li>
                <a class=\"dropdown-item\" href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\">
                  <i class=\"fas fa-file-pdf text-danger me-2\"></i>Télécharger le PDF
                </a>
              </li>
              ";
        }
        // line 46
        yield "            </ul>
          </div>
        </div>
      </div>

      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 52
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
          <i class=\"fas fa-check-circle me-2\"></i>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 58
            yield "        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
          <i class=\"fas fa-check-circle me-2\"></i>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "
      <div class=\"row\">
        <div class=\"col-md-6\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-user me-2\"></i>Informations client
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              ";
        // line 75
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label fw-bold\">Nom complet</label>
                  <p class=\"mb-0\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 78), "nom", [], "any", false, false, false, 78), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
            yield "</p>
                </div>
                <div class=\"mb-3\">
                  <label class=\"form-label fw-bold\">Email</label>
                  <p class=\"mb-0\">
                    <a href=\"mailto:";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 83), "email", [], "any", false, false, false, 83), "html", null, true);
            yield "\" class=\"text-primary\">
                      <i class=\"fas fa-envelope me-1\"></i>";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 84), "email", [], "any", false, false, false, 84), "html", null, true);
            yield "
                    </a>
                  </p>
                </div>
                <div class=\"mb-0\">
                  <label class=\"form-label fw-bold\">Téléphone</label>
                  <p class=\"mb-0\">
                    <a href=\"tel:";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 91), "telephone", [], "any", false, false, false, 91), "html", null, true);
            yield "\" class=\"text-primary\">
                      <i class=\"fas fa-phone me-1\"></i>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "client", [], "any", false, false, false, 92), "telephone", [], "any", false, false, false, 92), "html", null, true);
            yield "
                    </a>
                  </p>
                </div>
              ";
        } else {
            // line 97
            yield "                <p class=\"text-muted mb-0\">Aucune information client disponible</p>
              ";
        }
        // line 99
        yield "            </div>
          </div>
        </div>

        <div class=\"col-md-6\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-map-marker-alt me-2\"></i>Informations local
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              ";
        // line 113
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label fw-bold\">Type de local</label>
                  <p class=\"mb-0\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 116), "typeLocal", [], "any", false, false, false, 116), "html", null, true);
            yield "</p>
                </div>
                <div class=\"mb-3\">
                  <label class=\"form-label fw-bold\">Ville</label>
                  <p class=\"mb-0\">";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 120), "ville", [], "any", false, false, false, 120), "html", null, true);
            yield "</p>
                </div>
                <div class=\"mb-0\">
                  <label class=\"form-label fw-bold\">Surface</label>
                  <p class=\"mb-0\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 124), "surfaceM2", [], "any", false, false, false, 124), "html", null, true);
            yield " m²</p>
                </div>
              ";
        } else {
            // line 127
            yield "                <p class=\"text-muted mb-0\">Aucune information local disponible</p>
              ";
        }
        // line 129
        yield "            </div>
          </div>
        </div>
      </div>

      <div class=\"row mt-4\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-info-circle me-2\"></i>Informations de la demande
                </div>
                <div class=\"card-tools\">
                  ";
        // line 143
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "statut", [], "any", false, false, false, 143) == "en_attente")) {
            // line 144
            yield "                    <span class=\"badge badge-warning\">En attente</span>
                  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 145
($context["devis"] ?? null), "statut", [], "any", false, false, false, 145) == "traite")) {
            // line 146
            yield "                    <span class=\"badge badge-success\">Traité</span>
                  ";
        } else {
            // line 148
            yield "                    <span class=\"badge badge-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "statut", [], "any", false, false, false, 148), "html", null, true);
            yield "</span>
                  ";
        }
        // line 150
        yield "                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <div class=\"row\">
                <div class=\"col-md-3\">
                  <label class=\"form-label fw-bold\">Date de demande</label>
                  <p class=\"mb-0\">";
        // line 157
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "dateDemande", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "dateDemande", [], "any", false, false, false, 157), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</p>
                </div>
                <div class=\"col-md-3\">
                  <label class=\"form-label fw-bold\">Fréquence</label>
                  <p class=\"mb-0\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "frequence", [], "any", false, false, false, 161), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-3\">
                  <label class=\"form-label fw-bold\">Créneau horaire</label>
                  <p class=\"mb-0\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "creneauHoraire", [], "any", false, false, false, 165), "html", null, true);
        yield "</p>
                </div>
                <div class=\"col-md-3\">
                  <label class=\"form-label fw-bold\">Statut</label>
                  <p class=\"mb-0\">
                    ";
        // line 170
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "statut", [], "any", false, false, false, 170) == "en_attente")) {
            // line 171
            yield "                      En attente
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 172
($context["devis"] ?? null), "statut", [], "any", false, false, false, 172) == "traite")) {
            // line 173
            yield "                      Traité
                    ";
        } else {
            // line 175
            yield "                      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "statut", [], "any", false, false, false, 175), "html", null, true);
            yield "
                    ";
        }
        // line 177
        yield "                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 185
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "demandePrestations", [], "any", false, false, false, 185)) > 0)) {
            // line 186
            yield "        <div class=\"row mt-4\">
          <div class=\"col-md-12\">
            <div class=\"card card-round\">
              <div class=\"card-header\">
                <div class=\"card-head-row\">
                  <div class=\"card-title\">
                    <i class=\"fas fa-tasks me-2\"></i>Prestations demandées
                  </div>
                </div>
              </div>
              <div class=\"card-body p-0\">
                <div class=\"table-responsive\">
                  ";
            // line 198
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 199
                yield "                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_prestations", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 199)]), "html", null, true);
                yield "\" method=\"post\">
                      <input type=\"hidden\" id=\"prestations_token\" name=\"_token\" value=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("prestations" . CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 200))), "html", null, true);
                yield "\">
                  ";
            }
            // line 202
            yield "                  <table class=\"table table-hover align-items-center mb-0\">
                    <thead class=\"thead-light\">
                      <tr>
                        <th>Prestation</th>
                        <th>Description admin</th>
                        <th>Détails spécifiques</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "demandePrestations", [], "any", false, false, false, 211));
            foreach ($context['_seq'] as $context["_key"] => $context["demandePrest"]) {
                // line 212
                yield "                        <tr>
                          <td>
                            ";
                // line 214
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "prestation", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 215
                    yield "                              <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "prestation", [], "any", false, false, false, 215), "libelle", [], "any", false, false, false, 215), "html", null, true);
                    yield "</strong>
                            ";
                } else {
                    // line 217
                    yield "                              <strong><i class=\"fas fa-plus-circle me-2\"></i>Autre (Personnalisée)</strong>
                            ";
                }
                // line 219
                yield "                          </td>
                          <td>
                            ";
                // line 221
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 222
                    yield "                              <button 
                                type=\"button\" 
                                class=\"btn btn-sm btn-outline-primary open-modal-btn\"
                                data-prestation-id=\"";
                    // line 225
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "id", [], "any", false, false, false, 225), "html", null, true);
                    yield "\"
                                data-prestation-name=\"";
                    // line 226
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "prestation", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "prestation", [], "any", false, false, false, 226), "libelle", [], "any", false, false, false, 226), "html", null, true)) : ("Autre (Personnalisée)"));
                    yield "\"
                                data-admin-description=\"";
                    // line 227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "adminDescription", [], "any", false, false, false, 227), "html", null, true);
                    yield "\"
                              >
                                <i class=\"fas fa-edit me-1\"></i>
                                ";
                    // line 230
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "adminDescription", [], "any", false, false, false, 230)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 231
                        yield "                                  Modifier
                                ";
                    } else {
                        // line 233
                        yield "                                  Ajouter
                                ";
                    }
                    // line 235
                    yield "                              </button>
                              <textarea
                                name=\"admin_description[";
                    // line 237
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "id", [], "any", false, false, false, 237), "html", null, true);
                    yield "]\"
                                id=\"admin_description_";
                    // line 238
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "id", [], "any", false, false, false, 238), "html", null, true);
                    yield "\"
                                class=\"form-control d-none\"
                                rows=\"2\"
                              >";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "adminDescription", [], "any", false, false, false, 241), "html", null, true);
                    yield "</textarea>
                            ";
                } else {
                    // line 243
                    yield "                              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "adminDescription", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 244
                        yield "                                <small class=\"text-muted\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "adminDescription", [], "any", false, false, false, 244), "html", null, true);
                        yield "</small>
                              ";
                    } else {
                        // line 246
                        yield "                                <span class=\"text-muted\">-</span>
                              ";
                    }
                    // line 248
                    yield "                            ";
                }
                // line 249
                yield "                          </td>
                          <td>
                            ";
                // line 251
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "detailsSpecifiques", [], "any", false, false, false, 251)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 252
                    yield "                              ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demandePrest"], "detailsSpecifiques", [], "any", false, false, false, 252), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 254
                    yield "                              <span class=\"text-muted\">-</span>
                            ";
                }
                // line 256
                yield "                          </td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['demandePrest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "                    </tbody>
                  </table>
                  ";
            // line 261
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "                    </form>
                  ";
            }
            // line 264
            yield "                </div>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        // line 270
        yield "
      ";
        // line 272
        yield "      <div class=\"row mt-4\">
        <div class=\"col-md-12\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-euro-sign me-2\"></i>Tarification
                </div>
                ";
        // line 280
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 280)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 281
            yield "                  <div class=\"card-tools\">
                    <span class=\"badge badge-success\">Prix défini</span>
                  </div>
                ";
        }
        // line 285
        yield "              </div>
            </div>
            <div class=\"card-body\">
              ";
        // line 288
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 289
            yield "                ";
            // line 290
            yield "                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-borderless\">
                        <tr>
                          <td class=\"fw-bold\">Prix unitaire HT :</td>
                          <td class=\"text-end\">";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 296), "montantHt", [], "any", false, false, false, 296), 2, ",", " "), "html", null, true);
            yield " €/m²</td>
                        </tr>
                        <tr>
                          <td class=\"fw-bold\">Surface :</td>
                          <td class=\"text-end\">";
            // line 300
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 300), "surfaceM2", [], "any", false, false, false, 300), "html", null, true)) : (1));
            yield " m²</td>
                        </tr>
                        <tr class=\"table-light\">
                          <td class=\"fw-bold\">Montant HT total :</td>
                          <td class=\"text-end\">";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 304), "montantHtTotal", [], "any", false, false, false, 304), 2, ",", " "), "html", null, true);
            yield " €</td>
                        </tr>
                        ";
            // line 306
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 306), "remise", [], "any", false, false, false, 306) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 306), "remise", [], "any", false, false, false, 306) > 0))) {
                // line 307
                yield "                        <tr>
                          <td class=\"fw-bold\">Remise :</td>
                          <td class=\"text-end text-danger\">- ";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 309), "remise", [], "any", false, false, false, 309), 2, ",", " "), "html", null, true);
                yield " €</td>
                        </tr>
                        <tr>
                          <td class=\"fw-bold\">Sous-total HT :</td>
                          <td class=\"text-end\">";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 313), "montantHtApresRemise", [], "any", false, false, false, 313), 2, ",", " "), "html", null, true);
                yield " €</td>
                        </tr>
                        ";
            }
            // line 316
            yield "                        <tr>
                          <td class=\"fw-bold\">TVA (";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 317), "tva", [], "any", false, false, false, 317), "html", null, true);
            yield "%) :</td>
                          <td class=\"text-end\">";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 318), "montantTva", [], "any", false, false, false, 318), 2, ",", " "), "html", null, true);
            yield " €</td>
                        </tr>
                        <tr class=\"table-primary\">
                          <td class=\"fw-bold fs-5\">Total TTC :</td>
                          <td class=\"text-end fw-bold fs-5\">";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 322), "totalTtc", [], "any", false, false, false, 322), 2, ",", " "), "html", null, true);
            yield " €</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class=\"col-md-6\">
                    <div class=\"alert alert-info mb-0\">
                      <i class=\"fas fa-info-circle me-2\"></i>
                      <strong>Prix enregistré le :</strong> ";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 330), "dateCreation", [], "any", false, false, false, 330), "d/m/Y à H:i"), "html", null, true);
            yield "<br>
                      <small>Le prix HT est calculé automatiquement : prix unitaire × surface (";
            // line 331
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 331)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 331), "surfaceM2", [], "any", false, false, false, 331), "html", null, true)) : (1));
            yield " m²)</small>
                    </div>
                  </div>
                </div>
                <hr>
                <h6 class=\"fw-bold mb-3\"><i class=\"fas fa-edit me-2\"></i>Modifier le prix</h6>
              ";
        } else {
            // line 338
            yield "                <div class=\"alert alert-warning mb-4\">
                  <i class=\"fas fa-exclamation-triangle me-2\"></i>
                  <strong>Aucun prix défini.</strong> Veuillez renseigner un prix pour activer les fonctionnalités de gestion du devis (validation, envoi par email, téléchargement PDF).
                </div>
              ";
        }
        // line 343
        yield "
              ";
        // line 345
        yield "              <div class=\"alert alert-light mb-3\">
                <i class=\"fas fa-ruler-combined me-2\"></i>
                <strong>Surface du local :</strong> <span id=\"surface_value\">";
        // line 347
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 347)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 347), "surfaceM2", [], "any", false, false, false, 347), "html", null, true)) : (1));
        yield "</span> m²
                <small class=\"text-muted ms-2\">(Le prix HT sera multiplié par cette surface)</small>
              </div>
              ";
        // line 350
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["prixForm"] ?? null), 'form_start', ["attr" => ["class" => "prix-form"]]);
        yield "
              <div class=\"row\">
                <div class=\"col-md-3\">
                  <div class=\"form-group\">
                    <label class=\"form-label fw-bold\">Prix unitaire HT (€/m²)</label>
                    ";
        // line 355
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "montant_ht", [], "any", false, false, false, 355), 'widget');
        yield "
                    ";
        // line 356
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "montant_ht", [], "any", false, false, false, 356), 'errors');
        yield "
                  </div>
                </div>
                <div class=\"col-md-2\">
                  <div class=\"form-group\">
                    <label class=\"form-label fw-bold\">Montant HT total</label>
                    <input type=\"text\" id=\"montant_ht_total_display\" class=\"form-control\" readonly placeholder=\"0,00 €\">
                  </div>
                </div>
                <div class=\"col-md-2\">
                  <div class=\"form-group\">
                    <label class=\"form-label fw-bold\">Remise (€)</label>
                    ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "remise", [], "any", false, false, false, 368), 'widget');
        yield "
                    ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "remise", [], "any", false, false, false, 369), 'errors');
        yield "
                  </div>
                </div>
                <div class=\"col-md-2\">
                  <div class=\"form-group\">
                    <label class=\"form-label fw-bold\">TVA</label>
                    ";
        // line 375
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "tva", [], "any", false, false, false, 375), 'widget');
        yield "
                    ";
        // line 376
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["prixForm"] ?? null), "tva", [], "any", false, false, false, 376), 'errors');
        yield "
                  </div>
                </div>
                <div class=\"col-md-3\">
                  <div class=\"form-group\">
                    <label class=\"form-label fw-bold\">Total TTC (calculé)</label>
                    <input type=\"text\" id=\"total_ttc_display\" class=\"form-control bg-success text-white fw-bold\" readonly placeholder=\"0,00 €\">
                  </div>
                </div>
              </div>
              <div class=\"mt-3\">
                <button type=\"submit\" class=\"btn btn-success btn-round\">
                  <i class=\"fas fa-save me-2\"></i>";
        // line 388
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Mettre à jour le prix") : ("Enregistrer le prix"));
        yield "
                </button>
              </div>
              ";
        // line 391
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["prixForm"] ?? null), 'form_end');
        yield "
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal pour admin_description -->
  <div class=\"modal fade\" id=\"adminDescriptionModal\" tabindex=\"-1\" aria-labelledby=\"adminDescriptionModalLabel\" aria-hidden=\"true\" data-save-url=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_prestations", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "id", [], "any", false, false, false, 400)]), "html", null, true);
        yield "\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header bg-primary text-white\">
          <h5 class=\"modal-title\" id=\"adminDescriptionModalLabel\">
            <i class=\"fas fa-edit me-2\"></i>Description administrative
          </h5>
          <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        </div>
        <div class=\"modal-body p-3\">
          <div class=\"container-fluid\">
            <div class=\"row mb-3\">
              <div class=\"col-12\">
                <div class=\"alert alert-info\">
                  <i class=\"fas fa-info-circle me-2\"></i>
                  <strong>Prestation :</strong> <span id=\"modal-prestation-name\"></span>
                </div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-12\">
                <label for=\"modal-textarea\" class=\"form-label fw-bold\">Description administrative</label>
                <textarea 
                  id=\"modal-textarea\" 
                  class=\"form-control\" 
                  rows=\"12\"
                  placeholder=\"Saisissez ici la description administrative détaillée de la prestation...\"
                  style=\"font-size: 15px; line-height: 1.6;\"
                ></textarea>
                <small class=\"text-muted mt-2 d-block\">
                  <i class=\"fas fa-lightbulb me-1\"></i>
                  Cette description sera utilisée dans le devis PDF et l'email envoyé au client.
                </small>
              </div>
            </div>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"fas fa-times me-2\"></i>Annuler
          </button>
          <button type=\"button\" class=\"btn btn-success\" id=\"save-modal-btn\">
            <i class=\"fas fa-check me-2\"></i>Enregistrer
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const montantHtInput = document.getElementById('prix_montant_ht');
      const remiseInput = document.getElementById('prix_remise');
      const tvaSelect = document.getElementById('prix_tva');
      const totalDisplay = document.getElementById('total_ttc_display');
      const montantHtTotalDisplay = document.getElementById('montant_ht_total_display');
      const surface = parseFloat(document.getElementById('surface_value').textContent) || 1;

      function calculateTotal() {
        const prixUnitaire = parseFloat(montantHtInput.value) || 0;
        const remise = parseFloat(remiseInput.value) || 0;
        const tva = parseFloat(tvaSelect.value) || 0;

        const montantHtTotal = prixUnitaire * surface;
        const montantApresRemise = montantHtTotal - remise;
        const montantTva = montantApresRemise * (tva / 100);
        const totalTtc = montantApresRemise + montantTva;

        montantHtTotalDisplay.value = montantHtTotal.toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' €';
        totalDisplay.value = totalTtc.toLocaleString('fr-FR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' €';
      }

      montantHtInput.addEventListener('input', calculateTotal);
      remiseInput.addEventListener('input', calculateTotal);
      tvaSelect.addEventListener('change', calculateTotal);

      calculateTotal();

      // Gestion du modal admin_description
      const modal = new bootstrap.Modal(document.getElementById('adminDescriptionModal'));
      const modalTextarea = document.getElementById('modal-textarea');
      const modalPrestationName = document.getElementById('modal-prestation-name');
      const saveModalBtn = document.getElementById('save-modal-btn');
      const saveUrl = document.getElementById('adminDescriptionModal').dataset.saveUrl;
      const prestationsToken = document.getElementById('prestations_token');
      let currentPrestationId = null;

      // Ouvrir le modal au clic sur les boutons \"Ajouter/Modifier\"
      document.querySelectorAll('.open-modal-btn').forEach(btn => {
        btn.addEventListener('click', function() {
          currentPrestationId = this.getAttribute('data-prestation-id');
          const prestationName = this.getAttribute('data-prestation-name');
          const adminDescription = this.getAttribute('data-admin-description') || '';
          
          modalPrestationName.textContent = prestationName;
          modalTextarea.value = adminDescription;
          modal.show();
        });
      });

      // Sauvegarder la description au clic sur \"Enregistrer\"
      saveModalBtn.addEventListener('click', function() {
        if (!currentPrestationId || !saveUrl || !prestationsToken) {
          return;
        }

        const hiddenTextarea = document.getElementById('admin_description_' + currentPrestationId);
        if (hiddenTextarea) {
          hiddenTextarea.value = modalTextarea.value;
        }

        const formData = new FormData();
        formData.append('_token', prestationsToken.value);
        formData.append('admin_description[' + currentPrestationId + ']', modalTextarea.value);

        fetch(saveUrl, {
          method: 'POST',
          body: formData
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Erreur lors de l\\'enregistrement');
            }

            const btn = document.querySelector('.open-modal-btn[data-prestation-id=\"' + currentPrestationId + '\"]');
            if (btn) {
              btn.setAttribute('data-admin-description', modalTextarea.value);
              const btnText = modalTextarea.value ? 'Modifier' : 'Ajouter';
              btn.innerHTML = '<i class=\"fas fa-edit me-1\"></i>' + btnText;
            }

            modal.hide();
          })
          .catch(() => {
            alert('Erreur lors de l\\'enregistrement de la description.');
          });
      });

      // Réinitialiser le modal à la fermeture
      document.getElementById('adminDescriptionModal').addEventListener('hidden.bs.modal', function() {
        currentPrestationId = null;
        modalTextarea.value = '';
        modalPrestationName.textContent = '';
      });
    });
  </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "demande_devis/show.html.twig";
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
        return array (  759 => 400,  747 => 391,  741 => 388,  726 => 376,  722 => 375,  713 => 369,  709 => 368,  694 => 356,  690 => 355,  682 => 350,  676 => 347,  672 => 345,  669 => 343,  662 => 338,  652 => 331,  648 => 330,  637 => 322,  630 => 318,  626 => 317,  623 => 316,  617 => 313,  610 => 309,  606 => 307,  604 => 306,  599 => 304,  592 => 300,  585 => 296,  577 => 290,  575 => 289,  573 => 288,  568 => 285,  562 => 281,  560 => 280,  550 => 272,  547 => 270,  539 => 264,  535 => 262,  533 => 261,  529 => 259,  521 => 256,  517 => 254,  511 => 252,  509 => 251,  505 => 249,  502 => 248,  498 => 246,  492 => 244,  489 => 243,  484 => 241,  478 => 238,  474 => 237,  470 => 235,  466 => 233,  462 => 231,  460 => 230,  454 => 227,  450 => 226,  446 => 225,  441 => 222,  439 => 221,  435 => 219,  431 => 217,  425 => 215,  423 => 214,  419 => 212,  415 => 211,  404 => 202,  399 => 200,  394 => 199,  392 => 198,  378 => 186,  376 => 185,  366 => 177,  360 => 175,  356 => 173,  354 => 172,  351 => 171,  349 => 170,  341 => 165,  334 => 161,  327 => 157,  318 => 150,  312 => 148,  308 => 146,  306 => 145,  303 => 144,  301 => 143,  285 => 129,  281 => 127,  275 => 124,  268 => 120,  261 => 116,  257 => 114,  255 => 113,  239 => 99,  235 => 97,  227 => 92,  223 => 91,  213 => 84,  209 => 83,  199 => 78,  195 => 76,  193 => 75,  179 => 63,  169 => 59,  166 => 58,  161 => 57,  151 => 53,  148 => 52,  144 => 51,  137 => 46,  129 => 41,  118 => 33,  114 => 32,  104 => 25,  100 => 24,  97 => 23,  95 => 22,  84 => 14,  77 => 10,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/show.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\show.html.twig");
    }
}
