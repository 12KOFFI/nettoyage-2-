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

/* services/services-details.html.twig */
class __TwigTemplate_baa6a060732cee86d0a88da358b5eb4a extends Template
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
        yield "Services Details - Poolco";
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
                    <h5 class=\"wow fadeInUp\" data-wow-delay=\".1s\">Our services</h5>
                    <h3 class=\"wow fadeInUp\" data-wow-delay=\".3s\">Filter cleaning</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Page -->
    <section class=\"page section-padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10 col-md-12\">
                    <h4>Filter cleaning service</h4>
                    <p>A clean and efficient pool filter is essential for maintaining crystal-clear water and a healthy swimming environment. Over time, pool filters accumulate dirt, oils, debris, and even microscopic particles that can reduce filtration performance. Our professional <i>Filter Cleaning Service</i> ensures that your pool system works at its best by thoroughly removing all unwanted buildup.</p>
                    <p class=\"mb-30\">We carefully inspect your filter, disassemble it if necessary, and clean it with eco-friendly methods to restore maximum efficiency. This process not only improves water clarity but also extends the lifespan of your equipment, reduces energy costs, and prevents unnecessary repairs.</p>
                    <h6>With regular filter cleaning, you can enjoy:</h6>
                    <ul class=\"page-list list-unstyled\">
                        <li>
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Sparkling clean water that is safe for swimming</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Reduced strain on your pool pump and filtration system</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Longer-lasting pool equipment</p>
                            </div>
                        </li>
                        <li>
                            <div class=\"page-list-icon\"> <span class=\"ti-check\"></span> </div>
                            <div class=\"page-list-text\">
                                <p>Lower maintenance costs in the long run</p>
                            </div>
                        </li>
                    </ul>
                    <p class=\"mb-60\">Let us take care of your filter, so you can enjoy your pool without worries.</p>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba/b1.jpg"), "html", null, true);
        yield "\" class=\"chy-zoomout2 img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba/a1.jpg"), "html", null, true);
        yield "\" class=\"chyf2cc img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba/b2.jpg"), "html", null, true);
        yield "\" class=\"chy-zoomout2 img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"img-cover\"> <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ba/a2.jpg"), "html", null, true);
        yield "\" class=\"chyf2cc img-fluid rounded-3 mb-25\" alt=\"\"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services 1 -->
    <section class=\"services1 section-padding bg-lightblue\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 mb-30 text-center\">
                    <div class=\"section-subtitle wow fadeInUp\" data-wow-delay=\".1s\">Professional services</div>
                    <div class=\"section-title wow zoomIn\" data-wow-delay=\".2s\">Our services</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 wow zoomIn\" data-wow-delay=\".3s\">
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/2.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-filter\"></i>
                                        <h5>Filter cleaning</h5>
                                        <p>Keep your pool clean and safe with regular filter cleaning. We remove debris to keep water flowing properly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/3.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-vial\"></i>
                                        <h5>Shock treatment</h5>
                                        <p>Restore water clarity with shock treatment. It eliminates bacteria and keeps your pool fresh, clear, clean and safe.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/1.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-sparkles\"></i>
                                        <h5>Surface cleaning</h5>
                                        <p>Keep your pool looking great with regular surface cleaning. We remove dirt and grime to maintain a spotless finish.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/4.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-screwdriver-wrench\"></i>
                                        <h5>Motor maintenance</h5>
                                        <p>Ensure smooth operation with regular motor maintenance. We check and clean parts to keep your system running efficiently.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/6.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-water-ladder\"></i>
                                        <h5>Pool opening</h5>
                                        <p>Start your season right with professional pool opening. We prepare your pool for clean, clear and safe use.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"row rest\">
                                <div class=\"col-lg-6 col-md-12 img rest\"> <img src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/services/5.jpg"), "html", null, true);
        yield "\" class=\"img-cover\" alt=\"\">
                                    <div class=\"arrow\">
                                        <div class=\"icon\"> <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_details");
        yield "\"><span class=\"fa-light fa-arrow-up-right\"></span></a> </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-12 cont valign\">
                                    <div class=\"full-width\"> <i class=\"icon fa-thin fa-lightbulb-gear\"></i>
                                        <h5>Lighting check</h5>
                                        <p>Ensure safety and ambiance with regular lighting checks. We inspect and fix any issues to keep your pool well-lit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-30 wow zoomIn\" data-wow-delay=\".8s\">
                    <div class=\"section-info\">
                        <div class=\"tag\">Services</div>
                        <div class=\"desc\">Trusted by 1000+ customers for professional results.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment -->
    <section class=\"appointment\">
        <div class=\"background bg-img bg-imgfixed section-padding pb-0 left-overlay-secondary\" data-background=\"";
        // line 190
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
        // line 252
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
        // line 253
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
        return "services/services-details.html.twig";
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
        return array (  402 => 253,  372 => 252,  307 => 190,  278 => 164,  273 => 162,  257 => 149,  252 => 147,  236 => 134,  231 => 132,  215 => 119,  210 => 117,  194 => 104,  189 => 102,  173 => 89,  168 => 87,  144 => 66,  138 => 63,  130 => 58,  124 => 55,  73 => 7,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "services/services-details.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\services\\services-details.html.twig");
    }
}
