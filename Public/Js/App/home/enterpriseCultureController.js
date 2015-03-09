/**
 * Created by Fengdb  on 2015/3/3.
 */

define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    function enterpriseCulture(){
        var div = $('.had-container .section-common');
        div.each(function(){
            $(this).find('li').last().css('border','none');
        });
        $(window).scroll(function(){
            var top = $(document).scrollTop();
            if(top >= 150){
                slideUp.fadeIn(300);
            }else{
                slideUp.fadeOut(300);
            }
            console.log(top);
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
            $('html,body').animate({
                scrollTop: '0px'
            }, 1);
            enterpriseCulture();
            basejs.nav_hover();
            setPosition($('#enterprise'));
        }
    };
    module.exports = main ;
});