$(function(){
	//将规格转为数组
	var arr = specification.split(",");
	$("#picker").picker({
	  title: "请选择商品规格",
	  cols: [
	    {
	      textAlign: 'center',
	      values: arr
	    }
	  ]
	});
	$(".jia").click(function(){
		var input_number=$("#input_number").val();
		var input_numberInt=parseInt(input_number);
		var jia=input_numberInt+1;
		$("#input_number").val(jia);
	});
	$(".jian").click(function(){
		var input_number=$("#input_number").val();
		var input_numberInt=parseInt(input_number);
		if(input_numberInt==1){
			$("#input_number").val("1");
		}else{
			var jian=input_numberInt-1;
			$("#input_number").val(jian);
		}
	})

	$('#addtocart').click(function(){
			//规格,数量
		var spec = $('#picker').val();
		var num = $('#input_number').val();
		if(!spec){
			$.toast.prototype.defaults.duration=1000
			$.toast('请选择规格','cancel');
			return false;
		}else{

			$.ajax({
				url:'/goods/add_shopcar',
				data:{'gid':goodsId,
						'quantity':num,
							'specification':spec},
				dataType:'json',
				type:'post',
				success:function(re){
					$.toast.prototype.defaults.duration=1000
					if(re.status==true){
						$.toast(re.msg,function(){
							window.location.href='/shopCart/index';
						})
					}else{
						$.toast(re.msg,'cancel')
					}
				}
			})
		}

	})

	//点击立即购买
	$('#buynow').click(function(){
		var spec = $('#picker').val();
		var num = $('#input_number').val();
		if(!spec){
			$.toast.prototype.defaults.duration=1000
			$.toast('请选择规格','cancel');
			return false;
		}
		//记录选择的商品数量;
		sessionStorage.setItem('goodsNum',num);
		//记录选择的规格
		sessionStorage.setItem('goodsSpec',spec);
	})
})