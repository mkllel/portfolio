$(document).ready(function(){
    //nav주메뉴에 마우스 올리면 서브 메뉴 나타나고, 서브배경 나타남
    $('nav > ul > li > a').hover(function(){
        $('.sub').stop().slideDown();
        $('.sub_bg').stop().slideDown();
    });
        //nav메뉴 영역에서 마우스 아웃하면 서브메뉴,서브배경 사라짐
    $('nav > ul > li').mouseleave(function(){
        $('.sub').stop().slideUp();
        $('.sub_bg').stop().slideUp();
        
    });
    
    var my = new Swiper('.swiper-container', {

                loop: true,
                autoplay: {
                    delay: 3000
                },
                pagination: {
                    el: '.swiper-pagination'
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                }
            });
    
});



$(function(){
    var photo_w=$('.photo ul li').width();
        $('.photo ul li:last-child').clone('.photo ul');
        $('.photo ul li:first-child').clone('.photo ul');
        $('#next').click(function(){
            leftMove();
        });
            function leftMove(){
                $('.photo ul').animate({left:'-='+photo_w},700,function(){
                    $('.photo ul li').first().appendTo('.photo ul');
                    $('.photo ul').css('left',-photo_w);
                });
            }
        
        $('#prev').click(function(){
            rightMove();
        });
        
        $('.photo ul li').last().prependTo('.photo ul');
        $('.photo ul').css('left',-photo_w);
    
        function rightMove(){
            $('.photo ul').animate({left:'+='+photo_w},700,function(){
                $('.photo ul li').last().prependTo('.photo ul');
                $('.photo ul').css('left',-photo_w);
            });
        }
        
    });

$(document).ready(function(){
        
        $('.navi_btn').click(function(){
            $('.menu_area').animate({left:0});
        });
        $('.close_btn').click(function(){
            $('.menu_area').animate({left:-300});
        });
        $('.navi_btn').click(function(){
            $('nav ul li a').animate({left:0});
        });
        $('.close_btn').click(function(){
            $('nav ul li a').animate({left:-300});
        });
        
    });

