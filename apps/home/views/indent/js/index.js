$(function () {
/*
    var itemIndex = 0;

    var tabLoadEndArray = [false, false, false];
    var tabLenghtArray = [28, 15, 47];
    var tabScroolTopArray = [0, 0, 0];

    // dropload
    var dropload = $('.khfxWarp').dropload({
        scrollArea: window,
        domDown: {
            domClass: 'dropload-down',
            domRefresh: '<div class="dropload-refresh">上拉加载更多</div>',
            domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
            domNoData: '<div class="dropload-noData">我是有底线的</div>'
        },
        loadDownFn: function (me) {
            setTimeout(function () {
                if (tabLoadEndArray[itemIndex]) {
                    me.resetload();
                    me.lock();
                    me.noData();
                    me.resetload();
                    return;
                }
                var result = '';
                for (var index = 0; index < 10; index++) {
                    if (tabLenghtArray[itemIndex] > 0) {
                        tabLenghtArray[itemIndex]--;
                    } else {
                        tabLoadEndArray[itemIndex] = true;
                        break;
                    }
                    if (itemIndex == 0) {
                        result
                        += ''
                        + '    <div class="row myorder_box">'
                        + '      <div class="weui-cells">'
                        + '        <div class="weui-cell">'
                        + '          <div class="weui-cell__bd">'
                        + '            <p class="order_number">订单编号：123456789123456789120</p>'
                        + '          </div> '
                        + '          <div class="weui-cell__ft order_state">【待评价】</div> '
                        + '        </div> '
                        + '        <a class="weui-cell weui-cell_access" href="__APP__/Orderdetails/index"> '
                        + '         <div class="weui-cell__hd">'
                        + '           <img src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '         </div>'
                        + '         <div class="weui-cell__bd">'
                        + '           <p class="order_name">宝中皇 满绿翡翠套装 宝中皇 满绿翡翠套装</p>'
                        + '           <p class="order_money">￥29800.00<span>x1</span></p>'
                        + '         </div>'
                        + '        </a>'
                        + '        <div class="weui-cell">'
                        + '          <div class="weui-cell__bd"></div>'
                        + '          <div class="weui-cell__ft total_money">合计：￥29800.00</div>'
                        + '        </div>'
                        + '        <div class="weui-cell">'
                        + '          <div class="weui-cell__bd"></div>'
                        + '          <div class="weui-cell__ft">'
                        + '           <a class="button">立即评价</a>'
                        + '          </div>'
                        + '        </div>'
                        + '      </div>'
                        + '    </div>';
                    } else if (itemIndex == 1) {
                        result
                        += ''
                        + '    加载内容';
                    } else if (itemIndex == 2) {
                        result
                        += ''
                        + '    加载内容';
                    }
                }
                $('.khfxPane').eq(itemIndex).append(result);
                me.resetload();
            }, 500);
        }
    });*/
//id  订单id  ,status 需求状态

});
function fun(id,status,moeny){
    $.toast.prototype.defaults.duration=2000
    $.ajax({
        url:'/indent/operOrder',
        data:'id='+id+'&status='+status+'&money='+moeny,
        dataType:'json',
        type:'post',
        success:function(re){
            if(re.status==true){
                $.toast(re.msg,function(){
                    location.reload();
                });
            }else{
                $.toast(re.msg,'cancel',function(){
                    location.reload();
                });
            }

        },
        error:function(re){
            alert('系统崩溃')
        }
    })
}