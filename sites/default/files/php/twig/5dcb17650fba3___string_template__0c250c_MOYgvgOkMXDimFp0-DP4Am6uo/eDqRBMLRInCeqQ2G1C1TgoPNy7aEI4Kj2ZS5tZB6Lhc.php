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

/* __string_template__0c250c7e1424348ea290d27a2840f55e9cd8b4f77a938fd755d8f5c85e2559d8 */
class __TwigTemplate_4ab440d0b25cbde7c1be7a146a8dbceb67245ce93a3d0128933e8b23633c4b38 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 2];
        $filters = ["escape" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
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
            $context["result"] = "Minimal Depression";
        } elseif ((        // line 4
($context["score"] ?? null) < 10)) {
            // line 5
            $context["result"] = "Mild Depression";
        } elseif ((        // line 6
($context["score"] ?? null) < 15)) {
            // line 7
            $context["result"] = "Moderate Depression";
        } elseif ((        // line 8
($context["score"] ?? null) < 20)) {
            // line 9
            $context["result"] = "Moderately Severe Depression";
        } else {
            // line 11
            $context["result"] = "Severe Depression";
        }
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["result"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__0c250c7e1424348ea290d27a2840f55e9cd8b4f77a938fd755d8f5c85e2559d8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  74 => 11,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  63 => 5,  61 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0c250c7e1424348ea290d27a2840f55e9cd8b4f77a938fd755d8f5c85e2559d8", "");
    }
}
