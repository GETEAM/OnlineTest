<?php

/* OnlineTestAdminBundle:Admin:teacherList.html.twig */
class __TwigTemplate_62b08c4c3abc6f5687e47f5c8fcd322668c3eda78bda6dd596a120ef12124af7 extends Twig_Template
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

    // line 2
    public function block_function_title($context, array $blocks = array())
    {
        // line 3
        echo "    <span>可用教师列表</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"deactiveSelectedTeachers()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/unable_1.png"), "html", null, true);
        echo "\"/>失效
        </a>
        <a href=\"#\" onclick=\"deleteSelectedTeachers()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>
    </div> 
    <table id=\"enabledTeachers\">
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
        // line 26
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
            // line 27
            echo "                <tr>
                    <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "\" /></td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "email", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deactive_teacher", array("username" => $this->getAttribute($context["admin"], "username", array()))), "html", null, true);
            echo "\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/unable_1.png"), "html", null, true);
            echo "\"/>
                        </a>
                        <a href=\"#\" onclick=\"delconfirm('";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "username", array()), "html", null, true);
            echo "')\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 38
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
        // line 43
        echo "        </tbody>
    </table>
    <div id=\"flash_message\">
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 56
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9311c6e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9311c6e_0") : $this->env->getExtension('assets')->getAssetUrl("js/9311c6e_jquery.tablesorter.min_1.js");
            // line 60
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "9311c6e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9311c6e_1") : $this->env->getExtension('assets')->getAssetUrl("js/9311c6e_teacherList_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9311c6e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9311c6e") : $this->env->getExtension('assets')->getAssetUrl("js/9311c6e.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 62
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:teacherList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 62,  180 => 60,  176 => 56,  171 => 55,  168 => 54,  163 => 51,  154 => 48,  151 => 47,  147 => 46,  142 => 43,  123 => 38,  119 => 37,  114 => 35,  110 => 34,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  86 => 27,  69 => 26,  51 => 11,  45 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
