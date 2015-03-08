/**
 * Created by Administrator on 2015/3/4.
 */

define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    function investorController(){
        $(window).scroll(function(){
            var top = $(document).scrollTop()
            if(top >= 100){
                slideUp.fadeIn(300);
            }else{
                slideUp.fadeOut(300);
            }
            console.log(top);

            if(top >0 && top < 600){
                basejs.setValue($('#subKaibei'));
            }
            if(top >=600 && top < 900){
                basejs.setValue($('#subCarNews'));
            }
            if(top >=900){
                basejs.setValue($('#subShenzhen'));
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
            investorController();
            setPosition($('#investor'));
            basejs.nav_hover();
        }
    };
    module.exports = main ;
});