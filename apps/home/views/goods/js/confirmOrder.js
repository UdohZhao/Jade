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
	var left_imgh=$(".left_img").eq(0).height();
	$(".right_content").css("height",left_imgh);
	$(".upbutton").click(function(){
		if(phoneNum==''){
			$.toast('请设置默认地址','forbidden');
			return false;
		}
		var arr=[];
		var product=$(".shopping_list");
		var productid='' ,cover=''  ,name=''  ,specification=''  , unitprice=''  ,number='' ;
		for(i=0;i<product.length;i++){

			//申明二维数组
			//arr[i] = [];

			 productid+=$(product[i]).find(".productid").val()+'<=>';//商品id
			 cover+=$(product[i]).find(".left_img img").attr("src")+'<=>';//封面地址
			 name+=$(product[i]).find(".product_name").html()+'<=>';//商品名称
			 specification+=$(product[i]).find(".specification span").html()+'<=>';//商品规格
			 unitprice+=$(product[i]).find(".each_money").html()+'<=>';//单价
			 number+=$(product[i]).find(".input_number").val()+'<=>';//数量


			/*arr[i]['productid']=productid;
			arr[i]['cover']=cover;
			arr[i]['name']=name;
			arr[i]['specification']=specification;
			arr[i]['unitprice']=unitprice;
			arr[i]['number']=number;*/
		}
		productid = productid.substr(0,productid.length-'<=>'.length);
		cover = cover.substr(0,cover.length-'<=>'.length);
		name = name.substr(0,name.length-'<=>'.length);
		specification = specification.substr(0,specification.length-'<=>'.length);
		unitprice = unitprice.substr(0,unitprice.length-'<=>'.length);
		number = number.substr(0,number.length-'<=>'.length);
		arr.push(productid);
		arr.push(cover);
		arr.push(name);
		arr.push(specification);
		arr.push(unitprice);
		arr.push(number);
		//ajax请求数据
		//卖家留言
		var msg=$('#message').val();
		// 价格合计
		var finalMoney=parseFloat($('#allMoney').html()) ;
		$.ajax({
			url:'/goods/intoOrder',
			data:{orderArr:arr,msg:msg,finalMoney:finalMoney},
			dataType:'json',
			type:'post',
			success:function(re){
				if(re.status==true){
					$.toast('定单已生成,进入订单页面查看')
				}else{
					$.toast('订单提交失败,重新提交','cancel')
				}
			}
		})
	})
})