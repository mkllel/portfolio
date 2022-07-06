<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<section id="ol_after" class="ol">

    <div id="ol_svc3"><?=$member['mb_level']?></div>
    <div id="ol_svc4"> <strong><?php echo $nick ?>(lv.<?=$member['mb_level']?>)</strong> 반갑습니다.</div>
    <div id="ol_svc6"><a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point">포인트<?php echo $point ?> 점</a></div>
    <div id="ol_svc8"><a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">쪽지함(<?php echo $memo_not_read ?>)</a></div>
    <div id="ol_svc7"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info">정보수정</a></div>
    <div id="ol_svc5"><a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout">로그아웃</a></div>
    
  
</section>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
