<?php

/* news/detail.html */
class __TwigTemplate_072f025707fa3d20354df684d6e3b95c9b0758a24fc8e4d2e0b11de17623cea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "news/detail.html", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"/apps/home/views/news/css/detail.css\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row news_title_time\">
  <div class=\"col-sm-12 col-xs-12\">
    <span class=\"news_title\">我给你自由，你拒绝接受</span><br />
    <span class=\"news_time\">--2017-06-29 17:03</span>
  </div>
</div>
<div class=\"row news_content khfxWarp\">
  <div class=\"col-sm-12 col-xs-12 khfxPane\">
    <p>生命里，一些缱绻，无论素净，还是喧哗，都已经被岁月赋予了清喜的味道，一些闲词，或清新，或淡雅，总会在某一个回眸的时刻醉了流年，濡湿了柔软的心，冥冥之中，我们沿着呼唤的风声，终于在堆满落花的秋里，再次重逢，念在天涯，心在咫尺，我相信，一米阳光，才是我们最好的距离。</p>
    <p>缘起是诗，缘离是画，这些关于岁月，关于记忆的章节，终会被时光搁置在无法触及的红尘之外，曾经，你我一别经年，可风里，总有一段美丽会与我们不期而遇，一盏琉璃，半杯心悦，端然着那一份醉人的静，这安静行走的流年，总会被过往赋予一份清喜，一份浪漫。</p>
    <p>或许，习惯了着布衣素颜，让清心若雪，不喜张扬，不畏喧哗，守着一怀自己的素韵安静，在自己心中的半亩桃源，修篱种菊，喜欢与山水相依，与流水对话，让文字的墨香，依附在心灵的每一个角落，也喜欢，在闲时，端坐时光一隅，将一本书读到无字，将一盏茶喝到无味，将一个故事看到流泪.……心染尘香，不须有多少的柔情话语去讲，只要能够念起，便是一份温暖。</p>
    <p>或许，习惯了着布衣素颜，让清心若雪，不喜张扬，不畏喧哗，守着一怀自己的素韵安静，在自己心中的半亩桃源，修篱种菊，喜欢与山水相依，与流水对话，让文字的墨香，依附在心灵的每一个角落，也喜欢，在闲时，端坐时光一隅，将一本书读到无字，将一盏茶喝到无味，将一个故事看到流泪.……心染尘香，不须有多少的柔情话语去讲，只要能够念起，便是一份温暖。</p>
  </div>
</div>
<div class=\"row pay_read\">
  <div class=\"col-sm-12 col-xs-12\">
    <a href=\"#\">付费阅读</a>
  </div>
</div>
";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "<!-- 滚动加载内容js -->
<script type=\"text/javascript\" src=\"/apps/home/views/news/js/detail.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "news/detail.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  64 => 29,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}

{% block header %}
<link rel=\"stylesheet\" href=\"/apps/home/views/news/css/detail.css\">
{% endblock %}

{% block content %}
<div class=\"row news_title_time\">
  <div class=\"col-sm-12 col-xs-12\">
    <span class=\"news_title\">我给你自由，你拒绝接受</span><br />
    <span class=\"news_time\">--2017-06-29 17:03</span>
  </div>
</div>
<div class=\"row news_content khfxWarp\">
  <div class=\"col-sm-12 col-xs-12 khfxPane\">
    <p>生命里，一些缱绻，无论素净，还是喧哗，都已经被岁月赋予了清喜的味道，一些闲词，或清新，或淡雅，总会在某一个回眸的时刻醉了流年，濡湿了柔软的心，冥冥之中，我们沿着呼唤的风声，终于在堆满落花的秋里，再次重逢，念在天涯，心在咫尺，我相信，一米阳光，才是我们最好的距离。</p>
    <p>缘起是诗，缘离是画，这些关于岁月，关于记忆的章节，终会被时光搁置在无法触及的红尘之外，曾经，你我一别经年，可风里，总有一段美丽会与我们不期而遇，一盏琉璃，半杯心悦，端然着那一份醉人的静，这安静行走的流年，总会被过往赋予一份清喜，一份浪漫。</p>
    <p>或许，习惯了着布衣素颜，让清心若雪，不喜张扬，不畏喧哗，守着一怀自己的素韵安静，在自己心中的半亩桃源，修篱种菊，喜欢与山水相依，与流水对话，让文字的墨香，依附在心灵的每一个角落，也喜欢，在闲时，端坐时光一隅，将一本书读到无字，将一盏茶喝到无味，将一个故事看到流泪.……心染尘香，不须有多少的柔情话语去讲，只要能够念起，便是一份温暖。</p>
    <p>或许，习惯了着布衣素颜，让清心若雪，不喜张扬，不畏喧哗，守着一怀自己的素韵安静，在自己心中的半亩桃源，修篱种菊，喜欢与山水相依，与流水对话，让文字的墨香，依附在心灵的每一个角落，也喜欢，在闲时，端坐时光一隅，将一本书读到无字，将一盏茶喝到无味，将一个故事看到流泪.……心染尘香，不须有多少的柔情话语去讲，只要能够念起，便是一份温暖。</p>
  </div>
</div>
<div class=\"row pay_read\">
  <div class=\"col-sm-12 col-xs-12\">
    <a href=\"#\">付费阅读</a>
  </div>
</div>
{% endblock %}

{% block footer %}
<!-- 滚动加载内容js -->
<script type=\"text/javascript\" src=\"/apps/home/views/news/js/detail.js\"></script>
{% endblock %}", "news/detail.html", "/Users/zhaojian/htdocs/dev.jade.local/wwwroot/apps/home/views/news/detail.html");
    }
}
