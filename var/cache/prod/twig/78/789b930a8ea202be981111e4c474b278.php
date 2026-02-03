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

/* team/team.html.twig */
class __TwigTemplate_1a89d3fbc733a100b930a3a0fa6e14ad extends Template
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
        yield "Équipe - Multi-Nettoyage Propreté";
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
        yield "<!-- Banner Header -->
    <section class=\"banner-header valign bg-img bg-imgfixed bg-position-bottom\" data-overlay-dark=\"7\" data-background=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Notre équipe</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">Rencontrez nos experts en nettoyage</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class=\"team section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".1s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/01.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">Martin</h4>
                                <h6 class=\"position\">Spécialiste nettoyage</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".2s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/02.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">Sophie</h4>
                                <h6 class=\"position\">Technicienne nettoyage</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".3s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/03.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">Natalie</h4>
                                <h6 class=\"position\">Responsable maintenance</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".4s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/05.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">Frank</h4>
                                <h6 class=\"position\">Expert nettoyage</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".5s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/04.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">Chloe</h4>
                                <h6 class=\"position\">Technicienne propreté</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-30\">
                    <div class=\"item wow fadeInUp\" data-wow-delay=\".6s\">
                        <div class=\"wrapper\">
                            <div class=\"img\"><img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/team/06.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\"></div>
                            <div class=\"icon\"> <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\" class=\"arrow\"><span class=\"ti-info\"></span></a> </div>
                            <div class=\"text\">
                                <h4 class=\"name\">David</h4>
                                <h6 class=\"position\">Expert équipements</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Call -->
                    <div class=\"col-lg-6 col-md-12 mb-30 mt-60\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4>Faites confiance à <span>Multi-Nettoyage Propreté</span> pour vos besoins de nettoyage, rejoignez-nous dès aujourd'hui.</h4>
                        </div>
                        <div class=\"help wow fadeInUp\" data-wow-delay=\".2s\">
                            <div class=\"icon\"><i class=\"fa-brands fa-whatsapp\"></i></div>
                            <div class=\"text\">
                                <p>Contactez-nous sur WhatsApp</p> <a href=\"tel:+33123456789\">+33 1 23 45 67 89</a>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"appointment-cta-wrapper wow fadeInUp\" data-wow-delay=\".3s\">
                            <div class=\"btn-wrap\">
                                <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\" class=\"button-1\" style=\"background-color: #1f9d55; border-color: #1f9d55; color: #fff;\"> 
                                    <span class=\"text\">Demander un devis gratuit</span> 
                                    <span class=\"icon\"><i class=\"fa-solid fa-file-invoice\"></i></span> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scrolling -->
    <div class=\"scrolling scrolling-ticker\">
        <div class=\"wrapper feather-shadow2\">
            <div class=\"content\"> <span><img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Cleaning</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Maintenance</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Skimmer</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Filtration</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Chlorine</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Algae</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Pump</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Backwash</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Vacuum</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">pH Level</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Sanitizer</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Brush</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Debris</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Water Test</span> </div>
            <div class=\"content\"> <span><img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Cleaning</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Maintenance</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Skimmer</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Filtration</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Chlorine</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Algae</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Pump</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Backwash</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Vacuum</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">pH Level</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Sanitizer</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Brush</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Debris</span> <span><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/asterisk-icon.svg"), "html", null, true);
        yield "\" alt=\"\" loading=\"lazy\">Water Test</span> </div>
        </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "team/team.html.twig";
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
        return array (  272 => 132,  242 => 131,  225 => 117,  203 => 98,  187 => 85,  183 => 84,  169 => 73,  165 => 72,  151 => 61,  147 => 60,  133 => 49,  129 => 48,  115 => 37,  111 => 36,  97 => 25,  93 => 24,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "team/team.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\team\\team.html.twig");
    }
}
