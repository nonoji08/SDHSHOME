<?php
    session_start();
    include ("inc.php");
    include ("chk.php");
    // error_reporting(E_ALL);
    $connect = sql_connect($db_host, $db_user, $db_pass, $db_name);
	mysql_query("set names utf8");


    // 스크립트, 인젝션, 금지어 필터링 좀 해줘 ㅠㅠ


    // 1. ID chk -> OK
    if(!preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $_POST[m_id])) // 한글아이디 체크
    {
        if (!preg_match('/^[0-9A-Za-z]{4,16}$/', $_POST[m_id]) || !preg_match('/[a-zA-Z]/', $_POST[m_id])) // 아이디에 영어+숫자 8~16자
        {
            $l_alert->alrt = "<script> alert('ID err');";
            $l_alert->alrt();
            exit;
        } 
        else
        {
            $m_id = strip_tags($_POST[m_id]);
        }
    }
    else 
    {
        $l_alert->alrt = "<script> alert('hangul id x');";
        $l_alert->alrt();
        exit;
    }
 

    // 2. nickname -> ... sry
    if (preg_match('/^[~!@#$%^&*()-_=+\[\]\;\:\'\"\,\<\.\>\/]{2,16}$/', $_POST[m_name])
    {
        $l_alert->alrt = "<script> alert('name err');";
        $l_alert->alrt();
        exit;
    }
    else
    {
        $m_name = strip_tags($_POST[m_name]);        
    }
        
    // 3. pass chk -> OK
    if($_POST[m_pass]==$_POST[m_pass2])
    {
        if (!preg_match('/^[0-9A-Za-z~!@#$%^&*]{4,16}$/', $_POST[m_pass]) || !preg_match('/\d/', $_POST[m_pass]) || !preg_match('/[a-zA-Z]/', $_POST[m_pass])) 
        {
            $l_alert->alrt = "<script> alert('pass err');";
            $l_alert->alrt();
            exit;
        } 
        else 
        {
            $m_pass = $_POST[m_pass];
        }
    }
    else
    {
        $l_alert->alrt = "<script> alert('pass != pass2');";
        $l_alert->alrt();
        exit;
    }

    // 4. overlap id chk -> OK
	$getID = "select m_id from login where m_id='$m_id'";
	$getID = mysql_query($getID);
	$getID = mysql_fetch_array($getID);

    if($id==$getID)
    {
        $sql = "insert into login (m_id, m_name, m_pass)";
        $sql = $sql." values('$m_id','$m_name', '$m_pass')";

        if(mysql_query($sql))
        {
            $l_alert->alrt = "<script> alert('join');";
            $l_alert->alrt();
        }
        else
        {
            $l_alert->alrt = "<script> alert('fail');";
            $l_alert->alrt();
            exit;
        }
    }
    else
    {
        $l_alert->alrt = "<script> alert('overlap id');";
        $l_alert->alrt();
        exit;
    }
?>