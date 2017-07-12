<?php

/* layouts.html */
class __TwigTemplate_b4c0ba95fe360e507bc266abc11288274272acfdb480ed6951a1a42e77f12460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>昆明玉投商贸</title>
    <!-- Bootstrap -->
    <link href=\"/vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- sweetalert插件 -->
    <link href=\"/public/sweetalert-master/dist/sweetalert.css\">
    <!-- jQuery WeUI -->
    <link rel=\"stylesheet\" href=\"//cdn.bootcss.com/weui/1.1.1/style/weui.min.css\">
    <link rel=\"stylesheet\" href=\"//cdn.bootcss.com/jquery-weui/1.0.1/css/jquery-weui.min.css\">
    <!-- 滚动加载css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/apps/home/views/dropload.css\">
    <!-- 阿里图标 -->
    <style type=\"text/css\">
      .icon {
         width: 1em; height: 1em;
         vertical-align: -0.15em;
         fill: currentColor;
         overflow: hidden;
      }
      a:hover{
        text-decoration: none !important;
      }
      a{
        text-decoration: none;
        color: #000;
      }
      img{
        width: 100%;
        height: 100%;
      }
      p{
        margin: 0;
      }
      .dropload-down{
        width: 100%;
      }
    </style>

    ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
  </head>
  <body>

    <div class=\"container-fluid bigBox\">

    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"/vendor/components/jquery/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- 表单验证插件 -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <!-- sweetalert插件 -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
    <!-- jQuery WeUI -->
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/jquery-weui.min.js\"></script>
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/swiper.min.js\"></script>
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/city-picker.min.js\"></script>
    <!-- 阿里巴巴矢量图标 -->
    <script src=\"http://at.alicdn.com/t/font_helwy0bujbhb0529.js\"></script>
    <!-- 滚动加载js -->
    <script type=\"text/javascript\" src=\"/apps/home/views/dropload.js\"></script>
    <!-- 动态获取高度 -->
    <script type=\"text/javascript\" src=\"/apps/home/views/index.js\"></script>
    <script type=\"text/javascript\">
        \$(function(){
            \$(\".swiper-container\").swiper({
                loop: true,
                autoplay: 3000
            });
        })
    </script>

    ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "
  </body>
</html>";
    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        // line 45
        echo "
    ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "
    ";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layouts.html";
    }

    public function getDebugInfo()
    {
        return array (  139 => 88,  136 => 87,  131 => 54,  128 => 53,  123 => 45,  120 => 44,  114 => 90,  112 => 87,  79 => 56,  77 => 53,  69 => 47,  67 => 44,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <title>昆明玉投商贸</title>
    <!-- Bootstrap -->
    <link href=\"/vendor/twbs/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- sweetalert插件 -->
    <link href=\"/public/sweetalert-master/dist/sweetalert.css\">
    <!-- jQuery WeUI -->
    <link rel=\"stylesheet\" href=\"//cdn.bootcss.com/weui/1.1.1/style/weui.min.css\">
    <link rel=\"stylesheet\" href=\"//cdn.bootcss.com/jquery-weui/1.0.1/css/jquery-weui.min.css\">
    <!-- 滚动加载css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/apps/home/views/dropload.css\">
    <!-- 阿里图标 -->
    <style type=\"text/css\">
      .icon {
         width: 1em; height: 1em;
         vertical-align: -0.15em;
         fill: currentColor;
         overflow: hidden;
      }
      a:hover{
        text-decoration: none !important;
      }
      a{
        text-decoration: none;
        color: #000;
      }
      img{
        width: 100%;
        height: 100%;
      }
      p{
        margin: 0;
      }
      .dropload-down{
        width: 100%;
      }
    </style>

    {% block header %}

    {% endblock %}

  </head>
  <body>

    <div class=\"container-fluid bigBox\">

    {% block content %}

    {% endblock %}

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"/vendor/components/jquery/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/vendor/twbs/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- 表单验证插件 -->
    <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
    <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>
    <!-- sweetalert插件 -->
    <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
    <!-- jQuery WeUI -->
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/jquery-weui.min.js\"></script>
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/swiper.min.js\"></script>
    <script src=\"http://cdn.bootcss.com/jquery-weui/1.0.1/js/city-picker.min.js\"></script>
    <!-- 阿里巴巴矢量图标 -->
    <script src=\"http://at.alicdn.com/t/font_helwy0bujbhb0529.js\"></script>
    <!-- 滚动加载js -->
    <script type=\"text/javascript\" src=\"/apps/home/views/dropload.js\"></script>
    <!-- 动态获取高度 -->
    <script type=\"text/javascript\" src=\"/apps/home/views/index.js\"></script>
    <script type=\"text/javascript\">
        \$(function(){
            \$(\".swiper-container\").swiper({
                loop: true,
                autoplay: 3000
            });
        })
    </script>

    {% block footer %}

    {% endblock %}

  </body>
</html>", "layouts.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/layouts.html");
    }
}
