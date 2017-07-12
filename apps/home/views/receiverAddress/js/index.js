$(function(){
  $(".tick").click(function(){
    $(".tick").removeClass("tick_active");
    $(this).addClass("tick_active");
    $(".address_default").removeClass("address_default_active");
    $(this).siblings(".address_default").addClass("address_default_active");
  })
})