<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1e0c38f74df6ff9c9ecea1de88ca272e08957772c50680fba7be3137a6264ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "用户登录";
    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "        <div id=\"login\">
            <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                
                <div id=\"logintitle\">
                    <span class=\"titlefont\">用户登录</span>
                </div>
                
                <div class=\"formRow\" hidden>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                </div>
                
                <div class=\"formRow\">
                    <img style=\"float:left;margin-top: 2px;\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/login_user_hightlighted.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\"/>
                    <input type=\"text\" id=\"username\" name=\"_username\" placeHolder=\"用户名/邮箱\" required=\"required\" class=\"input_style\"/>
                </div>
                
                <div class=\"formRow\">
                    <img style=\"float:left;margin-top: 2px;\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/login_key_hightlighted.png"), "html", null, true);
        echo "\" width=\"25px\" height=\"25px\"/>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeHolder=\"密码\" required=\"required\" class=\"input_style\"/>
                </div>
                
                <div class=\"formRow\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"checkbox_style\"/>
                    <label for=\"remember_me\" class=\"labelfont\">两周内免登录</label>
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("resetting");
        echo "\" class=\"labelfont\">?忘记密码</a>
                </div>
                    
                <div class=\"formRow\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"button button-rounded button-flat-action loginButton\"  value=\"登录\"/>
                    <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("registration");
        echo "\" class=\"button button-rounded resetButton\">快速注册</a>
                </div>
                
            </form>
        </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 40,  85 => 35,  75 => 28,  67 => 23,  60 => 19,  50 => 12,  47 => 11,  41 => 9,  38 => 8,  35 => 7,  29 => 5,);
    }
}
