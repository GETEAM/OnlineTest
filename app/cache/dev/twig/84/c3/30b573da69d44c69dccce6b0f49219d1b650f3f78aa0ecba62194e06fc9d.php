<?php

/* OnlineTestAdminBundle:Admin:aboutSystem.html.twig */
class __TwigTemplate_84c330b573da69d44c69dccce6b0f49219d1b650f3f78aa0ecba62194e06fc9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle::admin.html.twig");

        $this->blocks = array(
            'admin_main_left' => array($this, 'block_admin_main_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 3
        echo "    <ul>
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_homepage");
        echo "\" class=\"button button-rounded button-flat-primary\">系统介绍</a></li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("admin_changePassword");
        echo "\" class=\"button button-rounded button-flat-primary\">修改密码</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_showInfo");
        echo "\" class=\"button button-rounded button-flat-primary\">查看个人信息</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:aboutSystem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
