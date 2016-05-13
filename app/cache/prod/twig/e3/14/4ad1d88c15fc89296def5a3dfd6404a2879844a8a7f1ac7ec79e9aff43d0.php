<?php

/* OnlineTestMainBundle:Main:resetting.email.html.twig */
class __TwigTemplate_e3144ad1d88c15fc89296def5a3dfd6404a2879844a8a7f1ac7ec79e9aff43d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Resetting your password";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 5
        echo "Hello ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array());
        echo " !

You can reset your email by accessing ";
        // line 7
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null);
        echo "

Greetings,
the Acme team
";
    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
        // line 15
        $this->env->loadTemplate("OnlineTestMainBundle:Main:resetting.email.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle:Main:resetting.email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  60 => 14,  51 => 7,  45 => 5,  42 => 3,  36 => 1,  32 => 14,  29 => 13,  27 => 3,  24 => 2,  22 => 1,);
    }
}
