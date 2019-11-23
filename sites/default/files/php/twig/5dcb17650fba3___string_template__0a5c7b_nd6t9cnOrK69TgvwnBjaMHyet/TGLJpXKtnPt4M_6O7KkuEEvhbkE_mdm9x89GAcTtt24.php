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

/* __string_template__0a5c7bf5dca33cb42de27b4de7c693af17e15375abf67b9db315f539b0a36551 */
class __TwigTemplate_9a4267c56e8f5fa7085de3a39961d45852c88237929e56ba7f967195608f41b9 extends \Twig\Template
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
 Possible Risk for Psychosis

Your results indicate that you are experiencing some signs of psychosis.

Based on your answers, you may have been feeling like your eyes, ears, or brain has been playing tricks on you.&nbsp; These experiences may be causing difficulty in school, with relationships, in your family, and/or with everyday activities.

The best thing to do is get information and reach out to someone and get help.

Psychosis include changes in perception, sight, sounds, and thoughts that are different from others experience.&nbsp; When these changes occur during a young age and people recognize that they aren’t supposed to have these experiences, this period can be the early signs of a developing illness (called prodrome).&nbsp; When someone loses insight (they do not know the difference between what is real versus not real) this can be a sign of the onset of an illness, like Schizophrenia.

These results do not mean that you have a mental illness.&nbsp; But, if you haven’t already done so, now is great time to start a conversation with your support system: a parent, mentor, or someone you trust about how you are doing. &nbsp;Finding the right help and working with people who can support you can help you feel and do better again.

This screen is not meant to be a diagnosis. &nbsp;Having the early warning signs of psychosis (prodrome) is different from having a diagnosable psychotic disorder. &nbsp;In addition, psychosis can be caused by other factors, like stress, lack of sleep, recent life changes (starting a new school or changing homes), trauma, a recent loss in the family, drug use, health problems, changes in hormones, or a head injury. &nbsp;Only a trained professional, such as a doctor or a mental health provider, can help you and your family figure that out. It is highly recommended that since you scored At Risk on this screening, you should get assessed by a psychiatrist or mental health professional – preferably using the Structured Interview for Prodromal Syndrome (SIPS).&nbsp; Printing or emailing the results of this screening and showing them to someone you trust can help start the conversation.

For information and linkage to assessment and treatment for Prodrome and First Break Psychosis visit Strong 365 and their treatment locator. 

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__0a5c7bf5dca33cb42de27b4de7c693af17e15375abf67b9db315f539b0a36551";
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
        return new Source("", "__string_template__0a5c7bf5dca33cb42de27b4de7c693af17e15375abf67b9db315f539b0a36551", "");
    }
}
