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

/* __string_template__40202307ca9801096f51d5e64d40c96a1f8563bc1f50f77571a2d3bc5859aea9 */
class __TwigTemplate_b1f2988529592866f00541e8a2d56a797fc048b998fec07248d149a78e71f1b9 extends \Twig\Template
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
        $context["score"] = (((((((((((((((((((((((((((((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q10", [])) + $this->getAttribute(($context["data"] ?? null), "q11", [])) + $this->getAttribute(($context["data"] ?? null), "q12", [])) + $this->getAttribute(($context["data"] ?? null), "q13", [])) + $this->getAttribute(($context["data"] ?? null), "q14", [])) + $this->getAttribute(($context["data"] ?? null), "q15", [])) + $this->getAttribute(($context["data"] ?? null), "q16", [])) + $this->getAttribute(($context["data"] ?? null), "q17", [])) + $this->getAttribute(($context["data"] ?? null), "q18", [])) + $this->getAttribute(($context["data"] ?? null), "q19", [])) + $this->getAttribute(($context["data"] ?? null), "q20", [])) + $this->getAttribute(($context["data"] ?? null), "q21", [])) + $this->getAttribute(($context["data"] ?? null), "q22", [])) + $this->getAttribute(($context["data"] ?? null), "q23", [])) + $this->getAttribute(($context["data"] ?? null), "q24", [])) + $this->getAttribute(($context["data"] ?? null), "q25", [])) + $this->getAttribute(($context["data"] ?? null), "q26", [])) + $this->getAttribute(($context["data"] ?? null), "q27", [])) + $this->getAttribute(($context["data"] ?? null), "q28", [])) + $this->getAttribute(($context["data"] ?? null), "q29", [])) + $this->getAttribute(($context["data"] ?? null), "q30", [])) + $this->getAttribute(($context["data"] ?? null), "q31", [])) + $this->getAttribute(($context["data"] ?? null), "q32", [])) + $this->getAttribute(($context["data"] ?? null), "q33", [])) + $this->getAttribute(($context["data"] ?? null), "q34", [])) + $this->getAttribute(($context["data"] ?? null), "q35", []));
        // line 2
        if ((($context["score"] ?? null) < 30)) {
            // line 3
            echo "<p>If you notice that your feelings or behaviors get worse or do not improve, you may want to screen again and start a conversation with someone you trust.</p>

<p>These results do not mean that you do or do not have a mental health problem.&nbsp; Only a trained medical professional can help you and your family figure that out.</p>

<p>Visit&nbsp;<a href=\"http://www.mentalhealthamerica.net/back-school\" target=\"_blank\">Back to School</a>&nbsp;and&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4\" target=\"_blank\">B4Stage4</a>&nbsp;to learn more about mental health and ways to stay mentally healthy.</p>

<p>If you think you need more support you can also learn more at:&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"http://www.mentalhealthamerica.net/find-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>
";
        } else {
            // line 11
            echo "<p>These results do not mean that you have a mental illness.&nbsp; But, if you haven&rsquo;t already done so, now is great time to start a conversation with your parents, a mentor, or someone you trust about how you are doing. &nbsp;Finding the right help and working with people who can support you can help you feel and do better again.</p>

<p>This screen is not meant to be a diagnosis. &nbsp;Having emotional, attentional, or behavioral problems is different than having a diagnosable mental illness. &nbsp;In addition, emotional, attentional, or behavioral problems can be caused by other factors, like recent life changes, trauma, a recent loss in the family, or health problems, changes in hormones, or a head injury. &nbsp;Only a trained professional, such as a doctor or a mental health provider, can help you and your family figure that out. Printing or emailing the results of this screening and showing them to someone you trust can help start the conversation.</p>

<p>Our&nbsp;<a href=\"http://www.mentalhealthamerica.net/back-school\" target=\"_blank\">Back to School</a>&nbsp;and&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4\" target=\"_blank\">B4Stage4</a>&nbsp;program may help you learn more and find ways to take the next steps.</p>

<p>You can also find more resources about supports at:&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"http://www.mentalhealthamerica.net/find-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>

<p>Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;<a href=\"http://www.mentalhealthamerica.net/feelslike\" target=\"_blank\">#mentalillnessfeelslike</a>&nbsp;to share your thoughts.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__40202307ca9801096f51d5e64d40c96a1f8563bc1f50f77571a2d3bc5859aea9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__40202307ca9801096f51d5e64d40c96a1f8563bc1f50f77571a2d3bc5859aea9", "");
    }
}
