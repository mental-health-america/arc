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

/* __string_template__e13acdeea79ef2da6cb8d88f2f793f2b70dc75ac81081eb31806b634cfe292f5 */
class __TwigTemplate_9d5f312a579c7db7d40115b0c172790b93e59a024e450b1d29101801c39e32b7 extends \Twig\Template
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
 Likely Alcohol or Substance Use Problem

Based on your responses, your drinking or substances use is likely causing difficulty managing responsibilities, relationships and even the tasks of everyday life.
The screening you took is a short but effective way to tell if something might be a problem. We especially like that the screen looks for problems and does not measure risk based on how much you drink or use which can vary from one person to the next.
This screen is not meant to be a diagnosis, but only to indicate whether a problem might exist.&nbsp; It&rsquo;s important to talk to someone you trust and start to get help.  In addition, the desire to drink and use substances is exacerbated by other mental health conditions, or other health problems. A trained professional can help you figure out where to start.
Drinking or using substances is often accompanied by symptoms of anxiety and depression. We recommend you also take the screens for anxiety and depression.

If you are interested in learning more, check out the information and DIY supports on this page.

</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__e13acdeea79ef2da6cb8d88f2f793f2b70dc75ac81081eb31806b634cfe292f5";
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
        return new Source("", "__string_template__e13acdeea79ef2da6cb8d88f2f793f2b70dc75ac81081eb31806b634cfe292f5", "");
    }
}
