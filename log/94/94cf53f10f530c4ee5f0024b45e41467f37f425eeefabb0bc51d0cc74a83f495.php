<?php

/* layouts.html */
class __TwigTemplate_d6da2d0b7633035d952e2f5ef1b7d3b60ae960fdddf1265310d374846a674f21 extends Twig_Template
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
<html class=\"no-js\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>首页 | 昆明玉投商贸</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Condiment'>

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"site-menubar-unfold\" data-auto-menubar=\"false\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega\" role=\"navigation\">

    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle hamburger hamburger-close navbar-toggle-left hided\"
      data-toggle=\"menubar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"hamburger-bar\"></span>
      </button>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-collapse\"
      data-toggle=\"collapse\">
        <i class=\"icon wb-more-horizontal\" aria-hidden=\"true\"></i>
      </button>
      <div class=\"navbar-brand navbar-brand-center site-gridmenu-toggle\" data-toggle=\"gridmenu\">
        <img class=\"navbar-brand-logo\" src=\"/apps/admin/views/assets/images/logo.png\" title=\"Remark\">
        <span class=\"navbar-brand-text\"> 昆明玉投商贸</span>
      </div>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-search\"
      data-toggle=\"collapse\">
        <span class=\"sr-only\">Toggle Search</span>
        <i class=\"icon wb-search\" aria-hidden=\"true\"></i>
      </button>
    </div>

    <div class=\"navbar-container container-fluid\">
      <!-- Navbar Collapse -->
      <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
        <!-- Navbar Toolbar -->
        <ul class=\"nav navbar-toolbar\">
          <li class=\"hidden-float\" id=\"toggleMenubar\">
            <a data-toggle=\"menubar\" href=\"#\" role=\"button\">
              <i class=\"icon hamburger hamburger-arrow-left\">
                  <span class=\"sr-only\">Toggle menubar</span>
                  <span class=\"hamburger-bar\"></span>
                </i>
            </a>
          </li>
          <li class=\"hidden-xs\" id=\"toggleFullscreen\">
            <a class=\"icon icon-fullscreen\" data-toggle=\"fullscreen\" href=\"#\" role=\"button\">
              <span class=\"sr-only\">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">
          <li class=\"dropdown\">
            <a class=\"navbar-avatar dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
            data-animation=\"scale-up\" role=\"button\">
              <h4>欢迎您：重庆存己科技</h4>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\">
                <a href=\"javascript:void(0)\" role=\"menuitem\" onclick=\"javascript:window.location.href='/Admin/logout.html'\"><i class=\"icon wb-power\" aria-hidden=\"true\"></i> 退出</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>


 <div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
      <div>
        <div>
          <ul class=\"site-menu\">
            <li class=\"site-menu-category\">导航栏目</li>
            <li class=\"site-menu-item has-sub\">
              <a class=\"animsition-link\" href=\"/Admin/index.html\" data-slug=\"dashboard\" >
                <i class=\"site-menu-icon wb-dashboard\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">首页</span>
              </a>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">Layouts</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"menu-collapsed.html\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">Menu Collapsed</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  ";
        // line 147
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "

    <!-- Footer -->
  <footer class=\"site-footer\">
    <span class=\"site-footer-legal\"><i class=\"red-600 wb wb-heart\"></i> <a href=\"javascript:;\">重庆存己科技提供技术支持</a></span>
  </footer>
  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>
