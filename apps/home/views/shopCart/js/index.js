$(document.body).infinite(100);
$(function(){
    var centerLen=$(".shopping_center").length;
    for(var i=0;i<centerLen;i++){
        var centerW=$(".shopping_center").eq(i).width();
        var center_contentW=centerW-90;
        $(".right_content").eq(i).css("width",center_contentW+'px');
    }
    //全选反选
    $("#allchecked").click(function(){
        if($(this).prop("checked")){
            $("input[type='checkbox']").prop("checked",true);
            $("#allchecked").html("");
        }else{
            $("input[type='checkbox']").prop("checked",false);
            $("#allchecked").html("");
        }
        addMoney();
    })
    //滚动加载
    var loading = false;  //状态标记
    $(document.body).infinite().on("infinite", function() {
      if(loading) return;
      loading = true;
      setTimeout(function() {
        $("#list").append("<p> 我是新加载的内容 </p>");
        loading = false;
      }, 1500);   //模拟延迟
    });

    //滑动删除
    // 获取所有行，对每一行设置监听
    var lines = $(".shopping_list");
    var len = lines.length;
    var lastX, lastXForMobile;

    // 用于记录被按下的对象
    var pressedObj;  // 当前左滑的对象
    var lastLeftObj; // 上一个左滑的对象

    // 用于记录按下的点
    var start;

    // 网页在移动端运行时的监听
    for (var i = 0; i < len; ++i) {
        lines[i].addEventListener('touchstart', function(e){
            lastXForMobile = e.changedTouches[0].pageX;
            pressedObj = this; // 记录被按下的对象

            // 记录开始按下时的点
            var touches = event.touches[0];
            start = {
                x: touches.pageX, // 横坐标
                y: touches.pageY  // 纵坐标
            };
        });

        lines[i].addEventListener('touchmove',function(e){
            // 计算划动过程中x和y的变化量
            var touches = event.touches[0];
            delta = {
                x: touches.pageX - start.x,
                y: touches.pageY - start.y
            };

            // 横向位移大于纵向位移，阻止纵向滚动
            if (Math.abs(delta.x) > Math.abs(delta.y)) {
                event.preventDefault();
            }
        });

        lines[i].addEventListener('touchend', function(e){
            if (lastLeftObj && pressedObj != lastLeftObj) { // 点击除当前左滑对象之外的任意其他位置
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
            }
            var diffX = e.changedTouches[0].pageX - lastXForMobile;
            if (diffX < -100) {
                $(lastLeftObj).find(".shopping_center").css("width","80%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","10%");
                // $(pressedObj).animate({marginLeft:"-132px"}, 500); // 左滑
                lastLeftObj && lastLeftObj != pressedObj &&
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","10%");
                    // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 已经左滑状态的按钮右滑
                lastLeftObj = pressedObj; // 记录上一个左滑的对象
            } else if (diffX > 100) {
              if (pressedObj == lastLeftObj) {
             $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(pressedObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
              }
            }
        });
    }

    // 网页在PC浏览器中运行时的监听
    for (var i = 0; i < len; ++i) {
        $(lines[i]).bind('mousedown', function(e){
            lastX = e.clientX;
            pressedObj = this; // 记录被按下的对象
        });

        $(lines[i]).bind('mouseup', function(e){
            if (lastLeftObj && pressedObj != lastLeftObj) { // 点击除当前左滑对象之外的任意其他位置
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
            }
            var diffX = e.clientX - lastX;
            if (diffX < -100) {
                $(lastLeftObj).find(".shopping_center").css("width","80%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","10%");
                // $(pressedObj).animate({marginLeft:"-132px"}, 500); // 左滑
                lastLeftObj && lastLeftObj != pressedObj &&
                $(lastLeftObj).find(".shopping_center").css("width","90%");
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","10%");
                    // $(lastLeftObj).animate({marginLeft:"0"}, 500); // 已经左滑状态的按钮右滑
                lastLeftObj = pressedObj; // 记录上一个左滑的对象
            } else if (diffX > 100) {
              if (pressedObj == lastLeftObj) {
                var centerW=$(lastLeftObj).find(".shopping_center").width();
                $(lastLeftObj).find(".right_content").css("width",centerW-90+'px');
                $(lastLeftObj).find(".shopping_right").css("width","0");
                // $(pressedObj).animate({marginLeft:"0"}, 500); // 右滑
                lastLeftObj = null; // 清空上一个左滑的对象
              }
            }
        });
    }
})
function addMoney(){
    var ids = document.getElementsByName("ids");
    var flag = false ;
    var all_money=0;
    for(var i=0;i<ids.length;i++){
        if(ids[i].checked){
            flag = true ;
            //var money=$(ids[i]);
          var money=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_money").html();
          var number=$(ids[i]).parents(".shopping_left").siblings(".shopping_center").find(".each_number").html();
          var zhengshu=Math.round(money*100);
          var each_product=zhengshu*parseInt(number);
          all_money+=each_product;
        }
    }
    $('.all_money').html(all_money/100);
}
addMoney();
$(".shopping_left input").click(function(){
    addMoney();
})