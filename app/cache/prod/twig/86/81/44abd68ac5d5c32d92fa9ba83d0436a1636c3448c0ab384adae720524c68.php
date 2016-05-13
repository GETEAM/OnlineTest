<?php

/* OnlineTestAdminBundle:Admin:resultStatistics.html.twig */
class __TwigTemplate_868144abd68ac5d5c32d92fa9ba83d0436a1636c3448c0ab384adae720524c68 extends Twig_Template
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
        <li><a href=\"#\" class=\"button button-rounded button-flat-primary\">考试结果统计</a></li> 
    </ul>
";
    }

    // line 7
    public function block_function_title($context, array $blocks = array())
    {
        // line 8
        echo "    <span>考试结果统计信息</span>
";
    }

    // line 10
    public function block_function_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"paper_infor\">
        <div id=\"paperId\" hidden>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_examName\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "examName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "paperName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            开始时间：";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "starttime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;
            结束时间：";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "exam", array()), "endtime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor statisticsFont\">
            参与考试人数：";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["records_num"]) ? $context["records_num"] : null), "html", null, true);
        echo "
        </div>
    </div>
    <div id=\"parts_area\">
        ";
        // line 29
        if (((isset($context["hasParts"]) ? $context["hasParts"] : null) == 0)) {
            // line 30
            echo "            <div id=\"hasParts\">该试卷暂无考题块，请点击右侧功能图标进行添加。</div>
        ";
        } else {
            // line 32
            echo "            <ul>
                ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["part"]) {
                // line 34
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
            // line 36
            echo "            </ul>
            ";
            // line 37
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
                // line 38
                echo "                <div id=\"Part";
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "\" class=\"part_area\">
                    ";
                // line 39
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
                    // line 40
                    echo "                        <div id=\"question_";
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "\" class=\"questions\">
                            <span class=\"order_num\">";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_infor\">";
                    // line 43
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isMustSelect", array()) == 1)) {
                        // line 44
                        echo "(必选)";
                    } else {
                        // line 45
                        echo "(可选)";
                    }
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "kind", array()), "html", null, true);
                    echo ")</span>
                            <span class=\"question_id\" hidden>";
                    // line 46
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "</span>
                            <span class=\"question_isMustSelect\" hidden>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isMustSelect", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_kind\" hidden>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "kind", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_isOptionShuffle\" hidden>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "isOptionShuffle", array()), "html", null, true);
                    echo "</span>
                            ";
                    // line 50
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_no_img")) {
                        // line 51
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 52
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 53
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 54
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 55
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 58
                            if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 59
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "<span class=\"statisticsFont\">&nbsp;(选择人数：";
                            // line 60
                            if (twig_in_filter(($context["key1"] + 1), twig_get_array_keys_filter($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array")))) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                                // line 62
                                echo "&nbsp;占：";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_rate"]) ? $context["questions_option_rate"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                            } else {
                                // line 64
                                echo "0 &nbsp;占：0%";
                            }
                            echo ")</span></label></pre>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "single_choice_img")) {
                        // line 67
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span>
                                    ";
                        // line 68
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                                    ";
                        // line 69
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 70
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 71
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 72
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 75
                            if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "answer", array()) == ($context["key1"] + 1))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\"><span>";
                            // line 76
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "<span class=\"statisticsFont\">&nbsp;(选择人数：";
                            // line 77
                            if (twig_in_filter(($context["key1"] + 1), twig_get_array_keys_filter($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array")))) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                                // line 79
                                echo "&nbsp;占：";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_rate"]) ? $context["questions_option_rate"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                            } else {
                                // line 81
                                echo "0 &nbsp;占：0%";
                            }
                            echo ")</span></span>";
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
                        // line 83
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "multiple_choices_no_img")) {
                        // line 84
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 85
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 86
                            echo "                                    <pre><input  type=\"checkbox\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 87
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_checkbox\"  
                                value=\"";
                            // line 88
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                disabled 
                                        ";
                            // line 91
                            if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : null), $context["questionId"], array(), "array"))) {
                                echo "checked";
                            }
                            echo "/><label  for=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 92
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "<span class=\"statisticsFont\">&nbsp;(选择人数：";
                            // line 93
                            if (twig_in_filter(($context["key1"] + 1), twig_get_array_keys_filter($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array")))) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                                // line 95
                                echo "&nbsp;占：";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_rate"]) ? $context["questions_option_rate"] : null), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                            } else {
                                // line 97
                                echo "0 &nbsp;占：0%";
                            }
                            echo ")</span></label></pre>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 99
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_no_img")) {
                        // line 100
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span><br/>         
                                <pre><span class=\"statisticsFont\">&nbsp;(填写人数：";
                        // line 102
                        if (twig_in_filter(1, twig_get_array_keys_filter($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array")))) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array"), 1, array(), "array"), "html", null, true);
                            // line 104
                            echo "&nbsp;占：";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_rate"]) ? $context["questions_option_rate"] : null), $context["questionId"], array(), "array"), 1, array(), "array"), "html", null, true);
                        } else {
                            // line 106
                            echo "0 &nbsp;占：0%";
                        }
                        echo ")</span></pre>
                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : null), $context["questionId"], array(), "array"), "type", array()) == "short_answer_img")) {
                        // line 108
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : null), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span>         
                                ";
                        // line 109
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : null), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                                <pre><span class=\"statisticsFont\">&nbsp;(填写人数：";
                        // line 111
                        if (twig_in_filter(1, twig_get_array_keys_filter($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array")))) {
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_num"]) ? $context["questions_option_num"] : null), $context["questionId"], array(), "array"), 1, array(), "array"), "html", null, true);
                            // line 113
                            echo "&nbsp;占：";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_option_rate"]) ? $context["questions_option_rate"] : null), $context["questionId"], array(), "array"), 1, array(), "array"), "html", null, true);
                        } else {
                            // line 115
                            echo "0 &nbsp;占：0%";
                        }
                        echo ")</span></pre>
                        ";
                    }
                    // line 117
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
                // line 121
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
            // line 123
            echo "        ";
        }
        // line 124
        echo "    </div>
