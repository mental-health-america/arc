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

/* __string_template__7204e1695c2abcdf465184b41d02b0333591c74cd74657591af4a32591c97111 */
class __TwigTemplate_54375e2379002f847e74223ace907846258ade30f832e7618cf8dd545420e60d extends \Twig\Template
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

Your results indicate that your child has none, or very few signs of emotional, attentional or behavioral difficulties.  Most youth scoring in this range are functioning well and do not have serious problems.
If you notice that your child&rsquo;s feelings or behaviors get worse or do not improve, you may want screen again and start a conversation with your child about how to deal with hard feelings, stress, and problems.

This screen is not meant to provide or rule out a diagnosis.&nbsp; Only a trained medical professional can diagnose child mental health problems.

Visit&nbsp;Back to School&nbsp;and&nbsp;B4Stage4&nbsp;to learn more about mental health and ways to help your family stay mentally healthy.

If you think you might need additional support visit:&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.

Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;#mentalillnessfeelslike&nbsp;to share your thoughts.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__7204e1695c2abcdf465184b41d02b0333591c74cd74657591af4a32591c97111";
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
        return new Source("", "__string_template__7204e1695c2abcdf465184b41d02b0333591c74cd74657591af4a32591c97111", "");
    }
}
