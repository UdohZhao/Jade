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
                        + '    <a href="/wechat/index.php/Newsdetails/index" class="weui-media-box weui-media-box_appmsg">'
                        + '      <div class="weui-media-box__hd">'
                        + '        <img class="weui-media-box__thumb" src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '      </div>'
                        + '      <div class="weui-media-box__bd">'
                        + '        <h4 class="weui-media-box__title">标题一</h4> '
                        + '        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p> '
                        + '      </div> '
                        + '      <span class="weui-cell__ft"> '
                        + '         <svg class="icon categorie-icon" aria-hidden="true">'
                        + '           <use xlink:href="#icon-icon"></use>'
                        + '         </svg>'
                        + '      </span>'
                        + '    </a>';
                    } else if (itemIndex == 1) {
                        result
                        += ''
                        + '    <a href="/wechat/index.php/Newsdetails/index" class="weui-media-box weui-media-box_appmsg">'
                        + '      <div class="weui-media-box__hd">'
                        + '        <img class="weui-media-box__thumb" src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '      </div>'
                        + '      <div class="weui-media-box__bd">'
                        + '        <h4 class="weui-media-box__title">标题一</h4> '
                        + '        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p> '
                        + '      </div> '
                        + '      <span class="weui-cell__ft"> '
                        + '         <svg class="icon categorie-icon" aria-hidden="true">'
                        + '           <use xlink:href="#icon-icon"></use>'
                        + '         </svg>'
                        + '      </span>'
                        + '    </a>';
                    } else if (itemIndex == 2) {
                        result
                        += ''
                        + '    <a href="/wechat/index.php/Newsdetails/index" class="weui-media-box weui-media-box_appmsg">'
                        + '      <div class="weui-media-box__hd">'
                        + '        <img class="weui-media-box__thumb" src="/apps/home/views/index/img/QQ截图20170627164651.png">'
                        + '      </div>'
                        + '      <div class="weui-media-box__bd">'
                        + '        <h4 class="weui-media-box__title">标题一</h4> '
                        + '        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p> '
                        + '      </div> '
                        + '      <span class="weui-cell__ft"> '
                        + '         <svg class="icon categorie-icon" aria-hidden="true">'
                        + '           <use xlink:href="#icon-icon"></use>'
                        + '         </svg>'
                        + '      </span>'
                        + '    </a>';
                    }
                }
                $('.khfxPane').eq(itemIndex).append(result);
                me.resetload();
            }, 500);
        }
    });

});