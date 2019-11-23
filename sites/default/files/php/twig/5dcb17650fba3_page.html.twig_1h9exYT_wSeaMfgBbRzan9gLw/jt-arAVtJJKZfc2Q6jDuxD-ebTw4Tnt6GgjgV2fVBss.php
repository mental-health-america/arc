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

/* themes/s2s/templates/system/page.html.twig */
class __TwigTemplate_1ed6159ad12fddc16f3eee5785a3d07f10b62608164c34eddf385eda09e7233d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'top_navigation' => [$this, 'block_top_navigation'],
            'slider' => [$this, 'block_slider'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'content_full_width_total' => [$this, 'block_content_full_width_total'],
            'content_full_width' => [$this, 'block_content_full_width'],
            'footer' => [$this, 'block_footer'],
            'superfooter_1' => [$this, 'block_superfooter_1'],
            'superfooter_2' => [$this, 'block_superfooter_2'],
            'superfooter_3' => [$this, 'block_superfooter_3'],
            'superfooter_4' => [$this, 'block_superfooter_4'],
            'superfooter_5' => [$this, 'block_superfooter_5'],
            'superfooter_6' => [$this, 'block_superfooter_6'],
            'superfooter_7' => [$this, 'block_superfooter_7'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 61, "escape" => 66, "t" => 98];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "    ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 118
        echo "
";
        // line 120
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        ";
        // line 122
        if ($this->getAttribute(($context["page"] ?? null), "slider", [])) {
            // line 123
            echo "            ";
            $this->displayBlock('slider', $context, $blocks);
            // line 130
            echo "        ";
        }
        // line 131
        echo "    </div>
</div>

";
        // line 135
        $this->displayBlock('main', $context, $blocks);
        // line 198
        echo "
";
        // line 200
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        ";
        // line 202
        if ($this->getAttribute(($context["page"] ?? null), "content_full_width_total", [])) {
            // line 203
            echo "            ";
            $this->displayBlock('content_full_width_total', $context, $blocks);
            // line 208
            echo "        ";
        }
        // line 209
        echo "    </div>
</div>

";
        // line 213
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 215
        if ($this->getAttribute(($context["page"] ?? null), "content_full_width", [])) {
            // line 216
            echo "            ";
            $this->displayBlock('content_full_width', $context, $blocks);
            // line 221
            echo "        ";
        }
        // line 222
        echo "    </div>
</div>

";
        // line 225
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 226
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "        ";
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 60
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 63
        echo "
        <header class=\"navbar navbar-default container\" id=\"navbar\" role=\"banner\">
            ";
        // line 65
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 66
            echo "            <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
                ";
        }
        // line 68
        echo "
                ";
        // line 70
        echo "                <div id=\"navbar-mobile\">
                    <div class=\"collapse navbar-collapse\" id=\"navbar-utility\">
                        <div class=\"region region-navigation-collapsible\">
                            <nav aria-labelledby=\"main-navigation-right-menu\" id=\"main-navigation-right-2\"
                                 role=\"navigation\">
                                <div id=\"top-nav\">
                                    ";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "top_navigation", [])) {
            // line 77
            echo "                                        ";
            $this->displayBlock('top_navigation', $context, $blocks);
            // line 82
            echo "                                    ";
        }
        // line 83
        echo "                                    <form action=\"/search/node\" method=\"get\" accept-charset=\"UTF-8\" data-drupal-form-fields=\"edit-keys--2\">
                                        <input data-drupal-selector=\"edit-keys\" placeholder=\"search\" id=\"edit-keys\" name=\"keys\" data-toggle=\"tooltip\" data-original-title=\"search\" type=\"text\">
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class=\"navbar-header\">
                    ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
                    ";
        // line 95
        echo "                    ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 96
            echo "                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                                data-target=\"#navbar-collapse, #navbar-utility\">
                            <span class=\"sr-only\">";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    ";
        }
        // line 104
        echo "                </div>

                ";
        // line 107
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 108
            echo "                    <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                        ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 112
        echo "                ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 113
            echo "            </div>
            ";
        }
        // line 115
        echo "        </header>
    ";
    }

    // line 77
    public function block_top_navigation($context, array $blocks = [])
    {
        // line 78
        echo "                                            <ul class=\"nav nav-pills\">
                                                ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_navigation", [])), "html", null, true);
        echo "
                                            </ul>
                                        ";
    }

    // line 123
    public function block_slider($context, array $blocks = [])
    {
        // line 124
        echo "                <div class=\"slider-wrapper\">
                    <section role=\"banner\">
                        ";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "
                    </section>
                </div>
            ";
    }

    // line 135
    public function block_main($context, array $blocks = [])
    {
        // line 136
        echo "    <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
        <div class=\"row\">

            ";
        // line 140
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 141
            echo "                ";
            $this->displayBlock('header', $context, $blocks);
            // line 146
            echo "            ";
        }
        // line 147
        echo "
            ";
        // line 149
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 150
            echo "                ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 155
            echo "            ";
        }
        // line 156
        echo "
            ";
        // line 158
        echo "            ";
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 159
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 160
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 161
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 164
        echo "            <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

                ";
        // line 167
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 168
            echo "                    ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 171
            echo "                ";
        }
        // line 172
        echo "
                ";
        // line 174
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 175
            echo "                    ";
            $this->displayBlock('help', $context, $blocks);
            // line 178
            echo "                ";
        }
        // line 179
        echo "
                ";
        // line 181
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "            </section>

            ";
        // line 188
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 189
            echo "                ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 194
            echo "            ";
        }
        // line 195
        echo "        </div>
    </div>
