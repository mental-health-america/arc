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

/* __string_template__0eb2a324d8ea3758b1fa1403538b066d1eb7a5a9a953002ae08be645d87bc3c3 */
class __TwigTemplate_044af16b35224d282d12bceb5ddd16b98d9af60bcd74e9ca2cc64d94239ea49d extends \Twig\Template
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
 PTSD Negative

Based on your answers, you have little or no symptoms of Post Traumatic Stress Disorder.
If you notice that your symptoms aren&#39;t improving or get worse, you may want to bring them up with your doctor or rescreen.

This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; Only a trained medical professional can diagnose Post Traumatic Stress Disorder.

Our&nbsp;Live Your Life Well&nbsp;program can help you stay mentally healthy.

If you feel like you need assistance, visit&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__0eb2a324d8ea3758b1fa1403538b066d1eb7a5a9a953002ae08be645d87bc3c3";
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
        return new Source("", "__string_template__0eb2a324d8ea3758b1fa1403538b066d1eb7a5a9a953002ae08be645d87bc3c3", "");
    }
}
