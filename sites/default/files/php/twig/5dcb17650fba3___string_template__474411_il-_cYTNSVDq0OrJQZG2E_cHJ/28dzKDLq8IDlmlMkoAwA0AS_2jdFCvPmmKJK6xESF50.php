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

/* __string_template__4744113eafe4a89f759df929de49c9fb9b51f127775ea91adb0f8005a4058f53 */
class __TwigTemplate_36b542210b90595fc70bcf7491b86e6657c233d70bd48122f3d9c32ef83cd361 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 2];
        $filters = ["escape" => 7];
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
        $context["score"] = (((((((((((((((((((($this->getAttribute(($context["data"] ?? null), "q1_1", []) + $this->getAttribute(($context["data"] ?? null), "q2_1", [])) + $this->getAttribute(($context["data"] ?? null), "q3_1", [])) + $this->getAttribute(($context["data"] ?? null), "q4_1", [])) + $this->getAttribute(($context["data"] ?? null), "q5_1", [])) + $this->getAttribute(($context["data"] ?? null), "q6_1", [])) + $this->getAttribute(($context["data"] ?? null), "q7_1", [])) + $this->getAttribute(($context["data"] ?? null), "q8_1", [])) + $this->getAttribute(($context["data"] ?? null), "q9_1", [])) + $this->getAttribute(($context["data"] ?? null), "q10_1", [])) + $this->getAttribute(($context["data"] ?? null), "q11_1", [])) + $this->getAttribute(($context["data"] ?? null), "q12_1", [])) + $this->getAttribute(($context["data"] ?? null), "q13_1", [])) + $this->getAttribute(($context["data"] ?? null), "q14_1", [])) + $this->getAttribute(($context["data"] ?? null), "q15_1", [])) + $this->getAttribute(($context["data"] ?? null), "q16_1", [])) + $this->getAttribute(($context["data"] ?? null), "q17_1", [])) + $this->getAttribute(($context["data"] ?? null), "q18_1", [])) + $this->getAttribute(($context["data"] ?? null), "q19_1", [])) + $this->getAttribute(($context["data"] ?? null), "q20_1", [])) + $this->getAttribute(($context["data"] ?? null), "q21_1", []));
        // line 2
        if ((($context["score"] ?? null) < 24)) {
            // line 3
            $context["result"] = "Low/No Risk for Psychosis";
        } else {
            // line 5
            $context["result"] = "Possible Risk for Psychosis";
        }
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["result"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__4744113eafe4a89f759df929de49c9fb9b51f127775ea91adb0f8005a4058f53";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  62 => 5,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4744113eafe4a89f759df929de49c9fb9b51f127775ea91adb0f8005a4058f53", "");
    }
}
