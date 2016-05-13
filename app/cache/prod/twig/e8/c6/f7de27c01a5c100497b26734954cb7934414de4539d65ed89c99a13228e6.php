<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e8c6f7de27c01a5c100497b26734954cb7934414de4539d65ed89c99a13228e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:aboutSystem.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:aboutSystem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_function_title($context, array $blocks = array())
    {
        // line 4
        echo "    <span>修改个人信息</span>
";
    }

    // line 6
    public function block_function_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  48 => 8,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
