<?php

/* OnlineTestAdminBundle:Admin:studentImport.html.twig */
class __TwigTemplate_3e8a0494d4b36ab6a8cd63940d1d25c0aa109d5e1cce758408b82cc0e4ba2f68 extends Twig_Template
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
        echo "    <span>导入学生</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"admin_formRow\">
        <div class=\"alert\" style=\"margin-right: 30px; background-color: #e5e5e5;\">
            <h5>
                温馨提示：
            </h5> 
            导入学生时，请遵循以下规则：</br>
            &nbsp;&nbsp;&nbsp;&nbsp;1.导入文件支持格式有：csv</br>
            &nbsp;&nbsp;&nbsp;&nbsp;2.文件第一行多数为表头，不会获取</br>
            &nbsp;&nbsp;&nbsp;&nbsp;3.文件各列内容应如下：考号,姓名,密码
            
        </div>
    </div>
    <form action=\"\" ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" enctype=\"multipart/form-data\">
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "examName", array()), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fileUrl", array()), 'row', array("attr" => array("placeholder" => "请输入考号", "autocomplete" => "off")));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "import", array()), 'row', array("attr" => array("class" => "button button-rounded button-flat-action submitButtonStyle")));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cancel", array()), 'row', array("attr" => array("class" => "button button-rounded resetButton resetButtonStyle")));
        echo "
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end', array("render_rest" => true));
        echo "
    </form>
    <div id=\"flash_message\">
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "            <div class=\"button glow button-rounded button-flat-action flash-notice\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
    <div id=\"importing\" class=\"button glow button-rounded button-flat-action flash-notice\">
    </div>
";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2b05648_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b05648_0") : $this->env->getExtension('assets')->getAssetUrl("js/2b05648_studentImport_1.js");
            // line 43
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "2b05648"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2b05648") : $this->env->getExtension('assets')->getAssetUrl("js/2b05648.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "    
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:studentImport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  124 => 43,  120 => 40,  115 => 39,  112 => 38,  105 => 33,  96 => 30,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  41 => 6,  38 => 5,  33 => 3,  30 => 2,);
    }
}
