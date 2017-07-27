$(function(){
	// var each_money=$(".each_money").html();
	// var each_moneyInt=parseFloat(each_money).toFixed(2);
	// console.log(each_moneyInt)
	// var each_number=$(".each_number").html();
	// var each_numberInt=parseInt(each_number);
	// all_money=each_moneyInt*each_numberInt;
	// var all_moneyInt=parseFloat(all_money).toFixed(2);
	// $(".all_money").html(all_moneyInt);
	// $(".allmoney_bottom").html(all_moneyInt);

	// $(".jia").click(function(){
	// 	var input_number=$("#input_number").val();
	// 	var input_numberInt=parseInt(input_number);
	// 	var jia=input_numberInt+1;
	// 	$("#input_number").val(jia);
	// 	$(".each_number").html(jia);
	// 	$(".pro_num").html(jia);
	// 	all_money=each_moneyInt*jia;
	// 	var all_moneyInt=parseFloat(all_money).toFixed(2);
	// 	$(".all_money").html(all_moneyInt);
	// 	$(".allmoney_bottom").html(all_moneyInt);
	// });
	// $(".jian").click(function(){
	// 	var input_number=$("#input_number").val();
	// 	var input_numberInt=parseInt(input_number);
	// 	if(input_numberInt==1){
	// 		$("#input_number").val("1");
	// 		$(".each_number").html("1");
	// 		$(".pro_num").html("1");
	// 		all_money=each_moneyInt*1;
	// 		var all_moneyInt=parseFloat(all_money).toFixed(2);
	// 		$(".all_money").html(all_moneyInt);
	// 		$(".allmoney_bottom").html(all_moneyInt);
	// 	}else{
	// 		var jian=input_numberInt-1;
	// 		$("#input_number").val(jian);
	// 		$(".each_number").html(jian);
	// 		$(".pro_num").html(jian);
	// 		all_money=each_moneyInt*jian;
	// 		var all_moneyInt=parseFloat(all_money).toFixed(2);
	// 		$(".all_money").html(all_moneyInt);
	// 		$(".allmoney_bottom").html(all_moneyInt);
	// 	}
	// });
	function addMoney(){
		var ids=$(".shopping_list")
	    for(var i=0;i<ids.length;i++){
          var money=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_money").html();
          var number=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_number").html();
          var zhengshu=Math.round(money*100);
          var each_product=zhengshu*parseInt(number);
          all_money+=each_product;
	    }
	    $('.all_money').html(all_money/100);
	}
	addMoney();
	$(".shopping_left input").click(function(){
	    addMoney();
	})
})