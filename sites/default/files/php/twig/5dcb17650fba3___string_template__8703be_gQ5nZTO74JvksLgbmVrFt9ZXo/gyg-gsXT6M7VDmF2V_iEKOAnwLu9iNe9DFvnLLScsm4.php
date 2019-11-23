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

/* __string_template__8703beb13f9bd57a08dc418201976a3e08bbed065874553464788a10dc0b62e2 */
class __TwigTemplate_f69166f1892c8b3d1908ff8312561942ae3d89b3f0702c5f90761b8fadf6853b extends \Twig\Template
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
        $context["score"] = ((((($this->getAttribute(($context["data"] ?? null), "q1", []) + $this->getAttribute(($context["data"] ?? null), "q2", [])) + $this->getAttribute(($context["data"] ?? null), "q3", [])) + $this->getAttribute(($context["data"] ?? null), "q4", [])) + $this->getAttribute(($context["data"] ?? null), "q5", [])) / 5);
        // line 2
        if (($this->getAttribute(($context["data"] ?? null), "q18", []) > 0)) {
            // line 3
            $context["bmi"] = ((($this->getAttribute(($context["data"] ?? null), "q17", []) / $this->getAttribute(($context["data"] ?? null), "q18", [])) / $this->getAttribute(($context["data"] ?? null), "q18", [])) * 703);
        } else {
            // line 5
            $context["bmi"] = 0;
        }
        // line 7
        if (((((($context["bmi"] ?? null) < 18.5) && ($this->getAttribute(($context["data"] ?? null), "q10", []) == 1)) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 8
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 9
($context["data"] ?? null), "q6", []) > 1) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) > 1)) && (($this->getAttribute(($context["data"] ?? null), "q6", []) >= 12) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 12))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 10
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 11
($context["data"] ?? null), "q6", []) > 1) && ((((($this->getAttribute(($context["data"] ?? null), "q7a", []) + $this->getAttribute(($context["data"] ?? null), "q7b", [])) + $this->getAttribute(($context["data"] ?? null), "q7c", [])) + $this->getAttribute(($context["data"] ?? null), "q7d", [])) + $this->getAttribute(($context["data"] ?? null), "q7e", [])) >= 3)) && ($this->getAttribute(($context["data"] ?? null), "q8", []) >= 4)) && (($this->getAttribute(($context["data"] ?? null), "q6", []) >= 12) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 3)))) {
            // line 12
            $context["result"] = "At Risk for Eating Disorder";
        } elseif (((((        // line 13
($context["bmi"] ?? null) >= 18.5) && ($this->getAttribute(($context["data"] ?? null), "q10", []) == 1)) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 14
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 15
($context["data"] ?? null), "q6", []) > 1) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) > 1)) && (((($this->getAttribute(($context["data"] ?? null), "q6", []) >= 3) && ($this->getAttribute(($context["data"] ?? null), "q6", []) < 12)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 3)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 12))) && ((($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)))) {
            // line 16
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((($this->getAttribute(        // line 17
($context["data"] ?? null), "q6", []) > 1) && ((((($this->getAttribute(($context["data"] ?? null), "q7a", []) + $this->getAttribute(($context["data"] ?? null), "q7b", [])) + $this->getAttribute(($context["data"] ?? null), "q7c", [])) + $this->getAttribute(($context["data"] ?? null), "q7d", [])) + $this->getAttribute(($context["data"] ?? null), "q7e", [])) >= 3)) && ($this->getAttribute(($context["data"] ?? null), "q8", []) >= 4)) && ((($this->getAttribute(($context["data"] ?? null), "q6", []) >= 3) && ($this->getAttribute(($context["data"] ?? null), "q6", []) < 12)) && (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) < 3)))) {
            // line 18
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((($this->getAttribute(        // line 19
($context["data"] ?? null), "q6", []) == 0) && (($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) >= 12))) {
            // line 20
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((($this->getAttribute(        // line 21
($context["data"] ?? null), "q6", []) >= 3) || (((($this->getAttribute(($context["data"] ?? null), "q9a", []) + $this->getAttribute(($context["data"] ?? null), "q9b", [])) + $this->getAttribute(($context["data"] ?? null), "q9c", [])) + $this->getAttribute(($context["data"] ?? null), "q9d", [])) >= 3))) {
            // line 22
            $context["result"] = "At Risk for Eating Disorder";
        } elseif ((((        // line 23
($context["score"] ?? null) >= 47) || ($this->getAttribute(($context["data"] ?? null), "q4", []) >= 66.7000000000000028421709430404007434844970703125)) || ($this->getAttribute(($context["data"] ?? null), "q2", []) >= 75))) {
            // line 24
            $context["result"] = "At Risk for Eating Disorder";
        } elseif (((($this->getAttribute(        // line 25
($context["data"] ?? null), "q11", []) == 1) || ($this->getAttribute(($context["data"] ?? null), "q12", []) == 1)) || ($this->getAttribute(($context["data"] ?? null), "q13", []) == 1))) {
            // line 26
            $context["result"] = "At Risk for Avoidant/Restrictive Food Intake Disorder (ARFID)";
        } else {
            // line 28
            $context["result"] = "Low Risk";
        }
        // line 30
        $context["rs"] = ($context["result"] ?? null);
        // line 31
        if (!twig_in_filter(($context["rs"] ?? null), [0 => "At Risk for Eating Disorder", 1 => "At Risk for Avoidant/Restrictive Food Intake Disorder (ARFID)", 2 => "Low Risk"])) {
            // line 32
            echo "<p>These results are not meant to be a diagnosis, but that it is a good time to start a conversation with someone you trust. If you aren&rsquo;t currently in treatment for your eating behaviors, we recommend that you be evaluated by a mental health professional. If you haven&rsquo;t recently seen a primary care provider, we also recommend you be evaluated by your medical doctor.</p>

<p>We know that reaching out for help with this kind of concern can be scary, but we are here to help you find the right professionals &ndash; individuals who are experienced helping people with just the type of concerns you are experiencing.</p>

<p>If you are looking for treatment professionals in your area, please contact the National Eating Disorders Association (NEDA) Helpline Monday through Thursday , 9am-9pm or Friday 9am-5pm ET at 800.931.2237 or&nbsp;<a href=\"http://www.nationaleatingdisorders.org/helplinechat\" target=\"_blank\">http://www.nationaleatingdisorders.org/helplinechat</a>. To search through our online treatment provider database, please visit&nbsp;<a href=\"https://www.nationaleatingdisorders.org/find-treatment\" target=\"_blank\">https://www.nationaleatingdisorders.org/find-treatment</a>.</p>

<p>Visit the following links if you&rsquo;re interested in learning more:</p>

<ul>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders\" target=\"_blank\">Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders-and-youth\" target=\"_blank\">Eating Disorders and Youth</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/anorexia-nervosa\" target=\"_blank\">Anorexia Nervosa</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/bulimia-nervosa\" target=\"_blank\">Bulimia Nervosa</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/binge-eating-disorder\" target=\"_blank\">Binge Eating Disorder</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/ideas-building-healthy-self-image-and-improving-self-esteem\" target=\"_blank\">Ideas for Building Healthy Self Image</a></li>
</ul>

<p>If you think you might struggle with additional mental health concerns, visit&nbsp;<a href=\"http://www.mhascreening.org/\" target=\"_blank\">Screening</a>&nbsp;to take another screen.</p>
";
        } elseif ((        // line 50
($context["rs"] ?? null) == "At Risk for Eating Disorder")) {
            // line 51
            echo "<p>These results are not meant to be a diagnosis, but that it is a good time to start a conversation with someone you trust. If you aren&rsquo;t currently in treatment, we recommend that you be evaluated by a mental health professional and/or medical doctor.</p>

<p>Should you have any questions or need the name of a treatment professional in your area, contact the National Eating Disorders Association (NEDA) Helpline Monday through Thursday, 9am-9pm or Friday 9am-5pm ET at 800.931.2237 or&nbsp;<a href=\"http://www.nationaleatingdisorders.org/helplinechat\" target=\"_blank\">http://www.nationaleatingdisorders.org/helplinechat</a>&nbsp;for online and in-person treatment options. To search through our online treatment provider database, please visit&nbsp;<a href=\"https://www.nationaleatingdisorders.org/find-treatment\" target=\"_blank\">https://www.nationaleatingdisorders.org/find-treatment</a>.</p>

<p>Visit the following links if you&rsquo;re interested in learning more:</p>

<ul>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders\" target=\"_blank\">Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders-and-youth\" target=\"_blank\">Eating Disorders and Youth</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/general-information\" target=\"_blank\">Types &amp; Symptoms of Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/ideas-building-healthy-self-image-and-improving-self-esteem\" target=\"_blank\">Ideas for Building Healthy Self Image</a></li>
</ul>

<p>If you think you might struggle with additional mental health concerns, visit&nbsp;<a href=\"http://www.mhascreening.org/\" target=\"_blank\">Screening</a>&nbsp;to take another screen.</p>
";
        } elseif ((        // line 65
($context["rs"] ?? null) == "Low Risk")) {
            // line 66
            echo "<p>However, surveys can be incorrect and this survey is not meant as a diagnostic tool. If you are currently suffering from feelings or behaviors that cause you concern and interfere with your happiness or functioning or begin to, you should seek immediate assistance. If you are looking for treatment options, contact the National Eating Disorders Association (NEDA) Helpline Monday through Thursday, 9am-9pm or Friday 9am-5pm ET at 800.931.2237 or&nbsp;<a href=\"http://www.nationaleatingdisorders.org/helplinechat\" target=\"_blank\">http://www.nationaleatingdisorders.org/helplinechat</a>. To search through our online treatment provider database, please visit&nbsp;<a href=\"https://www.nationaleatingdisorders.org/find-treatment\" target=\"_blank\">https://www.nationaleatingdisorders.org/find-treatment</a>.</p>

<p>Visit the following links if you&rsquo;re interested in learning more:</p>

<ul>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders\" target=\"_blank\">Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders-and-youth\" target=\"_blank\">Eating Disorders and Youth</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/general-information\" target=\"_blank\">Types &amp; Symptoms of Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/ideas-building-healthy-self-image-and-improving-self-esteem\" target=\"_blank\">Ideas for Building Healthy Self Image</a></li>
</ul>

<p>If you think you might struggle with additional mental health concerns, visit&nbsp;<a href=\"http://www.mhascreening.org/\" target=\"_blank\">Screening</a>&nbsp;to take another screen.</p>
";
        } else {
            // line 79
            echo "<p>These results are not meant to be a diagnosis, but that it is a good time to start a conversation with someone you trust. If you aren&rsquo;t currently in treatment for your eating behaviors we recommended that you be evaluated by a mental health professional. If you haven&rsquo;t recently seen a primary care provider, we also recommend you be evaluated by your medical doctor.</p>

<p>We know that reaching out for help with this kind of concern can be scary, but we are here to help you find the right professionals &ndash; individuals who are experienced helping people with just the type of concerns you are experiencing.</p>

<p>If you are looking for treatment professionals in your area, please contact the National Eating Disorders Association (NEDA) Helpline Monday through Thursday , 9am-9pm or Friday 9am-5pm ET at 800.931.2237 or&nbsp;<a href=\"http://www.nationaleatingdisorders.org/helplinechat\" target=\"_blank\">http://www.nationaleatingdisorders.org/helplinechat</a>. To search through our online treatment provider database, please visit&nbsp;<a href=\"https://www.nationaleatingdisorders.org/find-treatment\" target=\"_blank\">https://www.nationaleatingdisorders.org/find-treatment</a>.</p>

<p>Visit the following links if you&rsquo;re interested in learning more:</p>

<ul>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders\" target=\"_blank\">Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/eating-disorders-and-youth\" target=\"_blank\">Eating Disorders and Youth</a></li>
\t<li><a href=\"http://www.nationaleatingdisorders.org/general-information\" target=\"_blank\">Types &amp; Symptoms of Eating Disorders</a></li>
\t<li><a href=\"http://www.mentalhealthamerica.net/conditions/ideas-building-healthy-self-image-and-improving-self-esteem\" target=\"_blank\">Ideas for Building Healthy Self Image</a></li>
</ul>

<p>If you think you might struggle with additional mental health concerns, visit&nbsp;<a href=\"http://www.mhascreening.org/\" target=\"_blank\">Screening</a>&nbsp;to take another screen.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__8703beb13f9bd57a08dc418201976a3e08bbed065874553464788a10dc0b62e2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  153 => 66,  151 => 65,  135 => 51,  133 => 50,  113 => 32,  111 => 31,  109 => 30,  106 => 28,  103 => 26,  101 => 25,  99 => 24,  97 => 23,  95 => 22,  93 => 21,  91 => 20,  89 => 19,  87 => 18,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  73 => 11,  71 => 10,  69 => 9,  67 => 8,  65 => 7,  62 => 5,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8703beb13f9bd57a08dc418201976a3e08bbed065874553464788a10dc0b62e2", "");
    }
}
