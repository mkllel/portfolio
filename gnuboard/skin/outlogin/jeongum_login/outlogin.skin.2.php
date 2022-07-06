<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
      <!-- OUTLOGIN -->
      <style>
      #outlogin_main {width:218px; height:120px; background:#efefef; border:1px solid #cccccc;  overflow:hidden;}
      .olm_title {position:absolute; left:5px; top:5px; width:208px; height:24px; background:#374a64; cursor:pointer;}
      .olm_message {position:absolute; left:92px; top:37px; width:208px; cursor:pointer;}
      .olm_point {position:absolute; left:92px; top:57px; width:208px; cursor:pointer;}
      .olm_scrap {position:absolute; left:92px; top:77px; width:208px; cursor:pointer;}
      .olm_mphoto {position:absolute; left:5px; top:34px; width:79px; height:79px; cursor:pointer; border:1px solid #cccccc; background:white;}
      .olm_changeinfo {position:absolute; left:92px; top:97px; width:58px; height:17px; background:#666666; cursor:pointer;}
      .olm_logout {position:absolute; left:156px; top:97px; width:57px; height:17px; background:#666666; cursor:pointer;}
      .olm_changeinfo:hover, .olm_logout:hover { background:#4e99ff; }
      </style>
      <div id="outlogin_main">
        <div style="position:relative;">
          <div class="olm_title"><span style="display:block; color:white; font-weight:600; margin-left:7px;margin-top:7px;"><?php echo $nick ?>&nbsp;&nbsp;<?php if ($is_admin == 'super' || $is_auth) {  ?><a href="<?php echo G5_ADMIN_URL ?>"><span style="color:#efefef;">[관리하기]</span></a><?php } else {  ?>반갑습니다.<?php } ?></span></div>
          <div class="olm_mphoto" style="background:url('<?php echo G5_DATA_URL;?>/member/te/<?php echo $member[mb_id] ?>.gif');"></div>
          <div class="olm_message">
            <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">쪽지 : <strong><?php echo $memo_not_read ?></strong>
            </a>
          </div>
          <div class="olm_point">
            <a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point">포인트 : <strong><?php echo $point ?></strong></a>
          </div>
          <div
          <div class="olm_scrap">
            <a href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap">스크랩</a>
          </div>
          <div class="olm_changeinfo">
            <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info"><span style="display:block; color:white; margin-left:3px;margin-top:3px; ">정보수정</span></a>
          </div>
          <div class="olm_logout">
            <a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout"><span style="display:block; color:white; margin-left:3px;margin-top:3px; ">로그아웃</span></a>
          </div>
        </div>
        
        </form>
      </div>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
