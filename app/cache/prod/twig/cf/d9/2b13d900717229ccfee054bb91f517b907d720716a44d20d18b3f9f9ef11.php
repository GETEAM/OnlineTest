<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cfd92b13d900717229ccfee054bb91f517b907d720716a44d20d18b3f9f9ef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle::admin.html.twig");

        $this->blocks = array(
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'menu' => array($this, 'block_menu'),
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        <li><a href=\"#\" class=\"button button-rounded button-flat-primary\">设置新密码</a></li> 
    </ul>
";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 9
    public function block_function_title($context, array $blocks = array())
    {
        // line 10
        echo "    <span>设置新密码</span>
";
    }

    // line 12
    public function block_function_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->env->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig")->display($context);
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  65 => 14,  58 => 13,  55 => 12,  50 => 10,  47 => 9,  42 => 7,  35 => 3,  32 => 2,);
    }
}
