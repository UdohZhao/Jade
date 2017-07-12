<?php

/* indent/index.html */
class __TwigTemplate_caef6bdeb15c3cd8c9adb74828fc6983bcef5819329bc708e0e90d8933bbd498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "indent/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/indent/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<!-- 订单列表start -->
<div class=\"row khfxWarp\">
  <div class=\"col-xs-12 col-sm-12 khfxPane\">
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待付款】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button order_cancel\">取消订单</a>
            <a class=\"button\">立即付款</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a href=\"/goods/estimate\" class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 订单列表end -->
";
    }

    // line 141
    public function block_footer($context, array $blocks = array())
    {
        // line 142
        echo "<!-- 滚动加载js -->
<script src=\"/apps/home/views/indent/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "indent/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 142,  176 => 141,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/indent/css/index.css\">
{% endblock %}

{% block content %}
<!-- 订单列表start -->
<div class=\"row khfxWarp\">
  <div class=\"col-xs-12 col-sm-12 khfxPane\">
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待付款】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button order_cancel\">取消订单</a>
            <a class=\"button\">立即付款</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a href=\"/goods/estimate\" class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row myorder_box\">
      <div class=\"weui-cells\">
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
            <p class=\"order_number\">订单编号：123456789123456789120</p>
          </div>
          <div class=\"weui-cell__ft order_state\">【待评价】</div>
        </div>
        <a class=\"weui-cell weui-cell_access\" href=\"/indent/detail\">
          <div class=\"weui-cell__hd\">
            <img src=\"/apps/home/views/index/img/QQ截图20170627164651.png\">
          </div>
          <div class=\"weui-cell__bd\">
            <p class=\"order_name\">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>
            <p class=\"order_money\">￥29800.00<span>x1</span></p>
          </div>
        </a>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft total_money\">合计：￥29800.00</div>
        </div>
        <div class=\"weui-cell\">
          <div class=\"weui-cell__bd\">
          </div>
          <div class=\"weui-cell__ft\">
            <a class=\"button\">立即评价</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 订单列表end -->
{% endblock %}

{% block footer %}
<!-- 滚动加载js -->
<script src=\"/apps/home/views/indent/js/index.js\"></script>
{% endblock %}", "indent/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/indent/index.html");
    }
}
