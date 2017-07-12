<?php

/* receiverAddress/index.html */
class __TwigTemplate_4cc0ed7dbe173ccf84e04f3a3b873a714909d3e5e1cabf28c6e942250a653462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "receiverAddress/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/receiverAddress/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row order_details\">
  <div class=\"weui-cells\">
    <a href=\"javascript:;\" class=\"weui-cell receipt_address\">
      <div class=\"weui-cell__hd\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"receipt_people\">
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
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
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
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
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
      </div>
    </div>
  </div>
</div>
<a href=\"/receiverAddress/add\" class=\"row addAddress\">
  添加新地址
</a>
";
    }

    // line 130
    public function block_footer($context, array $blocks = array())
    {
        // line 131
        echo "<!-- 当前页面js -->
<script src=\"/apps/home/views/receiverAddress/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "receiverAddress/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 131,  165 => 130,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/receiverAddress/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row order_details\">
  <div class=\"weui-cells\">
    <a href=\"javascript:;\" class=\"weui-cell receipt_address\">
      <div class=\"weui-cell__hd\">
      </div>
      <div class=\"weui-cell__bd\">
        <p class=\"receipt_people\">
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
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
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
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
          赵四
          <span>18423031898</span>
        </p>
        <span class=\"address_details\">重庆市九龙坡区袁家岗小时代5层</span>
      </div>
    </a>
    <div class=\"weui-cell address_bottom\">
      <div class=\"weui-cell__bd\">
          <div class=\"tick\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-check\"></use>
              </svg>
          </div>
          <span class=\"address_default\">默认地址</span>
      </div>
      <div class=\"weui-cell__ft\">
        <a href=\"/receiverAddress/add\" class=\"address_edit\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                  <use xlink:href=\"#icon-edit\"></use>
              </svg>
              <span>编辑</span>
            </a>
            <a class=\"address_delete\">
            <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shanchu\"></use>
              </svg>
              <span>删除</span>
            </a>
      </div>
    </div>
  </div>
</div>
<a href=\"/receiverAddress/add\" class=\"row addAddress\">
  添加新地址
</a>
{% endblock %}

{% block footer %}
<!-- 当前页面js -->
<script src=\"/apps/home/views/receiverAddress/js/index.js\"></script>
{% endblock %}", "receiverAddress/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/receiverAddress/index.html");
    }
}
