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

/* __string_template__abc735dacb1fd9e9c433287c7059eb5ba0954e09e67eb172065e74e99c5bfb97 */
class __TwigTemplate_a1d262d4301e551fe027b1c91e4bfcf4b373e97b1981f3e73f97155d8019b2c1 extends \Twig\Template
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
 PTSD Positive

Based on your responses, you may be experiencing symptoms of Post Traumatic Stress Disorder.  Living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.
These results do not mean that you have Post Traumatic Stress Disorder, but it may be time to start a conversation with your doctor. Finding the right treatment plan and working with your doctor or healthcare provider can help you feel more like you again.

Post Traumatic Stress symptoms are often accompanied by symptoms of anxiety and depression. We recommend you also take the screens for anxiety and depression.

This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of Post Traumatic Stress Disorder is different than having Post Traumatic Stress Disorder.&nbsp; In addition, symptoms of Post Traumatic Stress Disorder can be caused by other mental health conditions, or other health problems. Only a trained professional, such as a doctor or a mental health provider, can make this determination. However, by printing the results and bringing it to your doctor, you can open up the conversation.

Our resources on&nbsp;Post Traumatic Stress Disorder&nbsp;or&nbsp;working with providers&nbsp;may help you take your next steps.

You can also find more resources about supports at:&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.

Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;#mentalillnessfeelslike&nbsp;to share your thoughts.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__abc735dacb1fd9e9c433287c7059eb5ba0954e09e67eb172065e74e99c5bfb97";
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
        return new Source("", "__string_template__abc735dacb1fd9e9c433287c7059eb5ba0954e09e67eb172065e74e99c5bfb97", "");
    }
}
