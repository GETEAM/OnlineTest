<?php

/* OnlineTestMainBundle:Main:exam.html.twig */
class __TwigTemplate_7f147334b7e71872be66a40ed592cb332d77406ac7b187d5ae40a7c40aaec22a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestMainBundle::student.html.twig");

        $this->blocks = array(
            'admin_main_left' => array($this, 'block_admin_main_left'),
            'function_content' => array($this, 'block_function_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestMainBundle::student.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"student_infor\" class=\"left_infor\">
        <div class=\"left_title\">
            用户信息
        </div>
        ";
        // line 8
        if (($this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "isRealName", array()) == 1)) {
            // line 9
            echo "            <div id=\"student_username\" hidden>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</div>
            <div>
                用户名：";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "studentName", array()), "html", null, true);
            echo "
            </div>
            <div>
                姓&nbsp;&nbsp;&nbsp;&nbsp;名：";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo "
            </div>

        ";
        } else {
            // line 18
            echo "            <div>
                <div id=\"student_username\" hidden>匿名</div>
                匿名考试无信息
            </div>

        ";
        }
        // line 24
        echo "    </div>
    <div id=\"paper_infors\" class=\"left_infor\" hidden>
        <div id=\"paper_infor_paperId\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "id", array()), "html", null, true);
        echo "</div>
        <div id=\"paper_infor_isrealname\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "isRealName", array()), "html", null, true);
        echo "</div>
        <div id=\"paper_infor_resttime\">";
        // line 28
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "duration", array()) * 60), "html", null, true);
        echo "</div>
    </div>
    <div id=\"time_infor\" class=\"glow left_infor\">
        <div class=\"left_title\">
            剩余时间
        </div>
        <div id=\"time_infor_resttime\">
        </div>
    </div>
    <div id=\"questions_link\" class=\"left_infor\">
        <div class=\"left_title\">
            试题列表
        </div>
        <div>
            ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
        foreach ($context['_seq'] as $context["key"] => $context["part"]) {
            // line 43
            echo "            <div class=\"left_title\">
                Part ";
            // line 44
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "
            </div>
            <table class=\"question_link_table\">
            ";
            // line 47
            if (($this->getAttribute($context["part"], "question_rows", array(), "array") > 1)) {
                // line 48
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($this->getAttribute($context["part"], "question_rows", array(), "array") - 2)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 49
                    echo "                    <tr>
                        ";
                    // line 50
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["part"], "question_pre_row", array(), "array")));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 51
                        echo "                            <td onclick=\"locate(";
                        echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, (($context["i"] * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) + $context["j"]), "html", null, true);
                        echo ");\" id=\"td_";
                        echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (($context["i"] * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) + $context["j"]), "html", null, true);
                        echo "\" class=\"td_undo\">";
                        echo twig_escape_filter($this->env, (($context["i"] * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) + $context["j"]), "html", null, true);
                        echo "</td>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                <tr>
                    ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(((($this->getAttribute($context["part"], "question_rows", array(), "array") - 1) * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) + 1), $this->getAttribute($context["part"], "question_num", array(), "array")));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 57
                    echo "                        <td onclick=\"locate(";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo ");\" id=\"td_";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\" class=\"td_undo\">";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "</td>        
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    ";
                if ((($this->getAttribute($context["part"], "question_rows", array(), "array") * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) >= ($this->getAttribute($context["part"], "question_num", array(), "array") + 1))) {
                    // line 60
                    echo "                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(($this->getAttribute($context["part"], "question_num", array(), "array") + 1), ($this->getAttribute($context["part"], "question_rows", array(), "array") * $this->getAttribute($context["part"], "question_pre_row", array(), "array"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 61
                        echo "                            <td class=\"td_undo\"> </td>        
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 63
                    echo "                    ";
                }
                // line 64
                echo "                </tr>
            ";
            }
            // line 66
            echo "            ";
            if (($this->getAttribute($context["part"], "question_rows", array(), "array") == 1)) {
                // line 67
                echo "            <tr>
                ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["part"], "question_num", array(), "array")));
                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                    // line 69
                    echo "                    <td onclick=\"locate(";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo ");\" id=\"td_";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\" class=\"td_undo\">";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "</td>        
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                ";
                if ((($this->getAttribute($context["part"], "question_rows", array(), "array") * $this->getAttribute($context["part"], "question_pre_row", array(), "array")) >= ($this->getAttribute($context["part"], "question_num", array(), "array") + 1))) {
                    // line 72
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(($this->getAttribute($context["part"], "question_num", array(), "array") + 1), ($this->getAttribute($context["part"], "question_rows", array(), "array") * $this->getAttribute($context["part"], "question_pre_row", array(), "array"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 73
                        echo "                        <td class=\"td_undo\"> </td>        
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                ";
                }
                // line 76
                echo "            </tr>
            ";
            }
            // line 78
            echo "            </table>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
    </div>
    
";
    }

    // line 85
    public function block_function_content($context, array $blocks = array())
    {
        // line 86
        echo "    <div id=\"paper_infor\">
        <div id=\"paperId\" hidden>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "id", array()), "html", null, true);
        echo "</div>
        <div id=\"examId\" hidden>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "exam", array()), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_examName\">
            ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "exam", array()), "examName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "paperName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            开始时间：";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "exam", array()), "starttime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;
            结束时间：";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : $this->getContext($context, "paper")), "exam", array()), "endtime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </div>
    </div>
    <div id=\"parts_area\">
        ";
        // line 102
        if (((isset($context["hasParts"]) ? $context["hasParts"] : $this->getContext($context, "hasParts")) == 0)) {
            // line 103
            echo "            <div id=\"hasParts\">该试卷暂无考题块，请点击右侧功能图标进行添加。</div>
        ";
        } else {
            // line 105
            echo "            <ul>
                ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
            foreach ($context['_seq'] as $context["key"] => $context["part"]) {
                // line 107
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
            // line 109
            echo "            </ul>
            ";
            // line 110
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["parts"]) ? $context["parts"] : $this->getContext($context, "parts")));
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
            foreach ($context['_seq'] as $context["part_key"] => $context["part"]) {
                // line 111
                echo "                <div id=\"Part";
                echo twig_escape_filter($this->env, ($context["part_key"] + 1), "html", null, true);
                echo "\" class=\"part_area\">
                    ";
                // line 112
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
                    // line 113
                    echo "                        <div id=\"question_";
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "\" class=\"questions\">
                            <span class=\"order_num\" href=\"#q_";
                    // line 114
                    echo twig_escape_filter($this->env, ($context["part_key"] + 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" id=\"q_";
                    echo twig_escape_filter($this->env, ($context["part_key"] + 1), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</span>
                            <span class=\"question_id\" hidden>";
                    // line 115
                    echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                    echo "</span>
                            <span class=\"question_in_part\" hidden>";
                    // line 116
                    echo twig_escape_filter($this->env, ($context["part_key"] + 1), "html", null, true);
                    echo "</span>
                            <span class=\"question_type\" hidden>";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()), "html", null, true);
                    echo "</span>
                            ";
                    // line 118
                    if (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()) == "single_choice_no_img")) {
                        // line 119
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 120
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key"] => $context["question_option"]) {
                            // line 121
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 122
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 123
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                /><label  for=\"question_";
                            // line 125
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 126
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 128
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()) == "single_choice_img")) {
                        // line 129
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span>
                                    ";
                        // line 130
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                                    ";
                        // line 131
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 132
                            echo "                                    <pre><input  type=\"radio\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 133
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_radio\"  
                                value=\"";
                            // line 134
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                /><label  for=\"question_";
                            // line 136
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "id", array()), "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\"><span>";
                            // line 137
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</span>";
                            if ((($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array") != "0") && ($context["question_option"] != ""))) {
                                echo "</br>";
                            }
                            if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array")) {
                                echo "<img src=\"/";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                                echo "\"/>";
                            }
                            echo "</label></pre>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 139
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()) == "multiple_choices_no_img")) {
                        // line 140
                        echo "                                <span class=\"question_stem\">";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span><br/>
                                ";
                        // line 141
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_options", array(), "array"));
                        foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                            // line 142
                            echo "                                    <pre><input  type=\"checkbox\" id=\"question_";
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                name=\"question_";
                            // line 143
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_checkbox\"  
                                value=\"";
                            // line 144
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\"  
                                class=\"option_radio\"  
                                /><label  for=\"question_";
                            // line 146
                            echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                            echo "_option_";
                            echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                            echo "\" 
                                class=\"option_label1\">";
                            // line 147
                            echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                            echo "</label></pre>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 149
                        echo "                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()) == "short_answer_no_img")) {
                        // line 150
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span><br/>         
                                <pre><textarea id=\"question_";
                        // line 151
                        echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                        echo "_answer\" 
                                    style=\"min-height:200px; overflow:hidden;\"
                                    class='text ui-widget-content ui-corner-all question_textarea1' 
                                    placeholder=\"请输入答案\"></textarea></pre>
                            ";
                    } elseif (($this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["questionId"], array(), "array"), "type", array()) == "short_answer_img")) {
                        // line 156
                        echo "                                <span class=\"question_stem\"><span>";
                        echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["questionId"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                        echo "</span></span>         
                                ";
                        // line 157
                        if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), 0, array(), "array")) {
                            echo "<br/><img src=\"/";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["questionId"], array(), "array"), 0, array(), "array"), "html", null, true);
                            echo "\"/>";
                        }
                        echo "</span><br/>
                                <pre><textarea id=\"question_";
                        // line 158
                        echo twig_escape_filter($this->env, $context["questionId"], "html", null, true);
                        echo "_answer\" 
                                        style=\"min-height:200px; overflow:hidden;\"
                                        class='text ui-widget-content ui-corner-all question_textarea1' 
                                        placeholder=\"请输入答案\"></textarea></pre>
                            ";
                    }
                    // line 163
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
                // line 167
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
            unset($context['_seq'], $context['_iterated'], $context['part_key'], $context['part'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "        ";
        }
        // line 170
        echo "        <br>
        <div>
            <a href=\"#\" onclick=\"submit_paper_isAuto(0)\" style=\"margin-left:150px;\" id=\"end_exam\" class=\"button glow button-rounded button-flat-primary part_tool_button\">提交</a>
        </div>
        <br>
    </div>
    <div id=\"flash_message\">
        <div class=\"button glow button-rounded button-flat-action flash-notice\">
        </div>
    </div>
";
    }

    // line 182
    public function block_javascripts($context, array $blocks = array())
    {
        // line 183
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 184
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "724e83e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_724e83e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/724e83e_jquery-ui_1.js");
            // line 189
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "724e83e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_724e83e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/724e83e_autoTextarea_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "724e83e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_724e83e_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/724e83e_exam_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "724e83e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_724e83e") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/724e83e.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 191
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle:Main:exam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 191,  631 => 189,  627 => 184,  622 => 183,  619 => 182,  605 => 170,  602 => 169,  587 => 167,  570 => 163,  562 => 158,  554 => 157,  549 => 156,  541 => 151,  536 => 150,  533 => 149,  525 => 147,  519 => 146,  514 => 144,  510 => 143,  503 => 142,  499 => 141,  494 => 140,  491 => 139,  474 => 137,  468 => 136,  463 => 134,  459 => 133,  452 => 132,  448 => 131,  440 => 130,  435 => 129,  432 => 128,  424 => 126,  418 => 125,  413 => 123,  409 => 122,  402 => 121,  398 => 120,  393 => 119,  391 => 118,  387 => 117,  383 => 116,  379 => 115,  367 => 114,  362 => 113,  345 => 112,  340 => 111,  323 => 110,  320 => 109,  309 => 107,  305 => 106,  302 => 105,  298 => 103,  296 => 102,  289 => 98,  284 => 96,  278 => 93,  272 => 90,  267 => 88,  263 => 87,  260 => 86,  257 => 85,  250 => 80,  243 => 78,  239 => 76,  236 => 75,  229 => 73,  224 => 72,  221 => 71,  204 => 69,  200 => 68,  197 => 67,  194 => 66,  190 => 64,  187 => 63,  180 => 61,  175 => 60,  172 => 59,  155 => 57,  151 => 56,  148 => 55,  141 => 53,  124 => 51,  120 => 50,  117 => 49,  112 => 48,  110 => 47,  104 => 44,  101 => 43,  97 => 42,  80 => 28,  76 => 27,  72 => 26,  68 => 24,  60 => 18,  53 => 14,  47 => 11,  41 => 9,  39 => 8,  33 => 4,  30 => 3,);
    }
}
