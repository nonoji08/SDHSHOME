<?php
require_once('../inc/inc.php');
$sql='select * from gallary';
$result=$pdo->query($sql);
$rows=$result->fetchAll();

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
				<div class="gnotice">
					<div class="nheader">
						<h3>갤러리</h3>
						<p class="notice_info">
							<span class="nwriter">작성자 : 작성자</span>
							<span class="ndate">2016-08-08</span>
						</p>
					</div>
					<div class="nbody">
						<div class="imglist">
							<img src="/img/gallery/img1.jpg" alt="a" title="t">
							<img src="/img/gallery/img2.jpg" alt="a" title="t">
							<img src="/img/gallery/img3.jpg" alt="a" title="t">
						</div>
						<p>
							갤러리 내용은 GET방식으로 쓰는 것이 낳을 것 같습니다.
						</p>
					</div>
					<div class="nlink">
						<a href="/student/board.php">목록</a>
					</div>
				</div>
            </div>
        </main>
        <?php 
        include($_SERVER['DOCUMENT_ROOT'].'/footer.php');
        ?>
    </body>
</html>