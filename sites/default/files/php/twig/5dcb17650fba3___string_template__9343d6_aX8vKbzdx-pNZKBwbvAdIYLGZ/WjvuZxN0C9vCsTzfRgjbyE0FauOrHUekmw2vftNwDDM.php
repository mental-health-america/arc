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

/* __string_template__9343d63cbd0efe993226b92ec6f96754cfd26a297b66fd00c4860611eaeceaff */
class __TwigTemplate_c0b2c7edf640f060ad9fd6cedf87a59dc095f9388cb6096bab5a03d7fbf782ff extends \Twig\Template
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
 Minimal Depression

Your results indicate that you have none, or very few symptoms of depression.
If you notice that your symptoms aren&#39;t improving, you may want to bring them up with someone you trust.

This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; A trained medical or mental health professional can help clarify issues and diagnose depression.

If you feel like your feelings, thoughts, or behaviors get worse, screen again.&nbsp;

 If you are interested in learning more, check out the information and DIY supports on this page.

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__9343d63cbd0efe993226b92ec6f96754cfd26a297b66fd00c4860611eaeceaff";
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
        return new Source("", "__string_template__9343d63cbd0efe993226b92ec6f96754cfd26a297b66fd00c4860611eaeceaff", "");
    }
}
