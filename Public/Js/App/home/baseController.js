/**
 * Created by dell4 on 2014/12/3.
 */
define(function(require,exports,module){
    var $ = require('jquery');
    //require('bootstrap');
    function backTop(){
        var slideUp = $('#slideUp');
        var Width = document.body.clientWidth;
        var leftWidth = (Width - 1000)/2;
        var left = leftWidth + 1000;
        slideUp.css('left',left).fadeIn('linear');
        slideUp.on('click',function(){//返回顶部
            var id = $(this).find('img').data('id');
            if( id == 1){
                $('html,body').animate({
                    scrollTop: '0px'
                }, 300);
                return false;
            }
        });
    };
    function setValue(Element){
        var sub = Element;
        sub.addClass('active-font');
        sub.siblings().each(function(){
            if($(this).hasClass('active-font')){
                $(this).removeClass('active-font');
            }
        });
    };
    function nav_hover(){
        $('.nav-bar>li').hover(function() {
            $(this).find('.panInfo_box').slideDown(300);
        },function() {
            $(this).find('.panInfo_box').stop().slideUp(300);
        });
    }
    var main = {
        base:function(){
            //backTop();
            nav_hover();
        },
        setValue:setValue,
        backTop:backTop,
        nav_hover:nav_hover

    };
    module.exports = main ;
});