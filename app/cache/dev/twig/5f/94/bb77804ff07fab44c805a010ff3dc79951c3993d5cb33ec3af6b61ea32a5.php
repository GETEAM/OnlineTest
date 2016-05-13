<?php

/* OnlineTestAdminBundle:Admin:questionsAdd.html.twig */
class __TwigTemplate_5f94bb77804ff07fab44c805a010ff3dc79951c3993d5cb33ec3af6b61ea32a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle::admin.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 4
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eae182a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eae182a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/eae182a_combox_style_1.css");
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "eae182a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eae182a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/eae182a.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    
";
    }

    // line 13
    public function block_admin_main_left($context, array $blocks = array())
    {
        // line 14
        echo "    <ul>
        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_questions", array("examId" => $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()))), "html", null, true);
        echo "\" class=\"button button-rounded button-flat-primary\">添加试题</a></li> 
    </ul>
";
    }

    // line 18
    public function block_function_title($context, array $blocks = array())
    {
        // line 19
        echo "    <span>添加试题</span>
";
    }

    // line 21
    public function block_function_content($context, array $blocks = array())
    {
        // line 22
        echo "    <div id=\"exam_infor\">
        <div id=\"examId\" hidden>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
        echo "</div>
        <div class=\"font_examName\">
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "examName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"font_paperInfor\">
            开始时间：";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "starttime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
            &nbsp;&nbsp;&nbsp;&nbsp;
            开始时间：";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "endtime", array()), "Y-m-d H:i"), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 33
        if (((isset($context["hasQuestions"]) ? $context["hasQuestions"] : $this->getContext($context, "hasQuestions")) == 0)) {
            // line 34
            echo "        <div id=\"hasQuestions\">该试卷暂无考题，请点击右侧功能图标进行添加。</div>
    ";
        }
        // line 36
        echo "    <div id=\"questions_area\">
        ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
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
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            // line 38
            echo "            <div id=\"question_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" class=\"questions\">
                <span class=\"order_num\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</span>
                <span class=\"question_infor\">";
            // line 41
            if (($this->getAttribute($context["question"], "isMustSelect", array()) == 1)) {
                // line 42
                echo "(必选)";
            } else {
                // line 43
                echo "(可选)";
            }
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "kind", array()), "html", null, true);
            echo ")</span>
                <span class=\"question_id\" hidden>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "</span>
                <span class=\"question_isMustSelect\" hidden>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "isMustSelect", array()), "html", null, true);
            echo "</span>
                <span class=\"question_kind\" hidden>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "kind", array()), "html", null, true);
            echo "</span>
                <span class=\"question_isOptionShuffle\" hidden>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "isOptionShuffle", array()), "html", null, true);
            echo "</span>
                ";
            // line 48
            if (($this->getAttribute($context["question"], "type", array()) == "single_choice_no_img")) {
                // line 49
                echo "                    <span class=\"question_stem\">";
                echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                echo "</span><br/>
                    ";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_options", array(), "array"));
                foreach ($context['_seq'] as $context["key"] => $context["question_option"]) {
                    // line 51
                    echo "                        <pre><input  type=\"radio\" id=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "\"  
                                name=\"question_";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_radio\"  
                                value=\"";
                    // line 53
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "\"  
                                class=\"option_radio\"  
                                disabled 
                            ";
                    // line 56
                    if (($this->getAttribute($context["question"], "answer", array()) == ($context["key"] + 1))) {
                        echo "checked";
                    }
                    echo "/><label  for=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "\" 
                                class=\"option_label\">";
                    // line 57
                    echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                    echo "</label></pre>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['question_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "single_choice_img")) {
                // line 60
                echo "                    <span class=\"question_stem\"><span>";
                echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                echo "</span>
                        ";
                // line 61
                if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), 0, array(), "array")) {
                    echo "<br/><img src=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), 0, array(), "array"), "html", null, true);
                    echo "\"/>";
                }
                echo "</span><br/>
                    ";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_options", array(), "array"));
                foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                    // line 63
                    echo "                        <pre><input  type=\"radio\" id=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\"  
                                name=\"question_";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_radio\"  
                                value=\"";
                    // line 65
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\"  
                                class=\"option_radio\"  
                                disabled 
                            ";
                    // line 68
                    if (($this->getAttribute($context["question"], "answer", array()) == ($context["key1"] + 1))) {
                        echo "checked";
                    }
                    echo "/><label  for=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\" 
                                class=\"option_label\"><span>";
                    // line 69
                    echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                    echo "</span>";
                    if ((($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), ($context["key1"] + 1), array(), "array") != "0") && ($context["question_option"] != ""))) {
                        echo "</br>";
                    }
                    if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), ($context["key1"] + 1), array(), "array")) {
                        echo "<img src=\"/";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), ($context["key1"] + 1), array(), "array"), "html", null, true);
                        echo "\"/>";
                    }
                    echo "</label></pre>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "multiple_choices_no_img")) {
                // line 72
                echo "                    <span class=\"question_stem\">";
                echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                echo "</span><br/>
                    ";
                // line 73
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_options", array(), "array"));
                foreach ($context['_seq'] as $context["key1"] => $context["question_option"]) {
                    // line 74
                    echo "                        <pre><input  type=\"checkbox\" id=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\"  
                                name=\"question_";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_checkbox\"  
                                value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\"  
                                class=\"option_radio\"  
                                disabled 
                            ";
                    // line 79
                    if (twig_in_filter(($context["key1"] + 1), $this->getAttribute((isset($context["mul_choices_answers"]) ? $context["mul_choices_answers"] : $this->getContext($context, "mul_choices_answers")), $context["key"], array(), "array"))) {
                        echo "checked";
                    }
                    echo "/><label  for=\"question_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                    echo "_option_";
                    echo twig_escape_filter($this->env, ($context["key1"] + 1), "html", null, true);
                    echo "\" 
                                class=\"option_label\">";
                    // line 80
                    echo twig_escape_filter($this->env, $context["question_option"], "html", null, true);
                    echo "</label></pre>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key1'], $context['question_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "short_answer_no_img")) {
                // line 83
                echo "                    <span class=\"question_stem\"><span>";
                echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                echo "</span></span><br/>         
                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "short_answer_img")) {
                // line 85
                echo "                    <span class=\"question_stem\"><span>";
                echo nl2br(strtr($this->getAttribute($this->getAttribute((isset($context["questions_content"]) ? $context["questions_content"] : $this->getContext($context, "questions_content")), $context["key"], array(), "array"), "question_stem", array(), "array"), array(" " => "&nbsp;")));
                echo "</span></span>         
                    ";
                // line 86
                if ($this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), 0, array(), "array")) {
                    echo "<br/><img src=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions_images"]) ? $context["questions_images"] : $this->getContext($context, "questions_images")), $context["key"], array(), "array"), 0, array(), "array"), "html", null, true);
                    echo "\"/>";
                }
                echo "</span><br/>
                ";
            }
            // line 88
            echo "                <div class=\"questions_operations\">
                    <a href=\"#\" onclick=\"open_edit_question_dialog('";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "type", array()), "html", null, true);
            echo "')\" 
                            class=\"button button-rounded button-flat-primary button-tiny question_op\"
                            >编辑</a>
                    <a href=\"#\" onclick=\"delete_question_confirm('";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "')\" 
                            class=\"button button-rounded button-flat-primary button-tiny question_op\"
                            >删除</a>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    </div>
    <div id=\"dialog_add_questions\" title=\"添加试题\">
        <div>
            <label for=\"questions_type\" class=\"dialog_label\">试题类型：</label>
            <select id=\"question_type\" class=\"text ui-widget-content ui-corner-all dialog_input\">  
                <option name=\"questions_type_options\" value =\"single_choice_no_img\">单项选择题-无图片</option>  
                <option name=\"questions_type_options\" value =\"single_choice_img\">单项选择题-有图片</option>
                <option name=\"questions_type_options\" value=\"multiple_choices_no_img\">多选题-无图片</option>
                <option name=\"questions_type_options\" value=\"short_answer_no_img\">简答题-无图片</option>  
                <option name=\"questions_type_options\" value=\"short_answer_img\">简答题-有图片</option>  
            </select>
        </div>
        <div id=\"question_kind_div\">
            <label for=\"questions_kind\" class=\"dialog_label\">所属类别：</label>
            <span id=\"questions_kind\" class=\"dialog_input\"></span>
        </div>
        <div>
            <label for=\"mustSelect\" class=\"dialog_label\">是否必选：</label>
            <input type=\"radio\" id=\"mustSelect_radio0\" name=\"mustSelect\" value=\"0\" >
            <label for=\"mustSelect_radio0\" class=\"dialog_radio_label\" >否&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type=\"radio\" id=\"mustSelect_radio1\" name=\"mustSelect\" value=\"1\" checked >
            <label for=\"mustSelect_radio1\" class=\"dialog_radio_label\" >是&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div>
            <label for=\"optionShuffle\" class=\"dialog_label\">选项乱序：</label>
            <input type=\"radio\" id=\"optionShuffle_radio0\" name=\"optionShuffle\" value=\"0\" >
            <label for=\"optionShuffle_radio0\" class=\"dialog_radio_label\" >否&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type=\"radio\" id=\"optionShuffle_radio1\" name=\"optionShuffle\" value=\"1\" checked >
            <label for=\"optionShuffle_radio1\" class=\"dialog_radio_label\" >是&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <form id=\"single_choice_no_img\">
            <fieldset>
                <div>
                    <label for=\"SCNI_stem_textarea\" class=\"dialog_label\">题干内容：</label>
                    <textarea id=\"SCNI_stem_textarea\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入题干内容\"></textarea>
                </div>
                <div>
                    <label for=\"SCNI_question_option1\" class=\"dialog_label\">
                        <input type=\"radio\" name=\"SCNI_option_radio\" value=\"1\"/>选项1：
                    </label>
                    <textarea id=\"SCNI_question_option1\" 
                              name=\"SCNI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>
                </div>
                <div>
                    <label for=\"SCNI_question_option2\" class=\"dialog_label\">
                        <input type=\"radio\" name=\"SCNI_option_radio\" value=\"2\"/>选项2：
                    </label>
                    <textarea id=\"SCNI_question_option2\" 
                              name=\"SCNI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>                   
                </div> 
            </fieldset>
            <div style=\"margin-left: 385px;\">
                <a href=\"#\" onclick=\"add_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                    添加选项
                </a>
                <a href=\"#\" onclick=\"minus_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                    减少选项
                </a>
            </div>
            
        </form>
        <form id=\"single_choice_img\"  hidden>
            <fieldset>
                <div>
                    <label for=\"SCI_stem_textarea\" class=\"dialog_label\">题干内容：</label>
                    <textarea id=\"SCI_stem_textarea\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入题干内容\"></textarea>
                    <input type=\"file\" id=\"SCI_stem_img\" name=\"SCI_stem_img\"  class=\"dialog_file\" />
                </div>
                <div>
                    <label for=\"SCI_question_option1\" class=\"dialog_label\">
                        <input type=\"radio\" name=\"SCI_option_radio\" value=\"1\"/>选项1：
                    </label>
                    <textarea id=\"SCI_question_option1\" 
                              name=\"SCI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>
                    <input type=\"file\" id=\"SCI_question_option1_img\"  name=\"SCI_question_option1_img\" class=\"dialog_file\" />
                </div>
                <div>
                    <label for=\"SCI_question_option2\" class=\"dialog_label\">
                        <input type=\"radio\" name=\"SCI_option_radio\" value=\"2\"/>选项2：
                    </label>
                    <textarea id=\"SCI_question_option2\" 
                              name=\"SCI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>
                    <input type=\"file\" id=\"SCI_question_option2_img\" name=\"SCI_question_option2_img\" class=\"dialog_file\" />
                </div> 
            </fieldset>
            <div style=\"margin-left: 385px;\">
                    <a href=\"#\" onclick=\"add_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                        添加选项
                    </a>
                    <a href=\"#\" onclick=\"minus_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                        减少选项
                    </a>
            </div>
        </form>
        <form id=\"multiple_choices_no_img\" hidden>
            <fieldset>
                <div>
                    <label for=\"MCNI_stem_textarea\" class=\"dialog_label\">题干内容：</label>
                    <textarea id=\"MCNI_stem_textarea\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入题干内容\"></textarea>
                </div>
                <div>
                    <label for=\"MCNI_question_option1\" class=\"dialog_label\">
                        <input type=\"checkbox\" name=\"MCNI_option_checkbox\" value=\"1\"/>选项1：
                    </label>
                    <textarea id=\"MCNI_question_option1\" 
                              name=\"MCNI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>
                </div>
                <div>
                    <label for=\"MCNI_question_option2\" class=\"dialog_label\">
                        <input type=\"checkbox\" name=\"MCNI_option_checkbox\" value=\"2\"/>选项2：
                    </label>
                    <textarea id=\"MCNI_question_option2\" 
                              name=\"MCNI_question_option\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入选项内容\"></textarea>
                </div>
            </fieldset>
            <div style=\"margin-left: 385px;\">
                <a href=\"#\" onclick=\"add_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                    添加选项
                </a>
                <a href=\"#\" onclick=\"minus_question_option()\" class=\"button button-rounded button-flat-primary button-tiny search_buttun\" style=\"padding:0px;width:55px;margin-left: 0px;color: #fff;\">
                    减少选项
                </a>
            </div>
        </form>
        <form id=\"short_answer_no_img\" hidden>
            <fieldset>
                <div>
                    <label for=\"SANI_stem_textarea\" class=\"dialog_label\">题干内容：</label>
                    <textarea id=\"SANI_stem_textarea\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入题干内容\"></textarea>
                </div>
            </fieldset>
        </form>
        <form id=\"short_answer_img\" hidden>
            <fieldset>
                <div>
                    <label for=\"SAI_stem_textarea\" class=\"dialog_label\">题干内容：</label>
                    <textarea id=\"SAI_stem_textarea\" 
                              class='text ui-widget-content ui-corner-all dialog_textarea' 
                              placeholder=\"请输入题干内容\"></textarea>
                    <input type=\"file\" id=\"SAI_stem_img\" name=\"SAI_stem_img\"  class=\"dialog_file\" />
                </div>
            </fieldset>
        </form>
        
    </div>
    <div id=\"dialog_edit_questions\" title=\"编辑试题\">
        <div>
            <label for=\"edit_questions_type\" class=\"dialog_label\">试题类型：</label>
            <select id=\"edit_question_type\" class=\"text ui-widget-content ui-corner-all dialog_input\" disabled>  
                <option name=\"edit_questions_type_options\" value =\"single_choice_no_img\">单项选择题-无图片</option>  
                <option name=\"edit_questions_type_options\" value =\"single_choice_img\">单项选择题-有图片</option>  
                <option name=\"edit_questions_type_options\" value=\"short_answer_no_img\">简答题-无图片</option>  
                <option name=\"edit_questions_type_options\" value=\"short_answer_img\">简答题-有图片</option>  
            </select>
        </div>
        <div id=\"edit_question_kind_div\">
            <label for=\"edit_questions_kind\" class=\"dialog_label\">所属类别：</label>
            <span id=\"edit_questions_kind\" class=\"dialog_input\"></span>
        </div>
        <div>
            <label for=\"edit_mustSelect\" class=\"dialog_label\">是否必选：</label>
            <input type=\"radio\" id=\"edit_mustSelect_radio0\" name=\"edit_mustSelect\" value=\"0\" >
            <label for=\"edit_mustSelect_radio0\" class=\"dialog_radio_label\" >否&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type=\"radio\" id=\"edit_mustSelect_radio1\" name=\"edit_mustSelect\" value=\"1\" checked >
            <label for=\"edit_mustSelect_radio1\" class=\"dialog_radio_label\" >是&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div>
            <label for=\"edit_optionShuffle\" class=\"dialog_label\">选项乱序：</label>
            <input type=\"radio\" id=\"edit_optionShuffle_radio0\" name=\"edit_optionShuffle\" value=\"0\" >
            <label for=\"edit_optionShuffle_radio0\" class=\"dialog_radio_label\" >否&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type=\"radio\" id=\"edit_optionShuffle_radio1\" name=\"edit_optionShuffle\" value=\"1\" checked >
            <label for=\"edit_optionShuffle_radio1\" class=\"dialog_radio_label\" >是&nbsp;&nbsp;&nbsp;&nbsp;</label>
        </div>
        <div>
            <input id=\"edit_question_id\" value=\"\" hidden />
        </div>
        <form id=\"edit_single_choice_no_img\">
            <fieldset> 
            </fieldset>
        </form>
        <form id=\"edit_single_choice_img\">
            <fieldset> 
            </fieldset>
        </form>
        <form id=\"edit_short_answer_no_img\">
            <fieldset> 
            </fieldset>
        </form>
        <form id=\"edit_short_answer_img\">
            <fieldset> 
            </fieldset>
        </form>
    </div>
    <div id=\"questions_tool\">
        ";
        // line 313
        if (($this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "isOverAndSave", array()) == 0)) {
            // line 314
            echo "            <a href=\"#\" onclick=\"open_add_questions_dialog(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exam"]) ? $context["exam"] : $this->getContext($context, "exam")), "id", array()), "html", null, true);
            echo ")\" class=\"button glow button-rounded button-flat-primary question_tool_button\">添加试题</a>
            <a href=\"#\" onclick=\"save_add()\" class=\"button glow button-rounded button-flat-primary question_tool_button\">保存添加</a>
            <a href=\"";
            // line 316
            echo $this->env->getExtension('routing')->getUrl("exam_list", array("exam_status" => "all"));
            echo "\" class=\"button glow button-rounded button-flat-primary question_tool_button\">返回列表</a>
        ";
        } else {
            // line 318
            echo "            <a href=\"#\" class=\"button glow button-rounded button-flat-primary question_tool_button\">非编辑状态</a>
            <a href=\"";
            // line 319
            echo $this->env->getExtension('routing')->getUrl("exam_list", array("exam_status" => "all"));
            echo "\" class=\"button glow button-rounded button-flat-primary question_tool_button\">返回列表</a>
        ";
        }
        // line 321
        echo "    </div>
    <div id=\"flash_message\">
        ";
        // line 323
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 324
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 325
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "    </div>
";
    }

    // line 331
    public function block_javascripts($context, array $blocks = array())
    {
        // line 332
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 333
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8fdb248_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248_jquery-ui_1.js");
            // line 340
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8fdb248_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248_autoTextarea_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8fdb248_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248_ajaxfileupload_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8fdb248_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248_jquery.combox_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8fdb248_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248_questionsAdd_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8fdb248"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fdb248") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8fdb248.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 342
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:questionsAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 342,  661 => 340,  657 => 333,  652 => 332,  649 => 331,  644 => 328,  635 => 325,  632 => 324,  628 => 323,  624 => 321,  619 => 319,  616 => 318,  611 => 316,  605 => 314,  603 => 313,  387 => 99,  366 => 92,  358 => 89,  355 => 88,  346 => 86,  341 => 85,  335 => 83,  332 => 82,  324 => 80,  314 => 79,  308 => 76,  304 => 75,  297 => 74,  293 => 73,  288 => 72,  285 => 71,  268 => 69,  258 => 68,  252 => 65,  248 => 64,  241 => 63,  237 => 62,  229 => 61,  224 => 60,  221 => 59,  213 => 57,  203 => 56,  197 => 53,  193 => 52,  186 => 51,  182 => 50,  177 => 49,  175 => 48,  171 => 47,  167 => 46,  163 => 45,  159 => 44,  152 => 43,  149 => 42,  147 => 41,  143 => 39,  138 => 38,  121 => 37,  118 => 36,  114 => 34,  112 => 33,  106 => 30,  101 => 28,  95 => 25,  90 => 23,  87 => 22,  84 => 21,  79 => 19,  76 => 18,  69 => 15,  66 => 14,  63 => 13,  58 => 11,  44 => 9,  40 => 4,  35 => 3,  32 => 2,);
    }
}
