<!doctype html>
<html lang="ko">
   <!-- 윤세진 -->
    <head>
        <meta charset="UTF-8" />
        <title>가정통신문</title>
        <link rel="stylesheet" type="text/css" href="/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<link rel="stylesheet" href="/css/boardlist.css">
    </head>
    <body>
		<?php
			require_once("./config.php");
			$sql = "select * from paper order by idx desc";
			$result = $pdo-> query($sql);
			$rows = $result -> fetchall();
		?>
       <?php
	       include('../header.php');
        ?>
        <main>
            <?php
                include('lnb.php');
            ?>
            <div class="content">
                <div class="sub-title-area">
                     <ul>
                        <li>H</li>
                        <li>알림마당</li>
                        <li>가정통신문</li>
                    </ul>
                    <h4 class="content_title">가정통신문</h4>
                </div>
				<!-- 관련 css는 /css/boradlist.css -->
				<table class="board_list">
				<colgroup>
					<col style="width: 10%;">
					<col style="width: 50%;">
					<col style="width: 15%;">
					<col style="width: 15%;">
					<col style="width: 10%;">
				</colgroup>
				<thead>
					<tr>
						<th class="bidx">글번호</th>
						<th class="btitle">제목</th>
						<th class="bwriter">글쓴이</th>
						<th class="bdate">등록일</th>
						<th class="bcount">조회수</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach($rows as $row){
					?>	
					<tr>
						<td class="bidx"><?=$row['idx']?></td>
						<?php
						if($_SESSION['id']==true){
						?>
						<td class="btitle"><a href="./sh_paper.php?idx=<?=$row['idx']?>"><?=$row['title']?></td>
						<?php
						}else{
						?>
						<td class="btitle"><a href="javascript:window.alert('\n 로그인 후 이용해주세요 \n');"><?=$row['title']?></td>
						<?php
						}
						?>
						
						<td class="bwriter"><?=$row['name']?>(<?=$row['id']?>)</td>
						<td class="bdate"><?=$row['date']?></td>
						<td class="bcount"></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<?php
				if(!isset($_SESSION['id'])){
			?>
				<!--<a href="write.php"><div class="write" align="center">글쓰기</div></a>-->
			<?php
			}else{
			?>
				<a href="paper_write.php"><div class="write" align="center">글쓰기</div></a>
			<?php
			}
			?>
				<ul class="blinks">
					<li class="first"><a href="#">&lt;&lt;</a></li>
					<li class="prev"><a href="#">&lt;</a></li> 
					<li class="current"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li class="next"><a href="#">&gt;</a></li>
					<li class="last"><a href="#">&gt;&gt;</a></li>
				</ul>
            </div>
        </main>
        <?php
            include("../footer.php");
        ?>
    </body>
</html>