<?php

/* article/index.html */
class __TwigTemplate_7ab936a1cd8e889bb8d654f878b578e35b9410e060e02d7608ee20a4533cf8cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "article/index.html", 1);
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
        echo "】章节列表</h3>
      </div>
      <form action=\"/admin/article/index/cid/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["cData"] ?? null), "id", array()), "html", null, true);
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
              <th>阅读定价</th>
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
                    echo "                  <span class=\"text-success\">{工作号阅读}</span>
                ";
                } else {
                    // line 40
                    echo "                  <span class=\"text-danger\">{付费阅读}</span>
                ";
                }
                // line 42
                echo "              </td>
              <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</td>
              <td>¥ ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "price", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["cData"] ?? null), "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
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
        // line 63
        echo "            ";
        echo ($context["page"] ?? null);
        echo "
          ";
        // line 65
        echo "      </div>
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
        echo "<script src=\"/apps/admin/views/article/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "article/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 74,  151 => 73,  141 => 65,  136 => 63,  132 => 60,  122 => 52,  119 => 51,  109 => 47,  103 => 46,  98 => 44,  94 => 43,  91 => 42,  87 => 40,  83 => 38,  81 => 37,  77 => 35,  72 => 34,  70 => 33,  48 => 14,  43 => 12,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 【{{ cData.title }}】章节列表</h3>
      </div>
      <form action=\"/admin/article/index/cid/{{ cData.id }}\" method=\"post\">
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
              <th>阅读定价</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
                {% if v.type == 1 %}
                  <span class=\"text-success\">{工作号阅读}</span>
                {% else %}
                  <span class=\"text-danger\">{付费阅读}</span>
                {% endif %}
              </td>
              <td>{{ v.title }}</td>
              <td>¥ {{ v.price }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ cData.id }},{{ v.id }});\">编辑</button>
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
<script src=\"/apps/admin/views/article/js/index.js\"></script>
{% endblock %}", "article/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/article/index.html");
    }
}
