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

/* demande_devis/_form.html.twig */
class __TwigTemplate_31fa6ff429ddc2b6d0944c66c713ba7d extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "demande-devis-form"]]);
        yield "
<div class=\"dd-section\">
    <div class=\"dd-section-header\">
        <span class=\"dd-section-header__icon\"><i class=\"fas fa-user\"></i></span>
        <div>
            <h5 class=\"form-section-title mb-0\">Vos coordonnées</h5>
            <p class=\"dd-section-header__subtitle\">Informations de contact</p>
        </div>
    </div>
    <div class=\"dd-grid dd-grid--two\">
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-user\"></i></span>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_nom", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom *"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_nom", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-smile\"></i></span>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_prenom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom *"]]);
        yield "
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_prenom", [], "any", false, false, false, 19), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-envelope\"></i></span>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_email", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email *"]]);
        yield "
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_email", [], "any", false, false, false, 24), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-phone\"></i></span>
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_telephone", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Téléphone *"]]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "client_telephone", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>
    </div>
</div>

<div class=\"dd-section mt-4\">
    <div class=\"dd-section-header\">
        <span class=\"dd-section-header__icon\"><i class=\"fas fa-building\"></i></span>
        <div>
            <h5 class=\"form-section-title mb-0\">Informations sur le local</h5>
            <p class=\"dd-section-header__subtitle\">Détails du lieu à nettoyer</p>
        </div>
    </div>
    <div class=\"dd-grid dd-grid--two\">
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-home\"></i></span>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_type", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "local_type_select", "onchange" => "document.getElementById('local_type_autre_wrap').style.display = this.value === 'autre' ? 'block' : 'none'"]]);
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_type", [], "any", false, false, false, 46), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-map-marker-alt\"></i></span>
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_ville", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ville ou adresse complète"]]);
        yield "
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_ville", [], "any", false, false, false, 51), 'errors');
        yield "
        </div>
        <div class=\"form-group dd-conditional\" id=\"local_type_autre_wrap\" style=\"display: none; grid-column: 1 / -1;\">
            <span class=\"form-icon\"><i class=\"fas fa-pen\"></i></span>
            <input type=\"text\" name=\"local_type_autre\" class=\"form-control\" placeholder=\"Précisez le type de local\">
        </div>
        <div class=\"form-group\" style=\"grid-column: 1 / -1;\">
            <span class=\"form-icon\"><i class=\"fas fa-ruler-combined\"></i></span>
            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_surface", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Surface en m² *"]]);
        yield "
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "local_surface", [], "any", false, false, false, 60), 'errors');
        yield "
        </div>
    </div>
</div>

<div class=\"dd-section mt-4\">
    <div class=\"dd-section-header\">
        <span class=\"dd-section-header__icon\"><i class=\"fas fa-broom\"></i></span>
        <div>
            <h5 class=\"form-section-title mb-0\">Détails de la prestation</h5>
            <p class=\"dd-section-header__subtitle\">Sélectionnez vos besoins</p>
        </div>
    </div>
    <div class=\"form-group mb-4\">
        <label class=\"form-label fw-bold mb-3\"><i class=\"fas fa-list me-2\"></i>Prestations souhaitées</label>
        <div class=\"dd-prestations-grid\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prestation", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 77
            yield "                <div class=\"dd-prestation\">
                    ";
            // line 78
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "dd-prestation-input"]]);
            yield "
                    <label for=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\">
                        <span class=\"dd-prestation-badge\" aria-hidden=\"true\"><i class=\"fas fa-check\"></i></span>
                        <span class=\"dd-prestation-content\">
                            <span class=\"dd-prestation-title\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 82), "label", [], "any", false, false, false, 82)), "html", null, true);
            yield "</span>
                            ";
            // line 83
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 83), "help", [], "any", false, false, false, 83))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "                                <span class=\"dd-prestation-subtitle\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 84), "help", [], "any", false, false, false, 84)), "html", null, true);
                yield "</span>
                            ";
            }
            // line 86
            yield "                        </span>
                    </label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "            <div class=\"dd-prestation\">
                <input type=\"checkbox\" id=\"prestation_autre_checkbox\" class=\"dd-prestation-input\" value=\"autre\">
                <label for=\"prestation_autre_checkbox\">
                    <span class=\"dd-prestation-badge\" aria-hidden=\"true\"><i class=\"fas fa-plus\"></i></span>
                    <span class=\"dd-prestation-content\">
                        <span class=\"dd-prestation-title\">Autre</span>
                        <span class=\"dd-prestation-subtitle\">Prestation personnalisée</span>
                    </span>
                </label>
            </div>
        </div>
        ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prestation", [], "any", false, false, false, 101), 'errors');
        yield "
    </div>
    <div class=\"form-group dd-conditional js-prestation-autre-group\" id=\"prestation_autre_wrap\" style=\"display: none;\">
        <label class=\"form-label fw-bold mb-2\"><i class=\"fas fa-pen me-2\"></i>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prestation_autre", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
        yield "</label>
        <span class=\"form-icon\"><i class=\"fas fa-edit\"></i></span>
        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prestation_autre", [], "any", false, false, false, 106), 'widget');
        yield "
        ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prestation_autre", [], "any", false, false, false, 107), 'errors');
        yield "
    </div>
    <div class=\"dd-grid dd-grid--two\">
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-repeat\"></i></span>
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "frequence", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "id" => "frequence_select", "onchange" => "document.getElementById('frequence_autre_wrap').style.display = this.value === 'Autre' ? 'block' : 'none'"]]);
        yield "
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "frequence", [], "any", false, false, false, 113), 'errors');
        yield "
        </div>
        <div class=\"form-group\">
            <span class=\"form-icon\"><i class=\"fas fa-clock\"></i></span>
            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "creneau_horaire", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "creneau_horaire", [], "any", false, false, false, 118), 'errors');
        yield "
        </div>
        <div class=\"form-group dd-conditional\" id=\"frequence_autre_wrap\" style=\"display: none; grid-column: 1 / -1; margin-top: 0;\">
            <span class=\"form-icon\"><i class=\"fas fa-pen\"></i></span>
            <input type=\"text\" name=\"frequence_autre\" class=\"form-control\" placeholder=\"Précisez la fréquence souhaitée\">
        </div>
    </div>
