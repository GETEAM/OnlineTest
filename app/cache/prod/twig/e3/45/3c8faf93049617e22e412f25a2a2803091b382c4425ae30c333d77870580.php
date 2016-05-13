<?php

/* OnlineTestAdminBundle:Admin:partsAdd.html.twig */
class __TwigTemplate_e3453c8faf93049617e22e412f25a2a2803091b382c4425ae30c333d77870580 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle::admin.html.twig");

        $this->blocks = array(
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 3
        echo "    <ul>
        <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_parts", array("paperId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"button button-rounded button-flat-primary\">组卷</a></li> 
    </ul>
";
    }

    // line 7
    public function block_function_title($context, array $blocks = array())
    {
        // line 8
        echo "    <span>组卷</span>
";
    }

    // line 10
    public function block_function_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"paper_infor\">
        <div id=\"examId\" hidden>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_examName\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "examName", array()), "html", null, true);
        echo "
        </div>
        <div id=\"paperId\" hidden>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_paperInfor\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "paperName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            开始时间：";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "starttime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;
            开始时间：";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "endtime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </div>
    </div>
    
    <div id=\"parts_area\">
        ";
        // line 28
        if (((isset($context["hasParts"]) ? $context["hasParts"] : null) == 0)) {
            // line 29
            echo "            <div id=\"hasParts\">该试卷暂无考题块，请点击右侧功能图标进行添加。</div>
        ";
        } else {
            // line 31
            echo "            <ul>
                ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["part"]) {
                // line 33
                echo "                    <li><a href=\"#Part";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\">Part ";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['part'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </ul>
            ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["part"]) {
                // line 37
                echo "                <div id=\"Part";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" class=\"part_area\">
                    ";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["part"], "questions", array(), "array"));
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
                foreach ($context['_seq'] as $context["key"] => $context["questionId"]) {
                    // line 39
                    echo "                        <div id=\"question_";
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "\" class=\"questions\">
                            <span class=\"order_num\">";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_infor\">";
                    // line 42
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isMustSelect", array()) == 1)) {
                        // line 43
                        echo "(必选)";
                    } else {
                        // line 44
                        echo "(可选)";
                    }
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "kind", array()), "html", null, true);
                    echo ")</span>
                            <span class=\"question_id\" hidden>";
                    // line 45
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "</span>
                            <span class=\"question_isMustSelect\" hidden>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isMustSelect", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_kind\" hidden>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "kind", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_isOptionShuffle\" hidden>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isOptionShuffle", array()), "html", null, true);
                    echo "</span>
                            ";
                    // line 49
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_no_img")) {
                        // line 50
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 51
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key"] => $context["question_option"]) {
                            // line 52
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 53
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 54
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 57
                            if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key"] + 1))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 58
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 60
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_img")) {
                        // line 61
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span>
                                    ";
                        // line 62
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                                    ";
                        // line 63
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 64
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 65
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 66
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 69
                            if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\"><span>";
                            // line 70
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</span>";
                            if ((($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array") != "0") && ($context["question_option"] != ""))) {
                                echo "</br>";
                            }
                            if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array")) {
                                echo "<img src=\"/";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                                echo "\"/>";
                            }
                            echo "</label></pre>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "multiple_choices_no_img")) {
                        // line 73
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 74
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 75
                            echo "                                    <pre><input  type=\"checkbox\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 76
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_checkbox\"  
                                value=\"";
                            // line 77
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 80
                            if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : null), $context["questionId"], array(), "array"))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 81
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 83
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_no_img")) {
                        // line 84
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span><br/>         
                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_img")) {
                        // line 86
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span>         
                                ";
                        // line 87
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                            ";
                    }
                    // line 89
                    echo "                
            </div>

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
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['questionId'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['part'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "        ";
        }
        // line 96
        echo "    </div>
    <div id=\"parts_tool\">
        ";
        // line 98
        if (($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "usable", array()) == 1)) {
            // line 99
            echo "            <a href=\"#\" onclick=\"open_add_part_dialog()\" class=\"button glow button-rounded button-flat-primary part_tool_button\">添加试题块</a>
            <a href=\"/admin/paper_list/";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
            echo "\" class=\"button glow button-rounded button-flat-primary part_tool_button\">返回列表</a>
        ";
        } else {
            // line 102
            echo "            <a href=\"#\" class=\"button glow button-rounded button-flat-primary part_tool_button\">非编辑状态</a>
            <a href=\"/admin/paper_list/";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : null), "id", array()), "html", null, true);
            echo "\" class=\"button glow button-rounded button-flat-primary part_tool_button\">返回列表</a>
        ";
        }
        // line 105
        echo "    </div>
    <div id=\"dialog_add_part\" title=\"添加试题块\">
        <div id=\"contain_kind\">
            <label for=\"parts_kind\" class=\"dialog_label\">包含类别：</label>
            <select id=\"parts_kind\" class=\"text ui-widget-content ui-corner-all dialog_input\"> 
                <option name=\"parts_kind_options\" value =\"all\">全部</option>
                ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kinds"]) ? $context["kinds"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["kind"]) {
            // line 112
            echo "                    <option name=\"parts_kind_options\" value =\"";
            echo twig_escape_filter($this->env, $context["kind"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["kind"], "html", null, true);
            echo "</option>  
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['kind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </select>
        </div>
        <div>
            <label for=\"part_order\" class=\"dialog_label\">试题乱序：</label>
            <input type=\"radio\" id=\"part_order_radio0\" name=\"part_order_radio\" value=\"0\" >
            <label for=\"part_order_radio0\" class=\"dialog_radio_label\" >否&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type=\"radio\" id=\"part_order_radio1\" name=\"part_order_radio\" value=\"1\" checked >
            <label for=\"part_order_radio1\" class=\"dialog_radio_label\" >是&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div style=\"width:561px;\">
            <label for=\"parts_duration\" class=\"dialog_label\">试卷时长：</label>
            <input type=\"text\"  class=\"dialog_input\" name=\"duration\" id=\"parts_duration\"  class=\"text ui-widget-content ui-corner-all\"  value=\"0\" style=\"width:150px;\">
            <span style=\"padding-right: 245px;text-align: left;\">分钟</span>
        </div>
        </br>
        <div>
            <label for=\"parts_questions_num\" class=\"dialog_label\">试题数量：</label>
            <input type=\"text\"  class=\"dialog_input\" name=\"questions_num\" id=\"parts_questions_num\"  class=\"text ui-widget-content ui-corner-all\"  value=\"0\" style=\"width:150px;\">
            <span style=\"width:200px;text-align: left;\">个</span>
        </div>
        
    </div>
    <div id=\"flash_message\">
        ";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 138
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 139
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    </div>
";
    }

    // line 145
    public function block_javascripts($context, array $blocks = array())
    {
        // line 146
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 147
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "56ee2ad_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad_0") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad_jquery-ui_1.js");
            // line 154
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "56ee2ad_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad_1") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad_autoTextarea_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "56ee2ad_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad_2") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad_ajaxfileupload_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "56ee2ad_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad_3") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad_jquery.combox_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "56ee2ad_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad_4") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad_partsAdd_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "56ee2ad"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_56ee2ad") : $this->env->getExtension('assets')->getAssetUrl("js/56ee2ad.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 156
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:partsAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 156,  513 => 154,  509 => 147,  504 => 146,  501 => 145,  496 => 142,  487 => 139,  484 => 138,  480 => 137,  455 => 114,  444 => 112,  440 => 111,  432 => 105,  427 => 103,  424 => 102,  419 => 100,  416 => 99,  414 => 98,  410 => 96,  407 => 95,  392 => 93,  375 => 89,  366 => 87,  361 => 86,  355 => 84,  352 => 83,  344 => 81,  334 => 80,  328 => 77,  324 => 76,  317 => 75,  313 => 74,  308 => 73,  305 => 72,  288 => 70,  278 => 69,  272 => 66,  268 => 65,  261 => 64,  257 => 63,  249 => 62,  244 => 61,  241 => 60,  233 => 58,  223 => 57,  217 => 54,  213 => 53,  206 => 52,  202 => 51,  197 => 50,  195 => 49,  191 => 48,  187 => 47,  183 => 46,  179 => 45,  172 => 44,  169 => 43,  167 => 42,  163 => 40,  158 => 39,  141 => 38,  136 => 37,  119 => 36,  116 => 35,  105 => 33,  101 => 32,  98 => 31,  94 => 29,  92 => 28,  84 => 23,  79 => 21,  73 => 18,  68 => 16,  63 => 14,  58 => 12,  55 => 11,  52 => 10,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  31 => 2,);
    }
}
