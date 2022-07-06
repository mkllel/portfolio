<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
      <!-- OUTLOGIN -->
      <style>
      #outlogin_main {width:218px; height:88px; background:#efefef; border:1px solid #cccccc; overflow:hidden;}
      .olm_id {position:absolute; left:5px; top:5px;}
      .olm_psd {position:absolute; left:5px; top:31px;}
      .olm_btn {position:absolute; left:138px; top:5px; width:75px; height:47px; background:#374a64; cursor:pointer;}
      .olm_register {position:absolute; left:5px; top:58px; width:65px; height:24px; background:#666666; cursor:pointer;}
      .olm_msearch {position:absolute; left:75px; top:58px; width:138px; height:24px; background:#666666; cursor:pointer;}
      .olm_register:hover, .olm_msearch:hover {background:#4e99ff;}
      </style>
      <div id="outlogin_main">
        <div style="position:relative;">
          <form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
          <div class="olm_id"><input type="text" id="ol_id" name="mb_id" required class="required" style="width:120px;padding:3px; border:1px solid #cccccc;"/></div>
          <div class="olm_psd"><input type="password" name="mb_password" id="ol_pw" required class="required" style="width:120px;padding:3px; border:1px solid #cccccc;"/></div>
          <div class="olm_btn" onclick="submit();"><span style="display:block; color:white; margin-left:19px;margin-top:17px;">로그인</span></div>
          <div class="olm_register"><a href="<?php echo G5_BBS_URL ?>/register.php"><span style="display:block; color:white; margin-left:7px;margin-top:7px; ">회원가입</span></a></div>
          <div class="olm_msearch"><a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost"><span style="display:block; color:white; margin-left:7px;margin-top:7px;">아이디/패스워드 찾기</span></a></div>
          <div style="width:0px;height:0px;overflow:hidden;"><input type="submit"/></div>
        </div>
        </form>
      </div>
      <script>
      function fhead_submit(f)
      {
          return true;
      }
      </script>
      <!-- // OUTLOGIN -->