</div>

<div class=\"dd-section mt-4\">
    <div class=\"dd-section-header\">
        <span class=\"dd-section-header__icon\"><i class=\"fas fa-comment\"></i></span>
        <div>
            <h5 class=\"form-section-title mb-0\">Détails spécifiques</h5>
            <p class=\"dd-section-header__subtitle\">Précisions supplémentaires</p>
        </div>
    </div>
    <div class=\"dd-grid\">
        <div class=\"form-group form-textarea\">
            <span class=\"form-icon\"><i class=\"fas fa-comment\"></i></span>
            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "details_specifiques", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Décrivez votre besoin en détail (particularités, attentes spécifiques, contraintes...)"]]);
        yield "
            ";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "details_specifiques", [], "any", false, false, false, 139), 'errors');
        yield "
        </div>
    </div>
</div>

<div class=\"text-center mt-4\">
    <button type=\"submit\" class=\"btn-wrap\">
        <span class=\"button-1\">
            <span class=\"text\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Envoyer ma demande de devis")) : ("Envoyer ma demande de devis")), "html", null, true);
        yield "</span>
            <span class=\"icon\"><i class=\"fas fa-paper-plane\"></i></span>
        </span>
    </button>
</div>
";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    const prestationAutreCheckbox = document.getElementById('prestation_autre_checkbox');
    const prestationAutreWrap = document.getElementById('prestation_autre_wrap');
    const prestationAutreTextarea = document.querySelector('#prestation_autre_wrap textarea');
    
    if (!prestationAutreCheckbox || !prestationAutreWrap) return;
    
    function togglePrestationAutre() {
        if (prestationAutreCheckbox.checked) {
            prestationAutreWrap.style.display = 'block';
        } else {
            prestationAutreWrap.style.display = 'none';
            if (prestationAutreTextarea) {
                prestationAutreTextarea.value = '';
            }
        }
    }
    
    prestationAutreCheckbox.addEventListener('change', togglePrestationAutre);
    togglePrestationAutre();
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
        return "demande_devis/_form.html.twig";
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
        return array (  297 => 152,  289 => 147,  278 => 139,  274 => 138,  251 => 118,  247 => 117,  240 => 113,  236 => 112,  228 => 107,  224 => 106,  219 => 104,  213 => 101,  200 => 90,  191 => 86,  185 => 84,  183 => 83,  179 => 82,  173 => 79,  169 => 78,  166 => 77,  162 => 76,  143 => 60,  139 => 59,  128 => 51,  124 => 50,  117 => 46,  113 => 45,  94 => 29,  90 => 28,  83 => 24,  79 => 23,  72 => 19,  68 => 18,  61 => 14,  57 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/_form.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\_form.html.twig");
    }
}
