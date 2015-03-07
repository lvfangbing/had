/**
 * Created by Fengdb on 2015/3/3.
 */
define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');

    function popover(){
        var bootstrap = require('bootstrap');
        $("[data-toggle='popover']").popover();
        $(document).on('mouseout','.omit',function(){
            $(".popover").hide();
        });
    }
    function setPosition(selector){
        var Width = document.body.clientWidth;
        var leftWidth = (Width - 1000)/2;
        var left = leftWidth + 997;
        var top = 200;
        selector.css({'left':left,'top':top}).show().animate({

        });

    }


    function scroll(){
        $('.nav-div').find('a').mouseover(function (){
            $(this).addClass("active-font");
        });
        $('.nav-div').find('a').mouseout(function(){
            $(this).removeClass("active-font");
        });
        $(document).scroll(function(){
            var top = $(document).scrollTop();
            if(top >= 150){
                slideUp.fadeIn(300);
            }else{
                slideUp.fadeOut(300);
            }
            console.log(top);
            var a = $('.company-nav').find('a');
            if(top > -1){
                setPosition($('#company'));
            }
            if(top >0 && top < 650 ){
                var sub = $('#subIntro');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');

            }
            if(top >=650 && top < 1750){
                var sub = $('#subPresident');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');

            }
            if(top >=1760 && top < 3100){
                var sub = $('#subDev');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');
            }
            if(top >=3120 && top <4700){
                var sub = $('#subOrganization');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');
            }
            if(top >=4700){
                var sub = $('#subGroup');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
            }
        })
    }
    var main = {
        base:function(){
            basejs.backTop();
            popover();
            scroll();
            setPosition($('#company'));
            $(document).scroll(function(){


            })
        }
    };
    module.exports = main ;
});