<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c915f14f5486939d777becf1244beda2ce966a46a4e6deb477d39ab98334c6fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <div class=\"admin_formRow\">
        <span class=\"admin_labelFont\" >";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": </span>
        <span class=\"admin_inputStyle\" style=\"border: none; line-height: 28px;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"admin_formRow\">
        <span class=\"admin_labelFont\">姓名: </span>
        <span class=\"admin_inputStyle\"  style=\"border: none; line-height: 28px;\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"admin_formRow\">
        <span class=\"admin_labelFont\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": </span>
        <span class=\"admin_inputStyle\"  style=\"border: none; line-height: 28px;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"admin_formRow\">
        <a href=\" ";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("admin_changeInfo");
        echo "\" class=\"button button-rounded button-flat-action submitButtonStyle\" style=\"width: 150px;\">修改个人信息</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  45 => 14,  41 => 13,  35 => 10,  28 => 6,  24 => 5,  19 => 2,);
    }
}
