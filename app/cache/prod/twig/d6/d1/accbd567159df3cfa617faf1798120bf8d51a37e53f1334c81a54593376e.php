<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d6d1accbd567159df3cfa617faf1798120bf8d51a37e53f1334c81a54593376e extends Twig_Template
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
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div class=\"admin_formRow\">
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\" class=\"admin_labelFont\">用户名/邮箱</label>
        <input type=\"text\" id=\"username\" name=\"username\" class=\"admin_inputStyle\" placeholder=\"用户名/邮箱\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" class=\"button button-rounded button-flat-action submitButtonStyle\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  35 => 8,  29 => 6,  27 => 5,  22 => 3,  19 => 2,);
    }
}
