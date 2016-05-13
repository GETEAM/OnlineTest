<?php

/* OnlineTestMainBundle:Main:examPrepare.html.twig */
class __TwigTemplate_473f69c25cb4be7ab3cd359280cab74a449d37b9ceca64e475aaa7f863a1cb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestMainBundle::student.html.twig");

        $this->blocks = array(
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestMainBundle::student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"student_infor\" class=\"left_infor\">
        <div class=\"left_title\">
            用户信息
        </div>
        ";
        // line 8
        if (((isset($context["isRealName"]) ? $context["isRealName"] : $this->getContext($context, "isRealName")) == "realname")) {
            // line 9
            echo "            <div id=\"student_username\" hidden>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</div>
            <div>
                用户名：";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "studentName", array()), "html", null, true);
            echo "
            </div>
            <div>
                姓名：";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "
            </div>

        ";
        } else {
            // line 18
            echo "            <div>
                匿名考试无信息
            </div>

        ";
        }
        // line 23
        echo "    </div>
    <div id=\"exam_infor\" class=\"left_infor\" hidden>
        <div id=\"exam_infor_examId\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["examId"]) ? $context["examId"] : $this->getContext($context, "examId")), "html", null, true);
        echo "</div>
        <div id=\"exam_infor_isrealname\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["isRealName"]) ? $context["isRealName"] : $this->getContext($context, "isRealName")), "html", null, true);
        echo "</div>
    </div>
    <ul>
        <li><a href=\"#\" id=\"start_exam\" class=\"button button-rounded button-flat-primary\">开始答题</a></li>
    </ul>
";
    }

    // line 33
    public function block_function_content($context, array $blocks = array())
    {
        // line 34
        echo "    
    <div id=\"flash_message\">
        <div class=\"button glow button-rounded button-flat-action flash-notice\">
        </div>
    </div>
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 44
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b01d4ca_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b01d4ca_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b01d4ca_examPrepare_1.js");
            // line 47
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "b01d4ca"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b01d4ca") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b01d4ca.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle:Main:examPrepare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 49,  109 => 47,  105 => 44,  100 => 43,  97 => 42,  88 => 34,  85 => 33,  75 => 26,  71 => 25,  67 => 23,  60 => 18,  53 => 14,  47 => 11,  41 => 9,  39 => 8,  33 => 4,  30 => 3,);
    }
}
