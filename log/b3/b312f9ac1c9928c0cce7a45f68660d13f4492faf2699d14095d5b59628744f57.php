<?php

/* attention/index.html */
class __TwigTemplate_e6530d172d0e9cc033ecee993398fba2c0cee6047adb774074c1e6fece331504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "attention/index.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/attention/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row attention_box\">
  <div class=\"col-sm-12 col-xs-12 attention_word\">
    <span>请长按指纹识别图中二维码</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"col-sm-6 col-xs-6 attention_QRcode\">
        <img src=\"/apps/home/views/attention/img/二维码.png\">
      </div>
      <div class=\"col-sm-6 col-xs-6 attention_fingerprint\">
        <img src=\"/apps/home/views/attention/img/指纹.png\">
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "attention/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/attention/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row attention_box\">
  <div class=\"col-sm-12 col-xs-12 attention_word\">
    <span>请长按指纹识别图中二维码</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"col-sm-6 col-xs-6 attention_QRcode\">
        <img src=\"/apps/home/views/attention/img/二维码.png\">
      </div>
      <div class=\"col-sm-6 col-xs-6 attention_fingerprint\">
        <img src=\"/apps/home/views/attention/img/指纹.png\">
      </div>
    </div>
  </div>
</div>
{% endblock %}", "attention/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/attention/index.html");
    }
}
