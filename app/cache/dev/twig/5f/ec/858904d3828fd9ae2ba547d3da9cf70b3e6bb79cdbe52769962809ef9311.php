<?php

/* ::base.html.twig */
class __TwigTemplate_5fec858904d3828fd9ae2ba547d3da9cf70b3e6bb79cdbe52769962809ef9311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
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
            // asset "2cc54c9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9_bootstrap_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
            // asset "2cc54c9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9_bootstrap-theme.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
            // asset "2cc54c9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9_button_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
            // asset "2cc54c9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9_menu_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
            // asset "2cc54c9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9_style_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "2cc54c9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2cc54c9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/2cc54c9.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "        <div id=\"box\">
            <div id=\"top\">  \t
                <div id=\"menu\">
                    ";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "                </div>
            </div>
            <div id=\"main\">
                ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 32
        echo "            </div>
            <div id=\"bottom\">
            </div>
        </div>
        ";
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        echo "                   
                    ";
    }

    // line 30
    public function block_main($context, array $blocks = array())
    {
        // line 31
        echo "                ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        // line 38
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d708961_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d708961_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d708961_jquery-1.9.1_1.js");
            // line 42
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "d708961_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d708961_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d708961_bootstrap_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "d708961"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d708961") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/d708961.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 44
        echo "    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  158 => 42,  153 => 38,  150 => 37,  146 => 31,  143 => 30,  136 => 25,  128 => 32,  126 => 30,  121 => 27,  119 => 25,  114 => 22,  111 => 21,  107 => 17,  69 => 15,  64 => 7,  61 => 6,  55 => 5,  49 => 45,  46 => 37,  44 => 21,  37 => 18,  35 => 6,  31 => 5,  25 => 1,);
    }
}
