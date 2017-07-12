<?php

/* mySelf/index.html */
class __TwigTemplate_a869a0f7a6cf84b15eb8f7e6d7dd2c2c0846d7fe402979a4aeb2210c07b3ff8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "mySelf/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/mySelf/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- 头像start -->
<div class=\"row myself_avatar_box\">
  <div class=\"myself_avatar\">
    <img src=\"/apps/home/views/index/img/QQ截图20170627164708.png\">
  </div>
  <div class=\"myself_welcome\">
    <span>欢迎您，赵四</span>
  </div>
</div>
<!-- 头像end -->
<!-- 分类start -->
<div class=\"row myself_class\">
  <div class=\"weui-grids\">
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <span class=\"weui-badge\" style=\"position: absolute;top: 6px;right: 1em;\">8</span>
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daifukuan2\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待付款
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daishouhuo1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待收货
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daipingjia1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待评价
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-shouhoufuwu1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        售后服务
      </p>
    </a>
  </div>
</div>
<!-- 分类end -->
<div class=\"row myself_bottom\">
  <div class=\"weui-cells\">
    <a class=\"weui-cell weui-cell_access\" href=\"/indent/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-aiguifanfile2\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的订单</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"/shopCart/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-gwc\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的购物车</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"/receiverAddress/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouhuodizhi\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的收货地址</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mySelf/index.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/mySelf/css/index.css\">
{% endblock %}

{% block content %}
<!-- 头像start -->
<div class=\"row myself_avatar_box\">
  <div class=\"myself_avatar\">
    <img src=\"/apps/home/views/index/img/QQ截图20170627164708.png\">
  </div>
  <div class=\"myself_welcome\">
    <span>欢迎您，赵四</span>
  </div>
</div>
<!-- 头像end -->
<!-- 分类start -->
<div class=\"row myself_class\">
  <div class=\"weui-grids\">
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <span class=\"weui-badge\" style=\"position: absolute;top: 6px;right: 1em;\">8</span>
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daifukuan2\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待付款
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daishouhuo1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待收货
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-daipingjia1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        待评价
      </p>
    </a>
    <a href=\"/indent/index\" class=\"weui-grid js_grid\">
      <div class=\"weui-grid__icon\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
            <use xlink:href=\"#icon-shouhoufuwu1\"></use>
          </svg>
      </div>
      <p class=\"weui-grid__label\">
        售后服务
      </p>
    </a>
  </div>
</div>
<!-- 分类end -->
<div class=\"row myself_bottom\">
  <div class=\"weui-cells\">
    <a class=\"weui-cell weui-cell_access\" href=\"/indent/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-aiguifanfile2\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的订单</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"/shopCart/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-gwc\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的购物车</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access\" href=\"/receiverAddress/index\">
      <div class=\"weui-cell__hd\">
      <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouhuodizhi\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"bottom_list\">我的收货地址</p>
      </div>
      <div class=\"weui-cell__ft\">
      </div>
    </a>
  </div>
</div>
{% endblock %}", "mySelf/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/mySelf/index.html");
    }
}
