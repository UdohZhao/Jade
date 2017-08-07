var money='';
$(function(){
    $(".account_chioce_list").click(function(){
      $(".account_chioce_list").removeClass("chioce_active");
      $(".account_chioce_list>span").removeClass("chioce_active");
      $(this).addClass("chioce_active");
      $(this).children("span").addClass("chioce_active");

        //正则匹配取得数字部分
        var pattern=/\d+(\.\d+)?/g;
        money=parseFloat($(this).children("span").html().match(pattern)) ;
    })
})

