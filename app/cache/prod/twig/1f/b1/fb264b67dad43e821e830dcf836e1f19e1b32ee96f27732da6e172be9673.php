<?php

/* OnlineTestAdminBundle:Admin:paperList.html.twig */
class __TwigTemplate_1fb1fb264b67dad43e821e830dcf836e1f19e1b32ee96f27732da6e172be9673 extends Twig_Template
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
        echo "    <span>试卷列表</span>
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => true));
        echo "
        </form>
    </div>
    <div class=\"operation_func\">
        <a href=\"#\" onclick=\"open_add_dialog('";
        // line 16
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
        }
        echo "',
                                    '";
        // line 17
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
        }
        echo "')\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/add.png"), "html", null, true);
        echo "\"/>添加试卷
        </a>
        <a href=\"#\" onclick=\"deleteSelectedPapers('";
        // line 20
        if ((isset($context["exam"]) ? $context["exam"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
        }
        echo "')\" style=\"color: #000;margin-left: 0px;\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/delete.png"), "html", null, true);
        echo "\"/>删除
        </a>
    </div> 
    <table id=\"paperslist\">
        <thead>
            <tr>
                <th><input type=\"checkbox\" id=\"checkAll\" class=\"checkall\"></th>
                <th>序号</th>
                <th>试卷名称</th>
                <th>试卷时长</th>
                <th>使用状态</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        if (((isset($context["hasPapers"]) ? $context["hasPapers"] : null) == 0)) {
            // line 37
            echo "                <tr>
                    <td colspan=\"7\">该考试暂无试卷，请添加！</td>
                </tr>
            ";
        }
        // line 41
        echo "            ";
        if (((isset($context["hasPapers"]) ? $context["hasPapers"] : null) == (-1))) {
            // line 42
            echo "                <tr>
                    <td colspan=\"7\">请选择考试，查询结果！</td>
                </tr>
            ";
        }
        // line 46
        echo "            ";
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
            // line 47
            echo "               <tr>
                    <td><input type=\"checkbox\" name=\"checkOne\" class=\"checkall\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
            echo "\" /></td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "paperName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "duration", array()), "html", null, true);
            echo "分钟</td>
                    <td>
                        ";
            // line 53
            if (($this->getAttribute($context["paper"], "usable", array()) == 0)) {
                echo "过期";
            }
            // line 54
            echo "                        ";
            if (($this->getAttribute($context["paper"], "usable", array()) == 1)) {
                echo "可用";
            }
            // line 55
            echo "                    </td>
                    <td>
                        ";
            // line 57
            if (($this->getAttribute($context["paper"], "usable", array()) == 1)) {
                // line 58
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_parts", array("paperId" => $this->getAttribute($context["paper"], "id", array()))), "html", null, true);
                // line 59
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo "_disable_paper\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:40px;margin-left: 0px;\">
                                出卷
                            </a>
                            <a href=\"#\" onclick=\"disable_paper(";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo ");\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo "_disable_paper\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:40px;margin-left: 0px;\">
                                过期
                            </a>
                        ";
            }
            // line 66
            echo "                        ";
            if (($this->getAttribute($context["paper"], "usable", array()) == 0)) {
                // line 67
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_parts", array("paperId" => $this->getAttribute($context["paper"], "id", array()))), "html", null, true);
                // line 68
                echo "\"  id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo "_disable_paper\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:40px;margin-left: 0px;\">
                                查看
                            </a>
                            <a href=\"#\" onclick=\"enable_paper(";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo ");\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
                echo "_enable_paper\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:40px;margin-left: 0px;\">
                                启用
                            </a>
                        ";
            }
            // line 75
            echo "                        <a href=\"#\" onclick=\"open_edit_dialog('";
            if ((isset($context["exam"]) ? $context["exam"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
            }
            echo "',
                                    '";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
            echo "',
                                    '";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
            echo "',
                                    '";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "paperName", array()), "html", null, true);
            echo "',
                                    '";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "duration", array()), "html", null, true);
            echo "',
                                    '";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "usable", array()), "html", null, true);
            echo "')\" style=\"margin-left: 0px;\">
                                <img src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/onlinetestmain/images/edit.png"), "html", null, true);
            echo "\"/>
                            </a>
                        <a href=\"#\" onclick=\"delconfirm('";
            // line 83
            if ((isset($context["exam"]) ? $context["exam"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
            }
            echo "',";
            echo twig_escape_filter($this->env, $this->getAttribute($context["paper"], "id", array()), "html", null, true);
            echo ")\" style=\"margin-left: 0px;\">
                            <img src=\"";
            // line 84
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paper'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo " 
        </tbody>
    </table>
    <div id=\"dialog_add_paper\" title=\"添加试卷\">
        <form id=\"add_paper\">
            <fieldset>
                <div>
                    <input type=\"text\" name=\"examId\" id=\"add_examId\"  class=\"text ui-widget-content ui-corner-all\" hidden>
                </div>
                <div>
                    <label for=\"add_examName\" class=\"dialog_label\">所属考试：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"examName\" id=\"add_examName\"  class=\"text ui-widget-content ui-corner-all\" disabled>
                </div>
                <div>
                    <label for=\"add_paperName\" class=\"dialog_label\">试卷名称：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"paperName\" id=\"add_paperName\"  class=\"text ui-widget-content ui-corner-all\" >
                </div>
                <div>
                    <label for=\"add_duration\" class=\"dialog_label\">试卷时长：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"duration\" id=\"add_duration\"  class=\"text ui-widget-content ui-corner-all\"  value=\"0\" style=\"width:50px;\">
                    <span style=\"width:50px;text-align: left;\">分钟</span>
                </div>
            </fieldset>
        </form>
    </div>
    <div id=\"dialog_edit_paper\" title=\"编辑试卷\">
        <form id=\"edit_paper\">
            <fieldset>
                <div>
                    <input type=\"text\" name=\"edit-examId\" id=\"edit_examId\"  class=\"text ui-widget-content ui-corner-all\" hidden>
                </div>
                <div>
                    <label for=\"edit_examName\" class=\"dialog_label\">所属考试：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"edit-examName\" id=\"edit_examName\"  class=\"text ui-widget-content ui-corner-all\" disabled>
                </div>
                <div>
                    <input type=\"text\" name=\"edit-paperId\" id=\"edit_paperId\"  class=\"text ui-widget-content ui-corner-all\" hidden>
                </div>
                <div>
                    <label for=\"edit_paperName\" class=\"dialog_label\">试卷名称：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"edit-paperName\" id=\"edit_paperName\"  class=\"text ui-widget-content ui-corner-all\" >
                </div>
                <div>
                    <label for=\"edit_usable_radio\" class=\"dialog_label\" id=\"edit_status\">使用状态：</label>
                    <input type=\"radio\" id=\"edit_usable_radio0\" name=\"edit_usable_radio\" value=\"0\"><label for=\"edit_usable_radio0\" class=\"dialog_radio_label\">过期</label>
                    <input type=\"radio\" id=\"edit_usable_radio1\" name=\"edit_usable_radio\" value=\"1\"><label for=\"edit_usable_radio1\" class=\"dialog_radio_label\">可用</label>
                </div>
                <div>
                    <label for=\"edit_duration\" class=\"dialog_label\">试卷时长：</label>
                    <input type=\"text\"  class=\"dialog_input\" name=\"edit_duration\" id=\"edit_duration\"  class=\"text ui-widget-content ui-corner-all\"  value=\"0\" style=\"width:50px;\">
                    <span style=\"width:50px;text-align: left;\">分钟</span>
                </div>
            </fieldset>
        </form>
    </div>
    <div id=\"flash_message\">
        ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 145
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 146
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "    </div>
";
    }

    // line 152
    public function block_javascripts($context, array $blocks = array())
    {
        // line 153
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 154
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "74b17d4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74b17d4_0") : $this->env->getExtension('assets')->getAssetUrl("js/74b17d4_jquery.tablesorter.min_1.js");
            // line 160
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "74b17d4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74b17d4_1") : $this->env->getExtension('assets')->getAssetUrl("js/74b17d4_paperList_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "74b17d4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74b17d4_2") : $this->env->getExtension('assets')->getAssetUrl("js/74b17d4_jquery-ui.min_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "74b17d4_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74b17d4_3") : $this->env->getExtension('assets')->getAssetUrl("js/74b17d4_jquery-ui-timepicker-addon_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "74b17d4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_74b17d4") : $this->env->getExtension('assets')->getAssetUrl("js/74b17d4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 162
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:paperList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 162,  372 => 160,  368 => 154,  363 => 153,  360 => 152,  355 => 149,  346 => 146,  343 => 145,  339 => 144,  281 => 88,  262 => 84,  254 => 83,  249 => 81,  245 => 80,  241 => 79,  237 => 78,  233 => 77,  229 => 76,  222 => 75,  213 => 71,  206 => 68,  203 => 67,  200 => 66,  191 => 62,  184 => 59,  181 => 58,  179 => 57,  175 => 55,  170 => 54,  166 => 53,  161 => 51,  157 => 50,  153 => 49,  149 => 48,  146 => 47,  128 => 46,  122 => 42,  119 => 41,  113 => 37,  111 => 36,  93 => 21,  87 => 20,  82 => 18,  76 => 17,  70 => 16,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
