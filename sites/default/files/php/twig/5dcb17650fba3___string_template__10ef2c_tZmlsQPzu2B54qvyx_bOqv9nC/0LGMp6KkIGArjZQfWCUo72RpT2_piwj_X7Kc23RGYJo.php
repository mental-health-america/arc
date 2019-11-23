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

/* __string_template__10ef2caf9f2c78abaed529d1e9e997f631ebcd63c80a53c6a6cd5aec96061159 */
class __TwigTemplate_76b4dbb6ca1b0702a43c88d08c7a4ef34842b7c079d1f506ba1d70572e65dc64 extends \Twig\Template
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
 Low/No Risk for Psychosis

Your results indicate that you have none, or very few signs of psychosis.

Psychosis describes various kinds of symptoms where there are changes in perception, sight, sounds, and thoughts that are different from others experience. Sometimes these changes can be due to sleep, stress, or life changes (moving into a new home). &nbsp;&nbsp;Most people scoring in this range are functioning well and do not have serious problems.

If you notice that your vision, sounds, thoughts, or behaviors get worse or do not improve, you may want to screen again and start a conversation with someone you trust.

These results do not mean that you do or do not have a mental health problem.&nbsp; Only a trained medical professional can help you and your family figure that out.

Visit our information on Psychosis, Schizophrenia, Early Warning Signs, and B4Stage4 to learn more about your mental health and ways to stay mentally healthy.

If you feel like you need assistance, visit&nbsp;Get Help, Finding Therapy, SAMHSA Treatment Locator, or contact a local MHA affliliate.

You can also learn more about assessment and treatment for Prodrome and First Break Psychosis at&nbsp;Strong 365&nbsp;and their treatment locator. &nbsp;

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__10ef2caf9f2c78abaed529d1e9e997f631ebcd63c80a53c6a6cd5aec96061159";
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
        return new Source("", "__string_template__10ef2caf9f2c78abaed529d1e9e997f631ebcd63c80a53c6a6cd5aec96061159", "");
    }
}
