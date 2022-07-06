<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 전 아웃로그인 시작 { -->
    <h2 style="display:none;padding-bottom:10px;" >회원로그인</h2>
        <div class="ol_wr">
            <input type="submit" id="ol_submit" value="로그인" class="btn_b02">
        </div>
        <div class="ol_auto_wr"> 
            <div id="ol_svc">
                <a href="<?php echo G5_BBS_URL ?>/register.php"><b>회원가입</b></a> /
                <a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">정보찾기</a>
            </div>
        </div>
        <?php
        // 소셜로그인 사용시 소셜로그인 버튼
        @include_once(get_social_skin_path().'/social_outlogin.skin.1.php');
        ?>

<script>
$omi = $('#ol_id');
$omp = $('#ol_pw');
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');

$(function() {

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

$("#ol_submit").click( function() {
    location.href="/bbs/login.php";
});
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
