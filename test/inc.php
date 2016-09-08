<?php
    $db_host = "localhost";
    $db_user = "sdhs";
    $db_pass = "1234";
    $db_name = "sdhs";

    function sql_connect($db_host, $db_user, $db_pass, $db_name) // DB
    {
        $result = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
        mysql_select_db($db_name) or die(mysql_error());
        return $result;
    }
?>