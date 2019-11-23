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

/* __string_template__e77ca4778568236df8ec41d7541d8086b29148e068326af5f7fa4bd62dbf25b5 */
class __TwigTemplate_e29d6eee65c79474f670d21eefb0a0494eb8012f5ba957dcfb61dc5cef86c45b extends \Twig\Template
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
        $context["score"] = (((((((((((($this->getAttribute(($context["data"] ?? null), "q1_1", []) + $this->getAttribute(($context["data"] ?? null), "q1_2", [])) + $this->getAttribute(($context["data"] ?? null), "q1_3", [])) + $this->getAttribute(($context["data"] ?? null), "q1_4", [])) + $this->getAttribute(($context["data"] ?? null), "q1_5", [])) + $this->getAttribute(($context["data"] ?? null), "q1_6", [])) + $this->getAttribute(($context["data"] ?? null), "q1_7", [])) + $this->getAttribute(($context["data"] ?? null), "q1_8", [])) + $this->getAttribute(($context["data"] ?? null), "q1_9", [])) + $this->getAttribute(($context["data"] ?? null), "q1_10", [])) + $this->getAttribute(($context["data"] ?? null), "q1_11", [])) + $this->getAttribute(($context["data"] ?? null), "q1_12", [])) + $this->getAttribute(($context["data"] ?? null), "q1_13", []));
        // line 2
        if ((((($context["score"] ?? null) >= 7) && ($this->getAttribute(($context["data"] ?? null), "q2", []) == 1)) && ($this->getAttribute(($context["data"] ?? null), "q3", []) > 1))) {
            // line 3
            echo "<p>Bipolar disorder, is an illness involving one or more episodes of serious mania and depression. Sometimes a person might only experience symptoms of mania. If a person only experiences feelings of sadness, this is considered depression. During episodes of bipolar disorder, a person&rsquo;s mood can swing from excessively &ldquo;high&rdquo; and/or irritable to sad and hopeless, with periods of a normal mood in between. More than 2 million Americans suffer from bipolar disorder.</p>

<p>These results do not mean that you have bipolar disorder, but it may be time to start a conversation with someone you trust, a doctor, or mental health professional. <strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

<p>This screen is not meant to be a formal diagnosis, but is a good way to identify if bipolar disorder is a possible problem. Diagnosis and care of mental health conditions can be difficult. Having symptoms of bipolar disorder is different than having a bipolar disorder. In addition, symptoms of bipolar disorder can be caused by other mental health conditions, or other health problems. Only a trained professional, such as a doctor or a mental health provider, can make this determination. However, by printing the results and bringing it to your doctor, you can open up the conversation.</p>


";
        } else {
            // line 11
            echo "<p>If you notice that your symptoms aren&#39;t improving or get worse, you may want to bring them up with your doctor or rescreen.</p>

<p>This screen is not meant to be a formal diagnosis, or the elimination of a diagnosis.&nbsp; Only a trained medical professional can diagnose bipolar disorder.</p>

<p><strong>If you are interested in learning more, check out the information and DIY supports on this page.</strong></p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__e77ca4778568236df8ec41d7541d8086b29148e068326af5f7fa4bd62dbf25b5";
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
        return new Source("", "__string_template__e77ca4778568236df8ec41d7541d8086b29148e068326af5f7fa4bd62dbf25b5", "");
    }
}
