<?php

/* catalogue/add.html */
class __TwigTemplate_e762b4be69051aa96a242f1c9cb5bb564926e376935d2fdda04bda12fa607e3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "catalogue/add.html", 1);
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
        <h3 class=\"panel-title\">@ 添加目录</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"catalogueForm\" ";
        // line 15
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "action=\"/admin/catalogue/add\"";
        }
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "action=\"/admin/catalogue/add/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo " method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入目录标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "sort", array()), "html", null, true);
        echo "\" placeholder=\"请输入大于0的整数，数字越小越靠前\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" ";
        // line 31
        if (twig_test_empty(($context["data"] ?? null))) {
            echo "checked=\"checked\"";
        }
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 毛料
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" ";
        // line 34
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 成品
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

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        // line 53
        echo "<script src=\"/apps/admin/views/catalogue/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "catalogue/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 53,  112 => 52,  89 => 34,  78 => 31,  69 => 25,  60 => 19,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 添加目录</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"catalogueForm\" {% if data is empty %}action=\"/admin/catalogue/add\"{% endif %}{% if data.type == 0 %}action=\"/admin/catalogue/add/id/{{ data.id }}\"{% endif %} method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入目录标题\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" value=\"{{ data.sort }}\" placeholder=\"请输入大于0的整数，数字越小越靠前\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"0\" {% if data is empty %}checked=\"checked\"{% endif %}{% if data.type == 0 %}checked=\"checked\"{% endif %}> 毛料
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"type\" value=\"1\" {% if data.type == 1 %}checked=\"checked\"{%endif%}> 成品
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
<script src=\"/apps/admin/views/catalogue/js/add.js\"></script>
{% endblock %}", "catalogue/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/catalogue/add.html");
    }
}
