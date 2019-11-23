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

/* __string_template__8dda707fd44a35e537738ddbce494a880e0ac0863b1e03fc2f0bbbeced93dcfc */
class __TwigTemplate_2dfc92ae3236305f3fca117d8deb8449585b50b9c37b70d4e434adfed05d514c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<textarea class='form-textarea form-control resize-vertical' id='edit-result' rows='5' cols='60'>
Bipolar Negative

Based on your answers, you have little or no symptoms of bipolar disorder.
If you notice that your symptoms aren&#39;t improving or get worse, you may want to bring them up with your doctor or rescreen.

This screen is not meant to be a formal diagnosis, or the elimination of a diagnosis.&nbsp; Only a trained medical professional can diagnose bipolar disorder.

If you are interested in learning more, check out the information and DIY supports on this page.

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__8dda707fd44a35e537738ddbce494a880e0ac0863b1e03fc2f0bbbeced93dcfc";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8dda707fd44a35e537738ddbce494a880e0ac0863b1e03fc2f0bbbeced93dcfc", "");
    }
}
