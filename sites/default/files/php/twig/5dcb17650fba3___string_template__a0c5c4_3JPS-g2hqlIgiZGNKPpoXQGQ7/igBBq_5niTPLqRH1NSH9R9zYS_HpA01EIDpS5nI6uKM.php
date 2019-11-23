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

/* __string_template__a0c5c4445a18851bc481852c906888506d9bd82743cdd4068298e98b986fb6c4 */
class __TwigTemplate_773baf61bfbbe0671e7d16d2785699b42eaa8f5aac560710cc343099dfb3a275 extends \Twig\Template
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
        $context["score"] = (((((((((((($this->getAttribute(($context["data"] ?? null), "q1_1", []) + $this->getAttribute(($context["data"] ?? null), "q1_2", [])) + $this->getAttribute(($context["data"] ?? null), "q1_3", [])) + $this->getAttribute(($context["data"] ?? null), "q1_4", [])) + $this->getAttribute(($context["data"] ?? null), "q1_5", [])) + $this->getAttribute(($context["data"] ?? null), "q1_6", [])) + $this->getAttribute(($context["data"] ?? null), "q1_7", [])) + $this->getAttribute(($context["data"] ?? null), "q1_8", [])) + $this->getAttribute(($context["data"] ?? null), "q1_9", [])) + $this->getAttribute(($context["data"] ?? null), "q1_10", [])) + $this->getAttribute(($context["data"] ?? null), "q1_11", [])) + $this->getAttribute(($context["data"] ?? null), "q1_12", [])) + $this->getAttribute(($context["data"] ?? null), "q1_13", []));
        // line 2
        if ((((($context["score"] ?? null) >= 7) && ($this->getAttribute(($context["data"] ?? null), "q2", []) == 1)) && ($this->getAttribute(($context["data"] ?? null), "q3", []) > 1))) {
            // line 3
            echo "Based on your responses, it is likely you are experiencing symptoms of bipolar disorder. Living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.";
        } else {
            // line 4
            echo "Based on your answers, you have little or no symptoms of bipolar disorder.";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__a0c5c4445a18851bc481852c906888506d9bd82743cdd4068298e98b986fb6c4";
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
        return new Source("", "__string_template__a0c5c4445a18851bc481852c906888506d9bd82743cdd4068298e98b986fb6c4", "");
    }
}
