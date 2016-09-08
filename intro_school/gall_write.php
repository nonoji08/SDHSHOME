<!doctype html>
<html lang="kr">
 <head>
  <?php
    require_once ("./db/dbconn.php");
  ?>
  <meta charset="UTF-8">
  <title>학교소개</title>
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <link rel="stylesheet" type="text/css" href="../css/intro_school.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
     
     <style type="text/css">
         .gall_write_box {width:100%; height:auto; float:left;}
         button {width:50px; height:25px; float:right; margin-bottom:10px;}
         input#submit_btn {width:50px; height:25px; float:right;}
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
    
		<p class="content_title">갤러리 작성</p>
		<!-- content -->
       
       <?php
         $date = date('y-m-d');
        ?>
        <div class="gall_write_box">
            <form id="gall_form" method="post" action="./upload_img.php" enctype="multipart/form-data">
                <!--<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />-->
                <input type="hidden" name="date" value="<?php echo $date ?>"/>
                <label for="title">제목 :</label>
                <input type="text" name="title" size="50"/><br/><br/>
                <label style="float:left;" for="content">내용 :</label>
                <textarea style="margin-left:4px;" form="gall_form" name="content" cols="90" rows="20"></textarea><br/>
                <label for="uploadfile">업로드 할 파일을 선택해주세요</label><br/>
                <input type="file" name="uploadfile">
                <p>
                    <input type="submit" id="submit_btn" value="전송">
                </p>
            </form>
            <button onclick="location.href='./gallary.php'" type="button">목록</button>
        </div>    
    </div> 
	
 </div>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->
  
 </body>
</html>