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

/* layout/dashboard/header.html.twig */
class __TwigTemplate_d6fe66ed48b6793a0433e455ef51329f extends Template
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
        yield "<div class=\"main-header\">
  <div class=\"main-header-logo\">
    <div class=\"logo-header\" data-background-color=\"dark\">
      <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"logo\">
        <img
          src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("kaiadmin/img/kaiadmin/logo_light.svg"), "html", null, true);
        yield "\"
          alt=\"navbar brand\"
          class=\"navbar-brand\"
          height=\"20\"
        />
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
  <nav class=\"navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom\">
    <div class=\"container-fluid\">
      <nav class=\"navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex\">
        <div class=\"input-group\">
          <div class=\"input-group-prepend\">
            <button type=\"submit\" class=\"btn btn-search pe-1\">
              <i class=\"fa fa-search search-icon\"></i>
            </button>
          </div>
          <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
        </div>
      </nav>

      <ul class=\"navbar-nav topbar-nav ms-md-auto align-items-center\">
        <li class=\"nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none\">
          <a
            class=\"nav-link dropdown-toggle\"
            data-bs-toggle=\"dropdown\"
            href=\"#\"
            role=\"button\"
            aria-expanded=\"false\"
            aria-haspopup=\"true\"
          >
            <i class=\"fa fa-search\"></i>
          </a>
          <ul class=\"dropdown-menu dropdown-search animated fadeIn\">
            <form class=\"navbar-left navbar-form nav-search\">
              <div class=\"input-group\">
                <input type=\"text\" placeholder=\"Search ...\" class=\"form-control\" />
              </div>
            </form>
          </ul>
        </li>
        ";
        // line 59
        yield "        <li class=\"nav-item topbar-icon dropdown hidden-caret\">
          <a
            class=\"nav-link dropdown-toggle\"
            href=\"#\"
            id=\"notifDropdown\"
            role=\"button\"
            data-bs-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            <i class=\"fa fa-bell\"></i>
            ";
        // line 70
        $context["pendingCount"] = $this->extensions['App\Twig\DemandeDevisExtension']->countPendingDevis();
        // line 71
        yield "            ";
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 72
            yield "              <span class=\"notification\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingCount"] ?? null), "html", null, true);
            yield "</span>
            ";
        }
        // line 74
        yield "          </a>
          <ul class=\"dropdown-menu notif-box animated fadeIn\" aria-labelledby=\"notifDropdown\">
            <li>
              <div class=\"dropdown-title\">
                ";
        // line 78
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 79
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingCount"] ?? null), "html", null, true);
            yield " nouvelle";
            yield (((($context["pendingCount"] ?? null) > 1)) ? ("s") : (""));
            yield " demande";
            yield (((($context["pendingCount"] ?? null) > 1)) ? ("s") : (""));
            yield "
                ";
        } else {
            // line 81
            yield "                  Aucune notification
                ";
        }
        // line 83
        yield "              </div>
            </li>
            <li>
              <div class=\"notif-scroll scrollbar-outer\">
                <div class=\"notif-center\">
                  ";
        // line 88
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 89
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
            yield "?statut=en_attente\" class=\"text-decoration-none\">
                      <div class=\"notif-icon notif-warning\">
                        <i class=\"fas fa-file-signature\"></i>
                      </div>
                      <div class=\"notif-content\">
                        <span class=\"block\">Demandes en attente</span>
                        <span class=\"time\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pendingCount"] ?? null), "html", null, true);
            yield " demande";
            yield (((($context["pendingCount"] ?? null) > 1)) ? ("s") : (""));
            yield " à traiter</span>
                      </div>
                    </a>
                  ";
        } else {
            // line 99
            yield "                    <div class=\"text-center p-3 text-muted\">
                      <i class=\"fa fa-bell-slash fa-2x mb-2\"></i>
                      <p>Aucune notification pour le moment</p>
                    </div>
                  ";
        }
        // line 104
        yield "                </div>
              </div>
            </li>
            ";
        // line 107
        if ((($context["pendingCount"] ?? null) > 0)) {
            // line 108
            yield "              <li>
                <a class=\"see-all\" href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_liste");
            yield "?statut=en_attente\">
                  Voir toutes les demandes <i class=\"fa fa-angle-right\"></i>
                </a>
              </li>
            ";
        }
        // line 114
        yield "          </ul>
        </li>

        <li class=\"nav-item topbar-user dropdown hidden-caret\">
          <a
            class=\"dropdown-toggle profile-pic\"
            data-bs-toggle=\"dropdown\"
            href=\"#\"
            aria-expanded=\"false\"
          >
            <div class=\"avatar-sm d-flex align-items-center justify-content-center bg-secondary text-white rounded-circle\">
              <i class=\"fas fa-user\"></i>
            </div>
            <span class=\"profile-username\">
              <span class=\"op-7\">Hi,</span>
              <span class=\"fw-bold\">
                ";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 130) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 130), "email", [], "any", false, false, false, 130))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 130), "email", [], "any", false, false, false, 130), 0, 5), "html", null, true)) : ("User"));
        yield "
              </span>
            </span>
          </a>
          <ul class=\"dropdown-menu dropdown-user animated fadeIn\">
            <div class=\"dropdown-user-scroll scrollbar-outer\">
              <li>
                <div class=\"user-box\">
                  <div class=\"avatar-lg d-flex align-items-center justify-content-center bg-secondary text-white rounded\">
                    <i class=\"fas fa-user fa-2x\"></i>
                  </div>
                  <div class=\"u-text\">
                    <h4>";
        // line 142
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 142), "email", [], "any", false, false, false, 142), "html", null, true)) : ("Utilisateur"));
        yield "</h4>
                    <p class=\"text-muted\">";
        // line 143
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 143), "email", [], "any", false, false, false, 143), "html", null, true)) : (""));
        yield "</p>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                  <i class=\"fas fa-user me-2\"></i>Mon Profil
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <i class=\"fas fa-sign-out-alt me-2\"></i>Déconnexion
                </a>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/dashboard/header.html.twig";
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
        return array (  259 => 153,  252 => 149,  243 => 143,  239 => 142,  224 => 130,  206 => 114,  198 => 109,  195 => 108,  193 => 107,  188 => 104,  181 => 99,  172 => 95,  162 => 89,  160 => 88,  153 => 83,  149 => 81,  139 => 79,  137 => 78,  131 => 74,  125 => 72,  122 => 71,  120 => 70,  107 => 59,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/dashboard/header.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\layout\\dashboard\\header.html.twig");
    }
}
