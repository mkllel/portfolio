$(document).ready(function(){
   $('nav ul li').hover(function(){
       $(this).find('.sub').show();
   });
    $('nav ul li').mouseleave(function(){
        $(this).find('.sub').hide();
    });
    
   
        //모든내용 div 숨김
        $('content div').hide();
        //첫번째 내용 div보임
        $('#c1').show();
        //t1클릭하면 c1보임
        $('#t1').click(function(e){
            e.preventDefault();
               $('#c1').show();
               $('#c2').hide();
               $('#c3').hide();
        });
        //t2클릭하면 c2보임
        $('#t2').click(function(e){
            e.preventDefault();
               $('#c2').show();
               $('#c1').hide();
               $('#c3').hide();
        });
        //t3클릭하면 c3보임
        $('#t3').click(function(e){
            e.preventDefault();
               $('#c3').show();
               $('#c1').hide();
               $('#c2').hide();
        });
    });