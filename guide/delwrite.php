<?php
	require_once("./config.php");
	$sql = "delete from board_list where idx='{$_GET['idx']}'";
	$result = $pdo->query($sql);
?>
<script type="text/javascript">
	location.href="./board.php";
</script>