<?php

/* account/index.html */
class __TwigTemplate_e5382009735c4fff7f4fe32bd14a7e6b84b4c0f0968d6ca3577dc1e2d1e68665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "account/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/account/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row account_balance_box\">
  <div class=\"col-sm-12 col-xs-12 account_word\">
    <span>账户余额：</span>
  </div>
  <div class=\"col-sm-12 col-xs-12 account_balance\">
    <i>￥<span class=\"balance_money\">1750.00</span></i>
  </div>
</div>
<div class=\"row account_chioce\">
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>6</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>28</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>68</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>199</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>328</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>698</span>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-cells weui-cells_radio\">
    <label class=\"weui-cell weui-check__label\" for=\"x11\">
      <div class=\"weui-cell__hd\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shouye\"></use>
            </svg>
        </div>
      <div class=\"weui-cell__bd\">
        <p>微信支付</p>
      </div>
      <div class=\"weui-cell__ft\">
        <input type=\"radio\" class=\"weui-check\" name=\"radio1\" id=\"x11\" checked=\"checked\">
        <span class=\"weui-icon-checked\"></span>
      </div>
    </label>
  </div>
</div>
<div class=\"row account_button\">
  <div class=\"col-sm-12 col-xs-12\">
    <a>充值</a>
  </div>
</div>
";
    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "<script src=\"/apps/home/views/account/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "account/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 74,  108 => 73,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/account/css/index.css\">
{% endblock %}

{% block content %}
<div class=\"row account_balance_box\">
  <div class=\"col-sm-12 col-xs-12 account_word\">
    <span>账户余额：</span>
  </div>
  <div class=\"col-sm-12 col-xs-12 account_balance\">
    <i>￥<span class=\"balance_money\">1750.00</span></i>
  </div>
</div>
<div class=\"row account_chioce\">
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>6</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>28</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>68</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>199</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>328</span>
    </div>
  </div>
  <div class=\"col-sm-4 col-xs-4\">
    <div class=\"account_chioce_list\">
      ￥<span>698</span>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-cells weui-cells_radio\">
    <label class=\"weui-cell weui-check__label\" for=\"x11\">
      <div class=\"weui-cell__hd\">
        <svg class=\"icon categorie-icon\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-shouye\"></use>
            </svg>
        </div>
      <div class=\"weui-cell__bd\">
        <p>微信支付</p>
      </div>
      <div class=\"weui-cell__ft\">
        <input type=\"radio\" class=\"weui-check\" name=\"radio1\" id=\"x11\" checked=\"checked\">
        <span class=\"weui-icon-checked\"></span>
      </div>
    </label>
  </div>
</div>
<div class=\"row account_button\">
  <div class=\"col-sm-12 col-xs-12\">
    <a>充值</a>
  </div>
</div>
{% endblock %}

{% block footer %}
<script src=\"/apps/home/views/account/js/index.js\"></script>
{% endblock %}", "account/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/account/index.html");
    }
}
