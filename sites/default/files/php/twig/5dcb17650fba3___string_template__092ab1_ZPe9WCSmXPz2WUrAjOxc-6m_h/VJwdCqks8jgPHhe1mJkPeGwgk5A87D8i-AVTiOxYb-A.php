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

/* __string_template__092ab15955d5c578a0effad303bc532dbb5031c4007a8242c8e1993c5f213c8f */
class __TwigTemplate_fde58d21271baea2963cff9b5e11eac30ca3e7fc337bbd3bbf251299ce68cdda extends \Twig\Template
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
        $context["score"] = (((((((((((((((((((((((((((((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q10", [])) + $this->getAttribute(($context["data"] ?? null), "q11", [])) + $this->getAttribute(($context["data"] ?? null), "q12", [])) + $this->getAttribute(($context["data"] ?? null), "q13", [])) + $this->getAttribute(($context["data"] ?? null), "q14", [])) + $this->getAttribute(($context["data"] ?? null), "q15", [])) + $this->getAttribute(($context["data"] ?? null), "q16", [])) + $this->getAttribute(($context["data"] ?? null), "q17", [])) + $this->getAttribute(($context["data"] ?? null), "q18", [])) + $this->getAttribute(($context["data"] ?? null), "q19", [])) + $this->getAttribute(($context["data"] ?? null), "q20", [])) + $this->getAttribute(($context["data"] ?? null), "q21", [])) + $this->getAttribute(($context["data"] ?? null), "q22", [])) + $this->getAttribute(($context["data"] ?? null), "q23", [])) + $this->getAttribute(($context["data"] ?? null), "q24", [])) + $this->getAttribute(($context["data"] ?? null), "q25", [])) + $this->getAttribute(($context["data"] ?? null), "q26", [])) + $this->getAttribute(($context["data"] ?? null), "q27", [])) + $this->getAttribute(($context["data"] ?? null), "q28", [])) + $this->getAttribute(($context["data"] ?? null), "q29", [])) + $this->getAttribute(($context["data"] ?? null), "q30", [])) + $this->getAttribute(($context["data"] ?? null), "q31", [])) + $this->getAttribute(($context["data"] ?? null), "q32", [])) + $this->getAttribute(($context["data"] ?? null), "q33", [])) + $this->getAttribute(($context["data"] ?? null), "q34", [])) + $this->getAttribute(($context["data"] ?? null), "q35", []));
        // line 2
        if ((($context["score"] ?? null) < 30)) {
            // line 3
            echo "Your results indicate that you have none, or very few signs of emotional, attentional or behavioral difficulties.  Most youth scoring in this range are functioning well and do not have serious problems.";
        } else {
            // line 4
            echo "Your results indicate that you are experiencing a large number of emotional, attentional, or behavioral difficulties. Based on your answers, living with these feelings and stressors is causing difficulty in school, with relationships, in your family, and/or with everyday activities.";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__092ab15955d5c578a0effad303bc532dbb5031c4007a8242c8e1993c5f213c8f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__092ab15955d5c578a0effad303bc532dbb5031c4007a8242c8e1993c5f213c8f", "");
    }
}
