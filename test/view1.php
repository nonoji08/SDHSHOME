<HTML>
<HEAD>
  <TITLE>PHP 테스트</TITLE>
</HEAD>
<BODY>
<?php
 // $file_dir = 'C:\xampp\htdocs\test\images\\';// Windows
  //$file_dir  = '/Applications/XAMPP/xamppfiles/htdocs2/C04/S45/images/'; // Mac
	session_start();
	$dbServer="localhost";
	$dbUser="sdhs";
	$dbPass="1234";
	$dbName="sdhs";
	try{
		$dsn="mysql:host={$dbServer};dbname={$dbName};charset=utf8";
		$pdo =new pdo($dsn,$dbUser,$dbPass);
	}
	catch(Exception $e){
		echo "연결실패";
	}
  $today=date('YmdHis');
  $file_dir  = '/var/www/html/test/images/';// Linux
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
  $sql='insert into gallary (name,content,title,img) values ("'.$_POST['name'].'","'.$_POST['content'].'","'.$_POST['title'].'","'.$_POST['img'].'");';
  //$sql1='select * from gallary';
  //$result=$pdo->query($sql1);
  echo $sql;
  $pdo->query($sql);
  //$rows=$result->fetchAll();	
  

?>
</BODY>
</HTML>