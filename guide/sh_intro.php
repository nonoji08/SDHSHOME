<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <title>공지사항</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
 <?php
	require_once("./config.php");
	$sql="select * from introduction where idx={$_GET['idx']}";
	//echo $sql;
	$result=$pdo ->query($sql);
	$row=$result ->fetch();
	
 ?>
 <header>

 <!--include header-->
 <?php
	include('../header.php');
 ?>
 </header>
 
 <main>
 <!--lnb include -->
	<?php
		include("./lnb.php");
	?>
<!--lnb end-->
	<div class="content">
		<div class="sub-title-area">
		<ul>
			<li>H</li>
			<li>입학안내</li>
			<li>공간정보학과</li>
		</ul>
			<p class="content_title"><?=$row['title']?></p>
				
		</div>
			 <div>
  	<div class="border" style="padding:5px">
  		<p style="border-bottom:2px dotted #cdd7ea;color:#75A0F1" align="right">글쓴이 : <?=$row['name']?> (<?=$row['id']?>)   &nbsp;&nbsp;날짜 : <?=$row['date']?></p>
  		<div class="text_content"><?php echo nl2br($row['content'])?></div>
  	
    </div>
	<?php
	if($_SESSION['id']==$row['id']){
	?>
  
	  <!--<a href="./delwrite.php?idx=<?=$row['idx']?>">--><button style="float:left;margin-right:5px" class="write"style="float:left">삭제</button></a>
	  <!--<a href="./rewrite.php?idx=<?=$row['idx']?>">--><button class="write"style="float:left">수정</button></a>
  <?php
	}else{
	 ?>
<?php
	  }
	 ?>
	
	 

<a href="http://52.78.55.166/guide/introduction_department.php"><button class="write">글목록</button></a>
        </div>
    </div>
 </main>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->  
 </body>
</html>