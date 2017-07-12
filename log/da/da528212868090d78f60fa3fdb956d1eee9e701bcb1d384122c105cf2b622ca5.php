<?php

/* settings/index.html */
class __TwigTemplate_6d530f45ebf0ae3ead2db9e0d6b588039c39cd0fb36682ecc1f25cd7a3a8c371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "settings/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/settings/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row avatar_bcg\">
  <div class=\"myAvatar\">
    <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
    <input type=\"file\" name=\"head_portrait\" id=\"fileupload\"/>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-cells\">
    <a class=\"weui-cell weui-cell_access\" href=\"__APP__/Settings/nickname\">
      <div class=\"weui-cell__bd\">
        <p>昵称</p>
      </div>
      <div class=\"weui-cell__ft\">
        赵四
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"__APP__/Settings/phone\">
      <div class=\"weui-cell__bd\">
        <p>电话</p>
      </div>
      <div class=\"weui-cell__ft\">
        18423031898
      </div>
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "settings/index.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/settings/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row avatar_bcg\">
  <div class=\"myAvatar\">
    <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
    <input type=\"file\" name=\"head_portrait\" id=\"fileupload\"/>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-cells\">
    <a class=\"weui-cell weui-cell_access\" href=\"__APP__/Settings/nickname\">
      <div class=\"weui-cell__bd\">
        <p>昵称</p>
      </div>
      <div class=\"weui-cell__ft\">
        赵四
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"__APP__/Settings/phone\">
      <div class=\"weui-cell__bd\">
        <p>电话</p>
      </div>
      <div class=\"weui-cell__ft\">
        18423031898
      </div>
    </a>
  </div>
</div>
{% endblock %}", "settings/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/settings/index.html");
    }
}
