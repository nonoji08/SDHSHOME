<?php
	session_start();
	$dbServer="localhost";
	$dbUser="sdhs";
	$dbPass="1234";
	$dbName="sdhs";
	try{
		$dsn="mysql:host={$dbServer};dbname={$dbName};charset=utf8";
		$pdo =new pdo($dsn,$dbUser,$dbPass);
	}
	catch(Exception $e){
		echo "연결실패";
	}
	
?>