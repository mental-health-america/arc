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

/* __string_template__f6fc3e2f98dff61cf0d4cc3d666d333791d6890ce9504435e34765ec88769c3b */
class __TwigTemplate_1f44d8bb7dc54ad11212afe00cdf8ded3edecd1867aac2e281623dcdcb2f7053 extends \Twig\Template
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
At Risk for Eating Disorder

Your responses suggest that you may be concerned about your weight and/or shape and may be engaging in behaviors that may be interfering with your health. These symptoms indicate that you may be at risk for or are struggling with an eating disorder.

These results are not meant to be a diagnosis, but that it is a good time to start a conversation with someone you trust. If you aren&rsquo;t currently in treatment, we recommend that you be evaluated by a mental health professional and/or medical doctor.

Should you have any questions or need the name of a treatment professional in your area, contact the National Eating Disorders Association (NEDA) Helpline Monday through Thursday, 9am-9pm or Friday 9am-5pm ET at 800.931.2237 or&nbsp;http://www.nationaleatingdisorders.org/helplinechat&nbsp;for online and in-person treatment options. To search through our online treatment provider database, please visit&nbsp;https://www.nationaleatingdisorders.org/find-treatment.

Visit the following links if you&rsquo;re interested in learning more:


\tEating Disorders
\tEating Disorders and Youth
\tTypes &amp; Symptoms of Eating Disorders
\tIdeas for Building Healthy Self Image


If you think you might struggle with additional mental health concerns, visit&nbsp;Screening&nbsp;to take another screen.
</textarea>";
    }

    public function getTemplateName()
    {
        return "__string_template__f6fc3e2f98dff61cf0d4cc3d666d333791d6890ce9504435e34765ec88769c3b";
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
        return new Source("", "__string_template__f6fc3e2f98dff61cf0d4cc3d666d333791d6890ce9504435e34765ec88769c3b", "");
    }
}
