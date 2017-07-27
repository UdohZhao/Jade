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
})