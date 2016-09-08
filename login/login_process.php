<?php
    session_start();
    include ("inc.php");
    include ("chk.php");
    // error_reporting(E_ALL);
    $connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
	mysql_query("set names utf8");

	$m_id = $_POST[m_id];
	$m_pass = $_POST[m_pass];

    /*          *\

    1. id pass chk
       - injection
    2. special letters

    \*          */


	$getID = "select m_id from login where m_id='$m_id'";
	$getID = mysql_query($getID);
	$getID = mysql_fetch_array($getID);

    if($getID['m_id']) 
    {
		$getPASS = "select m_pass from login where m_id='$m_id'";
		$getPASS = mysql_query($getPASS);
		$getPASS = mysql_result($getPASS, 0);

        if($getPASS == $m_pass) 
        {
            $m_name = "select m_name from login where m_id='$m_id'";
            $m_name = mysql_query($m_name);
            $m_name = mysql_result($m_name, 0);
            
			$_SESSION['id'] = $m_id;
			$_SESSION['name'] = $m_name;

            $l_alert->alrt = "<script> ";
            $l_alert->alrt();
		}
		else {
            $l_alert->alrt = "<script> alert('pass err');";
            $l_alert->alrt();
        }
	}
	else { 
        $l_alert->alrt = "<script> alert('id err');";
        $l_alert->alrt();
    }
?>