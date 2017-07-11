<?php

/* news/add.html */
class __TwigTemplate_5c5a98c88705ec6d27646f853de3b3d8ae9e5a0408eee945a176b9a8de47fe1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "news/add.html", 1);
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
    <h1 class=\"page-title\"># 新闻管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 发布新闻</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"newsForm\" action=\"/admin/news/add/id/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入新闻标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">封面图片</label>
            <div class=\"col-sm-10\">
              <div id=\"preview\">
              ";
        // line 26
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "coverimg_path", array())) {
            // line 27
            echo "                <img id=\"imghead\" border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "coverimg_path", array()), "html", null, true);
            echo "\" width=\"150\" height=\"150\" onclick=\"delCp(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo ",'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "coverimg_path", array()), "html", null, true);
            echo "');\">
              ";
        } else {
            // line 29
            echo "                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImg').click();\">
              ";
        }
        // line 31
        echo "              </div>
              <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"coverimg_path\">
              <input type=\"hidden\" id=\"imgValue\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "coverimg_path", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" ";
        // line 40
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo " onchange=\"flag(0);\"> 普通
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" ";
        // line 43
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " onchange=\"flag(1);\"> 链接付费章节
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "style=\"height: 300px; display: none;\"";
        } else {
            echo "style=\"height: 300px;\"";
        }
        echo ">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array());
        echo "</script>
              <div id=\"searchDiv\" ";
        // line 52
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "style=\"display: none;\"";
        }
        echo ">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "atitle", array()), "html", null, true);
        echo "\" placeholder=\"请输入章节标题模糊搜索\"><span class=\"input-group-addon btn btn-primary\" onclick=\"getAid();\">搜索</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"button\" class=\"btn btn-default\" onclick=\"newsSub();\">提 交</button>
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

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "<script src=\"/apps/admin/views/news/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "news/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 74,  155 => 73,  133 => 54,  126 => 52,  116 => 51,  103 => 43,  93 => 40,  83 => 33,  79 => 31,  75 => 29,  65 => 27,  63 => 26,  53 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 新闻管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 发布新闻</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"newsForm\" action=\"/admin/news/add/id/{{ data.id }}\" method=\"post\" enctype=\"multipart/form-data\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入新闻标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">封面图片</label>
            <div class=\"col-sm-10\">
              <div id=\"preview\">
              {% if data.coverimg_path %}
                <img id=\"imghead\" border=\"0\" src=\"{{ data.coverimg_path }}\" width=\"150\" height=\"150\" onclick=\"delCp({{ data.id }},'{{ data.coverimg_path }}');\">
              {% else %}
                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/news/img/photo_icon.png\" width=\"150\" height=\"150\" onclick=\"\$('#previewImg').click();\">
              {% endif %}
              </div>
              <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"coverimg_path\">
              <input type=\"hidden\" id=\"imgValue\" value=\"{{ data.coverimg_path }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" {% if data is empty %}checked=\"checked\"{% elseif data.type == 0 %}checked=\"checked\"{% endif %} onchange=\"flag(0);\"> 普通
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" {% if data.type == 1 %}checked=\"checked\"{% endif %} onchange=\"flag(1);\"> 链接付费章节
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" {% if data.type == 1 %}style=\"height: 300px; display: none;\"{% else %}style=\"height: 300px;\"{% endif %}>{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
              <div id=\"searchDiv\" {% if data.type == 0 %}style=\"display: none;\"{% endif %}>
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{{ data.atitle }}\" placeholder=\"请输入章节标题模糊搜索\"><span class=\"input-group-addon btn btn-primary\" onclick=\"getAid();\">搜索</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"button\" class=\"btn btn-default\" onclick=\"newsSub();\">提 交</button>
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
<script src=\"/apps/admin/views/news/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
{% endblock %}", "news/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/news/add.html");
    }
}
