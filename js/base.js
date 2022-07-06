 //TOP 애니메이션
        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 500) {
                    $('#MOVE_TOP_BTN').fadeIn();
                } else {
                    $('#MOVE_TOP_BTN').fadeOut();
                }
            });

            $("#MOVE_TOP_BTN").click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });

            //오프닝 애니메이션
            console.clear();

            window.onload = function() {};

            $(window).on("load", function() {
                $(".loading").fadeOut("slow");
            });

            //부드러운 슬라이드 애니메이션
            var winh = $(window).height();
            var sections = $('section');
            var nav = $('.nav');
            /*sections.css('height', winh);*/

            $(window).on('scroll', function() {
                var cur_pos = $(this).scrollTop();
                sections.each(function() {
                    var top = $(this).offset().top;
                    var bottom = top + $(this).outerHeight();
                    if (cur_pos >= top && cur_pos < bottom) {
                        nav.find('a').removeClass('active');
                        nav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');

                    }

                });
            });


            $('.nav ul li a').click(function(e) {
                e.preventDefault();
                var attrib = $(this).attr('href');
                $('html,body').stop().animate({
                    'scrollTop': $(attrib).offset().top
                }, 800, function() {
                    //scrollEvent=false;					
                });
            });




            //그래프 애니메이션
            (function( $ ) {
                "use strict";
                $(function() {
                    function animated_contents() {
                        $(".zt-skill-bar > div ").each(function (i) {
                            var $this  = $(this),
                                skills = $this.data('width');
             
                            $this.css({'width' : skills + '%'});
             
                        });
                    }
                    
                    if(jQuery().appear) {
                        $('.zt-skill-bar').appear().on('appear', function() {
                            animated_contents();
                        });
                    } else {
                        animated_contents();
                    }
                });
            }(jQuery));
            

            //모바일에서 메뉴바 나왔다가 들어갔다 함
            var sw = 0;
            $('.navi_btn').click(function(e) {
                e.preventDefault();
                $('.nav').animate({
                    right: 0
                });
            });
            $('.close_btn').click(function(e) {
                e.preventDefault();
                $('.nav').animate({
                    right: '-100%'
                });
            });
        });