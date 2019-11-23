<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__5866097d767f30c583a1a1a7486fd94078fa9112591633d48904769e696cf572 */
class __TwigTemplate_132eaef01c5fc5e228d65de2983959d79d041bf492dad11b2327256114245799 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 2];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["score"] = (((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", []));
        // line 2
        if ((($context["score"] ?? null) < 5)) {
            // line 3
            echo "<p>Si nota que sus síntomas no se mejoran o empeoran, consulte con su médico o hágase la prueba de nuevo.</p>
<p>Esta prueba de salud mental no es un diagnóstico, o intenta eliminar un diagnóstico. Solamente un médico capacitado o un profesional de salud mental puede diagnosticar la ansiedad.</p>
<p>Si parece que sus sentimientos, pensamientos, o comportamientos se empeoran, tome la prueba otra vez.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        } elseif ((        // line 8
($context["score"] ?? null) < 10)) {
            // line 9
            echo "<p>Mientras que sus síntomas probablemente no tengan un impacto mayor en su vida cotidiana, es importante que este pendiente de algún cambio en sus
síntomas.</p>
<p>Estos resultados no significan que tenga ansiedad, pero es una herramienta útil para empezar una conversación con su médico. Encontrar el plan de tratamiento adecuado y trabajar con su médico o su proveedor de servicios de salud, le ayudará a sentirse como la persona que era antes.</p>
<p>Muchas veces los síntomas de ansiedad están acompañados con los síntomas de depresión. Por esta razón, le recomendamos que también se realice la prueba de depresión.</p>
<p>Esta prueba de salud mental no es un diagnóstico. El diagnóstico y el cuidado de una condición de salud mental puede ser difícil. Tener síntomas de ansiedad es diferente a ser diagnosticado con un trastorno de ansiedad.</p>
<p>Adicionalmente, síntomas de ansiedad pueden ser causados por otros trastornos de salud mental, como el trastorno bipolar, u otros problemas de salud, tal como problemas con su tiroides (trastorno tiroideo). Solamente un profesional capacitado, como un médico o un proveedor de salud mental, puede hacer esta determinación. Sin embargo, si imprime estos resultados y los comparte con su médico, usted puede comenzar una conversación.</p>
<p>Nuestros <a href=\"http://www.mentalhealthamerica.net/conditions/infografí-convivir-con-la-ansiedad\">recursos sobre la ansiedad</a> le pueden ayudar a tomar los siguientes pasos.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        } elseif ((        // line 18
($context["score"] ?? null) < 15)) {
            // line 19
            echo "<p>Estos resultados no significan que tenga ansiedad, pero es una herramienta útil para empezar una conversación con su médico. Encontrar el plan de tratamiento correcto y trabajar con su médico o su proveedor de servicios de salud, le ayudara a sentirse como la persona que era antes.</p>
<p>Muchas veces los síntomas de ansiedad están acompañados con los síntomas de depresión. Por esta razón, le recomendamos que también se realice la prueba de depresión.</p>
<p>Esta prueba de salud mental no es un diagnóstico. El diagnóstico y el cuidado de una condición de salud mental puede ser difícil. Tener síntomas de ansiedad es diferente a ser diagnosticado con un trastorno de ansiedad.</p>
<p>Adicionalmente, síntomas de ansiedad pueden ser causados por otros trastornos de salud mental, como el trastorno bipolar, u otros problemas de salud, tal como problemas con su tiroides (trastorno tiroideo). Solamente un profesional capacitado, como un médico o un proveedor de salud mental, puede hacer esta determinación. Sin embargo, si imprime estos resultados y los comparte con su médico, usted puede comenzar una conversación.</p>
<p>Nuestros <a href=\"http://www.mentalhealthamerica.net/conditions/infografí-convivir-con-la-ansiedad\">recursos sobre la ansiedad</a> le pueden ayudar a tomar los siguientes pasos.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        } else {
            // line 27
            echo "<p>Estos resultados no significan que tenga ansiedad, pero es una herramienta útil para empezar una conversación con su médico. Encontrar el plan de tratamiento correcto y trabajar con su médico o su proveedor de servicios de salud, le ayudara a sentirse como la persona que era antes.</p>
<p>Muchas veces los síntomas de ansiedad están acompañados con los síntomas de depresión. Por esta razón, le recomendamos que también se realice la prueba de depresión.</p>
<p>Esta prueba de salud mental no es un diagnóstico. El diagnóstico y el cuidado de una condición de salud mental puede ser difícil. Tener síntomas de ansiedad es diferente a ser diagnosticado con un trastorno de ansiedad.</p>
<p>Adicionalmente, síntomas de ansiedad pueden ser causados por otros trastornos de salud mental, como el trastorno bipolar, u otros problemas de salud, tal como problemas con su tiroides (trastorno tiroideo). Solamente un profesional capacitado, como un médico o un proveedor de salud mental, puede hacer esta determinación. Sin embargo, si imprime estos resultados y los comparte con su médico, usted puede comenzar una conversación.</p>
<p>Nuestros <a href=\"http://www.mentalhealthamerica.net/conditions/infografí-convivir-con-la-ansiedad\">recursos sobre la ansiedad</a> le pueden ayudar a tomar los siguientes pasos.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__5866097d767f30c583a1a1a7486fd94078fa9112591633d48904769e696cf572";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  81 => 19,  79 => 18,  68 => 9,  66 => 8,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5866097d767f30c583a1a1a7486fd94078fa9112591633d48904769e696cf572", "");
    }
}
