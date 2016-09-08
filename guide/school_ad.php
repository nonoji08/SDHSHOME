<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <title>학교홍보동영상</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
 </head>
 <body>
 <header>
 <!--header-->
 <?php
	include("../header.php");
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
			<li>학교홍보동영상</li>
		</ul>
		<h4 class="content_title">학교 홍보 동영상</h4>
		</div>
		<!--<video style="width:100%;margin:20px 0"src="https://www.youtube.com/watch?v=eALFV97yZCg" controls autoplay></video>-->
		<iframe style="margin-top:15px" width="100%" height="400px" src="https://www.youtube.com/embed/eALFV97yZCg" frameborder="0" allowfullscreen></iframe>
	</div>	
 </main>
 <!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->
 </body>
 <script type="text/javascript" src="./js/script.js"></script>
</html>