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

/* __string_template__e35df44b149e09b8dc215e046d1465dcea4aa4edd1e45899a37e0e35af352b43 */
class __TwigTemplate_8c010439eaa7d372caf26b4fbe9b1cd9bd9eb33568fec888f2d5286deaaf6275 extends \Twig\Template
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
        $context["score"] = ((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) / 5);
        // line 2
        if (($this->getAttribute(($context["data"] ?? null), "q18", []) > 0)) {
            // line 3
            $context["bmi"] = ((($this->getAttribute(($context["data"] ?? null), "q17", []) / $this->getAttribute(($context["data"] ?? null), "q18", [])) / $this->getAttribute(($context["data"] ?? null), "q18", [])) * 703);
        } else {
            // line 5
            $context["bmi"] = 0;
        }
        // line 7
        if (((((($context["bmi"] ?? null) < 18.5) && ($this->getAttribute(($context["data"] ?? null), "q10", []) == 1)) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 8
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 9
($context["data"] ?? null), "q6", []) > 1) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) > 1)) && (($this->getAttribute(($context["data"] ?? null), "q6", []) >= 12) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 12))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 10
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 11
($context["data"] ?? null), "q6", []) > 1) && ((((($this->getAttribute(($context["data"] ?? null), "q7a", []) + $this->getAttribute(($context["data"] ?? null), "q7b", [])) + $this->getAttribute(($context["data"] ?? null), "q7c", [])) + $this->getAttribute(($context["data"] ?? null), "q7d", [])) + $this->getAttribute(($context["data"] ?? null), "q7e", [])) >= 3)) && ($this->getAttribute(($context["data"] ?? null), "q8", []) >= 4)) && (($this->getAttribute(($context["data"] ?? null), "q6", []) >= 12) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 3)))) {
            // line 12
            $context["result"] = "At Risk for Eating Disorder";
        } elseif (((((        // line 13
($context["bmi"] ?? null) >= 18.5) && ($this->getAttribute(($context["data"] ?? null), "q10", []) == 1)) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 14
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 15
($context["data"] ?? null), "q6", []) > 1) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) > 1)) && (((($this->getAttribute(($context["data"] ?? null), "q6", []) >= 3) && ($this->getAttribute(($context["data"] ?? null), "q6", []) < 12)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 3)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 12))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 16
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 17
($context["data"] ?? null), "q6", []) > 1) && ((((($this->getAttribute(($context["data"] ?? null), "q7a", []) + $this->getAttribute(($context["data"] ?? null), "q7b", [])) + $this->getAttribute(($context["data"] ?? null), "q7c", [])) + $this->getAttribute(($context["data"] ?? null), "q7d", [])) + $this->getAttribute(($context["data"] ?? null), "q7e", [])) >= 3)) && ($this->getAttribute(($context["data"] ?? null), "q8", []) >= 4)) && ((($this->getAttribute(($context["data"] ?? null), "q6", []) >= 3) && ($this->getAttribute(($context["data"] ?? null), "q6", []) < 12)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 3)))) {
            // line 18
            $context["result"] = "AAt Risk for Eating Disorder";
        } elseif ((($this->getAttribute(        // line 19
($context["data"] ?? null), "q6", []) == 0) && (($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) >= 12))) {
            // line 20
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((($this->getAttribute(        // line 21
($context["data"] ?? null), "q6", []) >= 3) || (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 3))) {
            // line 22
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((        // line 23
($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) {
            // line 24
            $context["result"] = "At Risk for Eating Disorder";
        } elseif (((($this->getAttribute(        // line 25
($context["data"] ?? null), "q11", []) == 1) || ($this->getAttribute(($context["data"] ?? null), "q12", []) == 1)) || ($this->getAttribute(($context["data"] ?? null), "q13", []) == 1))) {
            // line 26
            $context["result"] = "At Risk for Avoidant/Restrictive Food Intake Disorder (ARFID)";
        } else {
            // line 28
            $context["result"] = "Low Risk";
        }
        // line 30
        $context["rs"] = ($context["result"] ?? null);
        // line 31
        if (!twig_in_filter(($context["rs"] ?? null), [0 => "At Risk for Eating Disorder", 1 => "At Risk for Avoidant/Restrictive Food Intake Disorder (ARFID)", 2 => "Low Risk"])) {
            // line 32
            echo "Your responses suggest that you may be concerned about your weight and/or shape and may be engaging in behaviors that may be interfering with your health. These symptoms indicate that you may be at risk for or are struggling with an eating disorder.
";
        } elseif ((        // line 33
($context["rs"] ?? null) == "At Risk for Eating Disorder")) {
            // line 34
            echo "Your responses suggest that you may be concerned about your weight and/or shape and may be engaging in behaviors that may be interfering with your health. These symptoms indicate that you may be at risk for or are struggling with an eating disorder.
";
        } elseif ((        // line 35
($context["rs"] ?? null) == "Low Risk")) {
            // line 36
            echo "Your responses suggest that you are neither currently experiencing major concerns about your body image, weight, or shape, nor are you currently engaging in many unhealthy behaviors.
";
        } else {
            // line 38
            echo "Your responses suggest that you may be engaging in behaviors that may be interfering with your health and happiness. These symptoms indicate that you may be at risk for or struggling with an eating disorder.
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e35df44b149e09b8dc215e046d1465dcea4aa4edd1e45899a37e0e35af352b43";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  123 => 36,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  111 => 31,  109 => 30,  106 => 28,  103 => 26,  101 => 25,  99 => 24,  97 => 23,  95 => 22,  93 => 21,  91 => 20,  89 => 19,  87 => 18,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  67 => 8,  65 => 7,  62 => 5,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e35df44b149e09b8dc215e046d1465dcea4aa4edd1e45899a37e0e35af352b43", "");
    }
}
