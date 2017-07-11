<?php

/* news/index.html */
class __TwigTemplate_58dffba40ec4d0f924f339f2e851bfbe6199f3b86084663ca8c552697a73d020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "news/index.html", 1);
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
        <h3 class=\"panel-title\">@ 新闻列表</h3>
      </div>
      <form action=\"/admin/news/index\" method=\"post\">
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
              <th>封面图片</th>
              <th>标题</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 33
        if (($context["data"] ?? null)) {
            // line 34
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 35
                echo "            <tr>
              <td>
              ";
                // line 37
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                    // line 38
                    echo "                <span class=\"text-danger\">{付费章节}</span>
              ";
                } else {
                    // line 40
                    echo "                <span class=\"text-success\">{普通}</span>
              ";
                }
                // line 42
                echo "              </td>
              <td>
                <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "coverimg_path", array()), "html", null, true);
                echo "\" class=\"img-responsive\" style=\"width: 100px; height: 100px;\">
              </td>
              <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          ";
        } else {
            // line 54
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 62
        echo "          </tbody>
        </table>

          ";
        // line 66
        echo "            ";
        echo ($context["page"] ?? null);
        echo "
          ";
        // line 68
        echo "
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "  <script src=\"/apps/admin/views/news/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "news/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 78,  147 => 77,  136 => 68,  131 => 66,  126 => 62,  116 => 54,  113 => 53,  103 => 49,  99 => 48,  94 => 46,  89 => 44,  85 => 42,  81 => 40,  77 => 38,  75 => 37,  71 => 35,  66 => 34,  64 => 33,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 新闻列表</h3>
      </div>
      <form action=\"/admin/news/index\" method=\"post\">
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
              <th>封面图片</th>
              <th>标题</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              {% if v.type == 1 %}
                <span class=\"text-danger\">{付费章节}</span>
              {% else %}
                <span class=\"text-success\">{普通}</span>
              {% endif %}
              </td>
              <td>
                <img src=\"{{ v.coverimg_path }}\" class=\"img-responsive\" style=\"width: 100px; height: 100px;\">
              </td>
              <td>{{ v.title }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
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
  <script src=\"/apps/admin/views/news/js/index.js\"></script>
{% endblock %}", "news/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/news/index.html");
    }
}
