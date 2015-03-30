/**
 * Created by Fengdb  on 2015/3/3.
 */

define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    function nav_light(){
        var top = $(document).scrollTop();
        if(top > 0){
            slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);
        }
        if(top >0 && top < 1000){
            basejs.setValue($('#js-corporateVision'));
        }
        if(top >=1000 && top <1200){
            basejs.setValue($('#js-mission'));
        }
        if(top >=1200 && top < 1300){
            basejs.setValue($('#js-purpose'));
        }
        if(top >=1300 && top <1900 ){
            basejs.setValue($('#js-value'));
        }
        if(top >=1900 && top < 3000 ){
            basejs.setValue($('#js-culture'));
        }
        if(top >=3000 && top < 3200){
            basejs.setValue($('#js-product'));
        }
        if(top >=3200 && top <3600){
            basejs.setValue($('#js-manage'));
        }
        if(top >=3600 && top < 4100){
            basejs.setValue($('#js-talent'));
        }
        if(top >=4100){
            basejs.setValue($('#js-hadlink'));
        }
    }
    function enterpriseCulture(){
        var div = $('.had-container .section-common');
        div.each(function(){
            $(this).find('li').last().css('border','none');
        });
        $(window).scroll(function(){
            var top = $(document).scrollTop();
            if(top > 10){
                slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);

                //slideUp
            }else{
                slideUp.find('img').attr({'src':'/Public/Images/backtopno.png'},'fast').data('id',0);
            }
            console.log(top);
            nav_light()

        })
    }
    function setPosition(selector){
        var Width = document.body.clientWidth;
        var leftWidth = (Width - 1000)/2;
        var left = leftWidth + 1000;
        var top = 200;
        selector.css({'left':left,'top':top}).show().animate({
        });
        //console.log(selector.position().left )
    }
    var main = {
        base:function(){
            basejs.backTop();
            nav_light();
            enterpriseCulture();
            basejs.nav_hover();
            setPosition($('#enterprise'));
        }
    };
    module.exports = main ;
});