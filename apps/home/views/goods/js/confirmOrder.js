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
		//a+','+b
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
		var allm=$(".all_money").html();
		var allmInt=Math.round(allm*100);
		var fall=allmInt+zhengshu;
		$(".all_money").html(fall/100);
		$(".allmoney_bottom").html(fall/100);
	  })
	$(".jian").click(function(){
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
			var eachmoney=$(this).parents(".number_chioce").siblings(".each_money").html();
			var zhengshu=Math.round(eachmoney*100);
			var allm=$(".all_money").html();
			var allmInt=Math.round(allm*100);
			var fall=allmInt-zhengshu;
			$(".all_money").html(fall/100);
			$(".allmoney_bottom").html(fall/100);
		}
	});
	$(".upbutton").click(function(){
		var arr=[];
		var product=$(".shopping_list");
		for(i=0;i<product.length;i++){
			var productid=$(product[i]).find(".productid").val();//商品id
			var cover=$(product[i]).find(".left_img img").attr("src");//封面地址
			var name=$(product[i]).find(".product_name").html();//商品名称
			var specification=$(product[i]).find(".specification span").html();//商品规格
			var unitprice=$(product[i]).find(".each_money").html();//单价
			var number=$(product[i]).find(".input_number").val();//数量
			arr.push(productid+','+cover+','+name+','+specification+','+unitprice+','+number);
			console.log(arr)
		}
	})
})