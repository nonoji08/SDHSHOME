<?php
	require_once("./config.php");
	$date=new DateTime();
	$date=$date -> format("Y-m-d");
	$sql = "insert into board_list set id='익명', name='익명', title='{$_POST['title']}', content='{$_POST['content']}' ,date='{$date}'";
	//$sql = "insert into board_list set id='{$_SESSION['id']}', name='{$_SESSION['name']}', title='{$_POST['title']}', text='{$_POST['text']}' ,date='{$date}'";
	$pdo->query($sql);
	echo $sql;
?>
<script>
	location.href="./board.php";
</script>