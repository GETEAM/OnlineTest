<?php

/* OnlineTestAdminBundle:Admin:studentList.html.twig */
class __TwigTemplate_c9b418a9cf96cfc72b5498f0c1f9bd899113ff4e644059660dd4be184ac3b66a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:studentManagement.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:studentManagement.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_function_title($context, array $blocks = array())
    {
        // line 3
        echo "    <span>学生列表</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        echo "   
    <div id=\"search_form\">
        <form action=\"\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" enctype=\"multipart/form-data\">
            ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "examName", array()), 'widget');
        echo "
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "button button-rounded button-flat-primary button-tiny search_buttun")));
        // line 14
        echo "
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end', array("render_rest" => true));
        echo "
        </form>
        ";
        // line 17
        if (((isset($context["student_num"]) ? $context["student_num"] : $this->getContext($context, "student_num")) != 0)) {
            // line 18
            echo "            <span style=\"color: #e38d13;\">（搜索结果：共";
            echo twig_escape_filter($this->env, (isset($context["student_num"]) ? $context["student_num"] : $this->getContext($context, "student_num")), "html", null, true);
            echo "条记录）</span>
        ";
        }
        // line 20
        echo "    </div>
    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"deleteSelectedStudents(";
        // line 22
        if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
        }
        echo ")\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>
        <a href=\"#\" onclick=\"open_mul_edit_dialog(";
        // line 25
        if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
        }
        echo ", '";
        if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "examName", array()), "html", null, true);
        }
        echo "')\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/edit.png"), "html", null, true);
        echo "\"/>修改
        </a>
    </div> 
    <div class=\"page_bar\">
        ";
        // line 30
        if (((isset($context["page_num"]) ? $context["page_num"] : $this->getContext($context, "page_num")) != 0)) {
            // line 31
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["page_num"]) ? $context["page_num"] : $this->getContext($context, "page_num"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "                <a href=\"#\" class=\"button-rounded\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        }
        // line 35
        echo "    </div> 
    <table id=\"studentslist\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>考号</th>
                <th>姓名</th>
                <th>考试状态</th>
                <th>所属考试</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
           ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 50
            echo "                <tr>
                    <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
            echo "\" /></td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "status", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "examName", array()), "html", null, true);
            }
            echo "</td>
                    <td>
                        <a href=\"#\" onclick=\"open_edit_dialog('";
            // line 58
            if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
            }
            echo "',
                                    '";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "examName", array()), "html", null, true);
            echo "',
                                    '";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
            echo "',
                                    '";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "',
                                    '";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "status", array()), "html", null, true);
            echo "')\" style=\"margin-left: 0px;\">
                                <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/edit.png"), "html", null, true);
            echo "\"/>
                            </a>
                        <a href=\"#\" onclick=\"delconfirm('";
            // line 65
            if ((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
            }
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
            echo "')\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 66
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo " 
        </tbody>
    </table>
    <div id=\"dialog_update_student\" title=\"学生信息修改\">
        <form id=\"edit_student\">
            <fieldset>
                <div>
                    <input type=\"text\" name=\"examId\" id=\"edit_examId\"  class=\"text ui-widget-content ui-corner-all\" hidden>
                </div>
                <div>
                    <label for=\"name\" class=\"dialog_label\">所属考试：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"examName\" id=\"edit_examName\"  class=\"text ui-widget-content ui-corner-all\" disabled>
                </div>
                <div>
                    <label for=\"name\" class=\"dialog_label\">考号：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"username\" id=\"edit_username\"  class=\"text ui-widget-content ui-corner-all\" disabled>
                </div>
                <div>
                    <label for=\"email\" class=\"dialog_label\">姓名：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"name\" id=\"edit_name\"  class=\"text ui-widget-content ui-corner-all\">
                </div>
                <div>
                    <label for=\"password\" class=\"dialog_label\" >密码：</label>
                    <input type=\"password\"  class=\"dialog_input\" placeholder=\"如无需改变密码，请勿修改此项\" name=\"password\" id=\"edit_password\"  class=\"text ui-widget-content ui-corner-all\">
                </div>
                <div>
                    <label for=\"password\" class=\"dialog_label\" id=\"edit_status\">考试状态：</label>
                    <input type=\"radio\" id=\"radio1\" name=\"status_radio\" value=\"0\"><label for=\"radio1\" class=\"dialog_radio_label\">未考</label>
                    <input type=\"radio\" id=\"radio2\" name=\"status_radio\" value=\"1\"><label for=\"radio2\" class=\"dialog_radio_label\">在考</label>
                    <input type=\"radio\" id=\"radio3\" name=\"status_radio\" value=\"2\"><label for=\"radio3\" class=\"dialog_radio_label\">已考</label>
                </div>
            </fieldset>
        </form>
    </div>
    <div id=\"dialog_mul_update_student\" title=\"学生信息修改\">
        <form id=\"edit_student\">
            <fieldset>
                <div>
                    <input type=\"text\" name=\"mul_examId\" id=\"mul_edit_examId\"  class=\"text ui-widget-content ui-corner-all\" hidden>
                </div>
                <div>
                    <label for=\"name\" class=\"dialog_label\">所属考试：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"mul_examName\" id=\"mul_edit_examName\"  class=\"text ui-widget-content ui-corner-all\" disabled>
                </div>
                <div>
                    <label for=\"password\" class=\"dialog_label\" id=\"mul_edit_status\">考试状态：</label>
                    <input type=\"radio\" id=\"mul_radio1\" name=\"mul_status_radio\" value=\"0\"><label for=\"mul_radio1\" class=\"dialog_radio_label\">未考</label>
                    <input type=\"radio\" id=\"mul_radio2\" name=\"mul_status_radio\" value=\"1\"><label for=\"mul_radio2\" class=\"dialog_radio_label\">在考</label>
                    <input type=\"radio\" id=\"mul_radio3\" name=\"mul_status_radio\" value=\"2\"><label for=\"mul_radio3\" class=\"dialog_radio_label\">已考</label>
                </div>
            </fieldset>
        </form>
    </div>
    <div id=\"flash_message\">
        ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 125
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 126
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </div>
";
    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 134
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "44a1672_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44a1672_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/44a1672_jquery.tablesorter.min_1.js");
            // line 139
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "44a1672_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44a1672_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/44a1672_studentList_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "44a1672_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44a1672_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/44a1672_jquery-ui.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "44a1672"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_44a1672") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/44a1672.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 141
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:studentList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 141,  338 => 139,  334 => 134,  329 => 133,  326 => 132,  321 => 129,  312 => 126,  309 => 125,  305 => 124,  249 => 70,  230 => 66,  222 => 65,  217 => 63,  213 => 62,  209 => 61,  205 => 60,  201 => 59,  195 => 58,  188 => 56,  184 => 55,  180 => 54,  176 => 53,  172 => 52,  168 => 51,  165 => 50,  148 => 49,  132 => 35,  129 => 34,  120 => 32,  115 => 31,  113 => 30,  106 => 26,  96 => 25,  91 => 23,  85 => 22,  81 => 20,  75 => 18,  73 => 17,  68 => 15,  65 => 14,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
