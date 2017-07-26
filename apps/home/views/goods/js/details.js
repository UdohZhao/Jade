$(function(){
	$("#picker").picker({
	  title: "请选择商品规格",
	  cols: [
	    {
	      textAlign: 'center',
	      values: ['iPhone 4', 'iPhone 4S', 'iPhone 5', 'iPhone 5S', 'iPhone 6', 'iPhone 6 Plus', 'iPad 2', 'iPad Retina', 'iPad Air', 'iPad mini', 'iPad mini 2', 'iPad mini 3']
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