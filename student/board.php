<?php
require_once('../inc/inc.php');
$sql='select * from gallary';
$result=$pdo->query($sql);
$rows=$result->fetchAll();
print_r ($rows);
?>
<!doctype html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <title>SDHS</title>
        <link rel="stylesheet" type="text/css" href="/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<link rel="stylesheet" type="text/css" href="/student/css/student.css">
    </head>
    <body>
       <?php 
        include($_SERVER['DOCUMENT_ROOT'].'/header.php');
        ?>
		<main>
			<div class="lnb" style="margin-top:0px">
				<h2>학생마당</h2>
					<ul class="first_menu">
						<li><a href="/student/board.php">학생게시판</a></li>
						<li><a href="/student/rule.php">학생생활규정</a></li>
						<li><a href="/student/teacher.php">교사미니홈피</a></li>
						<li><a href="/student/afterschool.php">방과후학교</a></li>
					</ul>
			</div>            
			<div class="content">
                <div class="sub-title-area">
                     <ul>
                        <li>H</li>
                        <li>학생마당</li>
                        <li>학생게시판</li>
                    </ul>
                    <h4 class="content_title">학생게시판</h4>
                </div>
				<!-- 이미지는 css background로 정의 -->
				<ul class="gallery">
				    <?php
							foreach($rows as $row){
					?>
					<li>
						<div class="img" style="background-image:url(images/<?=$row['img']?>);"><a href="/student/gallery.php"></a></div>
						<h3 class="gtitle"><a href="/student/gallery.php"><?=$row['content']?></a></h3>
						<p class="gwrite">작성자 : 작성자</p>
						<p class="gdate">작성일 : 2016-08-08</p>
					</li>
                   <?php
				      }
					?>
					<li>
						<div class="img" style=""><a href="/student/gallery.php"></a></div>
						<h3 class="gtitle"><a href="/student/gallery.php">갤러리</a></h3>
						<p class="gwrite">작성자 : 작성자</p>
						<p class="gdate">작성일 : 2016-08-08</p>
					</li>
					<li>
						<div class="img" style=""><a href="/student/gallery.php"></a></div>
						<h3 class="gtitle"><a href="/student/gallery.php">갤러리</a></h3>
						<p class="gwrite">작성자 : 작성자</p>
						<p class="gdate">작성일 : 2016-08-08</p>
					</li>
					<li>
						<div class="img" style=""><a href="/student/gallery.php"></a></div>
						<h3 class="gtitle"><a href="/student/gallery.php">갤러리</a></h3>
						<p class="gwrite">작성자 : 작성자</p>
						<p class="gdate">작성일 : 2016-08-08</p>
					</li>
				</ul>
            </div>
		</main>
        <?php 
        include($_SERVER['DOCUMENT_ROOT'].'/footer.php');
        ?>
    </body>
</html>