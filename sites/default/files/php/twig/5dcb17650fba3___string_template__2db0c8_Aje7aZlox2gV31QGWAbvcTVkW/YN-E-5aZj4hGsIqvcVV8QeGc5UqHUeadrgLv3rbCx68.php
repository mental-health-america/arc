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

/* __string_template__2db0c8b8863b8ecc5703665ae98ab0201985c9b16e652ca7e075a0ba27f1cab6 */
class __TwigTemplate_1599f760cadff0b39e15d72b1838713bc567c61f8c35c9eda6956cbfa988efbe extends \Twig\Template
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
 Severe Anxiety

Your results indicate that you may be experiencing symptoms of severe anxiety. Based on your answers, these symptoms seem to be greatly interfering with your relationships and the tasks of everyday life.

These results do not mean that you have anxiety disorder, but it may be time to start a conversation with someone you trust to explore what is going on and how things can get better. If you are interested in learning more, check out the information and DIY supports on this page.
 
This screen is not meant to be a formal diagnosis but is a good way to identify if anxiety is possible problem. Having symptoms of anxiety is different than having an anxiety disorder. In addition, symptoms of anxiety can be caused by other mental health conditions, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination.

Anxiety symptoms are often accompanied by symptoms of depression. We recommend you also take the screen for depression.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__2db0c8b8863b8ecc5703665ae98ab0201985c9b16e652ca7e075a0ba27f1cab6";
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
        return new Source("", "__string_template__2db0c8b8863b8ecc5703665ae98ab0201985c9b16e652ca7e075a0ba27f1cab6", "");
    }
}
