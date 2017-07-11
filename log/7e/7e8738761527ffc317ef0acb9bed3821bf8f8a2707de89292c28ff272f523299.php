<?php

/* serviceUser/add.html */
class __TwigTemplate_32398c6b1565b904bd13befc4448c087ed99f257af278a944813e2a605fc0583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "serviceUser/add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        <h3 class=\"panel-title\">@ 添加客服</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
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

    public function getTemplateName()
    {
        return "serviceUser/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 添加客服</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Password</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <div class=\"checkbox\">
                <label>
                  <input type=\"checkbox\"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Page -->

{% endblock %}", "serviceUser/add.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/serviceUser/add.html");
    }
}
