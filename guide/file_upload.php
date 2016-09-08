<?php
    $dir = $_SERVER['DOCUMENT_ROOT'].'/intro_school/img/upload/';
    $file_dir =$dir.$_FILES['uploadfile']['name'];
    
    if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$file_dir))
    {
        $qry = "insert into gallary_board (title,img) VALUES ('$title','$file_dir')";
        $result = mysql_query($qry,$dbconn);
        $row = mysql_fetch_assoc($result);
        echo $row;
        echo "upload complete";
    }
    else
    {
        echo "파일을 올리지 못했습니다."
    }
?>