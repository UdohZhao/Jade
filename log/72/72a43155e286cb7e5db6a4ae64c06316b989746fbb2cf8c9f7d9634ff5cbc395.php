<?php

/* shopCart/index.html */
class __TwigTemplate_21b11eccb3b037cb5500342852c8c78825152b56a9cb6356f8eeeff0cbd96894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "shopCart/index.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/shopCart/css/index.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
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
        进入商城
      </div>
    </a>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-sm-12\" id=\"list\">
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-loadmore\">
    <i class=\"weui-loading\"></i>
    <span class=\"weui-loadmore__tips\">正在加载</span>
  </div>
</div>
<div style=\"height: 60px;\"></div>
<div class=\"row shopping_bottom\">
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"bottom_left\">
      <input id=\"allchecked\" type=\"checkbox\">
      <span>全选</span>
    </div>
    <div class=\"bottom_right\">
      <i>合计：￥<span class=\"all_money\">0</span></i>
      <a class=\"settlement\">结算</a>
    </div>
  </div>
</div>
";
    }

    // line 164
    public function block_footer($context, array $blocks = array())
    {
        // line 165
        echo "<script src=\"/apps/home/views/shopCart/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "shopCart/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 165,  199 => 164,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/shopCart/css/index.css\">
{% endblock %}

{% block content %}
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
        进入商城
      </div>
    </a>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-xs-12 col-sm-12\" id=\"list\">
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"row shopping_list\">
      <div class=\"shopping_left\">
        <input type=\"checkbox\" name=\"ids\">
      </div>
      <div class=\"shopping_center\">
        <div class=\"left_img\">
          <img src=\"//gqianniu.alicdn.com/bao/uploaded/i4//tfscom/i1/TB1n3rZHFXXXXX9XFXXXXXXXXXX_!!0-item_pic.jpg_320x320q60.jpg\">
        </div>
        <div class=\"right_content\">
          <p>宝中皇 满绿翡翠套装宝翡翠套装宝</p>
          <p class=\"money\">￥<span class=\"each_money\">1</span><i>x<span class=\"each_number\">1</span></i></p>
        </div>
      </div>
      <div class=\"shopping_right\">
        <p>删</p>
        <p>除</p>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"weui-loadmore\">
    <i class=\"weui-loading\"></i>
    <span class=\"weui-loadmore__tips\">正在加载</span>
  </div>
</div>
<div style=\"height: 60px;\"></div>
<div class=\"row shopping_bottom\">
  <div class=\"col-sm-12 col-xs-12\">
    <div class=\"bottom_left\">
      <input id=\"allchecked\" type=\"checkbox\">
      <span>全选</span>
    </div>
    <div class=\"bottom_right\">
      <i>合计：￥<span class=\"all_money\">0</span></i>
      <a class=\"settlement\">结算</a>
    </div>
  </div>
</div>
{% endblock %}

{% block footer %}
<script src=\"/apps/home/views/shopCart/js/index.js\"></script>
{% endblock %}", "shopCart/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/shopCart/index.html");
    }
}
