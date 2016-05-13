<?php

/* OnlineTestAdminBundle:Admin:teacherManagement.html.twig */
class __TwigTemplate_332781d887009cf3a38d48fa5ad6ad6fb8341751fdffa761fdc23cdf852d0c23 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getUrl("teacher_activation");
        echo "\" class=\"button button-rounded button-flat-primary\">教师用户激活</a></li> 
    </ul>
    <ul>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("teacher_list");
        echo "\" class=\"button button-rounded button-flat-primary\">可用教师列表</a></li> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:teacherManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 4,  31 => 3,  28 => 2,);
    }
}
