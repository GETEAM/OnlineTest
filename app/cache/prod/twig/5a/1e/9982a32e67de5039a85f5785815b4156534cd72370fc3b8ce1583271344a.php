<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5a1e9982a32e67de5039a85f5785815b4156534cd72370fc3b8ce1583271344a extends Twig_Template
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
        <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("registration");
        echo "\" class=\"button button-rounded button-flat-primary\">教师注册</a></li> 
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
        echo "    <span>教师注册</span>
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
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 14,  61 => 13,  58 => 12,  53 => 10,  50 => 9,  45 => 7,  38 => 4,  35 => 3,  32 => 2,);
    }
}
