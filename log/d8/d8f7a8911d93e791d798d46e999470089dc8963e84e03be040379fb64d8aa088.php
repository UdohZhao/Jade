<?php

/* catalogue/index.html */
class __TwigTemplate_39003fd69536f91df86e582b3008c301ef543898916e5c7ca9cfd758a231ad3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "catalogue/index.html", 1);
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
        <h3 class=\"panel-title\">@ 目录列表</h3>
      </div>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" ";
        // line 15
        if ((($context["type"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/catalogue/index/type/0\">毛料</a></li>
        <li role=\"presentation\" ";
        // line 16
        if ((($context["type"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/catalogue/index/type/1\">成品</a></li>
      </ul>
      <form action=\"/admin/catalogue/index/type/";
        // line 18
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>标题</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 37
        if (($context["data"] ?? null)) {
            // line 38
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 39
                echo "            <tr>
              <td></td>
              <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "sort", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"article(";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">增添章节</button>
                <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"articleIndex(";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">章节列表</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          ";
        } else {
            // line 52
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 60
        echo "          </tbody>
        </table>

          ";
        // line 64
        echo "            ";
        echo ($context["page"] ?? null);
        echo "
          ";
        // line 66
        echo "
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "  <script src=\"/apps/admin/views/catalogue/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "catalogue/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 76,  157 => 75,  146 => 66,  141 => 64,  136 => 60,  126 => 52,  123 => 51,  113 => 47,  109 => 46,  105 => 45,  101 => 44,  96 => 42,  92 => 41,  88 => 39,  83 => 38,  81 => 37,  59 => 18,  52 => 16,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 目录列表</h3>
      </div>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" {% if type == 0 %}class=\"active\"{% endif %}><a href=\"/admin/catalogue/index/type/0\">毛料</a></li>
        <li role=\"presentation\" {% if type == 1 %}class=\"active\"{% endif %}><a href=\"/admin/catalogue/index/type/1\">成品</a></li>
      </ul>
      <form action=\"/admin/catalogue/index/type/{{ type }}\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>标题</th>
              <th>排序</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td></td>
              <td>{{ v.title }}</td>
              <td>{{ v.sort }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"article({{ v.id }});\">增添章节</button>
                <button type=\"button\" class=\"btn btn-info btn-xs\" onclick=\"articleIndex({{ v.id }});\">章节列表</button>
              </td>
            </tr>
          {% endfor %}
          {% else %}
            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>

          {% autoescape false %}
            {{ page }}
          {% endautoescape %}

      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}

{% block footer %}
  <script src=\"/apps/admin/views/catalogue/js/index.js\"></script>
{% endblock %}", "catalogue/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/catalogue/index.html");
    }
}
