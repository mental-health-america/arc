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

/* __string_template__5ca3c52b33db73b720756a3180b06db5ee01ee35f7d5928a5ec4c578d4d8f64c */
class __TwigTemplate_58705dfd71f6fbc868fbba433b2acc7530165027cb30260c0458fe1b575f829e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = ["webform_token" => 1];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['webform_token']
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
        echo "<p>Submitted on ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\webform\Twig\WebformTwigExtension')->webformToken("[webform_submission:created]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null))), "html", null, true);
        echo "</p>
<p>Submitted by: ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\webform\Twig\WebformTwigExtension')->webformToken("[webform_submission:user]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null))), "html", null, true);
        echo "</p>
<p>Submitted values are:</p>
";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\webform\Twig\WebformTwigExtension')->webformToken("[webform_submission:values:webform_token_options_html:webform_token_options_email]", $this->sandbox->ensureToStringAllowed(($context["webform_submission"] ?? null))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__5ca3c52b33db73b720756a3180b06db5ee01ee35f7d5928a5ec4c578d4d8f64c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 4,  60 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5ca3c52b33db73b720756a3180b06db5ee01ee35f7d5928a5ec4c578d4d8f64c", "");
    }
}
