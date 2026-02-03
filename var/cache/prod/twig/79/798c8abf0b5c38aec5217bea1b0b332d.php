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

/* gallery/gallery-image.html.twig */
class __TwigTemplate_68d8750dc14fef4292c35a5ce8cb23c8 extends Template
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
        yield "Gallery Image - Poolco";
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
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Our works</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">Image gallery</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Gallery -->
    <div class=\"section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <ul class=\"gallery-filter\">
                        <li class=\"active\" data-filter=\"*\">All</li>
                        <li data-filter=\".cleaning\">Cleaning</li>
                        <li data-filter=\".maintenance\">Maintenance</li>
                    </ul>
                </div>
            </div>
            <div class=\"row gallery-items\">
                <div class=\"col-lg-4 col-md-6 single-item cleaning mb-20\">
                    <a href=\"img/services/1.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Surface cleaning</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-md-6 single-item maintenance mb-20\">
                    <a href=\"img/services/2.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Filter cleaning</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-md-6 single-item cleaning mb-20\">
                    <a href=\"img/services/4.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/4.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Motor maintenance</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-md-6 single-item maintenance mb-20\">
                    <a href=\"img/services/3.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/3.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Shock treatment</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-md-6 single-item cleaning mb-20\">
                    <a href=\"img/services/6.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/6.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Pool opening</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class=\"col-lg-4 col-md-6 single-item maintenance mb-20\">
                    <a href=\"img/services/5.jpg\" title=\"\" class=\"gallery-masonry-item-img-link img-zoom\">
                        <div class=\"gallery-box\">
                            <div class=\"gallery-img\"> <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/5.jpg"), "html", null, true);
        yield "\" class=\"img-fluid mx-auto d-block\" alt=\"\">
                                <div class=\"overlay-bottom\"></div>
                            </div>
                            <div class=\"gallery-detail\">
                                <h4>Lighting check</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/slider/10.jpg"), "html", null, true);
        yield "\" data-overlay-dark=\"8\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Call -->
                    <div class=\"col-lg-5 col-md-12 mb-30 mt-60\">
                        <div class=\"ready mb-20 wow fadeInUp\" data-wow-delay=\".1s\">
                            <h4>Trust <span>Poolco</span> for your pool, join us today.</h4>
                        </div>
                        <div class=\"help wow fadeInUp\" data-wow-delay=\".2s\">
                            <div class=\"icon\"><i class=\"fa-brands fa-whatsapp\"></i></div>
                            <div class=\"text\">
                                <p>Contact on WhatsApp</p> <a href=\"tel:855-100-4444\">855 100 4444</a>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                    <div class=\"col-lg-5 offset-lg-2 col-md-12\">
                        <div class=\"booking-box wow fadeInUp\" data-wow-delay=\".3s\">
                            <div class=\"head-box mb-20\">
                                <h3>Get in touch.</h3>
                            </div>
                            <form method=\"post\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\"> <span class=\"form-icon\"><i class=\"fa-light fa-face-smile\"></i></span>
                                            <input type=\"text\" name=\"name\" id=\"name\" placeholder=\"Name\" required=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\"> <span class=\"form-icon\"><i class=\"fa-light fa-envelope\"></i></span>
                                            <input type=\"email\" name=\"email\" id=\"email\" placeholder=\"E-mail\" required=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group\"> <span class=\"form-icon\"><i class=\"fa-light fa-book\"></i></span>
                                            <input type=\"text\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required=\"\">
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <div class=\"form-group form-textarea\"> <span class=\"form-icon\"><i class=\"fa-light fa-comment\"></i></span>
                                            <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"3\" placeholder=\"Message\" required=\"\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <button class=\"btn-wrap\">
                                            <span class=\"button-1\"> 
                                                <span class=\"text\">Send message</span> 
                                                <span class=\"icon\"><i class=\"fa-solid fa-right-long\"></i></span> 
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
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
        // line 169
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
        // line 170
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
        return "gallery/gallery-image.html.twig";
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
        return array (  289 => 170,  259 => 169,  194 => 107,  177 => 93,  162 => 81,  147 => 69,  132 => 57,  117 => 45,  102 => 33,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "gallery/gallery-image.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\gallery\\gallery-image.html.twig");
    }
}
