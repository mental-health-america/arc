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

/* __string_template__81428ddae43ff266e4781ec2d6ba6ef241c5beddedae3e6d68bde88d3a3eb8ef */
class __TwigTemplate_15299d368fbe1785de3a7e562d61b39f87eadbdca9fc4e4e6cb4bf494bd2c7f2 extends \Twig\Template
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
            echo "Sus resultados indican que presenta con ningún o muy pocos síntomas de depresión.
";
        } elseif ((        // line 4
($context["score"] ?? null) < 10)) {
            // line 5
            echo "Sus resultados indican que usted puede estar sufriendo con algunos síntomas de depresión leve. Mientras que sus síntomas probablemente no tengan un impacto mayor en su vida cotidiana, es importante que este pendiente de algún cambio de ellos.
";
        } elseif ((        // line 6
($context["score"] ?? null) < 15)) {
            // line 7
            echo "Sus resultados indican que usted puede estar sufriendo con síntomas de depresión moderada. Basado en sus respuestas, vivir con estos síntomas puede estar causando dificultad en cómo está manejando sus relaciones personales y su vida cotidiana.
";
        } elseif ((        // line 8
($context["score"] ?? null) < 20)) {
            // line 9
            echo "Sus resultados indican que usted puede estar sufriendo con síntomas de depresión moderadamente severa. Basado en sus respuestas, vivir con estos síntomas está causando dificultad en cómo está manejando sus relaciones personales y su vida cotidiana.
";
        } else {
            // line 11
            echo "Sus resultados indican que usted puede estar sufriendo con síntomas de depresión severa. Basado en sus respuestas, parecería que estos síntomas están interfiriendo de gran manera con sus relaciones personales y su vida cotidiana.
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__81428ddae43ff266e4781ec2d6ba6ef241c5beddedae3e6d68bde88d3a3eb8ef";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  74 => 9,  72 => 8,  69 => 7,  67 => 6,  64 => 5,  62 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__81428ddae43ff266e4781ec2d6ba6ef241c5beddedae3e6d68bde88d3a3eb8ef", "");
    }
}
