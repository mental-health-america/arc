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

/* __string_template__46224e4828bf0f365381fd55240aa411285b589b59bebd54fcc449dd157cde5c */
class __TwigTemplate_c00a3a2e856c2eef622ea3e1f34046b3f8a48b3ecc6e0da3fd8e376c89683888 extends \Twig\Template
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
 Low Risk for Emotional, Attentional, or Behavioral Difficulties

Your results indicate that you have none, or very few signs of emotional, attentional or behavioral difficulties.  Most youth scoring in this range are functioning well and do not have serious problems.
If you notice that your feelings or behaviors get worse or do not improve, you may want to screen again and start a conversation with someone you trust.

These results do not mean that you do or do not have a mental health problem.&nbsp; Only a trained medical professional can help you and your family figure that out.

Visit&nbsp;Back to School&nbsp;and&nbsp;B4Stage4&nbsp;to learn more about mental health and ways to stay mentally healthy.

If you think you need more support you can also learn more at:&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__46224e4828bf0f365381fd55240aa411285b589b59bebd54fcc449dd157cde5c";
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
        return new Source("", "__string_template__46224e4828bf0f365381fd55240aa411285b589b59bebd54fcc449dd157cde5c", "");
    }
}
