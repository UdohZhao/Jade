<?php

/* serviceUser/index.html */
class __TwigTemplate_711162e52f809def15917d33e22ca6546964c21cc5dac276357271901f101b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "serviceUser/index.html", 1);
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
    <h1 class=\"page-title\"># 客服管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 客服列表 => ";
        // line 12
        echo twig_escape_filter($this->env, ($context["cname"] ?? null), "html", null, true);
        echo "</h3>
      </div>
      <form action=\"/admin/serviceUser/index/pid/";
        // line 14
        echo twig_escape_filter($this->env, ($context["pid"] ?? null), "html", null, true);
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
              <th>添加时间</th>
              <th>姓名</th>
              <th>工作号</th>
              <th>收入金额</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 35
        if (($context["data"] ?? null)) {
            // line 36
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 37
                echo "            <tr>
              <td>
              ";
                // line 39
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 40
                    echo "                <span class=\"text-danger\">{冻结}</span>
              ";
                } else {
                    // line 42
                    echo "                <span class=\"text-success\">{正常}</span>
              ";
                }
                // line 44
                echo "              </td>
              <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "jobnumber", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "income", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addJunior(";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">添加下级</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"listJunior(";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">下级列表</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                ";
                // line 53
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 54
                    echo "                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",0);\">解冻</button>
                ";
                } else {
                    // line 56
                    echo "                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",1);\">冻结</button>
                ";
                }
                // line 58
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          ";
        } else {
            // line 62
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 70
        echo "          </tbody>
        </table>

          ";
        // line 74
        echo "            ";
        echo ($context["page"] ?? null);
        echo "
          ";
        // line 76
        echo "
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

";
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "  <script src=\"/apps/admin/views/serviceUser/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "serviceUser/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 86,  181 => 85,  170 => 76,  165 => 74,  160 => 70,  150 => 62,  147 => 61,  139 => 58,  133 => 56,  127 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  93 => 44,  89 => 42,  85 => 40,  83 => 39,  79 => 37,  74 => 36,  72 => 35,  48 => 14,  43 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 客服管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 客服列表 => {{ cname }}</h3>
      </div>
      <form action=\"/admin/serviceUser/index/pid/{{ pid }}\" method=\"post\">
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
              <th>添加时间</th>
              <th>姓名</th>
              <th>工作号</th>
              <th>收入金额</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              {% if v.status == 1 %}
                <span class=\"text-danger\">{冻结}</span>
              {% else %}
                <span class=\"text-success\">{正常}</span>
              {% endif %}
              </td>
              <td>{{ v.ctime|date('Y-m-d H:i') }}</td>
              <td>{{ v.cname }}</td>
              <td>{{ v.jobnumber }}</td>
              <td>{{ v.income }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"addJunior({{ v.id }});\">添加下级</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"listJunior({{ v.id }});\">下级列表</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                {% if v.status == 1 %}
                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag({{ v.id }},0);\">解冻</button>
                {% else %}
                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag({{ v.id }},1);\">冻结</button>
                {% endif %}
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
  <script src=\"/apps/admin/views/serviceUser/js/index.js\"></script>
{% endblock %}", "serviceUser/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/serviceUser/index.html");
    }
}
