<?php 
        include('header.php');
		include('inc/inc.php');
		$sql="select * from notice limit 0,5";
		$result=$pdo->query($sql);
		$rows=$result->fetchAll();	
        ?>
<!doctype html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <title>서울디지텍고등학교</title>
        <link rel="stylesheet" type="text/css" href="/css/index.css"/>
        <link rel="stylesheet" type="text/css" href="/css/common.css"/>
    </head>
    <body>
       
        <main>
            <div id="slide">
				<ul class="slist">
					<li><img src="/img/s1.jpg" alt=""/></li>
					<li><img src="/img/s2.jpg" alt=""/></li>
					<li><img src="/img/s3.jpg" alt=""/></li>
				</ul>
				<div class="spanel">
				</div>
				<div class="left arrow"><img src="/img/arrow_left.png" alt="왼쪽" title="왼쪽"></div>
				<div class="right arrow"><img src="/img/arrow_right.png" alt="오른쪽" title="오른쪽"></div>
            </div>
            <div id="news" class="wrap">
                <div class="notice">
					<table>
						<colgroup>
							<col style="width: 80%;">
							<col style="width: 20%;">
						</colgroup>
						<thead>
							<tr>
								<td colspan="2">공지사항<span class="more"><a href="http://52.78.55.166/notice/notice.php">+</a></span></td>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($rows as $row){
						?>
							<tr>
								<?php
								$sql="select * from notice limit 0,5";
								$result=$pdo->query($sql);
								$rows=$result->fetchAll();
								if($_SESSION['id']==true){
								?>
								<td><a href="./notice/sh_notice.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
								<?php
								}else{
								?>
								<td><a href="javascript:window.alert('\n 로그인 후 이용해주세요 \n');"><?=$row['title']?></a></td>
								<?php
								}
								?>
								<td><?=$row['date']?></td>
							</tr>
						<?php
						}
						?>
						</tbody>
					</table>
				</div>
                <div class="nletter">
					<table>
						<colgroup>
							<col style="width: 80%;">
							<col style="width: 20%;">
						</colgroup>
						<thead>
							<tr>
								<td colspan="2">가정통신문<span class="more"><a href="http://52.78.55.166/notice/paper.php">+</a></span></td>
							</tr>
						</thead>
						<tbody>
						<?php
							foreach($rows as $row){
						?>
							<tr>
								<?php
								if($_SESSION['id']==true){
								?>
									<td><a href="./notice/sh_paper.php?idx=<?=$row['idx']?>"><?=$row['title']?></a></td>
								<?php
								}else{
								?>
									<td><a href="javascript:window.alert('\n 로그인 후 이용해주세요 \n');"><?=$row['title']?></a></td>
								<?php
								}
								?>
								<td><?=$row['date']?></td>
							</tr>
						<?php
						}
						?>
						</tbody>
					</table>
				</div>
            </div>
            <div id="clubs" class="wrap">
                동아리
            </div>
            <div>
               <?php require "main_gal.php";?>
            </div>
        </main>
        <?php 
        include('footer.php');
        ?>
		<script src="/js/home.js"></script>
    </body>
</html>