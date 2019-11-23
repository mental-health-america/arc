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

/* __string_template__96ff320c404883454843d47e2104fc665ca7843794f33fde9da3dabc42b29e15 */
class __TwigTemplate_aa9826d7e11ade1b27769ed13c3e58c994894a0d9040fae4325a6b1620a91034 extends \Twig\Template
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
 Moderate Depression

Your results indicate that you may be experiencing symptoms of moderate depression.  Based on your answers, living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.
These results do not mean that you have depression, but it may be time to start a conversation with someone you trust. If you are interested in learning more, check out the information and DIY supports on this page.

This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.

The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.&nbsp; People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.


</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__96ff320c404883454843d47e2104fc665ca7843794f33fde9da3dabc42b29e15";
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
        return new Source("", "__string_template__96ff320c404883454843d47e2104fc665ca7843794f33fde9da3dabc42b29e15", "");
    }
}
