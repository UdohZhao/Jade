<?php

/* indent/detail.html */
class __TwigTemplate_c8be3e65c154b4b46faa180ca12b37d20e4f0233409482c041776f74ebee806c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "indent/detail.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/indent/css/detail.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row wait_time\">
  <div class=\"weui-cells\">
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p>等待买家付款</p>
        <span>请于44分55秒内付款，超时订单将自动关闭</span>
      </div>
    </div>
  </div>
</div>
<div class=\"row order_details\">
  <div class=\"weui-cells\">
    <a href=\"javascript:;\" class=\"weui-cell receipt_address\">
      <div class=\"weui-cell__hd\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"receipt_people\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye\"></use>
          </svg>
          收货人：赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">收货地址：重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access order_msg\" href=\"javascript:;\">
      <div class=\"weui-cell__hd\">
        <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
        <p class=\"order_money\">￥<span class=\"each_money\">29800.00</span><i class=\"number\">x<span>2</span></i></p>
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access order_msg\" href=\"javascript:;\">
      <div class=\"weui-cell__hd\">
        <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
        <p class=\"order_money\">￥<span class=\"each_money\">29800.60</span><i class=\"number\">x<span>1</span></i></p>
      </div>
    </a>
    <div class=\"weui-cell delivery\">
      <div class=\"weui-cell__bd\">
        <p>配送方式</p>
      </div>
      <div class=\"weui-cell__ft\">免运费，快递发货</div>
    </div>
    <div class=\"weui-cell leave_message\">
      <div class=\"weui-cell__hd\">
        <p>买家留言</p>
      </div>
      <div class=\"weui-cell__bd\">
      <input class=\"weui-input\" type=\"text\" placeholder=\"要是能重来，我要选李白\" readonly=\"readonly\">
      </div>
    </div>
    <div class=\"weui-cell total\">
      <div class=\"weui-cell__bd\">
        <p>合计</p>
      </div>
      <div class=\"weui-cell__ft\">￥<span class=\"all_money\">29800.00</span></div>
    </div>
  </div>
</div>
<div style=\"height: 56px;\"></div>
<div class=\"row go_pay\">
    <div class=\"go_pay_msg\">
    合计：￥<span class=\"all_money\">29800.00</span>
    <a>去支付</a>
    </div>
</div>
";
    }

    // line 88
    public function block_footer($context, array $blocks = array())
    {
        // line 89
        echo "<!-- 滚动加载js -->
<script src=\"/apps/home/views/indent/js/detail.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "indent/detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 89,  123 => 88,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/indent/css/detail.css\">
{% endblock %}

{% block content %}
<div class=\"row wait_time\">
  <div class=\"weui-cells\">
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye\"></use>
          </svg>
      </div>
      <div class=\"weui-cell__bd\">
        <p>等待买家付款</p>
        <span>请于44分55秒内付款，超时订单将自动关闭</span>
      </div>
    </div>
  </div>
</div>
<div class=\"row order_details\">
  <div class=\"weui-cells\">
    <a href=\"javascript:;\" class=\"weui-cell receipt_address\">
      <div class=\"weui-cell__hd\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"receipt_people\">
          <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
              <use xlink:href=\"#icon-shouye\"></use>
          </svg>
          收货人：赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">收货地址：重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access order_msg\" href=\"javascript:;\">
      <div class=\"weui-cell__hd\">
        <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
        <p class=\"order_money\">￥<span class=\"each_money\">29800.00</span><i class=\"number\">x<span>2</span></i></p>
      </div>
    </a>
    <a class=\"weui-cell weui-cell_access order_msg\" href=\"javascript:;\">
      <div class=\"weui-cell__hd\">
        <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
        <p class=\"order_money\">￥<span class=\"each_money\">29800.60</span><i class=\"number\">x<span>1</span></i></p>
      </div>
    </a>
    <div class=\"weui-cell delivery\">
      <div class=\"weui-cell__bd\">
        <p>配送方式</p>
      </div>
      <div class=\"weui-cell__ft\">免运费，快递发货</div>
    </div>
    <div class=\"weui-cell leave_message\">
      <div class=\"weui-cell__hd\">
        <p>买家留言</p>
      </div>
      <div class=\"weui-cell__bd\">
      <input class=\"weui-input\" type=\"text\" placeholder=\"要是能重来，我要选李白\" readonly=\"readonly\">
      </div>
    </div>
    <div class=\"weui-cell total\">
      <div class=\"weui-cell__bd\">
        <p>合计</p>
      </div>
      <div class=\"weui-cell__ft\">￥<span class=\"all_money\">29800.00</span></div>
    </div>
  </div>
</div>
<div style=\"height: 56px;\"></div>
<div class=\"row go_pay\">
    <div class=\"go_pay_msg\">
    合计：￥<span class=\"all_money\">29800.00</span>
    <a>去支付</a>
    </div>
</div>
{% endblock %}

{% block footer %}
<!-- 滚动加载js -->
<script src=\"/apps/home/views/indent/js/detail.js\"></script>
{% endblock %}", "indent/detail.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/indent/detail.html");
    }
}
