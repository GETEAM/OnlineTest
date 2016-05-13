<?php

/* OnlineTestAdminBundle:Admin:answersDetail.html.twig */
class __TwigTemplate_d43af1dfecc757d70ff22e42dffc28ae525c0f90cbda062923377dca1fa01ff2 extends Twig_Template
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
        <li><a href=\"#\" class=\"button button-rounded button-flat-primary\">答卷详情</a></li> 
    </ul>
    </br>
    </br>
    <div id=\"student_infor\" class=\"left_infor\">
        <div class=\"left_title\">
            考生信息
        </div>
            <div id=\"student_username\" hidden>";
        // line 12
        if ($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array())) {
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array()), "username", array()), "html", null, true);
        } else {
            echo "匿名";
        }
        // line 14
        echo "            </div>
            <div>
                ";
        // line 16
        if ($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array())) {
            // line 17
            echo "考号：";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array()), "studentName", array()), "html", null, true);
        } else {
            echo "匿名";
        }
        // line 18
        echo "            </div>
            <div>
                ";
        // line 20
        if ($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array())) {
            // line 21
            echo "姓名：";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["exam_record"]) ? $context["exam_record"] : null), "student", array()), "name", array()), "html", null, true);
        } else {
            echo "匿名";
        }
        // line 22
        echo "            </div>
    </div>
";
    }

    // line 25
    public function block_function_title($context, array $blocks = array())
    {
        // line 26
        echo "    <span>答卷详情</span>
";
    }

    // line 28
    public function block_function_content($context, array $blocks = array())
    {
        // line 29
        echo "    <div id=\"paper_infor\">
        <div id=\"paperId\" hidden>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_examName\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "examName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "paperName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            开始时间：";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "starttime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;
            结束时间：";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "endtime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </div>
    </div>
    <div id=\"parts_area\">
        ";
        // line 44
        if (((isset($context["hasParts"]) ? $context["hasParts"] : null) == 0)) {
            // line 45
            echo "            <div id=\"hasParts\">该试卷暂无考题块，请点击右侧功能图标进行添加。</div>
        ";
        } else {
            // line 47
            echo "            <ul>
                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["part"]) {
                // line 49
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
            // line 51
            echo "            </ul>
            ";
            // line 52
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
                // line 53
                echo "                <div id=\"Part";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" class=\"part_area\">
                ";
                // line 54
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
                    // line 55
                    echo "                    <div id=\"question_";
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "\" class=\"questions\">
                    <span class=\"order_num\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</span>
                    <span class=\"question_id\" hidden>";
                    // line 57
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "</span>
                    ";
                    // line 58
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_no_img")) {
                        // line 59
                        echo "                    <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                    ";
                        // line 60
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 61
                            echo "                        <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 62
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 63
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                ";
                            // line 66
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 67
                                echo "                                    ";
                                if (($this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array") == ($context["key1"] + 1))) {
                                    // line 68
                                    echo "                                         ";
                                    echo "checked";
                                    echo "
                                    ";
                                }
                                // line 70
                                echo "                                ";
                            }
                            echo "/><label  
                                ";
                            // line 71
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 72
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                    // line 73
                                    echo "                                        class=\"option_label1 right_option\"
                                    ";
                                } elseif ((($this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array") == ($context["key1"] + 1)) && ($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) != $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array")))) {
                                    // line 75
                                    echo "                                        class=\"option_label1 wrong_option\"
                                    ";
                                } else {
                                    // line 77
                                    echo "                                        class=\"option_label1\" 
                                    ";
                                }
                                // line 79
                                echo "                                ";
                            } else {
                                // line 80
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                    // line 81
                                    echo "                                        class=\"option_label1 right_option\"
                                    ";
                                } else {
                                    // line 83
                                    echo "                                        class=\"option_label1\" 
                                    ";
                                }
                                // line 85
                                echo "                                ";
                            }
                            echo " for=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 87
                        echo "                    ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_img")) {
                        // line 88
                        echo "                    <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span>
                        ";
                        // line 89
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                    ";
                        // line 90
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 91
                            echo "                        <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 92
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 93
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                ";
                            // line 96
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 97
                                echo "                                    ";
                                if (($this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array") == ($context["key1"] + 1))) {
                                    // line 98
                                    echo "                                        ";
                                    echo "checked";
                                    echo "
                                    ";
                                }
                                // line 100
                                echo "                                ";
                            }
                            echo "/><label 
                                ";
                            // line 101
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 102
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                    // line 103
                                    echo "                                        class=\"option_label1 right_option\"
                                    ";
                                } elseif ((($this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array") == ($context["key1"] + 1)) && ($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) != $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array")))) {
                                    // line 105
                                    echo "                                        class=\"option_label1 wrong_option\"
                                    ";
                                } else {
                                    // line 107
                                    echo "                                        class=\"option_label1\" 
                                    ";
                                }
                                // line 109
                                echo "                                ";
                            } else {
                                // line 110
                                echo "                                    class=\"option_label1\" 
                                ";
                            }
                            // line 111
                            echo " for=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" ><span>";
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
                        // line 113
                        echo "                    ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "multiple_choices_no_img")) {
                        // line 114
                        echo "                    <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                    ";
                        // line 115
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 116
                            echo "                        <pre><input  type=\"checkbox\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 117
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_checkbox\"  
                                value=\"";
                            // line 118
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                ";
                            // line 121
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 122
                                echo "                                    ";
                                if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array"))) {
                                    // line 123
                                    echo "                                         ";
                                    echo "checked";
                                    echo "
                                    ";
                                }
                                // line 125
                                echo "                                ";
                            }
                            echo "/><label  
                                ";
                            // line 126
                            if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                                // line 127
                                echo "                                    ";
                                if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : null), $context["questionId"], array(), "array"))) {
                                    // line 128
                                    echo "                                        class=\"option_label1 right_option\"
                                    ";
                                } elseif ((twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array")) && !twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : null), $context["questionId"], array(), "array")))) {
                                    // line 131
                                    echo "                                        class=\"option_label1 wrong_option\"
                                    ";
                                } else {
                                    // line 133
                                    echo "                                        class=\"option_label1\" 
                                    ";
                                }
                                // line 135
                                echo "                                ";
                            } else {
                                // line 136
                                echo "                                    ";
                                if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : null), $context["questionId"], array(), "array"))) {
                                    // line 137
                                    echo "                                        class=\"option_label1 right_option\"
                                    ";
                                } else {
                                    // line 139
                                    echo "                                        class=\"option_label1\" 
                                    ";
                                }
                                // line 141
                                echo "                                ";
                            }
                            echo " for=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" >";
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo "                    ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_no_img")) {
                        // line 144
                        echo "                    <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span><br/>         
                    <pre>答：<textarea id=\"question_";
                        // line 145
                        echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                        echo "_answer\" 
                              class='text ui-widget-content ui-corner-all question_textarea1' 
                              placeholder=\"请输入答案\">";
                        // line 147
                        if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array"), "html", null, true);
                        }
                        echo "</textarea></pre>
                    ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_img")) {
                        // line 149
                        echo "                    <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span>         
                    ";
                        // line 150
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                    <pre>答：<textarea id=\"question_";
                        // line 151
                        echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                        echo "_answer\" 
                              class='text ui-widget-content ui-corner-all question_textarea1' 
                              placeholder=\"请输入答案\">";
                        // line 153
                        if (twig_in_filter($context["questionId"], twig_get_array_keys_filter((isset($context["answers"]) ? $context["answers"] : null)))) {
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["answers"]) ? $context["answers"] : null), $context["questionId"], array(), "array"), "html", null, true);
                        }
                        echo "</textarea></pre>
                ";
                    }
                    // line 155
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
                // line 158
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
            // line 160
            echo "        ";
        }
        // line 161
        echo "    </div>
