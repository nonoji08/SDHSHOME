<?php

/*echo $_FILES['uploadfile']['name'];echo "<br/>";
echo $_FILES['uploadfile']['tmp_name'];echo "<br/>";
echo $_FILES['uploadfile']['size'];echo "<br/>";
echo $_FILES['uploadfile']['type'];echo "<br/>";
echo $_FILES['uploadfile']['error'];*/
 require_once ("./db/dbconn.php");

mysql_query ("set names utf8");
 
if (isset($_FILES) && isset($_POST['title']))
{
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $dir = $_SERVER['DOCUMENT_ROOT'].'/intro_school/img/upload/';
    $up_date = date("ymdhis");
    $file_name = $_FILES['uploadfile']['name'];
    $date_file_name = $up_date."".$file_name;
    $file_dir = $dir.$_FILES['uploadfile']['name'];
    $save_dir = $dir."".$date_file_name;
   
    if(move_uploaded_file($_FILES['uploadfile']['tmp_name'],$save_dir))
    {
        $qry = "INSERT INTO gallary_board (title,content,img,date) VALUES ('$title','$content','$save_dir','$date')";
        $result = mysql_query($qry,$dbconn) or die (mysql_error());
        echo "<script>location.href='./gallary.php'</script>";
    }
    else
    {
        echo "<script>alert('파일이나 제목이없습니다!')</script>";
        echo "<script>history.go(-1)</script>";
    }
}
?>