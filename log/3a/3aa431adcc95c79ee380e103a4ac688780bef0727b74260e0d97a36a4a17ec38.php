<?php

/* layouts.html */
class __TwigTemplate_27bfca1ebe74fbd4803cf6117427867e433053bd6b7db6ecef9927409fee97f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>昆明玉投商贸</title>
    <!-- Bootstrap -->
    <link href=\"/vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- sweetalert插件 -->
    <link href=\"/public/sweetalert-master/dist/sweetalert.css\">
  </head>
  <body>

    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"/vendor/components/jquery/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- 表单验证插件 -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <!-- sweetalert插件 -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  </body>
</html>";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layouts.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  53 => 15,  38 => 18,  36 => 15,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>昆明玉投商贸</title>
    <!-- Bootstrap -->
    <link href=\"/vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- sweetalert插件 -->
    <link href=\"/public/sweetalert-master/dist/sweetalert.css\">
  </head>
  <body>

    {% block content %}

    {% endblock %}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"/vendor/components/jquery/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- 表单验证插件 -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <!-- sweetalert插件 -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  </body>
</html>", "layouts.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/layouts.html");
    }
}
