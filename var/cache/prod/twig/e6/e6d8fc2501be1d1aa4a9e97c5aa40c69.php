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

/* security/profile.html.twig */
class __TwigTemplate_40658bfffc7750e01244c1959c0f3f74 extends Template
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
        yield "Mon Profil";
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
          <h3 class=\"fw-bold mb-3\">Mon Profil</h3>
          <h6 class=\"op-7 mb-2\">Informations de votre compte</h6>
        </div>
        <div class=\"ms-md-auto py-2 py-md-0\">
          <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\" class=\"btn btn-secondary btn-round\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour au Dashboard
          </a>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
          <div class=\"card card-round\">
            <div class=\"card-header\">
              <div class=\"card-head-row\">
                <div class=\"card-title\">
                  <i class=\"fas fa-user me-2\"></i>Informations du compte
                </div>
              </div>
            </div>
            <div class=\"card-body\">
              <div class=\"row mb-4\">
                <div class=\"col-md-4 text-center\">
                  <div class=\"avatar avatar-xxl mb-3 d-flex align-items-center justify-content-center bg-secondary text-white rounded-circle\">
                    <i class=\"fas fa-user fa-2x\"></i>
                  </div>
                </div>
                <div class=\"col-md-8\">
                  <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Email</label>
                    <p class=\"mb-0\">
                      <i class=\"fas fa-envelope me-2 text-primary\"></i>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 41), "html", null, true);
        yield "
                    </p>
                  </div>
                  <div class=\"mb-3\">
                    <label class=\"form-label fw-bold\">Rôles</label>
                    <p class=\"mb-0\">
                      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 48
            yield "                        <span class=\"badge badge-primary me-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
            yield "</span>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                    </p>
                  </div>
                  <div class=\"mb-0\">
                    <label class=\"form-label fw-bold\">Statut du compte</label>
                    <p class=\"mb-0\">
                      <span class=\"badge badge-success\">
                        <i class=\"fas fa-check-circle me-1\"></i>Actif
                      </span>
                    </p>
                  </div>
                </div>
              </div>

              <hr>

              ";
        // line 65
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 65))) {
            // line 66
            yield "                <div class=\"alert alert-success\">
                  <i class=\"fas fa-check-circle me-2\"></i>
                  <strong>Administrateur :</strong> Vous pouvez gérer les comptes depuis le dashboard.
                </div>
              ";
        } else {
            // line 71
            yield "                <div class=\"alert alert-info\">
                  <i class=\"fas fa-info-circle me-2\"></i>
                  <strong>Note :</strong> Pour modifier vos informations de profil, veuillez contacter l'administrateur.
                </div>
              ";
        }
        // line 76
        yield "            </div>
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
        return "security/profile.html.twig";
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
        return array (  165 => 76,  158 => 71,  151 => 66,  149 => 65,  132 => 50,  123 => 48,  119 => 47,  110 => 41,  80 => 14,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/profile.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\security\\profile.html.twig");
    }
}
