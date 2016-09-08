<?php
	session_start();
	include ("inc.php");
	// error_reporting(E_ALL);

    $connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
    // mysql_query("set names utf8");
?>

<form action="test1.php" class="jform" method="post">
	<h1 class="ftitle">
		회원가입
		<div class="clbtn">
			<img src="/img/cbtn.png" alt="닫기" title="닫기">
		</div>
	</h1>
    
	<label class="label">
		<span class="placeholder">아이디</span>
		<input type="text" name="m_id" style="ime-mode:disabled" class="jid" maxlength="16">
	</label>
    
	<label class="label">
		<span class="placeholder">이름</span>
		<input type="text" name="m_name" class="jname" maxlength="16">
	</label>
    
	<label class="label">
		<span class="placeholder">비밀번호</span>
		<input type="password" name="m_pass" class="jpass" maxlength="16">
	</label>
    
	<label class="label">
		<span class="placeholder">비밀번호확인</span>
		<input type="password" name="m_pass2" class="jrpass" maxlength="16">
	</label>
    
	<button type="submit">회원가입</button>
    <!-- 버튼에 js - join_chk() 좀 -->
</form>