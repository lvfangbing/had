/**
 * Created by Fengdb  on 2015/3/3.
 */

define(function(require,exports,module){
    var $ = require('jquery');
    var slideUp = $('#slideUp');
    var basejs = require('baseController.js');
    function news(){
        var div = $('.had-container .section-common');
        div.each(function(){
            $(this).find('li').last().css('border','none');
        });
        var list = $('.news-list');
        var companyNews = $('#companyNews');
        companyNews.on('click','.news-list',function(){
            var id = $(this).data('id');
            window.open('News/showContent?id='+id);
        });
        var top = $(document).scrollTop();
        if(top > 0){
            slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);
        }
        $(window).scroll(function(){
            var top = $(document).scrollTop();
            if(top > 10){
                slideUp.find('img').attr('src','/Public/Images/backtopyes.png').data('id',1);
            }else{
                slideUp.find('img').attr({'src':'/Public/Images/backtopno.png'},'fast').data('id',0);
            }
            if(top > -1){
                setPosition($('#news-nav'));
            }
            if(top >0 && top < 900){
                var sub = $('#subIntro');
                sub.addClass('active-font');
                sub.siblings().each(function(){
                    if($(this).hasClass('active-font')){
                        $(this).removeClass('active-font');
                    }
                });
            }
            if(top >=900 && top < 1000){
                var sub = $('#subPresident');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');
            }
            if(top >=1010){
                var sub = $('#subDev');
                sub.prev().removeClass('active-font');
                sub.addClass('active-font');
                sub.next().removeClass('active-font');
            }
        });
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
            news();
            $('html,body').animate({
                scrollTop: '0px'
            }, 1);
            setPosition($('#news-nav'));
            basejs.nav_hover();
        }
    };
    module.exports = main ;
});