<?php

/* goods/estimate.html */
class __TwigTemplate_fc17580ee854f6d3f6344d81278f11c1c3ee2c49bcce4e4718ea1a1313427d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goods/estimate.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/estimate.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row evaluation_choice\">
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row evaluation_choice_border\">
      <div class=\"col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3\">
        <div class=\"weui-cells weui-cells_radio\">
          <label class=\"weui-cell weui-check__label\" for=\"x13\">
            <div class=\"weui-cell__bd\">
              <p>好评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" class=\"weui-check\" name=\"radio1\" id=\"x13\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
          <label class=\"weui-cell weui-check__label\" for=\"x12\">
            <div class=\"weui-cell__bd\">
              <p>中评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" name=\"radio1\" class=\"weui-check\" id=\"x12\" checked=\"checked\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
          <label class=\"weui-cell weui-check__label\" for=\"x11\">
            <div class=\"weui-cell__bd\">
              <p>差评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" name=\"radio1\" class=\"weui-check\" id=\"x11\" checked=\"checked\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "goods/estimate.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/estimate.css\">
{% endblock %}

{% block content %}
<div class=\"row evaluation_choice\">
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row evaluation_choice_border\">
      <div class=\"col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3\">
        <div class=\"weui-cells weui-cells_radio\">
          <label class=\"weui-cell weui-check__label\" for=\"x13\">
            <div class=\"weui-cell__bd\">
              <p>好评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" class=\"weui-check\" name=\"radio1\" id=\"x13\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
          <label class=\"weui-cell weui-check__label\" for=\"x12\">
            <div class=\"weui-cell__bd\">
              <p>中评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" name=\"radio1\" class=\"weui-check\" id=\"x12\" checked=\"checked\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
          <label class=\"weui-cell weui-check__label\" for=\"x11\">
            <div class=\"weui-cell__bd\">
              <p>差评</p>
            </div>
            <div class=\"weui-cell__ft\">
              <input type=\"radio\" name=\"radio1\" class=\"weui-check\" id=\"x11\" checked=\"checked\">
              <span class=\"weui-icon-checked\"></span>
            </div>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "goods/estimate.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/goods/estimate.html");
    }
}
