$(function(){
    $(".account_chioce_list").click(function(){
      $(".account_chioce_list").removeClass("chioce_active");
      $(".account_chioce_list>span").removeClass("chioce_active");
      $(this).addClass("chioce_active");
      $(this).children("span").addClass("chioce_active");
    })
})