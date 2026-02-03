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

/* demande_devis/index.html.twig */
class __TwigTemplate_da65f85833a16913f54f59c8a82ddddf extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Contact - Multi-Nettoyage Propreté";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/demande-devis-form.css"), "html", null, true);
        yield "\">
";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "<!-- Banner Header -->
    <section class=\"banner-header valign bg-img bg-imgfixed bg-position-bottom\" data-overlay-dark=\"7\" data-background=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Contactez-nous</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">Demandez votre devis gratuit</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section with Background -->
    <section class=\"info-box section-padding contact-section-bg\">
        <div class=\"container\">
            <div class=\"row align-items-start\">
                <div class=\"col-lg-5 col-md-12 mb-4 mb-lg-0\">
                    <div class=\"contact-info-card\">
                        <h3>Coordonnées</h3>
                        <div class=\"item\"> <i class=\"icon fa-regular fa-location-dot\"></i>
                            <div class=\"cont\">
                                <h5>Zone d'intervention</h5>
                                <p><strong>Paris</strong> et <strong>Île-de-France</strong></p>
                            </div>
                        </div>
                        <div class=\"item\"> <i class=\"icon fa-solid fa-phone\"></i>
                            <div class=\"cont\">
                                <h5>Téléphone</h5>
                                <p><a href=\"tel:+33123456789\">+33 1 23 45 67 89</a></p>
                            </div>
                        </div>
                        <div class=\"item\"> <i class=\"icon fa-regular fa-envelope\"></i>
                            <div class=\"cont\">
                                <h5>Email</h5>
                                <p><a href=\"mailto:contact@multi-nettoyage-proprete.fr\">contact@multi-nettoyage-proprete.fr</a></p>
                            </div>
                        </div>
                        <div class=\"worktime mb-30 mt-40\">
                            <h5 class=\"mb-20\">Horaires</h5>
                            <ul>
                                <li>
                                    <div class=\"tit\">Accueil téléphonique</div>
                                    <div class=\"dots\"></div> <span>Lun - Ven : 9h00 - 17h30</span>
                                </li>
                                <li>
                                    <div class=\"tit\">Urgences</div>
                                    <div class=\"dots\"></div> <span>7h00 - 22h00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 offset-lg-1 col-md-12\">
                    <div class=\"contact-form devis-form-card\">
                        <h3><i class=\"fa-light fa-file-invoice\"></i> Demande de devis gratuit</h3>
                        <p class=\"form-subtitle\">Remplissez le formulaire ci-dessous et recevez votre devis personnalisé sous 24h.</p>
                        
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 68
            yield "                            <div class=\"alert alert-success mb-20\">
                                <i class=\"fa-solid fa-check-circle\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                        
                        ";
        // line 73
        yield from $this->load("demande_devis/_form.html.twig", 73)->unwrap()->yield(CoreExtension::merge($context, ["form" => ($context["form"] ?? null), "button_label" => "Envoyer ma demande de devis"]));
        // line 74
        yield "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "demande_devis/index.html.twig";
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
        return array (  172 => 74,  170 => 73,  167 => 72,  158 => 69,  155 => 68,  151 => 67,  93 => 12,  90 => 11,  83 => 10,  76 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/index.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\index.html.twig");
    }
}
