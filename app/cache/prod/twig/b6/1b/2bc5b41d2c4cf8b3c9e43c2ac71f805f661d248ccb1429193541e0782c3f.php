<?php

/* OnlineTestAdminBundle::admin.html.twig */
class __TwigTemplate_b61b2bc5b41d2c4cf8b3c9e43c2ac71f805f661d248ccb1429193541e0782c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'main' => array($this, 'block_main'),
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'admin_main_right' => array($this, 'block_admin_main_right'),
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "80e9988_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80e9988_0") : $this->env->getExtension('assets')->getAssetUrl("css/80e9988_theme.blue_1.css");
            // line 11
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
            // asset "80e9988_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80e9988_1") : $this->env->getExtension('assets')->getAssetUrl("css/80e9988_admin_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
            // asset "80e9988_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80e9988_2") : $this->env->getExtension('assets')->getAssetUrl("css/80e9988_jquery-ui.min_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "80e9988"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80e9988") : $this->env->getExtension('assets')->getAssetUrl("css/80e9988.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    
";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "    <span style=\"float: left;\">你好，";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        }
        echo "!&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span id=\"welcome_date\" style=\"margin-right: 10px;float: left;\"></span>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\">系统相关</a>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("add_student");
        echo "\">学生管理</a>
    ";
        // line 20
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 21
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("teacher_activation");
            echo "\">教师管理</a>
    ";
        }
        // line 23
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("exam_list", array("exam_status" => "all"));
        echo "\">考试管理</a>
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getUrl("result_list");
        echo "\">结果管理</a>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("logout");
        echo "\" class=\"loginout\">退出系统</a>
";
    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
        // line 28
        echo "    <div id=\"admin_main_left\">
        ";
        // line 29
        $this->displayBlock('admin_main_left', $context, $blocks);
        // line 31
        echo "    </div>
    <div id=\"admin_main_right\">
        ";
        // line 33
        $this->displayBlock('admin_main_right', $context, $blocks);
        // line 43
        echo "    </div>
";
    }

    // line 29
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 30
        echo "        ";
    }

    // line 33
    public function block_admin_main_right($context, array $blocks = array())
    {
        // line 34
        echo "            <div id=\"function_title\">
                ";
        // line 35
        $this->displayBlock('function_title', $context, $blocks);
        // line 37
        echo "            </div>
            <div id=\"function_content\">
                ";
        // line 39
        $this->displayBlock('function_content', $context, $blocks);
        // line 41
        echo "            </div>
        ";
    }

    // line 35
    public function block_function_title($context, array $blocks = array())
    {
        echo "                
                ";
    }

    // line 39
    public function block_function_content($context, array $blocks = array())
    {
        echo "  
                ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4a79d0b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a79d0b_0") : $this->env->getExtension('assets')->getAssetUrl("js/4a79d0b_admin_1.js");
            // line 48
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4a79d0b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4a79d0b") : $this->env->getExtension('assets')->getAssetUrl("js/4a79d0b.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 48,  187 => 47,  182 => 46,  179 => 45,  172 => 39,  165 => 35,  160 => 41,  158 => 39,  154 => 37,  152 => 35,  149 => 34,  146 => 33,  142 => 30,  139 => 29,  134 => 43,  132 => 33,  128 => 31,  126 => 29,  123 => 28,  120 => 27,  114 => 25,  110 => 24,  105 => 23,  99 => 21,  97 => 20,  93 => 19,  89 => 18,  81 => 16,  78 => 15,  73 => 13,  47 => 11,  43 => 4,  38 => 3,  35 => 2,);
    }
}