";
    }

    // line 141
    public function block_header($context, array $blocks = [])
    {
        // line 142
        echo "                    <div class=\"col-sm-12\" role=\"heading\">
                        ";
        // line 143
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
                    </div>
                ";
    }

    // line 150
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 151
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
                    </aside>
                ";
    }

    // line 168
    public function block_highlighted($context, array $blocks = [])
    {
        // line 169
        echo "                        <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 175
    public function block_help($context, array $blocks = [])
    {
        // line 176
        echo "                        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
                    ";
    }

    // line 181
    public function block_content($context, array $blocks = [])
    {
        // line 182
        echo "                    <a id=\"main-content\"></a>
                    ";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
                ";
    }

    // line 189
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 190
        echo "                    <aside class=\"col-sm-3\" role=\"complementary\">
                        ";
        // line 191
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
                    </aside>
                ";
    }

    // line 203
    public function block_content_full_width_total($context, array $blocks = [])
    {
        // line 204
        echo "                <div class=\"full-width-wrapper-total\">
                    ";
        // line 205
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_full_width_total", [])), "html", null, true);
        echo "
                </div>
            ";
    }

    // line 216
    public function block_content_full_width($context, array $blocks = [])
    {
        // line 217
        echo "                <div class=\"full-width-wrapper\">
                    ";
        // line 218
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_full_width", [])), "html", null, true);
        echo "
                </div>
            ";
    }

    // line 226
    public function block_footer($context, array $blocks = [])
    {
        // line 227
        echo "        <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
            <div class=\"row seven-cols center-block\">
                ";
        // line 230
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_1", [])) {
            // line 231
            echo "                    ";
            $this->displayBlock('superfooter_1', $context, $blocks);
            // line 234
            echo "                ";
        }
        // line 235
        echo "
                ";
        // line 237
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_2", [])) {
            // line 238
            echo "                    ";
            $this->displayBlock('superfooter_2', $context, $blocks);
            // line 241
            echo "                ";
        }
        // line 242
        echo "
                ";
        // line 244
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_3", [])) {
            // line 245
            echo "                    ";
            $this->displayBlock('superfooter_3', $context, $blocks);
            // line 248
            echo "                ";
        }
        // line 249
        echo "
                ";
        // line 251
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_4", [])) {
            // line 252
            echo "                    ";
            $this->displayBlock('superfooter_4', $context, $blocks);
            // line 255
            echo "                ";
        }
        // line 256
        echo "
                ";
        // line 258
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_5", [])) {
            // line 259
            echo "                    ";
            $this->displayBlock('superfooter_5', $context, $blocks);
            // line 262
            echo "                ";
        }
        // line 263
        echo "
                ";
        // line 265
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_6", [])) {
            // line 266
            echo "                    ";
            $this->displayBlock('superfooter_6', $context, $blocks);
            // line 269
            echo "                ";
        }
        // line 270
        echo "
                ";
        // line 272
        echo "                ";
        if ($this->getAttribute(($context["page"] ?? null), "superfooter_7", [])) {
            // line 273
            echo "                    ";
            $this->displayBlock('superfooter_7', $context, $blocks);
            // line 276
            echo "                ";
        }
        // line 277
        echo "
            </div>

            <div class=\"row center-block\">
                <div class=\"col-sm-8\">";
        // line 281
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "</div>
                <div class=\"col-sm-4 google-search\">
                    <div id=\"google_translate_element\"></div>
                    <script>
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({
                                pageLanguage: 'en'
                            }, 'google_translate_element');
                        }
                    </script>
                </div>
            </div>

        </footer>
    ";
    }

    // line 231
    public function block_superfooter_1($context, array $blocks = [])
    {
        // line 232
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_1", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 238
    public function block_superfooter_2($context, array $blocks = [])
    {
        // line 239
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_2", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 245
    public function block_superfooter_3($context, array $blocks = [])
    {
        // line 246
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_3", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 252
    public function block_superfooter_4($context, array $blocks = [])
    {
        // line 253
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_4", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 259
    public function block_superfooter_5($context, array $blocks = [])
    {
        // line 260
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_5", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 266
    public function block_superfooter_6($context, array $blocks = [])
    {
        // line 267
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_6", [])), "html", null, true);
        echo "</div>
                    ";
    }

    // line 273
    public function block_superfooter_7($context, array $blocks = [])
    {
        // line 274
        echo "                        <div class=\"col-md-1\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "superfooter_7", [])), "html", null, true);
        echo "</div>
                    ";
    }

    public function getTemplateName()
    {
        return "themes/s2s/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 274,  642 => 273,  635 => 267,  632 => 266,  625 => 260,  622 => 259,  615 => 253,  612 => 252,  605 => 246,  602 => 245,  595 => 239,  592 => 238,  585 => 232,  582 => 231,  563 => 281,  557 => 277,  554 => 276,  551 => 273,  548 => 272,  545 => 270,  542 => 269,  539 => 266,  536 => 265,  533 => 263,  530 => 262,  527 => 259,  524 => 258,  521 => 256,  518 => 255,  515 => 252,  512 => 251,  509 => 249,  506 => 248,  503 => 245,  500 => 244,  497 => 242,  494 => 241,  491 => 238,  488 => 237,  485 => 235,  482 => 234,  479 => 231,  476 => 230,  470 => 227,  467 => 226,  460 => 218,  457 => 217,  454 => 216,  447 => 205,  444 => 204,  441 => 203,  434 => 191,  431 => 190,  428 => 189,  422 => 183,  419 => 182,  416 => 181,  409 => 176,  406 => 175,  399 => 169,  396 => 168,  389 => 152,  386 => 151,  383 => 150,  376 => 143,  373 => 142,  370 => 141,  364 => 195,  361 => 194,  358 => 189,  355 => 188,  351 => 185,  348 => 181,  345 => 179,  342 => 178,  339 => 175,  336 => 174,  333 => 172,  330 => 171,  327 => 168,  324 => 167,  318 => 164,  316 => 162,  315 => 161,  314 => 160,  313 => 159,  311 => 158,  308 => 156,  305 => 155,  302 => 150,  299 => 149,  296 => 147,  293 => 146,  290 => 141,  287 => 140,  280 => 136,  277 => 135,  269 => 126,  265 => 124,  262 => 123,  255 => 79,  252 => 78,  249 => 77,  244 => 115,  240 => 113,  237 => 112,  231 => 109,  228 => 108,  225 => 107,  221 => 104,  212 => 98,  208 => 96,  205 => 95,  201 => 93,  189 => 83,  186 => 82,  183 => 77,  181 => 76,  173 => 70,  170 => 68,  164 => 66,  162 => 65,  158 => 63,  156 => 61,  155 => 60,  153 => 58,  150 => 57,  144 => 226,  142 => 225,  137 => 222,  134 => 221,  131 => 216,  129 => 215,  125 => 213,  120 => 209,  117 => 208,  114 => 203,  112 => 202,  108 => 200,  105 => 198,  103 => 135,  98 => 131,  95 => 130,  92 => 123,  90 => 122,  86 => 120,  83 => 118,  79 => 57,  77 => 56,  75 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/s2s/templates/system/page.html.twig", "/home/screeningmha/drupal/web/themes/s2s/templates/system/page.html.twig");
    }
}