";
    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 129
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1b3ff7f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b3ff7f_0") : $this->env->getExtension('assets')->getAssetUrl("js/1b3ff7f_jquery-ui_1.js");
            // line 134
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "1b3ff7f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b3ff7f_1") : $this->env->getExtension('assets')->getAssetUrl("js/1b3ff7f_autoTextarea_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "1b3ff7f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b3ff7f_2") : $this->env->getExtension('assets')->getAssetUrl("js/1b3ff7f_resultStatistics_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "1b3ff7f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1b3ff7f") : $this->env->getExtension('assets')->getAssetUrl("js/1b3ff7f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 136
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:resultStatistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 136,  482 => 134,  478 => 129,  473 => 128,  470 => 127,  465 => 124,  462 => 123,  447 => 121,  430 => 117,  424 => 115,  420 => 113,  417 => 111,  409 => 109,  404 => 108,  398 => 106,  394 => 104,  391 => 102,  386 => 100,  383 => 99,  374 => 97,  370 => 95,  367 => 93,  364 => 92,  354 => 91,  348 => 88,  344 => 87,  337 => 86,  333 => 85,  328 => 84,  325 => 83,  307 => 81,  303 => 79,  300 => 77,  297 => 76,  287 => 75,  281 => 72,  277 => 71,  270 => 70,  266 => 69,  258 => 68,  253 => 67,  250 => 66,  241 => 64,  237 => 62,  234 => 60,  231 => 59,  221 => 58,  215 => 55,  211 => 54,  204 => 53,  200 => 52,  195 => 51,  193 => 50,  189 => 49,  185 => 48,  181 => 47,  177 => 46,  170 => 45,  167 => 44,  165 => 43,  161 => 41,  156 => 40,  139 => 39,  134 => 38,  117 => 37,  114 => 36,  103 => 34,  99 => 33,  96 => 32,  92 => 30,  90 => 29,  83 => 25,  77 => 22,  72 => 20,  66 => 17,  60 => 14,  55 => 12,  52 => 11,  49 => 10,  44 => 8,  41 => 7,  34 => 3,  31 => 2,);
    }
}
