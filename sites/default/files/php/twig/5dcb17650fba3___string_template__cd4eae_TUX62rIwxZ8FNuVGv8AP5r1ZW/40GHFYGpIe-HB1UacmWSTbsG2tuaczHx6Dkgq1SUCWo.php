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

/* __string_template__cd4eae031c35ff1f6c42d062a4158161bd7f0bccf17dd03a81957824b8a3719b */
class __TwigTemplate_a9985ff41bcc212126c472b7842168607dc8db31ea0c6b08f40cdbb81cd4abae extends \Twig\Template
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
        $context["score"] = ((((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q10", []));
        // line 2
        if ((($context["score"] ?? null) < 5)) {
            // line 3
            echo "<p>Si nota que sus síntomas no están mejorando, le sugerimos que consulte con su médico o alguien que le esté apoyando.</p>
<p>Esta prueba de salud mental no es un diagnóstico, o intenta eliminar un diagnóstico. Solamente un médico capacitado o un profesional de salud mental puede diagnosticar la depresión.</p>
<p>Si siente que sus sentimientos, pensamientos, o comportamiento empeoran, hágase la prueba de salud mental de nuevo.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        } elseif ((        // line 8
($context["score"] ?? null) < 20)) {
            // line 9
            echo "<p>Estos resultados no significan que tenga depresión, pero sirven como una herramienta útil para empezar una conversación con su médico. Encontrar el plan de tratamiento adecuado y trabajar con su médico o su proveedor de servicios de salud, le ayudara a sentirse como la persona que era antes.</p>
<p>Los síntomas de depresión que está sintiendo también pueden indicar otro problema de salud mental relacionado con el trastorno bipolar. Le recomendamos que se realicé la prueba del trastorno bipolar para ver si sus síntomas son más similares con los síntomas que tienen personas que sufren del trastorno bipolar. Las personas que sufren del trastorno bipolar pasan por cambios drásticos de ánimo o altibajos, como felicidad extrema, altos niveles de energía, agitación o sentirse extremadamente deprimido.</p>
<p>Esta prueba de salud mental no es un diagnóstico. El diagnóstico y el cuidado de una condición de salud mental puede ser difícil. Tener síntomas de depresión es diferente a ser diagnosticado con depresión.</p>
<p>Adicionalmente, síntomas de depresión pueden ser causados por otros trastornos de salud mental, como el trastorno bipolar, u otros problemas de salud, tal como problemas con su tiroides (trastorno tiroideo). Solamente un profesional capacitado, como un médico o un proveedor de salud mental, puede hacer esta determinación. Sin embargo, si imprime estos resultados y los comparte con su médico, usted puede comenzar una conversación.</p>
<p>Nuestros <a href=\"http://www.mentalhealthamerica.net/conditions/infografí-convivir-con-la-depresion\">recursos sobre la depresión</a> le pueden ayudar a tomar los siguientes pasos.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        } else {
            // line 17
            echo "<p>Estos resultados no significan que tenga depresión, pero puede ser un buen momento para empezar una conversación con su médico. Encontrar el plan de tratamiento adecuado y trabajar con su médico o su proveedor de servicios de salud, le ayudara a sentirse como la persona que era antes.</p>
<p>Los síntomas de depresión que está sintiendo pueden indicar otro problema de salud mental relacionado con el trastorno bipolar. Le recomendamos que se realice la prueba del trastorno bipolar para ver si sus síntomas son más similares con los síntomas que tienen personas que sufren del trastorno bipolar. Las personas que sufren del trastorno bipolar pasan por cambios drásticos de ánimo o altibajos, como felicidad extrema, altos niveles de energía, agitación o sentirse extremadamente deprimido.</p>
<p>Esta prueba de salud mental no es un diagnóstico. El diagnóstico y el cuidado de una condición de salud mental puede ser difícil. Tener síntomas de depresión es diferente a ser diagnosticado con depresión.</p>
<p>Adicionalmente, síntomas de depresión pueden ser causados por otros trastornos de salud mental, como el trastorno bipolar, u otros problemas de salud, tal como problemas con su tiroides (trastorno tiroideo). Solamente un profesional capacitado, como un médico o un proveedor de salud mental, puede hacer esta determinación. Sin embargo, si imprime estos resultados y los comparte con su médico, usted puede comenzar una conversación.</p>
<p>Nuestros <a href=\"http://www.mentalhealthamerica.net/conditions/infografí-convivir-con-la-depresion\">recursos sobre la depresión</a> le pueden ayudar a tomar los siguientes pasos.</p>
<p>Para ayuda adicional visite: <a href=\"http://www.mentalhealthamerica.net/antesdelaetapa4-obtenga-ayuda\">Obtener Ayuda</a>, <a href=\"http://www.mentalhealthamerica.net/conditions/otros-recursos\">Buscar Terapia</a>, <a href=\"https://findtreatment.samhsa.gov/\">SAMHSA Localizador de Tratamiento</a>, o <a href=\"http://www.mentalhealthamerica.net/find-affiliate\">contacte a su filial local de MHA</a>.</p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__cd4eae031c35ff1f6c42d062a4158161bd7f0bccf17dd03a81957824b8a3719b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 17,  68 => 9,  66 => 8,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cd4eae031c35ff1f6c42d062a4158161bd7f0bccf17dd03a81957824b8a3719b", "");
    }
}
