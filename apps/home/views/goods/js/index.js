$(function () {

    var itemIndex = 0;

    var tabLoadEndArray = [false, false, false];
    var tabLenghtArray = '';
    var tabScroolTopArray = [0, 0, 0];

    // dropload
    var dropload = $('.khfxWarp').dropload({
        scrollArea: window,
        domDown: {
            domClass: 'dropload-down',
            domRefresh: '<div class="dropload-refresh">上拉加载更多</div>',
            domLoad: '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
            domNoData: '<div class="dropload-noData">到底了</div>'
        },
        loadDownFn: function (me) {
            //调用函数
            var needData = newData();
            //alert(needData[0].coverimg_path)
            tabLenghtArray = [needData.length];//总长度
            page++;
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
                    /* needData[index].cover_path[0]*/
                    if (itemIndex == 0) {
                        result
                        += ''
                        + '    <div class="col-sm-6 col-xs-6 product_list">'
                        + '      <a href="/Productdetails/index?type='+needData[index].type+'" class="product_content">'
                        + '        <img src="'+needData[index].cover_path[0]+'">'
                        + '        <div class="product_title_bcg"></div>'
                        + '        <div class="product_title">'
                        + '           <span>'+needData[index].cname+'</span> '
                        + '        </div> '
                        + '      </a> '
                        + '     </div> ';
                    }
                }
                $('.khfxPane').eq(itemIndex).append(result);
                me.resetload();
            }, 500);
        }
    });

});