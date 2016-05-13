<?php

/* OnlineTestMainBundle:Main:login.html.twig */
class __TwigTemplate_1a9e8f917f527479b411565df35c284702aa0194c028cad366789c1c653ad5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestMainBundle::student.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestMainBundle::student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7982fac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7982fac_0") : $this->env->getExtension('assets')->getAssetUrl("css/7982fac_login_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "7982fac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7982fac") : $this->env->getExtension('assets')->getAssetUrl("css/7982fac.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "登录";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
        <div id=\"login\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("student_login_check");
        echo "\"  method=\"post\">
                
                <div id=\"logintitle\">
                    <span class=\"titlefont\">用户登录</span>
                </div>
                
                <div class=\"formRow\" hidden>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
                </div>
                <div  style=\"text-align: center;color: #b92c28;\">
                        ";
        // line 26
        if (((isset($context["isAvailabe"]) ? $context["isAvailabe"] : null) == (-1))) {
            echo "<span>链接有误，请重新打开正确链接</span>
                        ";
        } elseif (((isset($context["isAvailabe"]) ? $context["isAvailabe"] : null) == 0)) {
            // line 27
            echo "<span>该问卷调查已结束</span>
                        ";
        }
        // line 29
        echo "                </div>
                <div  style=\"text-align: center;color: #b92c28;\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "
                </div>
                ";
        // line 33
        if (((isset($context["isAvailabe"]) ? $context["isAvailabe"] : null) == 1)) {
            // line 34
            echo "                <div id=\"realname_login\">
                    <div class=\"formRow\" hidden>
                        <input type=\"hidden\" id=\"examId\"  value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["examId"]) ? $context["examId"] : null), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"formRow\" hidden>
                        <input type=\"hidden\" id=\"isAvailabe\" name=\"_target_path\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["isAvailabe"]) ? $context["isAvailabe"] : null), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"formRow\">
                        <table style=\"border: 0;width:300px;\">
                            <tr style=\"border: 0;\">
                                <td>
                                    <img style=\"margin-top: 2px;\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/login_user_hightlighted.png"), "html", null, true);
            echo "\" width=\"25px\" height=\"25px\"/>
                                </td>
                                <td>
                                    <input type=\"text\" id=\"student_name\" name=\"_student_name\" placeHolder=\"请输入用户名\" required=\"required\" class=\"input_style\" autocomplete=\"off\"/>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class=\"formRow\" hidden>
                        <table style=\"border: 0;width:300px;\">
                            <tr>
                                <td>
                                    <img style=\"margin-top: 2px;\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/login_user_hightlighted.png"), "html", null, true);
            echo "\" width=\"25px\" height=\"25px\"/>
                                </td>
                                <td>
                                    <input type=\"text\" id=\"username\" name=\"_username\"  required=\"required\" class=\"input_style\"/>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class=\"formRow\">
                        <table style=\"border: 0;width:300px;\">
                            <tr>
                                <td>
                                    <img style=\"margin-top: 2px;\" src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/login_key_hightlighted.png"), "html", null, true);
            echo "\" width=\"25px\" height=\"25px\"/>
                                </td>
                                <td>
                                    <input type=\"password\" id=\"password\" name=\"_password\" placeHolder=\"请输入密码\" required=\"required\" class=\"input_style\"/>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class=\"formRow\" hidden>
                        <input type=\"hidden\" name=\"_target_path\" value=\"/student/exam/prepare/realname?examId=\"/>
                    </div>

                    <div class=\"formRow\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"button button-rounded button-flat-action loginButton\" style=\"background-color: #008e66\" value=\"登录\"/>
                        <input type=\"reset\" name=\"reset\" value=\"取消\" class=\"button button-rounded resetButton\" />
                    </div>
                    
                </div>
                <div id=\"unrealname_login\" hidden>
                    <div class=\"formRow\">
                        <a href=\"/student/exam/prepare/unrealname?examId=\" class=\"button button-rounded button-flat-action loginButton\" style=\"background-color: #008e66;width: 250px;\">匿名登录</a>
                    </div>
                </div>
                ";
        }
        // line 96
        echo "            </form>
        </div>
";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 102
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f4464f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4464f9_0") : $this->env->getExtension('assets')->getAssetUrl("js/f4464f9_studentLogin_1.js");
            // line 105
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f4464f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4464f9") : $this->env->getExtension('assets')->getAssetUrl("js/f4464f9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 107
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle:Main:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 107,  205 => 105,  201 => 102,  196 => 101,  193 => 100,  187 => 96,  159 => 71,  143 => 58,  127 => 45,  118 => 39,  112 => 36,  108 => 34,  106 => 33,  101 => 31,  97 => 29,  93 => 27,  88 => 26,  82 => 23,  72 => 16,  68 => 14,  65 => 13,  59 => 11,  43 => 7,  39 => 4,  34 => 3,  31 => 2,);
    }
}
