<?php
    if($_SESSION['id']==true)
    {
        $l_alert->alrt = "<script> alert('already logged in');";
        $l_alert->alrt();
    }
?>  