<?php
	require_once("./config.php");
	$date=new DateTime();
	$date=$date -> format("Y-m-d");
	$sql = "insert into board_list set id='{$_SESSION['id']}', name='{$_SESSION['name']}', title='{$_POST['title']}', content='{$_POST['content']}' ,date='{$date}'";
	$pdo->query($sql);
	echo $sql;
?>
<script>
	location.href="./board.php";
</script>