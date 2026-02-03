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

/* demande_devis/pdf/devis.html.twig */
class __TwigTemplate_2962858d137890d4a0708cefa62fb43f extends Template
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
    <title>Devis ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "numeroDevis", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        @page { margin: 25px 25px 80px; }
        body { font-family: 'DejaVu Sans', Arial, sans-serif; font-size: 12px; line-height: 1.5; color: #333; }
        .container { padding: 30px; padding-bottom: 90px; }
        .header { display: table; width: 100%; margin-bottom: 25px; border-bottom: 3px solid #003366; padding-bottom: 15px; }
        .header-left, .header-right { display: table-cell; width: 50%; vertical-align: top; }
        .header-right { text-align: right; }
        .logo { max-width: 180px; max-height: 70px; margin-bottom: 8px; }
        .company-name { font-size: 18px; font-weight: bold; color: #003366; }
        .company-info { font-size: 10px; color: #666; }
        .devis-title { font-size: 24px; font-weight: bold; color: #003366; }
        .devis-number { font-size: 13px; color: #333; margin-top: 5px; }
        .section { margin-bottom: 20px; }
        .section-title { font-size: 14px; font-weight: bold; color: #003366; border-bottom: 2px solid #7CB342; padding-bottom: 5px; margin-bottom: 10px; }
        .info-table { width: 100%; }
        .info-table td { padding: 4px 0; vertical-align: top; }
        .info-label { font-weight: bold; color: #555; width: 40%; }
        .info-value { color: #333; }
        .prestations-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .prestations-table th, .prestations-table .prestations-header td { background: #003366; color: #fff; padding: 10px; text-align: left; font-size: 11px; font-weight: bold; }
        .prestations-table td { padding: 10px; border-bottom: 1px solid #eee; font-size: 11px; }
        .prestations-table tr { page-break-inside: avoid; }
        .prestations-table tr:nth-child(even) { background: #f9f9f9; }
        .totaux { margin-top: 20px; width: 50%; margin-left: auto; }
        .totaux-table { width: 100%; border-collapse: collapse; }
        .totaux-table td { padding: 8px 10px; }
        .totaux-table .label { text-align: right; font-weight: bold; color: #555; }
        .totaux-table .value { text-align: right; }
        .totaux-table .total-row { background: #003366; color: #fff; font-size: 14px; }
        .conditions { margin-top: 30px; padding: 15px; background: #f5f5f5; border-radius: 5px; }
        .conditions-title { font-weight: bold; margin-bottom: 8px; color: #003366; }
        .conditions-text { font-size: 10px; color: #666; }
        .signature { margin-top: 40px; display: table; width: 100%; }
        .signature-box { display: table-cell; width: 48%; padding: 15px; border: 1px solid #ddd; }
        .signature-title { font-weight: bold; margin-bottom: 5px; font-size: 11px; }
        .signature-line { border-bottom: 1px solid #333; height: 60px; margin-top: 10px; }
        .footer { position: fixed; bottom: 20px; left: 25px; right: 25px; text-align: center; font-size: 9px; color: #999; border-top: 1px solid #ddd; padding-top: 10px; }
        .badge { display: inline-block; padding: 3px 8px; border-radius: 3px; font-size: 10px; font-weight: bold; }
        .badge-success { background: #28a745; color: #fff; }
        .badge-warning { background: #ffc107; color: #333; }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <div class=\"header-left\">
                ";
        // line 53
        if ((($tmp = ($context["logoBase64"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logoBase64"] ?? null), "html", null, true);
            yield "\" alt=\"Logo\" class=\"logo\">
                ";
        }
        // line 56
        yield "                <div class=\"company-name\">Multi-Nettoyage Propreté Plus 94</div>
                <div class=\"company-info\">
                    Services de nettoyage professionnel<br>
                    Paris et Île-de-France<br>
                    Tél. : 06.69.53.75.73<br>
                    Email : multinettoyage94@gmail.com
                </div>
            </div>
            <div class=\"header-right\">
                <div class=\"devis-title\">DEVIS</div>
                <div class=\"devis-number\">
                    <strong>N° ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "numeroDevis", [], "any", false, false, false, 67), "html", null, true);
        yield "</strong><br>
                    Date : ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["dateGeneration"] ?? null), "d/m/Y"), "html", null, true);
        yield "<br>
                    Validité : 30 jours
                </div>
            </div>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">INFORMATIONS CLIENT</div>
            <table class=\"info-table\">
                ";
        // line 77
        if ((($tmp = ($context["client"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "                <tr>
                    <td class=\"info-label\">Nom :</td>
                    <td class=\"info-value\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "nom", [], "any", false, false, false, 80), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "prenom", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"info-label\">Email :</td>
                    <td class=\"info-value\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "email", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"info-label\">Téléphone :</td>
                    <td class=\"info-value\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "telephone", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                </tr>
                ";
        } else {
            // line 91
            yield "                <tr><td colspan=\"2\">Informations client non disponibles</td></tr>
                ";
        }
        // line 93
        yield "            </table>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">LIEU D'INTERVENTION</div>
            <table class=\"info-table\">
                ";
        // line 99
        if ((($tmp = ($context["local"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 100
            yield "                <tr>
                    <td class=\"info-label\">Type de local :</td>
                    <td class=\"info-value\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["local"] ?? null), "typeLocal", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"info-label\">Adresse :</td>
                    <td class=\"info-value\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["local"] ?? null), "ville", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                </tr>
                <tr>
                    <td class=\"info-label\">Surface :</td>
                    <td class=\"info-value\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["local"] ?? null), "surfaceM2", [], "any", false, false, false, 110), "html", null, true);
            yield " m²</td>
                </tr>
                ";
        } else {
            // line 113
            yield "                <tr><td colspan=\"2\">Informations local non disponibles</td></tr>
                ";
        }
        // line 115
        yield "            </table>
        </div>

        <div class=\"section\">
            <div class=\"section-title\">DÉTAILS DE LA PRESTATION</div>
            <table class=\"info-table\">
                <tr>
                    <td class=\"info-label\">Fréquence :</td>
                    <td class=\"info-value\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "frequence", [], "any", false, false, false, 123), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td class=\"info-label\">Créneau horaire :</td>
                    <td class=\"info-value\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["devis"] ?? null), "creneauHoraire", [], "any", false, false, false, 127), "html", null, true);
        yield "</td>
                </tr>
            </table>
            
            ";
        // line 131
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["prestations"] ?? null)) > 0)) {
            // line 132
            yield "            <table class=\"prestations-table\">
                <tbody>
                    <tr class=\"prestations-header\">
                        <td style=\"width: 40%;\">Prestation</td>
                        <td style=\"width: 60%;\">Description</td>
                    </tr>
                    ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["prestations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dp"]) {
                // line 139
                yield "                    <tr";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "prestation", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " style=\"background: #e8f5e9;\"";
                }
                yield ">
                        <td>
                            ";
                // line 141
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "prestation", [], "any", false, false, false, 141) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "prestation", [], "any", false, false, false, 141), "libelle", [], "any", false, false, false, 141) != "Autre (Personnalisée)"))) {
                    // line 142
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "prestation", [], "any", false, false, false, 142), "libelle", [], "any", false, false, false, 142), "html", null, true);
                    yield "
                            ";
                } else {
                    // line 144
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", true, true, false, 144)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", false, false, false, 144), "Autre (Personnalisée)")) : ("Autre (Personnalisée)")), "html", null, true);
                    yield "
                            ";
                }
                // line 146
                yield "                        </td>
                        <td>";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "adminDescription", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "adminDescription", [], "any", false, false, false, 147), ((CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", false, false, false, 147), "—")) : ("—")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", true, true, false, 147)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["dp"], "detailsSpecifiques", [], "any", false, false, false, 147), "—")) : ("—")))), "html", null, true);
                yield "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['dp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            yield "                </tbody>
            </table>
            ";
        }
        // line 153
        yield "        </div>

        ";
        // line 155
        if ((($tmp = ($context["prix"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "        <div class=\"totaux\">
            <table class=\"totaux-table\">
                <tr>
                    <td class=\"label\">Prix unitaire HT :</td>
                    <td class=\"value\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "montantHt", [], "any", false, false, false, 160), 2, ",", " "), "html", null, true);
            yield " €/m²</td>
                </tr>
                <tr>
                    <td class=\"label\">Surface :</td>
                    <td class=\"value\">";
            // line 164
            yield (((($tmp = ($context["local"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["local"] ?? null), "surfaceM2", [], "any", false, false, false, 164), "html", null, true)) : (1));
            yield " m²</td>
                </tr>
                <tr style=\"border-top: 1px solid #ddd;\">
                    <td class=\"label\">Montant HT total :</td>
                    <td class=\"value\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "montantHtTotal", [], "any", false, false, false, 168), 2, ",", " "), "html", null, true);
            yield " €</td>
                </tr>
                ";
            // line 170
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "remise", [], "any", false, false, false, 170) && (CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "remise", [], "any", false, false, false, 170) > 0))) {
                // line 171
                yield "                <tr>
                    <td class=\"label\">Remise :</td>
                    <td class=\"value\">- ";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "remise", [], "any", false, false, false, 173), 2, ",", " "), "html", null, true);
                yield " €</td>
                </tr>
                <tr>
                    <td class=\"label\">Sous-total HT :</td>
                    <td class=\"value\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "montantHtApresRemise", [], "any", false, false, false, 177), 2, ",", " "), "html", null, true);
                yield " €</td>
                </tr>
                ";
            }
            // line 180
            yield "                <tr>
                    <td class=\"label\">TVA (";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "tva", [], "any", false, false, false, 181), "html", null, true);
            yield "%) :</td>
                    <td class=\"value\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "montantTva", [], "any", false, false, false, 182), 2, ",", " "), "html", null, true);
            yield " €</td>
                </tr>
                <tr class=\"total-row\">
                    <td class=\"label\">TOTAL TTC :</td>
                    <td class=\"value\"><strong>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["prix"] ?? null), "totalTtc", [], "any", false, false, false, 186), 2, ",", " "), "html", null, true);
            yield " €</strong></td>
                </tr>
            </table>
        </div>
        ";
        }
        // line 191
        yield "
        <div class=\"conditions\">
            <div class=\"conditions-title\">CONDITIONS GÉNÉRALES</div>
            <div class=\"conditions-text\">
                <strong>Validité :</strong> Ce devis est valable 30 jours à compter de sa date d'émission.<br>
                <strong>Règlement :</strong> 30% à la commande, solde à réception de facture.<br>
                <strong>Délai d'intervention :</strong> Sous 7 jours ouvrés après acceptation du devis.<br>
                <strong>Annulation :</strong> Toute annulation doit être notifiée 48h avant l'intervention prévue.<br>
                <strong>Garantie :</strong> Nos prestations sont garanties satisfait ou refait sous 24h.
            </div>
        </div>

        <div class=\"signature\">
            <div class=\"signature-box\">
                <div class=\"signature-title\">BON POUR ACCORD</div>
                <div>Date : _______________</div>
                <div class=\"signature-line\"></div>
                <div style=\"font-size: 10px; color: #666; margin-top: 5px;\">Signature du client précédée de la mention \"Lu et approuvé\"</div>
            </div>
            <div style=\"display: table-cell; width: 4%;\"></div>
            <div class=\"signature-box\">
                <div class=\"signature-title\">POUR LA SOCIÉTÉ</div>
                <div>Multi-Nettoyage Propreté Plus 94</div>
                <div class=\"signature-line\"></div>
                <div style=\"font-size: 10px; color: #666; margin-top: 5px;\">Cachet et signature</div>
            </div>
        </div>

        <div class=\"footer\">
            Multi-Nettoyage Propreté Plus 94<br>
            Tél. : 06.69.53.75.73 - Email : multinettoyage94@gmail.com<br>
            SIRET : RCS CRÉTEIL 990 875 155 00014 - Code APE : 8122Z - TVA intercommunautaire : FR 46990875155
        </div>
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
        return "demande_devis/pdf/devis.html.twig";
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
        return array (  355 => 191,  347 => 186,  340 => 182,  336 => 181,  333 => 180,  327 => 177,  320 => 173,  316 => 171,  314 => 170,  309 => 168,  302 => 164,  295 => 160,  289 => 156,  287 => 155,  283 => 153,  278 => 150,  269 => 147,  266 => 146,  260 => 144,  254 => 142,  252 => 141,  244 => 139,  240 => 138,  232 => 132,  230 => 131,  223 => 127,  216 => 123,  206 => 115,  202 => 113,  196 => 110,  189 => 106,  182 => 102,  178 => 100,  176 => 99,  168 => 93,  164 => 91,  158 => 88,  151 => 84,  142 => 80,  138 => 78,  136 => 77,  124 => 68,  120 => 67,  107 => 56,  101 => 54,  99 => 53,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande_devis/pdf/devis.html.twig", "C:\\Users\\slim3\\Videos\\projet\\templates\\demande_devis\\pdf\\devis.html.twig");
    }
}
