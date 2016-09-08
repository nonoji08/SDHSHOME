<?php
	require_once("./config.php");
	$query = "update board_list set count = count + 1 where idx='{$_GET['idx']}'";
	$pdo->query($query);
	echo $query;
?>
