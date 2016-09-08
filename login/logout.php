<?php
	session_start();
	include ("inc.php");
	// error_reporting(E_ALL);

	$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

	// session reset
	$_SESSION[id] = "";
	$_SESSION[name] = "";


    $l_alert->alrt = "<script>";
    $l_alert->alrt();
?>