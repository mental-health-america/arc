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

/* __string_template__d12473c1b1a77f4c05c1d2d5f7ca617dc11a1e51755c1b5fb435dd686cfbbc51 */
class __TwigTemplate_febc7f52c84abc931e2c8a4661c36dc72ba789ff04b7b262054d3d7e3af65bfb extends \Twig\Template
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
        $context["score"] = ((((((((((((((($this->getAttribute(($context["data"] ?? null), "q1_1", []) + $this->getAttribute(($context["data"] ?? null), "q1_2", [])) + $this->getAttribute(($context["data"] ?? null), "q1_3", [])) + $this->getAttribute(($context["data"] ?? null), "q1_4", [])) + $this->getAttribute(($context["data"] ?? null), "q1_5", [])) + $this->getAttribute(($context["data"] ?? null), "q1_6", [])) + $this->getAttribute(($context["data"] ?? null), "q1_7", [])) + $this->getAttribute(($context["data"] ?? null), "q1_8", [])) + $this->getAttribute(($context["data"] ?? null), "q1_9", [])) + $this->getAttribute(($context["data"] ?? null), "q1_10", [])) + $this->getAttribute(($context["data"] ?? null), "q1_11", [])) + $this->getAttribute(($context["data"] ?? null), "q1_12", [])) + $this->getAttribute(($context["data"] ?? null), "q1_13", [])) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", []));
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["score"] ?? null)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__d12473c1b1a77f4c05c1d2d5f7ca617dc11a1e51755c1b5fb435dd686cfbbc51";
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
        return new Source("", "__string_template__d12473c1b1a77f4c05c1d2d5f7ca617dc11a1e51755c1b5fb435dd686cfbbc51", "");
    }
}
