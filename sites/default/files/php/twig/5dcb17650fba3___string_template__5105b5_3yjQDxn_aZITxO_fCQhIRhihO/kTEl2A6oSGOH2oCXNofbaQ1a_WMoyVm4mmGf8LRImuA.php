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

/* __string_template__5105b59c1005896f0f1bf0277ae438ba75d6d96a6e43d44755cc280a7c8a7a1e */
class __TwigTemplate_62ef6fbe334c3f7fa3fe2822f58f6a6978102aee883beb192fd417de331dfe66 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        $context["score1"] = (((($this->getAttribute(($context["data"] ?? null), "q11", []) + $this->getAttribute(($context["data"] ?? null), "q13", [])) + $this->getAttribute(($context["data"] ?? null), "q19", [])) + $this->getAttribute(($context["data"] ?? null), "q22", [])) + $this->getAttribute(($context["data"] ?? null), "q27", []));
        // line 2
        $context["score2"] = (((($this->getAttribute(($context["data"] ?? null), "q4", []) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q14", [])) + $this->getAttribute(($context["data"] ?? null), "q7", []));
        // line 3
        $context["score"] = (((((($this->getAttribute(($context["data"] ?? null), "q16", []) + $this->getAttribute(($context["data"] ?? null), "q29", [])) + $this->getAttribute(($context["data"] ?? null), "q31", [])) + $this->getAttribute(($context["data"] ?? null), "q32", [])) + $this->getAttribute(($context["data"] ?? null), "q33", [])) + $this->getAttribute(($context["data"] ?? null), "q34", [])) + $this->getAttribute(($context["data"] ?? null), "q35", []));
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["score"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__5105b59c1005896f0f1bf0277ae438ba75d6d96a6e43d44755cc280a7c8a7a1e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5105b59c1005896f0f1bf0277ae438ba75d6d96a6e43d44755cc280a7c8a7a1e", "");
    }
}
