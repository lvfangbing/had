/**
 * Created by Administrator on 2015/2/28.
 */
define(function(require,exports,module) {
    var $ = require('jquery');
    function index(){
        var main = $('#main-content');
        var windowInfo = $('#windowInfo');
        var basejs = require('baseController.js');
        function jumpAnimate(){
            $("body").css("overflow", "hidden")
            windowInfo.css('top',-750).show();
            windowInfo.animate({'top':'-750px'},"fast");
            windowInfo.animate({'top':'190px'},"fast");
            windowInfo.animate({'top':'10px'},"fast");
            windowInfo.animate({'top':'180px'},"fast");
            windowInfo.animate({'top':'20px'},"fast");
            windowInfo.animate({'top':'160px'},"fast");
            windowInfo.animate({'top':'40px'},"fast");
            windowInfo.animate({'top':'140px'},"fast");
            windowInfo.animate({'top':'60px'},"fast");
            windowInfo.animate({'top':'120px'},"fast");
            windowInfo.animate({'top':'80px'},"fast");
            windowInfo.animate({'top':'100px'},"fast");

        }
        var Width = document.body.clientWidth;
        var leftWidth = (Width - 1000)/2;
        var left = leftWidth + 1000;
        $('#pullRing').css('left',left).fadeIn('linear');
        main.on('click','#pullRing',function(){
            var _self = $(this).find('img');
            _self.animate({height:'150px',opacity:'0.8'},"100");
            _self.animate({height:'133px',opacity:'1'},"linear");
            //windowInfo.fadeToggle("slow","linear");
            jumpAnimate();
            windowInfo.delay(800).fadeOut('300',function(){
                $("body").css("overflow", "scroll");
            });
        });
        var height  =window.pageYOffset;
        if(height > 0){
            $('body,html').animate({scrollTop:0},100);
        };
        $('#container').find('.view').mouseover(function () {
            $(this).addClass("active");
        });
        $('#container').find('.view').mouseout(function () {
            $(this).removeClass("active");
        });
        var upAdBanner = function () {
            windowInfo.slideUp(500);
           $("body").css("overflow", "scroll");
        };
        //var downBanner = function () {
        //    windowInfo.slideDown(500);
        //    $("body").css("overflow", "hidden")
        //};
        jumpAnimate();
        setTimeout(upAdBanner, 5000);
        $(window).scroll(function(){
            var top = $(document).scrollTop();
            if(top > 100){
                //windowInfo.css('top',0);
                $('#pullRing').css('top',0);
            }else{
                $('#pullRing').css('top',100);
            }
        })
    }
    var main = {
        index:function(){
            index();
            basejs.nav_hover();
        }
    };
    module.exports = main;
});