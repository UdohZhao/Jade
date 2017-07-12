$(function () {

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
                        + '    <div class="col-sm-6 col-xs-6 product_list">'
                        + '      <a href="__APP__/Productdetails/index" class="product_content">'
                        + '        <img src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '        <div class="product_title_bcg"></div>'
                        + '        <div class="product_title">'
                        + '           <span>和田碧玉手镯</span> '
                        + '        </div> '
                        + '      </a> '
                        + '     </div> ';
                    } else if (itemIndex == 1) {
                        result
                        += ''
                        + '    <div class="col-sm-6 col-xs-6 product_list">'
                        + '      <a href="__APP__/Productdetails/index" class="product_content">'
                        + '        <img src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '        <div class="product_title_bcg"></div>'
                        + '        <div class="product_title">'
                        + '           <span>和田碧玉手镯</span> '
                        + '        </div> '
                        + '      </a> '
                        + '     </div> ';
                    } else if (itemIndex == 2) {
                        result
                        += ''
                        + '    <div class="col-sm-6 col-xs-6 product_list">'
                        + '      <a href="__APP__/Productdetails/index" class="product_content">'
                        + '        <img src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '        <div class="product_title_bcg"></div>'
                        + '        <div class="product_title">'
                        + '           <span>和田碧玉手镯</span> '
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