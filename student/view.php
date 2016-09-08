<HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<?php
  //$file_dir = 'C:\xampp\htdocs\C04\S45\images\\';// Windows
  //$file_dir  = '/Applications/XAMPP/xamppfiles/htdocs2/C04/S45/images/'; // Mac
  require_once('../inc/inc.php');
  $today=date('YmdHis');
  echo $today;
  $file_dir  = '/var/www/html/student/images/';// Linux
  $file_path = $file_dir.$today.$_FILES["uploadfile"]["name"];
  $_POST['img']=$today.$_FILES["uploadfile"]["name"];
  if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"],$file_path)){
    $img_dir = "images/";
    $img_path = $img_dir.$_FILES["uploadfile"]["name"];
    $size = getimagesize($file_path);
	print_r ($size);
    ?>
    파일 업로드를 완료하였습니다.<BR>
    <IMG src="<?=$img_path?>" <?=$size[3]?>><BR>
    <B><?=$_POST["comment"]?></B><BR>
    <?php
  }else{
    ?>
    정상적으로 업로드되지 않았습니다.<BR>
    <?php
  }
	$sql='insert into gallary (name,content,title,img) values ("'.$_POST['name'].'","'.$_POST['content'].'","'.$_POST['title'].'","'.$_POST['img'].'");';
  //$sql1='select * from gallary';
  //$result=$pdo->query($sql1);
  echo $sql;
  $pdo->query($sql);
  //$rows=$result->fetchAll();	
?>
</BODY>
</HTML>