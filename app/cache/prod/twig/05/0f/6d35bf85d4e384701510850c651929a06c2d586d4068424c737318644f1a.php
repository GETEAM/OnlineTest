<?php

/* OnlineTestMainBundle:Main:index.html.twig */
class __TwigTemplate_050f6d35bf85d4e384701510850c651929a06c2d586d4068424c737318644f1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "  \t  <div id=\"lastexam\" class=\"titlefont\">最新考试列表…</div>
\t  <ul>
              <li>4岁男童趴睡男子身旁乞讨的帖子引发了网友被换个地方<a href=\"#\" class=\"button button-rounded button-flat-primary\"><i class=\"icon-refresh\"></i> press me</a></li>
              <li>4dfagaafgahcvdagajk打法建立法律阿甘发哈u乞讨的帖子引发了网友被换个地方</li>
              <li>广发进口量发阿德算法巍峨熬过阿斯噶思考来嘎嘎啊噶个地方</li>
              <li>4岁男童趴睡男子身旁乞讨的帖子引发了网友被换个地方</li>
              <li>4岁男童趴睡男子身旁乞讨的帖子引发了网友被换个地方</li>
\t  </ul>
";
    }

    // line 12
    public function block_bottom($context, array $blocks = array())
    {
        // line 13
        echo "    <a href=\"\" class=\"button glow button-rounded button-flat-action\" style=\"background-color: #008e66\">管理员点处登陆</a>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestMainBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  32 => 3,  29 => 2,);
    }
}
