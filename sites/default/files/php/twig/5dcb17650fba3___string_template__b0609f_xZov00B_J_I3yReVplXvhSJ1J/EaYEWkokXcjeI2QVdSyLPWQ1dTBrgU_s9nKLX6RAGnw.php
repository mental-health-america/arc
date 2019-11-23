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

/* __string_template__b0609fdddbf9882467062b9ec879b07d54831f8143f2e4d8cf98045330174318 */
class __TwigTemplate_eab99b6947b29c35ddcda7414610ef6d32dbf5d7c09e7b201bd834391e191a64 extends \Twig\Template
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
        $context["score"] = (((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", []));
        // line 2
        if ((($context["score"] ?? null) < 3)) {
            // line 3
            echo "<p>If you notice that your symptoms aren&#39;t improving or get worse, you may want to bring them up with your doctor or rescreen.</p>

<p>This screen is not meant to be a diagnosis, or the elimination of a diagnosis.&nbsp; Only a trained medical professional can diagnose Post Traumatic Stress Disorder.</p>

<p>Our&nbsp;<a href=\"http://www.mentalhealthamerica.net/live-your-life-well\" target=\"_blank\">Live Your Life Well</a>&nbsp;program can help you stay mentally healthy.</p>

<p>If you feel like you need assistance, visit&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"http://www.mentalhealthamerica.net/find-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>

";
        } else {
            // line 12
            echo "<p>These results do not mean that you have Post Traumatic Stress Disorder, but it may be time to start a conversation with your doctor. Finding the right treatment plan and working with your doctor or healthcare provider can help you feel more like you again.</p>

<p>Post Traumatic Stress symptoms are often accompanied by symptoms of anxiety and depression. We recommend you also take the screens for anxiety and depression.</p>

<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of Post Traumatic Stress Disorder is different than having Post Traumatic Stress Disorder.&nbsp; In addition, symptoms of Post Traumatic Stress Disorder can be caused by other mental health conditions, or other health problems. Only a trained professional, such as a doctor or a mental health provider, can make this determination. However, by printing the results and bringing it to your doctor, you can open up the conversation.</p>

<p>Our resources on&nbsp;<a href=\"http://www.mentalhealthamerica.net/conditions/post-traumatic-stress-disorder\" target=\"_blank\">Post Traumatic Stress Disorder</a>&nbsp;or&nbsp;<a href=\"http://www.mentalhealthamerica.net/working-provider\" target=\"_blank\">working with providers</a>&nbsp;may help you take your next steps.</p>

<p>You can also find more resources about supports at:&nbsp;<a href=\"http://www.mentalhealthamerica.net/b4stage4-get-help\" target=\"_blank\">Get Help</a>,&nbsp;<a href=\"http://www.mentalhealthamerica.net/finding-therapy\" target=\"_blank\">Finding Therapy</a>,&nbsp;<a href=\"https://findtreatment.samhsa.gov/\" target=\"_blank\">SAMHSA Treatment Locator</a>, or contact a local&nbsp;<a href=\"https://arc.mentalhealthamerica.net/find-an-affiliate\" target=\"_blank\">MHA affliliate</a>.</p>

<p>Want to share more? MHA is hoping to create a space where people can share and learn more about how it feels to have a mental health problem. Go to&nbsp;<a href=\"http://www.mentalhealthamerica.net/feelslike\" target=\"_blank\">#mentalillnessfeelslike</a>&nbsp;to share your thoughts.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__b0609fdddbf9882467062b9ec879b07d54831f8143f2e4d8cf98045330174318";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b0609fdddbf9882467062b9ec879b07d54831f8143f2e4d8cf98045330174318", "");
    }
}
