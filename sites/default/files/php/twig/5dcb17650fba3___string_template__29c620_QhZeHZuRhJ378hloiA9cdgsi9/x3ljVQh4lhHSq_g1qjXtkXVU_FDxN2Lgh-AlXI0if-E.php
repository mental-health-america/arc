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

/* __string_template__29c6205a66a06f135c665293616c9727c61d990da13a3802db4c547110bb5fd6 */
class __TwigTemplate_ac099f82c9b1d761950ae52329d8aed50ed075101fecc0694b18b3a780aeb2ac extends \Twig\Template
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
            echo "Sus resultados indican que presenta con ningún o muy pocos síntomas de ansiedad.";
        } elseif ((($context["score"] ?? null) < 10)) {
            // line 4
            echo "Sus resultados indican que usted puede estar sufriendo con algunos síntomas de ansiedad leve.";
        } elseif ((($context["score"] ?? null) < 15)) {
            // line 5
            echo "Sus resultados indican que usted puede estar sufriendo con síntomas de ansiedad moderada. Basado en sus respuestas, estos síntomas pueden estar interfiriendo con sus relaciones personales y su vida cotidiana.";
        } else {
            // line 6
            echo "Sus resultados indican que usted puede estar sufriendo con síntomas de ansiedad severa. Basado en sus respuestas, parecería que estos síntomas están interfiriendo de gran manera con sus relaciones personales y su vida cotidiana.";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__29c6205a66a06f135c665293616c9727c61d990da13a3802db4c547110bb5fd6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  65 => 5,  62 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__29c6205a66a06f135c665293616c9727c61d990da13a3802db4c547110bb5fd6", "");
    }
}
