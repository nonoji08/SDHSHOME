<?php
	require_once("./config.php");
	$date=new DateTime();
	$date=$date -> format("Y-m-d");
	$sql = "update board_list set title='{$_POST['title']}', content='{$_POST['content']}' ,date='{$date}' where idx='{$_POST['idx']}'";
	$pdo->query($sql);
	echo $sql;
?>
<script>
	//location.href="./board.php";
</script>