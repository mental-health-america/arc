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

/* __string_template__ed080d7912fedbcf3137dd5b17772a3f904abaf4906ffdb8c6829728c1b4eb6c */
class __TwigTemplate_bd7ad21031e0325ff44feed112bfd877e9619acf455039fc0d3f8c8ee995f639 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["escape" => 2];
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
        $context["score"] = (((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", []));
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["score"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__ed080d7912fedbcf3137dd5b17772a3f904abaf4906ffdb8c6829728c1b4eb6c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ed080d7912fedbcf3137dd5b17772a3f904abaf4906ffdb8c6829728c1b4eb6c", "");
    }
}
