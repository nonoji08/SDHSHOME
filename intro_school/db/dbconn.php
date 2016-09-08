<?php

    $db_host = "localhost";
    $db_user = "sdhs";
    $db_pass = "1234";
    $db_name = "sdhs";

    $dbconn = mysql_connect($db_host,$db_user,$db_pass);
    mysql_select_db($db_name,$dbconn) or die(mysql_error());
?>