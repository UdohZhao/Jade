<?php

/* goods/detail.html */
class __TwigTemplate_2be9cdeb8a9667127b23326a75551b6903553ffbe81787da0ed533ad43a9bee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goods/detail.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/detail.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- 轮播start -->
<div class=\"row\">
  <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\" style=\"height: 200px;\">
    <div class=\"swiper-wrapper\">
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i4/TB10rkPGVXXXXXGapXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1kQI3HpXXXXbSXFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
    </div>
    <div class=\"swiper-pagination\"></div>
  </div>
</div>
<!-- 轮播end -->
<div class=\"row\">
  <div class=\"col-sm-12 col-xs-12 product_name\">
    <span>宝中皇 翡翠平安扣</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"product_price\">市场价：￥29800.00</p>
          </div>
          <div class=\"weui-cell__ft product_price\">批发价：￥25000.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"free_freight\">免运费</p>
          </div>
          <div class=\"weui-cell__ft\"></div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/shop/index\">
          <div class=\"weui-cell__hd\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-dianpu1\"></use>
              </svg>
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"shop_name\">昆明玉投商贸</p>
          </div>
          <div class=\"weui-cell__ft\">
            进入店铺
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-tab\">
    <div class=\"weui-navbar\">
      <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">
        商品详情
      </a>
      <a class=\"weui-navbar__item\" href=\"#tab2\">
        商品评价
      </a>
    </div>
    <div class=\"weui-tab__bd\">
      <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
        商品详情内容
      </div>
      <div id=\"tab2\" class=\"weui-tab__bd-item\">
        <div class=\"weui-panel weui-panel_access\">
        <div class=\"weui-panel__bd\">
          <a class=\"weui-media-box weui-media-box_appmsg\">
            <div class=\"weui-media-box__hd\">
              <img class=\"weui-media-box__thumb\" src=\"\">
            </div>
            <div class=\"weui-media-box__bd\">
              <h4 class=\"weui-media-box__title\">评价一<span>【好评】</span></h4>
              <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
            </div>
          </a>
          <a class=\"weui-media-box weui-media-box_appmsg\">
            <div class=\"weui-media-box__hd\">
              <img class=\"weui-media-box__thumb\" src=\"\">
            </div>
            <div class=\"weui-media-box__bd\">
              <h4 class=\"weui-media-box__title\">评价二<span>【差评】</span></h4>
              <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
            </div>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "goods/detail.html";
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
<link rel=\"stylesheet\" href=\"/apps/home/views/goods/css/detail.css\">
{% endblock %}

{% block content %}
<!-- 轮播start -->
<div class=\"row\">
  <div class=\"swiper-container\" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay=\"1000\" style=\"height: 200px;\">
    <div class=\"swiper-wrapper\">
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i4/TB10rkPGVXXXXXGapXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
      <div class=\"swiper-slide\">
        <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1kQI3HpXXXXbSXFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\" alt=\"\">
      </div>
    </div>
    <div class=\"swiper-pagination\"></div>
  </div>
</div>
<!-- 轮播end -->
<div class=\"row\">
  <div class=\"col-sm-12 col-xs-12 product_name\">
    <span>宝中皇 翡翠平安扣</span>
  </div>
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"row\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"product_price\">市场价：￥29800.00</p>
          </div>
          <div class=\"weui-cell__ft product_price\">批发价：￥25000.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"free_freight\">免运费</p>
          </div>
          <div class=\"weui-cell__ft\"></div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"weui-cells\">
        <a class=\"weui-cell weui-cell_access\" href=\"/shop/index\">
          <div class=\"weui-cell__hd\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-dianpu1\"></use>
              </svg>
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"shop_name\">昆明玉投商贸</p>
          </div>
          <div class=\"weui-cell__ft\">
            进入店铺
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-tab\">
    <div class=\"weui-navbar\">
      <a class=\"weui-navbar__item weui-bar__item--on\" href=\"#tab1\">
        商品详情
      </a>
      <a class=\"weui-navbar__item\" href=\"#tab2\">
        商品评价
      </a>
    </div>
    <div class=\"weui-tab__bd\">
      <div id=\"tab1\" class=\"weui-tab__bd-item weui-tab__bd-item--active\">
        商品详情内容
      </div>
      <div id=\"tab2\" class=\"weui-tab__bd-item\">
        <div class=\"weui-panel weui-panel_access\">
        <div class=\"weui-panel__bd\">
          <a class=\"weui-media-box weui-media-box_appmsg\">
            <div class=\"weui-media-box__hd\">
              <img class=\"weui-media-box__thumb\" src=\"\">
            </div>
            <div class=\"weui-media-box__bd\">
              <h4 class=\"weui-media-box__title\">评价一<span>【好评】</span></h4>
              <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
            </div>
          </a>
          <a class=\"weui-media-box weui-media-box_appmsg\">
            <div class=\"weui-media-box__hd\">
              <img class=\"weui-media-box__thumb\" src=\"\">
            </div>
            <div class=\"weui-media-box__bd\">
              <h4 class=\"weui-media-box__title\">评价二<span>【差评】</span></h4>
              <p class=\"weui-media-box__desc\">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
            </div>
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "goods/detail.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/goods/detail.html");
    }
}
