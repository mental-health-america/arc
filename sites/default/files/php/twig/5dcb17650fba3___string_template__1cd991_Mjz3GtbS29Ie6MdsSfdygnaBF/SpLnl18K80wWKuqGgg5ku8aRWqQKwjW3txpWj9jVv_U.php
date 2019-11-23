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

/* __string_template__1cd99119e8f569cb89f5818da7ec98044ee8beae89b9d7edaa9f63e8b967a849 */
class __TwigTemplate_0278174c22a69c74c27d604bbde5cd144772749385df9e36aefc5eb80149664b extends \Twig\Template
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
Bipolar Positive

Based on your responses, it is likely you are experiencing symptoms of bipolar disorder. Living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.
Bipolar disorder, is an illness involving one or more episodes of serious mania and depression. Sometimes a person might only experience symptoms of mania. If a person only experiences feelings of sadness, this is considered depression. During episodes of bipolar disorder, a person&rsquo;s mood can swing from excessively &ldquo;high&rdquo; and/or irritable to sad and hopeless, with periods of a normal mood in between. More than 2 million Americans suffer from bipolar disorder.

These results do not mean that you have bipolar disorder, but it may be time to start a conversation with someone you trust, a doctor, or mental health professional. If you are interested in learning more, check out the information and DIY supports on this page.

This screen is not meant to be a formal diagnosis, but is a good way to identify if bipolar disorder is a possible problem. Diagnosis and care of mental health conditions can be difficult. Having symptoms of bipolar disorder is different than having a bipolar disorder. In addition, symptoms of bipolar disorder can be caused by other mental health conditions, or other health problems. Only a trained professional, such as a doctor or a mental health provider, can make this determination. However, by printing the results and bringing it to your doctor, you can open up the conversation.


</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__1cd99119e8f569cb89f5818da7ec98044ee8beae89b9d7edaa9f63e8b967a849";
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
        return new Source("", "__string_template__1cd99119e8f569cb89f5818da7ec98044ee8beae89b9d7edaa9f63e8b967a849", "");
    }
}
