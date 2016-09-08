<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <title>학교소개</title>
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <link rel="stylesheet" type="text/css" href="../css/intro_school.css" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
  <link rel="stylesheet" type="text/css" href="/intro_school/css/sejin.css" />
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/intro_school/js/sejin.js"></script>
 </head>
 <body>
 <header>
 <!--header include-->
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
			<li>학교소개</li>
			<li>교훈/상징</li>
		</ul>
        <h4 class="content_title">교훈/상징</h4>
		</div>
		<!-- content -->
        <div class="gyohun" style="height:305px">
            <span style="font-size:18pt">교훈</span>
            </br>
            <p class="text">사랑<img src="img/love.jpg" alt=""></p>
            <p class="text">성실<img src="img/sungsil.jpg" alt=""></p>
            <p class="text">인내<img src="img/innae.jpg" alt=""></p>
        </div>
        <div class="gyoga">
            <p style="font-size:18pt">교가</p>
            <img src="img/school_music.jpg" alt="">
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