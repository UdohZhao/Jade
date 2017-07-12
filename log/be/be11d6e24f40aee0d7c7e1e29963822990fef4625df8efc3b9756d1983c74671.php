<?php

/* websiteConfig/add.html */
class __TwigTemplate_b08504f41fbc78bbec7c59216148c7db46130ef0069a23d5a6489b47e89535ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "websiteConfig/add.html", 1);
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
    <h1 class=\"page-title\"># 站点管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 站点配置</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"websiteConfigForm\" action=\"/admin/websiteConfig/add\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">提成百分比</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"royalties\" placeholder=\"客服对应用户充值的提成\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "royalties", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">充值百分比</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"pay\" placeholder=\"用户使用客服工作号充值百分比\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pay", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">版权所有</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"copyright\" placeholder=\"请输入备案信息\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "copyright", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" ";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "status", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 开启站点
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\" ";
        // line 41
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "status", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 关闭站点
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

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "<script src=\"/apps/admin/views/websiteConfig/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "websiteConfig/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 60,  109 => 59,  86 => 41,  78 => 38,  68 => 31,  59 => 25,  50 => 19,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content%}

<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 站点管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 站点配置</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"websiteConfigForm\" action=\"/admin/websiteConfig/add\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">提成百分比</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"royalties\" placeholder=\"客服对应用户充值的提成\" value=\"{{ data.royalties }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">充值百分比</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"pay\" placeholder=\"用户使用客服工作号充值百分比\" value=\"{{ data.pay }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">版权所有</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"copyright\" placeholder=\"请输入备案信息\" value=\"{{ data.copyright }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">状态</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"0\" {% if data.status == 0 %}checked=\"checked\"{% endif %}> 开启站点
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"status\" value=\"1\" {% if data.status == 1 %}checked=\"checked\"{% endif %}> 关闭站点
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
<script src=\"/apps/admin/views/websiteConfig/js/add.js\"></script>
{% endblock %}", "websiteConfig/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/websiteConfig/add.html");
    }
}
