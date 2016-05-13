<?php

/* OnlineTestAdminBundle:Admin:systemIntro.html.twig */
class __TwigTemplate_929d46a5c0b58c4fc133fe9fc464bc88484586f00007d2a9636222ac76bc1474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlineTestAdminBundle:Admin:aboutSystem.html.twig");

        $this->blocks = array(
            'function_title' => array($this, 'block_function_title'),
            'function_content' => array($this, 'block_function_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlineTestAdminBundle:Admin:aboutSystem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_function_title($context, array $blocks = array())
    {
        // line 3
        echo "    <span>系统介绍</span>
";
    }

    // line 5
    public function block_function_content($context, array $blocks = array())
    {
        // line 6
        echo "    <span>1.本系统主要面向全校各类全日制、非全日制、博士、硕士、代培研究生用户，旨在利用信息化手段提高服务水平，提供与教学、学籍、学生事务管理有关的网络交互功能；</br></br></span>
    <span>2.目前涵盖业务包括网上迎新、网上选课、学籍信息收集、网上毕业离校手续以及各类查询等，随着系统持续建设，涵盖项目将不断增加、扩展、完善，我们力求为全校研究生打造便捷、全面、人性化的数字生活；</br></br></span>
    <span>3.用户名和初始密码请见网站入口的登录说明；</br></br></span>
    <span>4.请研究生保证填写各项信息完整、准确，因为教学、学籍学历信息等都是研究生管理关键信息，一旦有误对个人就业、学历认证产生不利影响。研究生院承诺所有信息仅用于必要的教学、学籍、学生事务管理，尊重学生隐私，保证个人信息安全；</br></br></span>
";
    }

    public function getTemplateName()
    {
        return "OnlineTestAdminBundle:Admin:systemIntro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
