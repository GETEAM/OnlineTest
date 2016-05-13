<?php

/* OnlineTestAdminBundle:Admin:teacherActivation.html.twig */
class __TwigTemplate_fc217dee8f02b10e3bcf209e12acbda0fe833ae8afbac6f06a135fc3bff08891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:teacherManagement.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:teacherManagement.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_function_title($context, array $blocks = array())
    {
        // line 4
        echo "    <span>教师用户列表</span>
";
    }

    // line 7
    public function block_function_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"activeSelectedTeachers()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/enable.png"), "html", null, true);
        echo "\"/>激活
        </a>
        <a href=\"#\" onclick=\"deleteSelectedTeachers()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>
    </div> 
    <table id=\"unabledTeachers\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>用户名</th>
                <th>姓名</th>
                <th>邮箱</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 29
            echo "                <tr>
                    <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "\" /></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("active_teacher", array("username" => $this->getAttribute($context["admin"], "username", array()))), "html", null, true);
            echo "\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/enable.png"), "html", null, true);
            echo "\"/>
                        </a>
                        <a href=\"#\" onclick=\"delconfirm('";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "')\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
            echo "\"/>
                        </a>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    <div id=\"flash_message\">
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>        
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 58
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6a9f67b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a9f67b_0") : $this->env->getExtension('assets')->getAssetUrl("js/6a9f67b_jquery.tablesorter.min_1.js");
            // line 62
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "6a9f67b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a9f67b_1") : $this->env->getExtension('assets')->getAssetUrl("js/6a9f67b_teacherActivation_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "6a9f67b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6a9f67b") : $this->env->getExtension('assets')->getAssetUrl("js/6a9f67b.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 64
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:teacherActivation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  180 => 62,  176 => 58,  171 => 57,  168 => 56,  163 => 53,  154 => 50,  151 => 49,  147 => 48,  142 => 45,  123 => 40,  119 => 39,  114 => 37,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  86 => 29,  69 => 28,  51 => 13,  45 => 10,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
