<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <title>유비쿼서스과 실습실 소개</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
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
			<li>실습실 소개</li>
		</ul>
		    <h4 class="content_title">실습실 소개</h4>
		</div>
		<div align="center" class="border">공간정보 데이터베이스 실습실</div>
		<ul class="room">
			<li align="right"><img src="./img/ub_room.PNG"/></li>
			<li valign="middle">
				데이터베이스의 전반적인 개념을 이해하고 GIS에서 데이터 베이스의 역활과 기능에 대해서 실습하고 실제 GIS구축시 관계형 데이터베이스, 객체지향형 데이터 베이스의 논리적 설계, 물리적 설계방법과 GIS 시스템과 설계된 데이터 베이스의 매칭 검색에 대해 학습한다.
			</li>
		</ul>
		<div align="center" class="border" style="clear:both">공간정보 응용 실습실</div>
		<ul class="room">
			<li align="right"><img src="./img/ub_room2.PNG" /></li>
			<li>
				GIS(Geographic Information System)의 지리공간정보를 활용하여 기본 공간자료와 공간정보 오픈플랫폼인 브이월드의 공간 및 속성 정보를 처리하며, 또한 처리된 자료의 인터페이스 설계기법 등을 학습한다.
			</li>
		</ul>
		<div align="center" class="border" style="clear:both">공간정보 프로그래밍 실습실</div>
		<ul class="room">
			<li align="right"><img src="./img/ub_room3.PNG"/></li>
			<li>
				기본적인 프로그램(JAVA)에 대한 개념 이해 및 공간정보 활용방안을 학습하며 이를 바탕으로 공간정보 Web/App 개발을 학습한다.
			</li>
		</ul>
	</div>
 </div>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->  
 </body>
   <script type="text/javascript" src="./js/script.js"></script>
</html>