";
    }

    // line 147
    public function block_content($context, array $blocks = array())
    {
        // line 148
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "layouts.html";
    }

    public function getDebugInfo()
    {
        return array (  238 => 148,  235 => 147,  170 => 150,  168 => 147,  20 => 1,);
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
<html class=\"no-js\" lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
  <meta name=\"description\" content=\"bootstrap admin template\">
  <meta name=\"author\" content=\"\">

  <title>首页 | 昆明玉投商贸</title>

  <link rel=\"apple-touch-icon\" href=\"/apps/admin/views/assets/images/apple-touch-icon.png\">
  <link rel=\"shortcut icon\" href=\"/apps/admin/views/assets/images/favicon.ico\">

  <!-- Stylesheets -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/bootstrap-extend.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/css/site.min.css\">

  <!-- Plugins -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/animsition/animsition.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/asscrollable/asScrollable.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/switchery/switchery.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/intro-js/introjs.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/slidepanel/slidePanel.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/vendor/flag-icon-css/flag-icon.css\">

  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/web-icons/web-icons.min.css\">
  <link rel=\"stylesheet\" href=\"/apps/admin/views/assets/fonts/brand-icons/brand-icons.min.css\">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Condiment'>

  <!-- 引入SweetAlert css -->
  <link rel=\"stylesheet\" href=\"/public/sweetalert-master/dist/sweetalert.css\">

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/vendor/modernizr/modernizr.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/breakpoints/breakpoints.js\"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class=\"site-menubar-unfold\" data-auto-menubar=\"false\">
  <!--[if lt IE 8]>
        <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class=\"site-navbar navbar navbar-default navbar-fixed-top navbar-mega\" role=\"navigation\">

    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle hamburger hamburger-close navbar-toggle-left hided\"
      data-toggle=\"menubar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"hamburger-bar\"></span>
      </button>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-collapse\"
      data-toggle=\"collapse\">
        <i class=\"icon wb-more-horizontal\" aria-hidden=\"true\"></i>
      </button>
      <div class=\"navbar-brand navbar-brand-center site-gridmenu-toggle\" data-toggle=\"gridmenu\">
        <img class=\"navbar-brand-logo\" src=\"/apps/admin/views/assets/images/logo.png\" title=\"Remark\">
        <span class=\"navbar-brand-text\"> 昆明玉投商贸</span>
      </div>
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-target=\"#site-navbar-search\"
      data-toggle=\"collapse\">
        <span class=\"sr-only\">Toggle Search</span>
        <i class=\"icon wb-search\" aria-hidden=\"true\"></i>
      </button>
    </div>

    <div class=\"navbar-container container-fluid\">
      <!-- Navbar Collapse -->
      <div class=\"collapse navbar-collapse navbar-collapse-toolbar\" id=\"site-navbar-collapse\">
        <!-- Navbar Toolbar -->
        <ul class=\"nav navbar-toolbar\">
          <li class=\"hidden-float\" id=\"toggleMenubar\">
            <a data-toggle=\"menubar\" href=\"#\" role=\"button\">
              <i class=\"icon hamburger hamburger-arrow-left\">
                  <span class=\"sr-only\">Toggle menubar</span>
                  <span class=\"hamburger-bar\"></span>
                </i>
            </a>
          </li>
          <li class=\"hidden-xs\" id=\"toggleFullscreen\">
            <a class=\"icon icon-fullscreen\" data-toggle=\"fullscreen\" href=\"#\" role=\"button\">
              <span class=\"sr-only\">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class=\"nav navbar-toolbar navbar-right navbar-toolbar-right\">
          <li class=\"dropdown\">
            <a class=\"navbar-avatar dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\"
            data-animation=\"scale-up\" role=\"button\">
              <h4>欢迎您：重庆存己科技</h4>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\">
                <a href=\"javascript:void(0)\" role=\"menuitem\" onclick=\"javascript:window.location.href='/Admin/logout.html'\"><i class=\"icon wb-power\" aria-hidden=\"true\"></i> 退出</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>


 <div class=\"site-menubar\">
    <div class=\"site-menubar-body\">
      <div>
        <div>
          <ul class=\"site-menu\">
            <li class=\"site-menu-category\">导航栏目</li>
            <li class=\"site-menu-item has-sub\">
              <a class=\"animsition-link\" href=\"/Admin/index.html\" data-slug=\"dashboard\" >
                <i class=\"site-menu-icon wb-dashboard\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">首页</span>
              </a>
            </li>
            <li class=\"site-menu-item has-sub active open\">
              <a href=\"javascript:void(0)\" data-slug=\"layout\">
                <i class=\"site-menu-icon wb-layout\" aria-hidden=\"true\"></i>
                <span class=\"site-menu-title\">Layouts</span>
                <span class=\"site-menu-arrow\"></span>
              </a>
              <ul class=\"site-menu-sub\">
                <li class=\"site-menu-item\">
                  <a class=\"animsition-link\" href=\"menu-collapsed.html\" data-slug=\"layout-menu-collapsed\">
                    <i class=\"site-menu-icon \" aria-hidden=\"true\"></i>
                    <span class=\"site-menu-title\">Menu Collapsed</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  {% block content %}

  {% endblock %}


    <!-- Footer -->
  <footer class=\"site-footer\">
    <span class=\"site-footer-legal\"><i class=\"red-600 wb wb-heart\"></i> <a href=\"javascript:;\">重庆存己科技提供技术支持</a></span>
  </footer>
  <!-- Core  -->
  <script src=\"/apps/admin/views/assets/vendor/jquery/jquery.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/bootstrap/bootstrap.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/animsition/jquery.animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscroll/jquery-asScroll.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/mousewheel/jquery.mousewheel.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/asscrollable/jquery.asScrollable.all.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/ashoverscroll/jquery-asHoverScroll.js\"></script>

  <!-- Plugins -->
  <script src=\"/apps/admin/views/assets/vendor/switchery/switchery.min.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/intro-js/intro.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/screenfull/screenfull.js\"></script>
  <script src=\"/apps/admin/views/assets/vendor/slidepanel/jquery-slidePanel.js\"></script>

  <!-- Scripts -->
  <script src=\"/apps/admin/views/assets/js/core.js\"></script>
  <script src=\"/apps/admin/views/assets/js/site.js\"></script>

  <script src=\"/apps/admin/views/assets/js/sections/menu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/menubar.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/gridmenu.js\"></script>
  <script src=\"/apps/admin/views/assets/js/sections/sidebar.js\"></script>

  <script src=\"/apps/admin/views/assets/js/configs/config-colors.js\"></script>
  <script src=\"/apps/admin/views/assets/js/configs/config-tour.js\"></script>

  <script src=\"/apps/admin/views/assets/js/components/asscrollable.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/animsition.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/slidepanel.js\"></script>
  <script src=\"/apps/admin/views/assets/js/components/switchery.js\"></script>

  <!-- Scripts For This Page -->

  <!-- 引入SweetAlert js -->
  <script src=\"/public/sweetalert-master/dist/sweetalert.min.js\"></script>
  <!-- 引入 jquery.validate.min.js -->
  <script src=\"/public/jquery-validation-1.16.0/dist/jquery.validate.min.js\"></script>
  <script src=\"/public/jquery-validation-1.16.0/lib/jquery.form.js\"></script>

  <script>
    (function(document, window, \$) {
      'use strict';

      var Site = window.Site;
      \$(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


</body>

</html>
", "layouts.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/admin/views/layouts.html");
    }
}
