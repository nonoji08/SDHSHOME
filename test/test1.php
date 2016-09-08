<?php
    session_start();
    include ("inc.php");
    // error_reporting(E_ALL);

    $connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
    // mysql_query("set names utf8");

	$m_id = $_POST[m_id];
echo $m_id."<br>";
    $m_name = $_POST[m_name];
echo $m_name."<br>";
	$m_pass = $_POST[m_pass];
echo $m_pass."<br>";
	$m_pass2 = $_POST[m_pass2];
echo $m_pass2."<br>";


?>
<script> alert(" WELCOME ! ");  </script>
<!--
    location.replace("http://52.78.55.166/");
-->