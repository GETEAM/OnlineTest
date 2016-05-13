<?php

/* OnlineTestAdminBundle:Admin:studentManagement.html.twig */
class __TwigTemplate_159444feda22daf867d148b452b5fb2ea474db1ddd8a948d3bb742960c6ed3fe extends Twig_Template
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
        echo $this->env->getExtension('routing')->getUrl("add_student");
        echo "\" class=\"button button-rounded button-flat-primary\">添加学生</a></li> 
    </ul>
    <ul>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("import_student");
        echo "\" class=\"button button-rounded button-flat-primary\">导入学生</a></li> 
    </ul>
    <ul>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("student_list");
        echo "\" class=\"button button-rounded button-flat-primary\">学生列表</a></li> 
    </ul>
    <ul>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("student_profile");
        echo "\" class=\"button button-rounded button-flat-primary\">学生查询与修改</a></li> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:studentManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  46 => 10,  40 => 7,  34 => 4,  31 => 3,  28 => 2,);
    }
}
