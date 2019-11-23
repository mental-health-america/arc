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

/* __string_template__b8de9962838764521911781ef109a90b2cca7ce5e553624c50eaf93a6ecd59f8 */
class __TwigTemplate_58bc82e98696d0e06432573dc486104e1aec21e1d9a4b9e3afbbb369cac8bf49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 2];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $context["score"] = (((((((((((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q10", [])) + $this->getAttribute(($context["data"] ?? null), "q11", [])) + $this->getAttribute(($context["data"] ?? null), "q12", [])) + $this->getAttribute(($context["data"] ?? null), "q13", [])) + $this->getAttribute(($context["data"] ?? null), "q14", [])) + $this->getAttribute(($context["data"] ?? null), "q15", [])) + $this->getAttribute(($context["data"] ?? null), "q16", [])) + $this->getAttribute(($context["data"] ?? null), "q17", []));
        // line 2
        if ((($context["score"] ?? null) < 15)) {
            // line 3
            echo "<p>If you notice that your child&rsquo;s feelings or behaviors get worse or do not improve, you may want screen again and start a conversation with your child about how to deal with hard feelings, stress, and problems.</p>

<p>This screen is not meant to provide or rule out a diagnosis.&nbsp; Only a trained medical professional can diagnose child mental health problems.</p>

<p>Visit&nbsp;<a href=\"http://www.mentalhealthamerica.net/back-school\" target=\"_blank\">Back to School</a>&nbsp;and&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4\" target=\"_blank\">B4Stage4</a>&nbsp;to learn more about mental health and ways to help your family stay mentally healthy.</p>

<p>If you think you might need additional support visit:&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"http://www.mentalhealthamerica.net/find-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>

<p>Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;<a href=\"http://www.mentalhealthamerica.net/feelslike\" target=\"_blank\">#mentalillnessfeelslike</a>&nbsp;to share your thoughts.</p>
";
        } else {
            // line 13
            echo "<p>These results do not mean that your child has a mental illness. &nbsp;But, if you haven&rsquo;t already done so, now is great time to start a conversation with your child about how to deal with the many hard feelings, stresses, or problem behaviors that you reported.&nbsp; Let your child know that you care and want to support them.&nbsp; Also, finding the right early treatment and support can help you and your child feel and do better again. A positive score on the PSC suggests the need for further evaluation by a qualified health (M.D., R.N.) or mental health (Ph.D., Psy.D., LCSW) professional.&nbsp;</p>

<p>This screen is not meant to be a diagnosis. &nbsp;Having emotional, attentional, or behavioral problems is different than having a diagnosable mental illness. &nbsp;In addition, emotional, attentional, or behavioral problems can be caused by other factors like recent life changes, trauma, or health problems. &nbsp;Only a trained professional, such as a doctor or a mental health provider, can make this determination. Taking time to get the right diagnosis and care of mental health conditions in children is important. Printing out or emailing the results of this screening and showing them to a mental health professional can help in getting the right treatment.</p>

<p>Our&nbsp;<a href=\"http://www.mentalhealthamerica.net/back-school\" target=\"_blank\">Back to School</a>&nbsp;and&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4\" target=\"_blank\">B4Stage4</a>&nbsp;provide additional information and help in taking the next steps.</p>

<p>You can also find more resources about supports at:&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"http://www.mentalhealthamerica.net/find-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>

<p>Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;<a href=\"http://www.mentalhealthamerica.net/feelslike\" target=\"_blank\">#mentalillnessfeelslike</a>&nbsp;to share your thoughts.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__b8de9962838764521911781ef109a90b2cca7ce5e553624c50eaf93a6ecd59f8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b8de9962838764521911781ef109a90b2cca7ce5e553624c50eaf93a6ecd59f8", "");
    }
}