";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 166
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "59b35ba_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59b35ba_0") : $this->env->getExtension('assets')->getAssetUrl("js/59b35ba_jquery-ui_1.js");
            // line 171
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "59b35ba_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59b35ba_1") : $this->env->getExtension('assets')->getAssetUrl("js/59b35ba_autoTextarea_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "59b35ba_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59b35ba_2") : $this->env->getExtension('assets')->getAssetUrl("js/59b35ba_answerDetail_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "59b35ba"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_59b35ba") : $this->env->getExtension('assets')->getAssetUrl("js/59b35ba.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 173
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:answersDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 173,  580 => 171,  576 => 166,  571 => 165,  568 => 164,  563 => 161,  560 => 160,  545 => 158,  529 => 155,  522 => 153,  517 => 151,  509 => 150,  504 => 149,  497 => 147,  492 => 145,  487 => 144,  484 => 143,  469 => 141,  465 => 139,  461 => 137,  458 => 136,  455 => 135,  451 => 133,  447 => 131,  443 => 128,  440 => 127,  438 => 126,  433 => 125,  427 => 123,  424 => 122,  422 => 121,  416 => 118,  412 => 117,  405 => 116,  401 => 115,  396 => 114,  393 => 113,  371 => 111,  367 => 110,  364 => 109,  360 => 107,  356 => 105,  352 => 103,  349 => 102,  347 => 101,  342 => 100,  336 => 98,  333 => 97,  331 => 96,  325 => 93,  321 => 92,  314 => 91,  310 => 90,  302 => 89,  297 => 88,  294 => 87,  279 => 85,  275 => 83,  271 => 81,  268 => 80,  265 => 79,  261 => 77,  257 => 75,  253 => 73,  250 => 72,  248 => 71,  243 => 70,  237 => 68,  234 => 67,  232 => 66,  226 => 63,  222 => 62,  215 => 61,  211 => 60,  206 => 59,  204 => 58,  200 => 57,  196 => 56,  191 => 55,  174 => 54,  169 => 53,  152 => 52,  149 => 51,  138 => 49,  134 => 48,  131 => 47,  127 => 45,  125 => 44,  118 => 40,  113 => 38,  107 => 35,  101 => 32,  96 => 30,  93 => 29,  90 => 28,  85 => 26,  82 => 25,  76 => 22,  70 => 21,  68 => 20,  64 => 18,  58 => 17,  56 => 16,  52 => 14,  47 => 13,  45 => 12,  34 => 3,  31 => 2,);
    }
}
