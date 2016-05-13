<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_27e9b2c1fa8114fe8a3795becef043c5c242f6e6565d41b4611846fa8a5109f9 extends Twig_Template
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
        echo "    <span>修改密码</span>
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
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
        // line 9
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
