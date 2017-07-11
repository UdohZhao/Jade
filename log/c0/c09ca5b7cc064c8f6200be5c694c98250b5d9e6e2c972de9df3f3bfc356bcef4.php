<?php

/* article/add.html */
class __TwigTemplate_825479f83a6c48173e68510ab142b70eb7da9437c0e7dda25a8ff9a602bc594e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "article/add.html", 1);
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
    <h1 class=\"page-title\"># 目录管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 【";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["cData"] ?? null), "title", array()), "html", null, true);
        echo "】增添章节</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"articleForm\" action=\"/admin/article/add/cid/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["cData"] ?? null), "id", array()), "html", null, true);
        echo "/id/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入章节标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">阅读定价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"price\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "price", array()), "html", null, true);
        echo "\" placeholder=\"请输入阅读定价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">章节类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "checked=\"checked\"";
        } elseif (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        }
        echo "> 付费阅读
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" ";
        // line 35
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 工作码阅读
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 43
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

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "<script src=\"/apps/admin/views/article/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "article/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  120 => 60,  100 => 43,  87 => 35,  77 => 32,  67 => 25,  58 => 19,  49 => 15,  43 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 目录管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 【{{ cData.title }}】增添章节</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"articleForm\" action=\"/admin/article/add/cid/{{ cData.id }}/id/{{ data.id }}\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入章节标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">阅读定价</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"price\" value=\"{{ data.price }}\" placeholder=\"请输入阅读定价\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">章节类型</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" {% if data.type == 0 %}checked=\"checked\"{% elseif data is empty %}checked=\"checked\"{% endif %}> 付费阅读
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" {% if data.type == 1 %}checked=\"checked\"{% endif %}> 工作码阅读
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
            <div class=\"col-sm-10\">
              <!-- 加载编辑器的容器 -->
              <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
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
<script src=\"/apps/admin/views/article/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
{% endblock %}", "article/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/article/add.html");
    }
}
