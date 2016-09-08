<?php
    $db_host = "localhost";
    $db_user = "sdhs";
    $db_pass = "1234";
    $db_name = "sdhs";
    
    function sql_connect($db_host, $db_user, $db_pass, $db_name)
    {
        $result = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
        mysql_select_db($db_name) or die(mysql_error());
        return $result;
    }
    
    mysql_query("set names utf8");
    
    /* 수정 후 삭제 */
	class l_alert 
    {
		public $alert = "";

		function alrt()
        {
			echo($this->alrt."location.replace('http://52.78.55.166/'); </script>");
		}
	}
    $l_alert=new L_alert();
?>