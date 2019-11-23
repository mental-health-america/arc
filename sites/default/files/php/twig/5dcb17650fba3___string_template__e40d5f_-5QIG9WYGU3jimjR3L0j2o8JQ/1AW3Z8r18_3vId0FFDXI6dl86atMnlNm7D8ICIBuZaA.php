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

/* __string_template__e40d5f6b93864006f02a4859154f49015cca48fe08e1c4c4ef36d9e2846b783b */
class __TwigTemplate_38a904e3d15d667b10d908ec280465ca6b3a733aad42595a735144171b13fbb1 extends \Twig\Template
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
        $context["score"] = ((((((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", [])) + $this->getAttribute(($context["data"] ?? null), "q8", [])) + $this->getAttribute(($context["data"] ?? null), "q9", [])) + $this->getAttribute(($context["data"] ?? null), "q10", []));
        // line 2
        if ((($context["score"] ?? null) < 5)) {
            // line 3
            echo "<p>If you notice that your symptoms aren&#39;t improving, you may want to bring them up with someone you trust.</p>

<p>This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; A trained medical or mental health professional can help clarify issues and diagnose depression.</p>

<p>If you feel like your feelings, thoughts, or behaviors get worse, screen again.&nbsp;</p>

<p><strong> If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

";
        } elseif ((        // line 11
($context["score"] ?? null) < 10)) {
            // line 12
            echo "<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>

<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.&nbsp; People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>

";
        } elseif ((        // line 18
($context["score"] ?? null) < 15)) {
            // line 19
            echo "<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>

<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.&nbsp; People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>


";
        } elseif ((        // line 26
($context["score"] ?? null) < 20)) {
            // line 27
            echo "<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>

<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.&nbsp; People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>

";
        } else {
            // line 34
            echo "<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>

<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.&nbsp; People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e40d5f6b93864006f02a4859154f49015cca48fe08e1c4c4ef36d9e2846b783b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  92 => 27,  90 => 26,  81 => 19,  79 => 18,  71 => 12,  69 => 11,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e40d5f6b93864006f02a4859154f49015cca48fe08e1c4c4ef36d9e2846b783b", "");
    }
}
