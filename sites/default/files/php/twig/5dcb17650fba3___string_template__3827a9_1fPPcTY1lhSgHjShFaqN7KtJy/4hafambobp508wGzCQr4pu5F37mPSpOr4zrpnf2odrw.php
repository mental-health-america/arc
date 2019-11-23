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

/* __string_template__3827a960bf6fdc3f637410cc8bac13e92c0955829505e1c3e3a84e9a068fd46f */
class __TwigTemplate_fb9849243c6d766bb79929bf958a954b39f1880b54f7e7b74de726e61479cdd7 extends \Twig\Template
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
        $context["score"] = ((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", []));
        // line 2
        if ((($context["score"] ?? null) < 2)) {
            // line 3
            echo "<p>If you notice that your drinking or substance use is getting worse, you may want to bring them up with your doctor or a mental health professional.</p>

<p>This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; Only a trained medical professional can diagnose an addiction problem.</p>

<p>If you are interested in learning more, check out the information and DIY supports on this page.</p>

";
        } else {
            // line 10
            echo "<p>The screening you took is a short but effective way to tell if something might be a problem. We especially like that the screen looks for problems and does not measure risk based on how much you drink or use which can vary from one person to the next.</p>
<p>This screen is not meant to be a diagnosis, but only to indicate whether a problem might exist.&nbsp; It&rsquo;s important to talk to someone you trust and start to get help.  In addition, the desire to drink and use substances is exacerbated by other mental health conditions, or other health problems. A trained professional can help you figure out where to start.</p>
<p>Drinking or using substances is often accompanied by symptoms of anxiety and depression. We recommend you also take the screens for anxiety and depression.</p>

<p>If you are interested in learning more, check out the information and DIY supports on this page.</p>

";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__3827a960bf6fdc3f637410cc8bac13e92c0955829505e1c3e3a84e9a068fd46f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__3827a960bf6fdc3f637410cc8bac13e92c0955829505e1c3e3a84e9a068fd46f", "");
    }
}
