<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<?php echo $outlogin_skin_url ?>/style.css">
<div class="ol_box2">
<!-- 로그인 후 외부로그인 시작 -->
<section id="ol_after" class="ol">
    <header id="ol_after_hd">
        <h2>나의 회원정보</h2>
        <strong><?php echo $nick ?>님</strong>
        (<a href="<?php echo G4_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info"><span class="666"><i class="icon-cog"></i></span>&nbsp;정보수정</a> /
        <a href="<?php echo G4_BBS_URL ?>/logout.php" id="ol_after_logout"><i class="icon-unlock-alt"></i>&nbsp;로그아웃</a>)        
    </header>
    <ul id="ol_after_private">
		<li>
        	<a href="<?php echo G4_BBS_URL ?>/profile.php?mb_id=<?=$member[mb_id]?>" target="_blank" id="ol_after_pt" class="win_point">Lv.<?=$member[mb_grade]?></a>
		</li>
        <li>
            <a href="<?php echo G4_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point"><strong><?php echo $point ?></strong></a>
        </li>        
        <li>
            <a href="<?php echo G4_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo"><span class="sound_only">안 읽은 </span><strong><?php echo $memo_not_read ?></strong></a>
        </li>
        <li>
            <a href="<?php echo G4_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap"><strong>보기</strong></a>
        </li>
    </ul>
    <footer id="ol_after_ft">
    </footer>
</section>
</div>
<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G4_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- 로그인 후 외부로그인 끝 -->
