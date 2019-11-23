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

/* __string_template__6d6324a3ba18184a4d314b4836e732938f5609a8cfe1dd18f7754983087a2ad7 */
class __TwigTemplate_ed2824b265b0d538c637e80b8a88d3c862ce954426bc5edd50851e3ee4f4bd6f extends \Twig\Template
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

Your results indicate that your child is experiencing a large number of emotional, attentional, or behavioral difficulties.  Based on your answers, living with these feelings and stressors is likely causing your child difficulty in school, with relationships, in your family, and/or with everyday activities.
These results do not mean that your child has a mental illness. &nbsp;But, if you haven&rsquo;t already done so, now is great time to start a conversation with your child about how to deal with the many hard feelings, stresses, or problem behaviors that you reported.&nbsp; Let your child know that you care and want to support them.&nbsp; Also, finding the right early treatment and support can help you and your child feel and do better again. A positive score on the PSC suggests the need for further evaluation by a qualified health (M.D., R.N.) or mental health (Ph.D., Psy.D., LCSW) professional.&nbsp;

This screen is not meant to be a diagnosis. &nbsp;Having emotional, attentional, or behavioral problems is different than having a diagnosable mental illness. &nbsp;In addition, emotional, attentional, or behavioral problems can be caused by other factors like recent life changes, trauma, or health problems. &nbsp;Only a trained professional, such as a doctor or a mental health provider, can make this determination. Taking time to get the right diagnosis and care of mental health conditions in children is important. Printing out or emailing the results of this screening and showing them to a mental health professional can help in getting the right treatment.

Our&nbsp;Back to School&nbsp;and&nbsp;B4Stage4&nbsp;provide additional information and help in taking the next steps.

You can also find more resources about supports at:&nbsp;Get Help,&nbsp;Finding Therapy,&nbsp;SAMHSA Treatment Locator, or contact a local&nbsp;MHA affliliate.

Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;#mentalillnessfeelslike&nbsp;to share your thoughts.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__6d6324a3ba18184a4d314b4836e732938f5609a8cfe1dd18f7754983087a2ad7";
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
        return new Source("", "__string_template__6d6324a3ba18184a4d314b4836e732938f5609a8cfe1dd18f7754983087a2ad7", "");
    }
}
