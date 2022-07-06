 $(function(){
        $('.navi_menu').click(function(){
            $('.navi_close').animate({
                left :0
            },500,"easeOutBounce");
        });
        $('.close').click(function(){
            $('.navi_close').animate({
                left:-190
            },500,"easeInBack");
        });
   
        //아코디언 메뉴
        
        var btn=$('.navi_close nav>ul>li>a');
        
        btn.click(function(){
            if($(this).attr('class')!='active'){
                btn.next().slideUp();
                btn.removeClass('active');
                $(this).addClass('active');
                $(this).next().slideDown(700,"easeOutBack");
            } else {
                $(this).removeClass('active');
                $(this).next().slideUp(700,"easeOutBack");
            }
        });
            
            $(".navi_menu").show();
            $(".navi_close").hide();
 
            $(".navi_menu").click(function(){
                $(".navi_menu").hide();
                $(".navi_close").show();
            });
 
            $(".navi_close").click(function(){
                $(".navi_menu").show();
                $(".navi_close").hide();
            });
        });