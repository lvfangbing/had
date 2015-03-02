/**
 * Created by Administrator on 2015/2/28.
 */
define(function(require,exports,module) {
    var $ = require('jquery');
    function index(){
        $('#container').find('.view').mouseover(function () {
            $(this).addClass("active");
        });
        $('#container').find('.view').mouseout(function () {
            $(this).removeClass("active");
        })
        var close = $('#close');
        var windowInfo = $('#windowInfo');
        var upAdBanner = function () {
            windowInfo.slideUp(500);
            close.slideUp(500);
            $("body").css("overflow", "scroll");
        };
        var downBanner = function () {
            windowInfo.slideDown(500);
            close.slideDown(500);
            $("body").css("overflow", "hidden")
        }
        downBanner();
        setTimeout(upAdBanner, 4000);
        var top = $(document).scrollTop();
        $(window).scroll(function () {
            if (top > 10) {
                windowInfo.css('top', '220px');
            }
        });
        close.on('click', function () {
            windowInfo.hide();
            $(this).hide();
        })
    }
    var main = {
        index:function(){
            index();
        }
    };
    module.exports = main;
});