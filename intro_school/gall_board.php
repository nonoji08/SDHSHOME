<!doctype html>
<html lang="kr">
 <head>
  <?php
    require_once ("./db/dbconn.php");
     mysql_query ("set names utf8");
  ?>
  <meta charset="UTF-8">
  <title>학교소개</title>
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <link rel="stylesheet" type="text/css" href="../css/intro_school.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
     
     <style type="text/css">
         .gall_box {width:100%; height:auto; float:left;}
         button {width:50px; height:25px; float:right; margin-bottom:10px;}
     </style>
 </head>
 <body>
 <header>
 <!--header include-->
 <?php
	include("../header.php");
 ?>
 </header>
 <div class="container" style="height:auto;">
 <!--lnb include -->
	<?php
		include("./lnb.php");
	?>
<!--lnb end-->
	<div class="content">
    
		<p class="content_title">갤러리</p>
		<!-- content -->
       <?php
            $no = $_GET['no'];
            $qry = "select * from gallary_board where no=$no";
            $result = mysql_query($qry,$dbconn) or die(mysql_error());
            $row = mysql_fetch_assoc($result);
            $start_pos = strlen($_SERVER['DOCUMENT_ROOT'].'/intro_school');
        ?>
        <div class="gall_box">
            <img src=".<?=substr($row['img'],$start_pos);?>">
            <p>
                <?=$row['content'];?>
            </p>
        </div>  
        <button onclick="location.href='./gallary.php'" type="button">목록</button>  
    </div> 
	
 </div>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->
  
 </body>
</html>