<?php

/* index/index.html */
class __TwigTemplate_017dc1dc6e4550e7c0548e7ab6d85e13be874a36e22aec1f623f34b9ac9bb74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "index/index.html", 1);
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
        echo "<!-- 欢迎语 -->
<div class=\"jumbotron\" style=\"background: #ffffff;\">
  <div class=\"container\">
  <h1>~ 欢迎使用存己框架 ：）</h1>
  </div>
</div>
<!-- 欢迎语 -->
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block content %}
<!-- 欢迎语 -->
<div class=\"jumbotron\" style=\"background: #ffffff;\">
  <div class=\"container\">
  <h1>~ 欢迎使用存己框架 ：）</h1>
  </div>
</div>
<!-- 欢迎语 -->
{% endblock %}", "index/index.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/index/index.html");
    }
}
