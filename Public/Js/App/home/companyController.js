/**
 * Created by Fengdb on 2015/3/3.
 */
define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    //var contentContainer = $('#contentContainer');
    function popover(){
        var bootstrap = require('bootstrap');
        $("[data-toggle='popover']").popover();
        $(document).on('mouseout','.omit',function(){
            $(".popover").delay(800).hide();
        }).on('mouseover','.popover',function(){
            $(this).show();
        }).on('mouseout','.popover',function(){
            $(this).hide();
        });
    }

    function setPosition(selector){
        var top = $(document).scrollTop();
        var Width = document.body.clientWidth;
        var leftWidth = (Width - 1000)/2;
        var left = leftWidth + 1000;
        var top = 200;
        selector.css({'left':left,'top':top}).show().animate({

        });
        if(top >0 && top < 650 ){
            var sub = $('#subIntro');
            basejs.setValue(sub);
        }
        if(top >=650 && top < 1600){
            var sub = $('#subPresident');
            basejs.setValue(sub);

        }
        if(top >=1680 && top < 3010){
            var sub = $('#subDev');
            basejs.setValue(sub);
        }
        if(top >=3010 && top <4580){
            var sub = $('#subOrganization');
            basejs.setValue(sub);
        }
        if(top >=4580){
            var sub = $('#subGroup');
            basejs.setValue(sub);
        }
    }
    var top = $(document).scrollTop();
    function nav_light(){
        var top = $(document).scrollTop();
        if(top > 0){
            slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);
        }
        if(top >0 && top < 650 ){
            var sub = $('#subIntro');
            basejs.setValue(sub);
        }
        if(top >=650 && top < 1680){
            var sub = $('#subPresident');
            basejs.setValue(sub);
        }
        if(top >=1680 && top < 3080){
            var sub = $('#subDev');
            basejs.setValue(sub);
        }
        if(top >=3080 && top <4580){
            var sub = $('#subOrganization');
            basejs.setValue(sub);
        }
        if(top >=4580){
            var sub = $('#subGroup');
            basejs.setValue(sub);
        }
    }
    function scroll(){
        $(document).scroll(function(){
            var top = $(document).scrollTop();
            if(top > 10){
                slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);
            }else{
                slideUp.find('img').attr({'src':'/Public/Images/backtopno.png'},'fast').data('id',0);
            }
            var a = $('.company-nav').find('a');
            if(top >0 && top < 650 ){
                var sub = $('#subIntro');
                basejs.setValue(sub);
            }
            if(top >=650 && top < 1680){
                var sub = $('#subPresident');
                basejs.setValue(sub);
            }
            if(top >=1680 && top < 3080){
                var sub = $('#subDev');
                basejs.setValue(sub);
            }
            if(top >=3080 && top <4580){
                var sub = $('#subOrganization');
                basejs.setValue(sub);
            }
            if(top >=4580){
                var sub = $('#subGroup');
                basejs.setValue(sub);
            }
        })
    }
    var main = {
        base:function(){
            basejs.backTop();
            popover();
            setPosition($('#company'));
            scroll();
            basejs.nav_hover();
            nav_light();
        }
    };
    module.exports = main ;
});