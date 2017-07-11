<?php

/* industryDynamics/add.html */
class __TwigTemplate_b4378f1fcfa50b7a2fb324dd0d1a0f2432ef24e01f0972a7e668b476da246e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "industryDynamics/add.html", 1);
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
    <h1 class=\"page-title\"># 行业动态管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 发布行业动态</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"industryDynamicsForm\" action=\"/admin/industryDynamics/add/id/";
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
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" ";
        // line 40
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "style=\"height: 300px; display: none;\"";
        } else {
            echo "style=\"height: 300px;\"";
        }
        echo ">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array());
        echo "</script>
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

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "<script src=\"/apps/admin/views/industryDynamics/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "industryDynamics/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 58,  119 => 57,  93 => 40,  83 => 33,  79 => 31,  75 => 29,  65 => 27,  63 => 26,  53 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 行业动态管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 发布行业动态</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"industryDynamicsForm\" action=\"/admin/industryDynamics/add/id/{{ data.id }}\" method=\"post\" enctype=\"multipart/form-data\">
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
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" {% if data.type == 1 %}style=\"height: 300px; display: none;\"{% else %}style=\"height: 300px;\"{% endif %}>{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
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
<script src=\"/apps/admin/views/industryDynamics/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
{% endblock %}", "industryDynamics/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/industryDynamics/add.html");
    }
}
