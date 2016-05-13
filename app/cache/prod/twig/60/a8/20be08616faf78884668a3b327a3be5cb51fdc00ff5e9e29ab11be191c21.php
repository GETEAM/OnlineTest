<?php

/* OnlineTestAdminBundle:Admin:studentProfile.html.twig */
class __TwigTemplate_60a820be08616faf78884668a3b327a3be5cb51fdc00ff5e9e29ab11be191c21 extends Twig_Template
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
        echo "    <span>学生查询与修改</span>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "searchOption", array()), 'widget');
        echo "
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "searchContent", array()), 'widget', array("attr" => array("placeholder" => "请输入查询内容", "autocomplete" => "off", "class" => "search_input")));
        // line 16
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "search", array()), 'widget', array("attr" => array("class" => "button button-rounded button-flat-primary button-tiny search_buttun")));
        // line 19
        echo "
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => true));
        echo "
        </form>
    </div>
    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"deleteSelectedStudents(";
        // line 24
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
        }
        echo ")\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>
        <a href=\"#\" onclick=\"open_mul_edit_dialog(";
        // line 27
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
        }
        echo ", '";
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
        }
        echo "')\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/edit.png"), "html", null, true);
        echo "\"/>修改
        </a>
    </div>
    <table id=\"searched_students\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>用户名</th>
                <th>姓名</th>
                <th>考试状态</th>
                <th>所属考试</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 44
        if ((isset($context["searched_students"]) ? $context["searched_students"] : null)) {
            // line 45
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["searched_students"]) ? $context["searched_students"] : null));
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
                // line 46
                echo "                    <tr>
                        <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
                echo "\" /></td>
                        <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "status", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                if ((isset($context["exam"]) ? $context["exam"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
                }
                echo "</td>
                        <td>
                            <a href=\"#\" onclick=\"open_edit_dialog('";
                // line 54
                if ((isset($context["exam"]) ? $context["exam"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
                }
                echo "',
                                    '";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
                echo "',
                                    '";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
                echo "',
                                    '";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                echo "',
                                    '";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "status", array()), "html", null, true);
                echo "')\" style=\"margin-left: 0px;\">
                                <img src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/edit.png"), "html", null, true);
                echo "\"/>
                            </a>
                            <a href=\"#\" onclick=\"delconfirm('";
                // line 61
                if ((isset($context["exam"]) ? $context["exam"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
                }
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentName", array()), "html", null, true);
                echo "')\" style=\"margin-left: 0px;\">
                                <img src=\"";
                // line 62
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
            // line 66
            echo " 
            ";
        } else {
            // line 68
            echo "                <tr>
                    <td colspan=\"7\">没有查询结果，请确认搜索条件</td>
                </tr>
            ";
        }
        // line 72
        echo "        </tbody>
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
        // line 126
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 127
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 128
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "    </div>
    <div id=\"importing\" class=\"button glow button-rounded button-flat-action flash-notice\">
    </div>
";
    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        // line 137
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 138
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4ec7df_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4ec7df_0") : $this->env->getExtension('assets')->getAssetUrl("js/d4ec7df_studentProfile_1.js");
            // line 142
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "d4ec7df_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4ec7df_1") : $this->env->getExtension('assets')->getAssetUrl("js/d4ec7df_jquery-ui.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "d4ec7df"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4ec7df") : $this->env->getExtension('assets')->getAssetUrl("js/d4ec7df.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 144
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:studentProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 144,  329 => 142,  325 => 138,  320 => 137,  317 => 136,  310 => 131,  301 => 128,  298 => 127,  294 => 126,  238 => 72,  232 => 68,  228 => 66,  209 => 62,  201 => 61,  196 => 59,  192 => 58,  188 => 57,  184 => 56,  180 => 55,  174 => 54,  167 => 52,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  144 => 46,  126 => 45,  124 => 44,  105 => 28,  95 => 27,  90 => 25,  84 => 24,  77 => 20,  74 => 19,  72 => 17,  69 => 16,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
