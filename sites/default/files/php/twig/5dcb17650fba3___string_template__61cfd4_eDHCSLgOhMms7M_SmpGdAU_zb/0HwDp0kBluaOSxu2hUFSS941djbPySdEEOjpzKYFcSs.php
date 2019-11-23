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

/* __string_template__61cfd4fed9302cf90e8a07e72861430acdf6e7c001c4cc2b0407db94ffa02b73 */
class __TwigTemplate_e45a830a7feabc431e3ae9987e1eb184b2debdd26463313a52a375574fe08349 extends \Twig\Template
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
            echo "Your results indicate that you have none, or very few symptoms of depression.";
        } elseif ((($context["score"] ?? null) < 10)) {
            // line 4
            echo "Your results indicate that you may be experiencing some symptoms of mild depression. While your symptoms are not likely having a major impact on your life, it is important to monitor them.";
        } elseif ((($context["score"] ?? null) < 15)) {
            // line 5
            echo "Your results indicate that you may be experiencing symptoms of moderate depression.  Based on your answers, living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.";
        } elseif ((($context["score"] ?? null) < 20)) {
            // line 6
            echo "Your results indicate that you may be experiencing symptoms of moderately severe depression.   Based on your answers, living with these symptoms is causing difficulty managing relationships and even the tasks of everyday life.";
        } else {
            // line 7
            echo "Your responses indicate you may be at risk for harming yourself or someone else. Are you in crisis? Please call 911 or the National Suicide Prevention Hotline at 1-800-273-TALK or go immediately to the nearest emergency room. Your results indicate that you may be experiencing symptoms of severe depression. Based on your answers, these symptoms seem to be greatly interfering with your relationships and the tasks of everyday life.";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__61cfd4fed9302cf90e8a07e72861430acdf6e7c001c4cc2b0407db94ffa02b73";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__61cfd4fed9302cf90e8a07e72861430acdf6e7c001c4cc2b0407db94ffa02b73", "");
    }
}
