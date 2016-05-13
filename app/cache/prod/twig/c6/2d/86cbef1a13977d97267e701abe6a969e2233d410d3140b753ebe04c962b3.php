<?php

/* OnlineTestAdminBundle:Admin:resultDetail.html.twig */
class __TwigTemplate_c62d86cbef1a13977d97267e701abe6a969e2233d410d3140b753ebe04c962b3 extends Twig_Template
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
        echo "    <span>考试结果详情列表</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div style=\"color:#e38d13;\">共：";
        echo twig_escape_filter($this->env, (isset($context["records_num"]) ? $context["records_num"] : null), "html", null, true);
        echo "考试记录</div></br>
    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"deleteSelectedRecords()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>&nbsp;&nbsp;
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("export_excel", array("paperId" => (isset($context["paperId"]) ? $context["paperId"] : null))), "html", null, true);
        // line 12
        echo "\"  style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/export.png"), "html", null, true);
        echo "\"/>导出Excel表
        </a>
    </div> 
    <table id=\"result_detail\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>试卷名称</th>
                <th>考号</th>
                <th>姓名</th>
                <th>主观题分数</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 29
        if (((isset($context["hasRecords"]) ? $context["hasRecords"] : null) == 0)) {
            // line 30
            echo "                <tr>
                    <td colspan=\"7\">该考试暂无考试记录！</td>
                </tr>
            ";
        }
        // line 34
        echo "            ";
        if (((isset($context["hasRecords"]) ? $context["hasRecords"] : null) == 1)) {
            // line 35
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exam_records"]) ? $context["exam_records"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["exam_record"]) {
                // line 36
                echo "                    <tr>
                        <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam_record"], "id", array()), "html", null, true);
                echo "\" /></td>
                        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["exam_record"], "paper", array()), "paperName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 40
                if ($this->getAttribute($context["exam_record"], "student", array())) {
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["exam_record"], "student", array()), "studentName", array()), "html", null, true);
                } else {
                    // line 42
                    echo "匿名";
                }
                echo "</td>
                        <td>";
                // line 43
                if ($this->getAttribute($context["exam_record"], "student", array())) {
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["exam_record"], "student", array()), "name", array()), "html", null, true);
                } else {
                    // line 45
                    echo "匿名";
                }
                echo "</td>
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam_record"], "score", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("answers_detail", array("recordId" => $this->getAttribute($context["exam_record"], "id", array()))), "html", null, true);
                // line 49
                echo "\" target=\"_blank\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;\">
                                    答卷详情
                            </a>
                            <a href=\"#\" onclick=\"delconfirm(";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam_record"], "id", array()), "html", null, true);
                echo ")\" style=\"margin-left: 0px;\">
                                <img src=\"";
                // line 53
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam_record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo " 
            ";
        }
        // line 59
        echo "        </tbody>
    </table>
    <div id=\"flash_message\">
        ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 63
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 64
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
";
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 72
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0da2f3b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0da2f3b_0") : $this->env->getExtension('assets')->getAssetUrl("js/0da2f3b_jquery.tablesorter.min_1.js");
            // line 77
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "0da2f3b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0da2f3b_1") : $this->env->getExtension('assets')->getAssetUrl("js/0da2f3b_resultDetail_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "0da2f3b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0da2f3b_2") : $this->env->getExtension('assets')->getAssetUrl("js/0da2f3b_jquery-ui.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "0da2f3b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0da2f3b") : $this->env->getExtension('assets')->getAssetUrl("js/0da2f3b.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 79
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:resultDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 79,  218 => 77,  214 => 72,  209 => 71,  206 => 70,  201 => 67,  192 => 64,  189 => 63,  185 => 62,  180 => 59,  176 => 57,  157 => 53,  153 => 52,  148 => 49,  146 => 48,  141 => 46,  136 => 45,  133 => 44,  131 => 43,  126 => 42,  123 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  106 => 36,  88 => 35,  85 => 34,  79 => 30,  77 => 29,  58 => 13,  55 => 12,  53 => 11,  48 => 9,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
