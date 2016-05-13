<?php

/* OnlineTestAdminBundle:Admin:examList.html.twig */
class __TwigTemplate_9f14587368bb271b18abe120957e2d082777c8a5f37044e4321c11c847a4e322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:examManagement.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:examManagement.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_function_title($context, array $blocks = array())
    {
        // line 3
        echo "    <span>考试列表</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"open_add_dialog()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/add.png"), "html", null, true);
        echo "\"/>添加考试
        </a>
        <a href=\"#\" onclick=\"endSelectedExams()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>结束选中试卷
        </a>
        <a href=\"#\" onclick=\"restartSelectedExams()\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/enable.png"), "html", null, true);
        echo "\"/>重新启用选中试卷
        </a>
    </div> 
    <table id=\"examslist\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>编号</th>
                <th>考试名称</th>
                <th>开始时间</th>
                <th>结束时间</th>
                <th>是否实名</th>
                <th>
                    <select id=\"exam_status\">
                        <option value=\"all\" ";
        // line 29
        if (((isset($context["exam_status"]) ? $context["exam_status"] : $this->getContext($context, "exam_status")) == "all")) {
            echo "selected";
        }
        echo ">全部状态</option>
                        <option value=\"0\" ";
        // line 30
        if (((isset($context["exam_status"]) ? $context["exam_status"] : $this->getContext($context, "exam_status")) == "0")) {
            echo "selected";
        }
        echo ">进行中</option>
                        <option value=\"1\" ";
        // line 31
        if (((isset($context["exam_status"]) ? $context["exam_status"] : $this->getContext($context, "exam_status")) == "1")) {
            echo "selected";
        }
        echo ">已结束</option>
                    </select>
                </th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 38
        if (((isset($context["hasExams"]) ? $context["hasExams"] : $this->getContext($context, "hasExams")) == 0)) {
            // line 39
            echo "                <tr>
                    <td colspan=\"9\">暂无考试，请添加或者查看其他考试状态！</td>
                </tr>
            ";
        }
        // line 43
        echo "            ";
        if (((isset($context["hasExams"]) ? $context["hasExams"] : $this->getContext($context, "hasExams")) == 1)) {
            // line 44
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) ? $context["exams"] : $this->getContext($context, "exams")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
                // line 45
                echo "               <tr>
                    <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", array()), "html", null, true);
                echo "\" /></td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "examName", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["exam"], "starttime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["exam"], "endtime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 53
                if (($this->getAttribute($context["exam"], "isRealName", array()) == 0)) {
                    echo "匿名";
                }
                // line 54
                echo "                        ";
                if (($this->getAttribute($context["exam"], "isRealName", array()) == 1)) {
                    echo "实名";
                }
                // line 55
                echo "                    </td>
                    <td>
                        ";
                // line 57
                if (($this->getAttribute($context["exam"], "isOverAndSave", array()) == 0)) {
                    echo "进行中";
                }
                // line 58
                echo "                        ";
                if (($this->getAttribute($context["exam"], "isOverAndSave", array()) == 1)) {
                    echo "已结束";
                }
                // line 59
                echo "                    </td>
                    <td>
                        ";
                // line 61
                if (($this->getAttribute($context["exam"], "isOverAndSave", array()) == 0)) {
                    // line 62
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_questions", array("examId" => $this->getAttribute($context["exam"], "id", array()))), "html", null, true);
                    // line 63
                    echo "\" 
                               class=\"button button-rounded button-flat-primary button-tiny search_buttun\" 
                               style=\"padding:0px;width:40px;margin-left: 0px;\">
                                出题
                            </a>
                            <a href=\"#\" onclick=\"endExam(";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", array()), "html", null, true);
                    echo ")\" 
                               class=\"button button-rounded button-flat-primary button-tiny search_buttun\" 
                               style=\"padding:0px;width:40px;margin-left: 0px;\">
                                结束
                            </a>
                        ";
                } else {
                    // line 74
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_questions", array("examId" => $this->getAttribute($context["exam"], "id", array()))), "html", null, true);
                    // line 75
                    echo "\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:40px;margin-left: 0px;\">
                                查看
                            </a>
                            <a href=\"#\" onclick=\"restartExam(";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", array()), "html", null, true);
                    echo ")\" 
                               class=\"button button-rounded button-flat-primary button-tiny search_buttun\" 
                               style=\"padding:0px;width:40px;margin-left: 0px;\">
                                启用
                            </a>
                        ";
                }
                // line 84
                echo "                        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo " 
            ";
        }
        // line 89
        echo "        </tbody>
    </table>
    <div id=\"dialog_add_exam\" title=\"添加考试\" style=\"clear: right;\">
        <form id=\"add_exam\">
            <fieldset>
                <div>
                    <label for=\"add_examName\" class=\"dialog_label\">考试名称：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"examName\" id=\"add_examName\"  class=\"text ui-widget-content ui-corner-all\">
                </div>
                <div>
                    <label for=\"add_starttime\" class=\"dialog_label\">开始时间：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"starttime\" id=\"add_starttime\"  class=\"text ui-widget-content ui-corner-all\">
                </div>
                <div>
                    <label for=\"add_endtime\" class=\"dialog_label\" >截止时间：</label>
                    <input type=\"text\"  class=\"dialog_input\"  name=\"edntime\" id=\"add_endtime\"  class=\"text ui-widget-content ui-corner-all\">
                </div>
                <div>
                    <label class=\"dialog_label\">是否实名：</label>
                    <input type=\"radio\" id=\"add_realname_radio0\" name=\"add_realname_radio\" value=\"0\" >
                    <label for=\"add_realname_radio0\" class=\"dialog_radio_label\" >匿名</label>
                    <input type=\"radio\" id=\"add_realname_radio1\" name=\"add_realname_radio\" value=\"1\" checked >
                    <label for=\"add_realname_radio1\" class=\"dialog_radio_label\" >实名</label>
                </div>
            </fieldset>
        </form>
    </div>
    <div id=\"flash_message\">
        ";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 119
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "    </div>
";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 127
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "32aeb79_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32aeb79_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/32aeb79_jquery.tablesorter.min_1.js");
            // line 133
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "32aeb79_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32aeb79_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/32aeb79_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "32aeb79_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32aeb79_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/32aeb79_jquery-ui-timepicker-addon_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "32aeb79_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32aeb79_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/32aeb79_examList_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "32aeb79"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_32aeb79") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/32aeb79.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 135
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:examList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 135,  304 => 133,  300 => 127,  295 => 126,  292 => 125,  287 => 122,  278 => 119,  275 => 118,  271 => 117,  241 => 89,  237 => 87,  220 => 84,  211 => 78,  206 => 75,  203 => 74,  194 => 68,  187 => 63,  184 => 62,  182 => 61,  178 => 59,  173 => 58,  169 => 57,  165 => 55,  160 => 54,  156 => 53,  151 => 51,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  110 => 44,  107 => 43,  101 => 39,  99 => 38,  87 => 31,  81 => 30,  75 => 29,  57 => 14,  51 => 11,  45 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
