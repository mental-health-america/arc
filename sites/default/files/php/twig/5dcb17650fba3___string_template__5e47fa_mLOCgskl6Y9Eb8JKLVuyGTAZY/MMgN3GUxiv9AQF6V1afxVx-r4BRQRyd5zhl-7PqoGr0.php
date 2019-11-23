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

/* __string_template__5e47fa6054abba7c3b349f4808f8da9f700157776fcbfede564293e3b403c084 */
class __TwigTemplate_81bf0dabb70fc048c31fa782fa383b594518d7eb098fc7a518704632bff4cc52 extends \Twig\Template
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
        $context["score"] = (((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) + $this->getAttribute(($context["data"] ?? null), "q6", [])) + $this->getAttribute(($context["data"] ?? null), "q7", []));
        // line 2
        if ((($context["score"] ?? null) < 5)) {
            // line 3
            echo "<p>If you notice that your symptoms aren&#39;t improving or get worse, you may want to bring them up with someone you trust or rescreen.</p>
<p>This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; A trained medical professional can diagnose anxiety.</p>
<p>If you feel like your feelings, thoughts, or behaviors get worse, screen again.&nbsp;</p>
<p><strong> If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

";
        } elseif ((        // line 8
($context["score"] ?? null) < 10)) {
            // line 9
            echo "<p>While your symptoms are not likely having a major impact on your life, it is important to monitor them.</p>

<p>These results do not mean that you have anxiety disorder, but it may be time to start a conversation with someone you trust. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>
 
<p>This screen is not meant to be a formal diagnosis but is a good way to identify if anxiety is possible problem. Having symptoms of anxiety is different than having an anxiety disorder. In addition, symptoms of anxiety can be caused by other mental health conditions, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination.</p>

<p>Anxiety symptoms are often accompanied by symptoms of depression. We recommend you also take the screen for depression.</p>

";
        } elseif ((        // line 17
($context["score"] ?? null) < 15)) {
            // line 18
            echo "
<p>These results do not mean that you have anxiety disorder, but it may be time to start a conversation with someone you trust to explore what is going on and how things can get better. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>
 
<p>This screen is not meant to be a formal diagnosis but is a good way to identify if anxiety is possible problem. Having symptoms of anxiety is different than having an anxiety disorder. In addition, symptoms of anxiety can be caused by other mental health conditions, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination.</p>

<p>Anxiety symptoms are often accompanied by symptoms of depression. We recommend you also take the screen for depression.</p>

";
        } else {
            // line 26
            echo "
<p>These results do not mean that you have anxiety disorder, but it may be time to start a conversation with someone you trust to explore what is going on and how things can get better. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>
 
<p>This screen is not meant to be a formal diagnosis but is a good way to identify if anxiety is possible problem. Having symptoms of anxiety is different than having an anxiety disorder. In addition, symptoms of anxiety can be caused by other mental health conditions, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination.</p>

<p>Anxiety symptoms are often accompanied by symptoms of depression. We recommend you also take the screen for depression.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__5e47fa6054abba7c3b349f4808f8da9f700157776fcbfede564293e3b403c084";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  80 => 18,  78 => 17,  68 => 9,  66 => 8,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5e47fa6054abba7c3b349f4808f8da9f700157776fcbfede564293e3b403c084", "");
    }
}
