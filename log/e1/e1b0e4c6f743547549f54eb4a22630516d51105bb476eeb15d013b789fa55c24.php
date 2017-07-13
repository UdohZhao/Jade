<?php

/* goods/index.html */
class __TwigTemplate_b192ebe27faa674287579113552b596a489db8ee1c532af058f5342ab4273cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "goods/index.html", 1);
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
        <h3 class=\"panel-title\">@ 商品列表</h3>
      </div>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" ";
        // line 15
        if ((($context["type"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/goods/index/type/0\">毛料</a></li>
        <li role=\"presentation\" ";
        // line 16
        if ((($context["type"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/goods/index/type/1\">成品</a></li>
      </ul>
      <form action=\"/admin/goods/index/type/";
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
              <th>商品名称</th>
              <th>搜素关键字</th>
              <th>规格</th>
              <th>市场价</th>
              <th>促销价</th>
              <th>库存</th>
              <th>商品类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 42
        if (($context["data"] ?? null)) {
            // line 43
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 44
                echo "            <tr>
              <td>
              ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 47
                    echo "                <span class=\"text-danger\">{下架}</span>
              ";
                } else {
                    // line 49
                    echo "                <span class=\"text-success\">{上架}</span>
              ";
                }
                // line 51
                echo "              </td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "keywords", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "specification", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "market_price", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "promotion_price", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "inventory", array()), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 59
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "gtype", array()) == 1)) {
                    // line 60
                    echo "                <span class=\"text-danger\">{热点}</span>
                ";
                } else {
                    // line 62
                    echo "                <span class=\"text-success\">{正常}</span>
                ";
                }
                // line 64
                echo "              </td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">编辑</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "          ";
        } else {
            // line 72
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 80
        echo "          </tbody>
        </table>

          ";
        // line 84
        echo "            ";
        echo ($context["page"] ?? null);
        echo "
          ";
        // line 86
        echo "
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        // line 96
        echo "  <script src=\"/apps/admin/views/goods/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "goods/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 96,  197 => 95,  186 => 86,  181 => 84,  176 => 80,  166 => 72,  163 => 71,  153 => 67,  149 => 66,  145 => 64,  141 => 62,  137 => 60,  135 => 59,  130 => 57,  126 => 56,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  107 => 51,  103 => 49,  99 => 47,  97 => 46,  93 => 44,  88 => 43,  86 => 42,  59 => 18,  52 => 16,  46 => 15,  32 => 3,  29 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 商品列表</h3>
      </div>
      <ul class=\"nav nav-pills\" style=\"margin-left: 30px;\">
        <li role=\"presentation\" {% if type == 0 %}class=\"active\"{% endif %}><a href=\"/admin/goods/index/type/0\">毛料</a></li>
        <li role=\"presentation\" {% if type == 1 %}class=\"active\"{% endif %}><a href=\"/admin/goods/index/type/1\">成品</a></li>
      </ul>
      <form action=\"/admin/goods/index/type/{{ type }}\" method=\"post\">
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
              <th>商品名称</th>
              <th>搜素关键字</th>
              <th>规格</th>
              <th>市场价</th>
              <th>促销价</th>
              <th>库存</th>
              <th>商品类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              {% if v.status == 1 %}
                <span class=\"text-danger\">{下架}</span>
              {% else %}
                <span class=\"text-success\">{上架}</span>
              {% endif %}
              </td>
              <td>{{ v.cname }}</td>
              <td>{{ v.keywords }}</td>
              <td>{{ v.specification }}</td>
              <td>{{ v.market_price }}</td>
              <td>{{ v.promotion_price }}</td>
              <td>{{ v.inventory }}</td>
              <td>
                {% if v.gtype == 1 %}
                <span class=\"text-danger\">{热点}</span>
                {% else %}
                <span class=\"text-success\">{正常}</span>
                {% endif %}
              </td>
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
  <script src=\"/apps/admin/views/goods/js/index.js\"></script>
{% endblock %}", "goods/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/goods/index.html");
    }
}
