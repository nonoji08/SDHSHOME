<?php
//$file=$_FILES['ufile'];	
$today=date('YmdHis');
$file_dir  = '/var/www/html/test/images/'.$today.'_';// Linux
echo $today;
  $file_path = $file_dir.$_FILES["uploadfile"]["name"];
  if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){
    $img_dir = "images/";
    $img_path = $img_dir.$_FILES["uploadfile"]["name"];
    $_POST['img']=$file_dir.$_FILES["uploadfile"]
	$size = getimagesize($file_path);
    ?>
    <?php
  }else{
    ?>
    정상적으로 업로드되지 않았습니다.<BR>
    <?php
  }
?>