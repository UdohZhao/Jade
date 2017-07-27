$(function(){
	var all=0;
	var eachall=0;
	var all_money=0;
	var product=$(".shopping_list");
	for(i=0;i<product.length;i++){
		var each=$(product[i]).find(".input_number").val();
		var eachInt=parseInt(each);
		all+=eachInt;
		$(".pro_num").html(all);
		var eachmoney=$(product[i]).find(".each_money").html();
		var zhengshu=Math.round(eachmoney*100);
		var eachall=zhengshu*eachInt;
		all_money+=eachall;
		$(".all_money").html(all_money/100);
		$(".allmoney_bottom").html(all_money/100);
	}
	$(".jia").click(function(){  
		var input_number=$(this).siblings(".input_number").val();
		var input_numberInt=parseInt(input_number);
		var jia=input_numberInt+1;
		$(this).siblings(".input_number").val(jia);
		var all=0;
		for(i=0;i<product.length;i++){
			var each=$(product[i]).find(".input_number").val();
			var eachInt=parseInt(each);
			all+=eachInt;
			$(".pro_num").html(all);
		};
		var eachmoney=$(this).parents(".number_chioce").siblings(".each_money").html();
		var zhengshu=Math.round(eachmoney*100);
		var eachall=zhengshu*eachInt;
		all_money+=eachall;
		$(".all_money").html(all_money/100);
		$(".allmoney_bottom").html(all_money/100);
	  })
	$(".jian").click(function(){
		var eachmoney=$(this).parents(".number_chioce").siblings(".each_money").html();
		var zhengshu=Math.round(eachmoney*100);
		var input_number=$(this).siblings(".input_number").val();
		var input_numberInt=parseInt(input_number);
		if(input_numberInt==1){
			var all=0;
			$(this).siblings(".input_number").val("1");
			for(i=0;i<product.length;i++){
				var each=$(product[i]).find(".input_number").val();
				var eachInt=parseInt(each);
				all+=eachInt;
				$(".pro_num").html(all);
				var eachall=zhengshu*eachInt;
				all_money+=eachall;
				console.log(eachmoney);
				$(".all_money").html(all_money/100);
				$(".allmoney_bottom").html(all_money/100);
			};
		}else{
			var jian=input_numberInt-1;
			var all=0;
			$(this).siblings(".input_number").val(jian);
			for(i=0;i<product.length;i++){
				var each=$(product[i]).find(".input_number").val();
				var eachInt=parseInt(each);
				all+=eachInt;
				$(".pro_num").html(all);
			};
			var zhengshu=Math.round(eachmoney*100);
			var eachall=zhengshu*eachInt;
			all_money+=eachall;
			$(".all_money").html(all_money/100);
			$(".allmoney_bottom").html(all_money/100);
		}
	});
})