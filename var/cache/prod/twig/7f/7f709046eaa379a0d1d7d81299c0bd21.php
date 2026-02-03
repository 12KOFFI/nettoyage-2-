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

/* layout/footer.html.twig */
class __TwigTemplate_3978dbf85aa0c4f0cdd4cc840c5f8c73 extends Template
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
        yield " <!-- Footer -->
    <footer class=\"footer clearfix\">
        <div class=\"container\">
            <!-- first footer -->
            <div class=\"first-footer\">
                <div class=\"row\">
                    <div class=\"col-md-12 wow zoomIn\" data-wow-delay=\"0.1s\">
                        <div class=\"links dark footer-contact-links\">
                            <div class=\"footer-contact-links-wrapper\">
                                <div class=\"footer-contact-link-wrapper\">
                                    <div class=\"image-wrapper footer-contact-link-icon\">
                                        <div class=\"footer-icon\"> <i class=\"fa-thin fa-phone\"></i> </div>
                                    </div>
                                    <div class=\"footer-contact-link-content\">
                        <h6>Téléphone</h6>
                        <p>+33 1 23 45 67 89</p>
                                    </div>
                                </div>
                                <div class=\"footer-contact-links-divider\"></div>
                                <div class=\"footer-contact-link-wrapper\">
                                    <div class=\"image-wrapper footer-contact-link-icon\">
                                        <div class=\"footer-icon\"> <i class=\"fa-thin fa-envelope\"></i> </div>
                                    </div>
                                    <div class=\"footer-contact-link-content\">
                        <h6>e-Mail</h6>
                        <p>contact@multi-nettoyage-proprete.fr</p>
                                    </div>
                                </div>
                                <div class=\"footer-contact-links-divider\"></div>
                                <div class=\"footer-contact-link-wrapper\">
                                    <div class=\"image-wrapper footer-contact-link-icon\">
                                        <div class=\"footer-icon\"> <i class=\"fa-thin fa-location-dot\"></i> </div>
                                    </div>
                                    <div class=\"footer-contact-link-content\">
                        <h6>Adresse</h6>
                        <p>94 - Val-de-Marne, Île-de-France, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second footer -->
            <div class=\"second-footer\">
                <div class=\"row\">
                    <!-- about & social icons -->
                    <div class=\"col-md-4 widget-area\">
                        <div class=\"widget clearfix\">
                            <div class=\"footer-logo\"> 
                                <div style=\"background: #fff; border-radius: 50%; padding: 15px; display: inline-block; box-shadow: 0 4px 15px rgba(255,255,255,0.1);\">
                                    <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" alt=\"\" style=\"width: 120px; height: auto;\">
                                </div>
                            </div>
                            <div class=\"widget-text\">
                                <p>Avec des années d'expérience, nous proposons des services de nettoyage professionnel pour bureaux, immeubles, chantiers, industries et vitrerie.</p>
                                <div class=\"social-icons\">
                                    <ul class=\"list-inline\">
                                        <li><a href=\"#\"><i class=\"fa-brands fa-x-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa-brands fa-tiktok\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- quick links -->
                    <div class=\"col-md-3 offset-md-1 widget-area\">
                        <div class=\"widget clearfix usful-links\">
                            <h3 class=\"widget-title\">Liens rapides</h3>
                            <ul>
                                <li><a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">À propos</a></li>
                                <li><a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services");
        yield "\">Services</a></li>
                                <li><a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\">Demander un devis</a></li>
                                <li><a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_team");
        yield "\">Équipe</a></li>
                                <li><a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_devis_index");
        yield "\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- subscribe -->
                    <div class=\"col-md-4 widget-area\">
                        <div class=\"widget clearfix\">
                            <h3 class=\"widget-title\">Newsletter</h3>
                            <p>Souhaitez-vous être informé de nos services ? Inscrivez-vous et nous vous enverrons des notifications par email.</p>
                            <div class=\"widget-newsletter\">
                                <form action=\"#\">
                                    <input type=\"email\" placeholder=\"Email Address\" required>
                                    <button type=\"submit\"><i class=\"fa-regular fa-paper-plane\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- bottom footer -->
            <div class=\"bottom-footer-text\">
                <div class=\"row copyright\">
                    <div class=\"col-md-12\">
                        <p class=\"mb-0\">&copy;2025 Multi-Nettoyage Propreté. Tous droits réservés.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/footer.html.twig";
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
        return array (  134 => 76,  130 => 75,  126 => 74,  122 => 73,  118 => 72,  95 => 52,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/footer.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\layout\\footer.html.twig");
    }
}
