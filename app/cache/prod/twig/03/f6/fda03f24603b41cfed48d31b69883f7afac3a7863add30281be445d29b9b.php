<?php

/* OnlineTestAdminBundle:Admin:resultManagement.html.twig */
class __TwigTemplate_03f6fda03f24603b41cfed48d31b69883f7afac3a7863add30281be445d29b9b extends Twig_Template
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
        echo $this->env->getExtension('routing')->getUrl("result_list");
        echo "\" class=\"button button-rounded button-flat-primary\">结果详情与统计</a></li> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:resultManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,);
    }
}
