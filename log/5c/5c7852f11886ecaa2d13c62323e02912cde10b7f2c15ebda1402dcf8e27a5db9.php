<?php

/* catalogue/index.html */
class __TwigTemplate_81a3882db390f6101f4d5ffa13fb4073caf826ecd0f72ae46b274f5a20d0f010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "catalogue/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/catalogue/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row wool_top_img\"></div>
<div class=\"row wool_table\">
  <div class=\"col-sm-12 col-xs-12 wool_table_title\">
    <span>毛料目录</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录1</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录2</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录3</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录4</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录5</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录6</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalogue/index.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/catalogue/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row wool_top_img\"></div>
<div class=\"row wool_table\">
  <div class=\"col-sm-12 col-xs-12 wool_table_title\">
    <span>毛料目录</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录1</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录2</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录3</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录4</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录5</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/index\">
          <div class=\"weui-cell__bd\">
            <p>目录6</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "catalogue/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/catalogue/index.html");
    }
}
