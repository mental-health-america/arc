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

/* __string_template__cfaf2305cee9170b6dcb57f6276f8308af9205f04077f0e67fbc81cc98549993 */
class __TwigTemplate_e176f901d3417aa3309742d987cb52b3c627d00ec94c0c0cd6dfdb74904fff37 extends \Twig\Template
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
 At Risk for Emotional, Attentional, or Behavioral Difficulties

Your results indicate that you are experiencing a large number of emotional, attentional, or behavioral difficulties. Based on your answers, living with these feelings and stressors is causing difficulty in school, with relationships, in your family, and/or with everyday activities.
These results do not mean that you have a mental illness.&nbsp; But, if you haven&rsquo;t already done so, now is great time to start a conversation with your parents, a mentor, or someone you trust about how you are doing. &nbsp;Finding the right help and working with people who can support you can help you feel and do better again.

This screen is not meant to be a diagnosis. &nbsp;Having emotional, attentional, or behavioral problems is different than having a diagnosable mental illness. &nbsp;In addition, emotional, attentional, or behavioral problems can be caused by other factors, like recent life changes, trauma, a recent loss in the family, or health problems, changes in hormones, or a head injury. &nbsp;Only a trained professional, such as a doctor or a mental health provider, can help you and your family figure that out. Printing or emailing the results of this screening and showing them to someone you trust can help start the conversation.

Our&nbsp;Back to School&nbsp;and&nbsp;B4Stage4&nbsp;program may help you learn more and find ways to take the next steps.

You can also find more resources about supports at:&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.

Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;#mentalillnessfeelslike&nbsp;to share your thoughts.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__cfaf2305cee9170b6dcb57f6276f8308af9205f04077f0e67fbc81cc98549993";
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
        return new Source("", "__string_template__cfaf2305cee9170b6dcb57f6276f8308af9205f04077f0e67fbc81cc98549993", "");
    }
}
