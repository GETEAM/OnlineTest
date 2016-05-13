<?php

/* OnlineTestMainBundle::student.html.twig */
class __TwigTemplate_2bf49b6cd56c5fafb384c911ba46f9465ada098866dfa1564df1e4452783fa38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'admin_main_right' => array($this, 'block_admin_main_right'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "在线调查测试平台";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6389dc5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_0") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_bootstrap_1.css");
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_1") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_bootstrap-theme.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_2") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_button_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_3") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_menu_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_4") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_style_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_5") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_theme.blue_6.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_6") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_admin_7.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_7") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_jquery-ui.min_8.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
            // asset "6389dc5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5_8") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5_student_9.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "6389dc5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6389dc5") : $this->env->getExtension('assets')->getAssetUrl("css/6389dc5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "        ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "        <div id=\"box\">
            <div id=\"top\" style=\"padding-left: 20px;height: 50px;\">  \t
                <div style=\"font-size: 30px;text-align: left;color: #fff;line-height: 50px;\">在线调查测试平台</div>
            </div>
            <div id=\"main\">
                ";
        // line 31
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
            <div id=\"bottom\">
            </div>
        </div>
        ";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "                    <div id=\"admin_main_left\">
                        ";
        // line 33
        $this->displayBlock('admin_main_left', $context, $blocks);
        // line 35
        echo "                    </div>
                    <div id=\"admin_main_right\">
                        ";
        // line 37
        $this->displayBlock('admin_main_right', $context, $blocks);
        // line 43
        echo "                    </div>
                ";
    }

    // line 33
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 34
        echo "                        ";
    }

    // line 37
    public function block_admin_main_right($context, array $blocks = array())
    {
        // line 38
        echo "                            <div id=\"function_content\">
                                ";
        // line 39
        $this->displayBlock('function_content', $context, $blocks);
        // line 41
        echo "                            </div>
                        ";
    }

    // line 39
    public function block_function_content($context, array $blocks = array())
    {
        echo "  
                                ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1345a8a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1345a8a_0") : $this->env->getExtension('assets')->getAssetUrl("js/1345a8a_jquery-1.9.1_1.js");
            // line 56
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1345a8a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1345a8a_1") : $this->env->getExtension('assets')->getAssetUrl("js/1345a8a_bootstrap_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "1345a8a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1345a8a_2") : $this->env->getExtension('assets')->getAssetUrl("js/1345a8a_admin_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "1345a8a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1345a8a") : $this->env->getExtension('assets')->getAssetUrl("js/1345a8a.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 58
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle::student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  211 => 56,  206 => 51,  203 => 50,  196 => 39,  191 => 41,  189 => 39,  186 => 38,  183 => 37,  179 => 34,  176 => 33,  171 => 43,  169 => 37,  165 => 35,  163 => 33,  160 => 32,  157 => 31,  149 => 45,  147 => 31,  140 => 26,  137 => 25,  133 => 21,  71 => 19,  66 => 7,  63 => 6,  57 => 5,  51 => 59,  48 => 50,  46 => 25,  39 => 22,  37 => 6,  33 => 5,  27 => 1,);
    }
}
