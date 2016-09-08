<!doctype html>
<html lang="ko">
   <!-- 윤세진 -->
    <head>
        <meta charset="UTF-8" />
        <title>공지사항</title>
        <link rel="stylesheet" type="text/css" href="/css/common.css"/>
        <link rel="stylesheet" tpye="text/css" href="/css/style.css"/>
		<link rel="stylesheet" href="/css/boardlist.css">
    </head>
    <body>
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
                        <li>교내행사영상</li>
                    </ul>
                    <h4 class="content_title">교내행사영상</h4>
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
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
						<tr>
							<td class="bidx">328</td>
							<td class="btitle"><a href="#">방학식 및 7월 나라사랑콘서트 행사진행</a></td>
							<td class="bwriter">학교</td>
							<td class="bdate">2016-07-25</td>
							<td class="bcount">21</td>
						</tr>
					</tbody>
				</table>
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