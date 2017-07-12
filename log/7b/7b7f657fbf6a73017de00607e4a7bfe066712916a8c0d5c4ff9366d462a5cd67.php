<?php

/* article/index.html */
class __TwigTemplate_b643ffdfa36391a843f40d6472465dfc84d81bb811d1f9d1a09933da717987c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "article/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/article/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row wool_table\">
  <div class=\"col-sm-12 col-xs-12 wool_table_title\">
    <span>目录1</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节1</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节2</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节3</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节4</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节5</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节6</p>
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
        return "article/index.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/article/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row wool_table\">
  <div class=\"col-sm-12 col-xs-12 wool_table_title\">
    <span>目录1</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节1</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节2</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节3</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节4</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节5</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
        <a class=\"weui-cell weui-cell_access\" href=\"/article/detail\">
          <div class=\"weui-cell__bd\">
            <p>章节6</p>
          </div>
          <div class=\"weui-cell__ft\">
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "article/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/article/index.html");
    }
}
