<?php

/* goods/index.html */
class __TwigTemplate_5662a74e3169376778b2ed53edc61b60759b1d9d1f55561837c8b481d0aa87bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goods/index.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-sm-12 col-xs-12 allproduct\">
    <span>毛料专区</span>
  </div>
  <div class=\"col-sm-12 col-xs-12 product_list_box khfxWarp\">
    <div class=\"row khfxPane\">
      <!-- 商品列表start -->
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <!-- 商品列表end -->
    </div>
  </div>
</div>
";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "<script src=\"/apps/home/views/goods/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "goods/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 62,  96 => 61,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row\">
  <div class=\"col-sm-12 col-xs-12 allproduct\">
    <span>毛料专区</span>
  </div>
  <div class=\"col-sm-12 col-xs-12 product_list_box khfxWarp\">
    <div class=\"row khfxPane\">
      <!-- 商品列表start -->
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <div class=\"col-sm-6 col-xs-6 product_list\">
        <a href=\"__APP__/Productdetails/index\" class=\"product_content\">
          <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          <div class=\"product_title_bcg\">
          </div>
          <div class=\"product_title\">
            <span>和田碧玉手镯</span>
          </div>
        </a>
      </div>
      <!-- 商品列表end -->
    </div>
  </div>
</div>
{% endblock %}

{% block footer %}
<script src=\"/apps/home/views/goods/js/index.js\"></script>
{% endblock %}", "goods/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/goods/index.html");
    }
}
