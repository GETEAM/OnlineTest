<?php

/* OnlineTestAdminBundle:Admin:resultList.html.twig */
class __TwigTemplate_aae574286bd08c287e0352d9070464809a00b2b8b8386e5ca9c6a6311a449714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:resultManagement.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:resultManagement.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_function_title($context, array $blocks = array())
    {
        // line 3
        echo "    <span>考试结果列表</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        echo "   
    <div id=\"search_form\">
        <form action=\"\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" enctype=\"multipart/form-data\">
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "examName", array()), 'widget');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "search", array()), 'widget', array("attr" => array("class" => "button button-rounded button-flat-primary button-tiny search_buttun")));
        // line 14
        echo "
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => true));
        echo "
        </form>
    </div>
    <table id=\"resultlist\">
        <thead>
            <tr>
                <th>序号</th>
                <th>试卷编号</th>
                <th>试卷名称</th>
                <th>试卷时长</th>
                <th>试卷状态</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 30
        if (((isset($context["hasPapers"]) ? $context["hasPapers"] : null) == 0)) {
            // line 31
            echo "                <tr>
                    <td colspan=\"7\">该考试暂无试卷，请添加！</td>
                </tr>
            ";
        }
        // line 35
        echo "            ";
        if (((isset($context["hasPapers"]) ? $context["hasPapers"] : null) == (-1))) {
            // line 36
            echo "                <tr>
                    <td colspan=\"7\">请选择考试，查询结果！</td>
                </tr>
            ";
        }
        // line 40
        echo "            ";
        if (((isset($context["hasPapers"]) ? $context["hasPapers"] : null) == 1)) {
            // line 41
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["papers"]) ? $context["papers"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paper"]) {
                // line 42
                echo "                    <tr>
                        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "paperName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "duration", array()), "html", null, true);
                echo "分钟</td>
                        <td>
                            ";
                // line 48
                if (($this->getAttribute($context["paper"], "usable", array()) == 0)) {
                    echo "过期";
                }
                // line 49
                echo "                            ";
                if (($this->getAttribute($context["paper"], "usable", array()) == 1)) {
                    echo "可用";
                }
                // line 50
                echo "                        </td>
                        <td>
                            <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("result_detail", array("paperId" => $this->getAttribute($context["paper"], "id", array()))), "html", null, true);
                // line 53
                echo "\" target=\"_blank\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:60px;margin-left: 0px;\">
                                结果详情
                            </a>&nbsp;
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("result_statistics", array("paperId" => $this->getAttribute($context["paper"], "id", array()))), "html", null, true);
                // line 57
                echo "\" target=\"_blank\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:60px;margin-left: 0px;\">
                                统计信息
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        }
        // line 64
        echo "        </tbody>
    </table>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 70
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e4f4e4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e4f4e4_0") : $this->env->getExtension('assets')->getAssetUrl("js/1e4f4e4_jquery.tablesorter.min_1.js");
            // line 75
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "1e4f4e4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e4f4e4_1") : $this->env->getExtension('assets')->getAssetUrl("js/1e4f4e4_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "1e4f4e4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e4f4e4_2") : $this->env->getExtension('assets')->getAssetUrl("js/1e4f4e4_resultList_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "1e4f4e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e4f4e4") : $this->env->getExtension('assets')->getAssetUrl("js/1e4f4e4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 77
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:resultList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  206 => 75,  202 => 70,  197 => 69,  194 => 68,  188 => 64,  185 => 63,  166 => 57,  164 => 56,  159 => 53,  157 => 52,  153 => 50,  148 => 49,  144 => 48,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  124 => 42,  106 => 41,  103 => 40,  97 => 36,  94 => 35,  88 => 31,  86 => 30,  68 => 15,  65 => 14,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
