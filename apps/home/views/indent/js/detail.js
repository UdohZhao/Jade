$(function(){
  var all_money=0;
  var each_money=0;
  var each_moneyLen=$(".each_money").length;
  for(var i=0;i<each_moneyLen;i++){
    var each_moneyHtml=$(".each_money").eq(i).html();
    var each_moneyNum=parseFloat(each_moneyHtml);
    var each_moneyQuantity=$(".each_money").eq(i).siblings(".number").children("span").html();
    var each_moneyQuantity=parseFloat(each_moneyQuantity);
    each_money=each_moneyNum*each_moneyQuantity;
    all_money+=each_money;
  }
  var all_moneyLen=$(".all_money").length;
  for(var i=0;i<all_moneyLen;i++){
    $(".all_money").eq(i).html(all_money);
  }
})