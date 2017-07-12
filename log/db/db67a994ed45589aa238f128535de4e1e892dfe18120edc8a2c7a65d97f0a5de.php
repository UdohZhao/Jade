<?php

/* receiverAddress/add.html */
class __TwigTemplate_e432b5cf374f150a3bead7005d13894389eabb0ed9716e474b9a3d1ae6f272ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "receiverAddress/add.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/receiverAddress/css/add.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row addressMsgs\">
  <div class=\"weui-cells weui-cells_form\">
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">收货人</label></div>
      <div class=\"weui-cell__bd\">
        <input class=\"weui-input\" type=\"text\" name=\"cname\" placeholder=\"请输入收货人姓名\">
      </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">联系电话</label></div>
      <div class=\"weui-cell__bd\">
        <input class=\"weui-input\" type=\"tel\" name=\"phone\" placeholder=\"请输入手机号码\">
      </div>
    </div>
    <div class=\"weui-cell\">
        <div class=\"weui-cell__hd\"><label for=\"name\" class=\"weui-label\">选择地区</label></div>
        <div class=\"weui-cell__bd\">
          <input class=\"weui-input\" id=\"start\" type=\"text\" name=\"district\" value=\"重庆 重庆市 九龙坡区\">
        </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">详细地址</label></div>
      <div class=\"weui-cell__bd\">
        <input id='city-picker' class=\"weui-input\" type=\"text\" name=\"address\" placeholder=\"如街道，楼层，门牌号等\">
      </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">邮政编码</label></div>
      <div class=\"weui-cell__bd\">
        <input id='city-picker' class=\"weui-input\" type=\"number\" pattern=\"[0-9]*\" name=\"postalcode\" placeholder=\"邮政编码(选填)\">
      </div>
    </div>
  </div>
  <div class=\"weui-cells weui-cells_checkbox\">
    <label class=\"weui-cell weui-check__label\" for=\"s11\">
      <div class=\"weui-cell__hd\">
        <input type=\"checkbox\" class=\"weui-check\" name=\"status\" id=\"s11\" value=\"1\">
        <i class=\"weui-icon-checked\"></i>
      </div>
      <div class=\"weui-cell__bd\">
        <div class=\"default-address\">设为默认收货地址</div>
      </div>
    </label>
  </div>
</div>
<div class=\"row saveBtn\">
  <a href=\"javascript:;\" class=\"weui-btn weui-btn_primary btn-save\">保存</a>
</div>
";
    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        // line 59
        echo "<script src=\"/apps/home/views/receiverAddress/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "receiverAddress/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 59,  93 => 58,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/receiverAddress/css/add.css\">
{% endblock %}

{% block content %}
<div class=\"row addressMsgs\">
  <div class=\"weui-cells weui-cells_form\">
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">收货人</label></div>
      <div class=\"weui-cell__bd\">
        <input class=\"weui-input\" type=\"text\" name=\"cname\" placeholder=\"请输入收货人姓名\">
      </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">联系电话</label></div>
      <div class=\"weui-cell__bd\">
        <input class=\"weui-input\" type=\"tel\" name=\"phone\" placeholder=\"请输入手机号码\">
      </div>
    </div>
    <div class=\"weui-cell\">
        <div class=\"weui-cell__hd\"><label for=\"name\" class=\"weui-label\">选择地区</label></div>
        <div class=\"weui-cell__bd\">
          <input class=\"weui-input\" id=\"start\" type=\"text\" name=\"district\" value=\"重庆 重庆市 九龙坡区\">
        </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">详细地址</label></div>
      <div class=\"weui-cell__bd\">
        <input id='city-picker' class=\"weui-input\" type=\"text\" name=\"address\" placeholder=\"如街道，楼层，门牌号等\">
      </div>
    </div>
    <div class=\"weui-cell\">
      <div class=\"weui-cell__hd\"><label class=\"weui-label\">邮政编码</label></div>
      <div class=\"weui-cell__bd\">
        <input id='city-picker' class=\"weui-input\" type=\"number\" pattern=\"[0-9]*\" name=\"postalcode\" placeholder=\"邮政编码(选填)\">
      </div>
    </div>
  </div>
  <div class=\"weui-cells weui-cells_checkbox\">
    <label class=\"weui-cell weui-check__label\" for=\"s11\">
      <div class=\"weui-cell__hd\">
        <input type=\"checkbox\" class=\"weui-check\" name=\"status\" id=\"s11\" value=\"1\">
        <i class=\"weui-icon-checked\"></i>
      </div>
      <div class=\"weui-cell__bd\">
        <div class=\"default-address\">设为默认收货地址</div>
      </div>
    </label>
  </div>
</div>
<div class=\"row saveBtn\">
  <a href=\"javascript:;\" class=\"weui-btn weui-btn_primary btn-save\">保存</a>
</div>
{% endblock %}

{% block footer %}
<script src=\"/apps/home/views/receiverAddress/js/add.js\"></script>
{% endblock %}", "receiverAddress/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/receiverAddress/add.html");
    }
}
