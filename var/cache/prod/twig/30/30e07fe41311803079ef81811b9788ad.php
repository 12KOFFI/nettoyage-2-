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

/* demande_devis/email/devis.html.twig */
class __TwigTemplate_e5b747e66ea8935eba4c9c6e0744c671 extends Template
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Votre devis Multi-Nettoyage Propreté Plus 94</title>
</head>
<body style=\"font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;\">
    <div style=\"background: #003366; padding: 20px; text-align: center; border-radius: 5px 5px 0 0;\">
        <h1 style=\"color: #fff; margin: 0; font-size: 24px;\">Multi-Nettoyage Propreté Plus 94</h1>
        <p style=\"color: rgba(255,255,255,0.9); margin: 5px 0 0 0; font-size: 14px;\">Services de nettoyage professionnel</p>
    </div>
    
    <div style=\"background: #f9f9f9; padding: 30px; border: 1px solid #ddd; border-top: none;\">
        <p style=\"margin-top: 0;\">Bonjour <strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</strong>,</p>
        
        <p>Nous vous remercions pour votre demande de devis. Veuillez trouver ci-joint notre proposition commerciale.</p>
        
        <div style=\"background: #fff; padding: 20px; border-radius: 5px; margin: 20px 0; border-left: 4px solid #7CB342;\">
            <h3 style=\"margin-top: 0; color: #003366;\">Référence du devis : ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "numeroDevis", [], "any", false, false, false, 19), "html", null, true);
        yield "</h3>
            <p style=\"margin-bottom: 0;\">
                <strong>Date :</strong> ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "dateDemande", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        yield "<br>
                <strong>Validité :</strong> 30 jours
            </p>
        </div>
        
        <p>Ce devis comprend :</p>
        <ul>
            <li>Intervention sur site : ";
        // line 28
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "local", [], "any", false, false, false, 28), "ville", [], "any", false, false, false, 28), "html", null, true)) : ("Non spécifié"));
        yield "</li>
            <li>Fréquence : ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "frequence", [], "any", false, false, false, 29), "html", null, true);
        yield "</li>
            <li>Créneau horaire : ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "creneauHoraire", [], "any", false, false, false, 30), "html", null, true);
        yield "</li>
        </ul>
        
        ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "        <div style=\"background: #003366; color: #fff; padding: 15px; border-radius: 5px; text-align: center; margin: 20px 0;\">
            <p style=\"margin: 0; font-size: 18px;\">
                <strong>Total TTC : ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "prix", [], "any", false, false, false, 36), "totalTtc", [], "any", false, false, false, 36), 2, ",", " "), "html", null, true);
            yield " €</strong>
            </p>
        </div>
        ";
        }
        // line 40
        yield "        
        <p>Pour accepter ce devis, vous pouvez :</p>
        <ul>
            <li>Nous retourner le devis signé par email</li>
            <li>Nous contacter par téléphone au 06.69.53.75.73</li>
        </ul>
        
        <p>Nous restons à votre disposition pour toute question ou précision.</p>
        
        <p>Cordialement,<br>
        <strong>L'équipe Multi-Nettoyage Propreté Plus 94</strong></p>
    </div>
    
    <div style=\"background: #003366; color: #fff; padding: 15px; text-align: center; font-size: 11px; border-radius: 0 0 5px 5px;\">
        <p style=\"margin: 0;\">Multi-Nettoyage Propreté Plus 94 - Paris et Île-de-France</p>
        <p style=\"margin: 5px 0 0 0;\">Tél. : 06.69.53.75.73 | Email : multinettoyage94@gmail.com</p>
        <p style=\"margin: 5px 0 0 0; font-size: 10px;\">SIRET : RCS CRÉTEIL 990 875 155 00014 - Code APE : 8122Z - TVA : FR 46990875155</p>
    </div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "demande_devis/email/devis.html.twig";
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
        return array (  109 => 40,  102 => 36,  98 => 34,  96 => 33,  90 => 30,  86 => 29,  82 => 28,  72 => 21,  67 => 19,  57 => 14,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/email/devis.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\email\\devis.html.twig");
    }
}
