<?php

/* goods/add.html */
class __TwigTemplate_d409dd33b0c5baff4fe957c1e5b0e23bfdf0b1db14389eeb698c45d34f283ea2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goods/add.html", 1);
        $this->blocks = array(
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 商品管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加商品</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"goodsForm\" action=\"/admin/goods/add/id/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
        echo "\" placeholder=\"请输入商品名称\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">搜索关键字</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"keywords\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "keywords", array()), "html", null, true);
        echo "\" placeholder=\"请输入搜索关键字\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品封面图片</label>
            <div class=\"col-sm-10\">
              <div id=\"previewOne\" style=\"display: inline-block;\">
              ";
        // line 32
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 0, array()))) {
            // line 33
            echo "                <img id=\"imgheadOne\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgOne').click();\">
              ";
        } else {
            // line 35
            echo "                <img id=\"imgheadOne\" border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 0, array()), "html", null, true);
            echo "\" width=\"150\" height=\"150\" onclick=\"delCp(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo ",0,'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 0, array()), "html", null, true);
            echo "');\">
                <input type=\"hidden\" id=\"imgOne\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 0, array()), "html", null, true);
            echo "\">
              ";
        }
        // line 38
        echo "              </div>
              <div id=\"previewTwo\" style=\"display: inline-block;margin-left: 15px;\">
              ";
        // line 40
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 1, array()))) {
            // line 41
            echo "                <img id=\"imgheadTwo\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgTwo').click();\">
              ";
        } else {
            // line 43
            echo "                <img id=\"imgheadOne\" border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 1, array()), "html", null, true);
            echo "\" width=\"150\" height=\"150\" onclick=\"delCp(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo ",1,'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 1, array()), "html", null, true);
            echo "');\">
                <input type=\"hidden\" id=\"imgTwo\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 1, array()), "html", null, true);
            echo "\">
              ";
        }
        // line 46
        echo "              </div>
              <div id=\"previewThree\" style=\"display: inline-block;margin-left: 15px;\">
              ";
        // line 48
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 2, array()))) {
            // line 49
            echo "                <img id=\"imgheadThree\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgThree').click();\">
              ";
        } else {
            // line 51
            echo "                <img id=\"imgheadOne\" border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 2, array()), "html", null, true);
            echo "\" width=\"150\" height=\"150\" onclick=\"delCp(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo ",2,'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 2, array()), "html", null, true);
            echo "');\">
                <input type=\"hidden\" id=\"imgThree\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cover_path", array()), 2, array()), "html", null, true);
            echo "\">
              ";
        }
        // line 54
        echo "              </div>
              <input type=\"file\" onchange=\"previewImage(this,'previewOne','imgheadOne','previewImgOne')\" style=\"display: none;\" id=\"previewImgOne\" name=\"cover_path[]\">
              <input type=\"file\" onchange=\"previewImage(this,'previewTwo','imgheadTwo','previewImgTwo')\" style=\"display: none;\" id=\"previewImgTwo\" name=\"cover_path[]\">
              <input type=\"file\" onchange=\"previewImage(this,'previewThree','imgheadThree','previewImgThree')\" style=\"display: none;\" id=\"previewImgThree\" name=\"cover_path[]\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品规格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"specification\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "specification", array()), "html", null, true);
        echo "\" placeholder=\"请输入商品规格以英文逗号分隔，例如：AAAA,BBBB,CCCC,DDDD\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">市场价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"market_price\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "market_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入商品市场价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">促销价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"promotion_price\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "promotion_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入商品促销价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">详情</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"details\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 82
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "details", array());
        echo "</script>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">库存</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"inventory\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "inventory", array()), "html", null, true);
        echo "\" placeholder=\"请输入商品库存\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"gtype\" value=\"0\" ";
        // line 95
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "gtype", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 正常
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"gtype\" value=\"1\" ";
        // line 98
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "gtype", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 热点
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" ";
        // line 106
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 毛料
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" ";
        // line 109
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 成品
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 117
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "status", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 上架
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 120
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "status", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 下架
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 138
    public function block_footer($context, array $blocks = array())
    {
        // line 139
        echo "<script src=\"/apps/admin/views/goods/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "goods/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 139,  277 => 138,  254 => 120,  244 => 117,  231 => 109,  221 => 106,  208 => 98,  198 => 95,  188 => 88,  179 => 82,  169 => 75,  160 => 69,  151 => 63,  140 => 54,  135 => 52,  126 => 51,  122 => 49,  120 => 48,  116 => 46,  111 => 44,  102 => 43,  98 => 41,  96 => 40,  92 => 38,  87 => 36,  78 => 35,  74 => 33,  72 => 32,  62 => 25,  53 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 商品管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加商品</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"goodsForm\" action=\"/admin/goods/add/id/{{ data.id }}\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"{{ data.cname }}\" placeholder=\"请输入商品名称\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">搜索关键字</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"keywords\" value=\"{{ data.keywords }}\" placeholder=\"请输入搜索关键字\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品封面图片</label>
            <div class=\"col-sm-10\">
              <div id=\"previewOne\" style=\"display: inline-block;\">
              {% if data.cover_path.0 is empty %}
                <img id=\"imgheadOne\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgOne').click();\">
              {% else %}
                <img id=\"imgheadOne\" border=\"0\" src=\"{{ data.cover_path.0 }}\" width=\"150\" height=\"150\" onclick=\"delCp({{ data.id }},0,'{{ data.cover_path.0 }}');\">
                <input type=\"hidden\" id=\"imgOne\" value=\"{{ data.cover_path.0 }}\">
              {% endif %}
              </div>
              <div id=\"previewTwo\" style=\"display: inline-block;margin-left: 15px;\">
              {% if data.cover_path.1 is empty %}
                <img id=\"imgheadTwo\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgTwo').click();\">
              {% else %}
                <img id=\"imgheadOne\" border=\"0\" src=\"{{ data.cover_path.1 }}\" width=\"150\" height=\"150\" onclick=\"delCp({{ data.id }},1,'{{ data.cover_path.1 }}');\">
                <input type=\"hidden\" id=\"imgTwo\" value=\"{{ data.cover_path.1 }}\">
              {% endif %}
              </div>
              <div id=\"previewThree\" style=\"display: inline-block;margin-left: 15px;\">
              {% if data.cover_path.2 is empty %}
                <img id=\"imgheadThree\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImgThree').click();\">
              {% else %}
                <img id=\"imgheadOne\" border=\"0\" src=\"{{ data.cover_path.2 }}\" width=\"150\" height=\"150\" onclick=\"delCp({{ data.id }},2,'{{ data.cover_path.2 }}');\">
                <input type=\"hidden\" id=\"imgThree\" value=\"{{ data.cover_path.2 }}\">
              {% endif %}
              </div>
              <input type=\"file\" onchange=\"previewImage(this,'previewOne','imgheadOne','previewImgOne')\" style=\"display: none;\" id=\"previewImgOne\" name=\"cover_path[]\">
              <input type=\"file\" onchange=\"previewImage(this,'previewTwo','imgheadTwo','previewImgTwo')\" style=\"display: none;\" id=\"previewImgTwo\" name=\"cover_path[]\">
              <input type=\"file\" onchange=\"previewImage(this,'previewThree','imgheadThree','previewImgThree')\" style=\"display: none;\" id=\"previewImgThree\" name=\"cover_path[]\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品规格</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"specification\" value=\"{{ data.specification }}\" placeholder=\"请输入商品规格以英文逗号分隔，例如：AAAA,BBBB,CCCC,DDDD\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">市场价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"market_price\" value=\"{{ data.market_price }}\" placeholder=\"请输入商品市场价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">促销价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"promotion_price\" value=\"{{ data.promotion_price }}\" placeholder=\"请输入商品促销价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">详情</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"details\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.details }}{% endautoescape %}</script>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">库存</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"inventory\" value=\"{{ data.inventory }}\" placeholder=\"请输入商品库存\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">商品类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"gtype\" value=\"0\" {% if data is empty %}checked=\"checked\"{% elseif data.gtype == 0 %}checked=\"checked\"{% endif %}> 正常
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"gtype\" value=\"1\" {% if data.gtype == 1%}checked=\"checked\"{% endif %}> 热点
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" {% if data is empty %}checked=\"checked\"{% elseif data.type == 0 %}checked=\"checked\"{% endif %}> 毛料
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" {% if data.type == 1%}checked=\"checked\"{% endif %}> 成品
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" {% if data is empty %}checked=\"checked\"{% elseif data.status == 0 %}checked=\"checked\"{% endif %}> 上架
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\" {% if data.status == 1%}checked=\"checked\"{% endif %}> 下架
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}

{% block footer %}
<script src=\"/apps/admin/views/goods/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
{% endblock %}", "goods/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/goods/add.html");
    }
}
