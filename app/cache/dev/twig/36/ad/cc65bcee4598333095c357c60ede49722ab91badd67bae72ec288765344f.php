<?php

/* OnlineTestAdminBundle:Admin:examManagement.html.twig */
class __TwigTemplate_36adcc65bcee4598333095c357c60ede49722ab91badd67bae72ec288765344f extends Twig_Template
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
        echo $this->env->getExtension('routing')->getUrl("exam_list", array("exam_status" => "all"));
        echo "\" class=\"button button-rounded button-flat-primary\">考试列表</a></li> 
    </ul>
    <ul>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("paper_list");
        echo "\" class=\"button button-rounded button-flat-primary\">试卷列表</a></li> 
    </ul>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:examManagement.html.twig";
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
