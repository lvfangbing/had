/**
 * Created by Administrator on 2015/3/4.
 */
/**
 * Created by Administrator on 2015/3/4.
 */

define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    function businessCooperationController(){
        $(window).scroll(function(){
            var top = $(document).scrollTop();
            if(top >=10){
                slideUp.fadeIn(300);
            }else{
                slideUp.fadeOut(300);
            }

            if(top >200  && top < 1000){
                basejs.setValue($('#contact'));
            }
            if(top >=1000){
                basejs.setValue($('#invite'));
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
            businessCooperationController();
            setPosition($('#coop'));
            basejs.nav_hover();
        }
    };
    module.exports = main ;
});