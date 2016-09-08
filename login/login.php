<?php
	session_start();
	include ("inc.php");
	include ("chk.php");
	// error_reporting(E_ALL);
	$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

?>

<form name="loginForm" action="http://52.78.55.166/login/login_process.php" class="lform" method="post">
    <h1 class="ftitle">
		로그인
		<div class="clbtn">
			<img src="/img/cbtn.png" alt="닫기" title="닫기">
		</div>
	</h1>
    
	<label class="label">
		<span class="placeholder">아이디</span>
		<input type="text" name="m_id" class="lid" maxlength="16">
	</label>
    
	<label class="label">
		<span class="placeholder">비밀번호</span>
		<input type="password" name="m_pass" class="lpass" maxlength="16">
    </label>
	<button type="submit">로그인</button>
    <!--
        버튼누르면 js - login_chk()
    -->
</form>