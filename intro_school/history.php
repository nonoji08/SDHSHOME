<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <title>학교소개</title>
  <link rel="stylesheet" type="text/css" href="../../css/common.css" />
  <link rel="stylesheet" type="text/css" href="../../css/intro_school.css" />
  <link rel="stylesheet" type="text/css" href="../../css/style.css" />
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
 </head>
 <body>
 <header>
 <!--header include-->
 <?php
	include("../header.php");
 ?>
 </header>

 <main style="height:1470px;">
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
			<li>연혁개요</li>
		</ul>
        <h4 class="content_title">연혁개요</h4>
		</div>
		<!-- content -->
		 <table cellspacing="0" class="yunhyuck">
                      <th width="150px">년 월 일</th><th>연혁 개요</th>
                         <tr>
                            <td>2015.09.09</td><td>우수 특성화고 산업통상자원부 장관상 수상</td>
                         </tr>  
                         <tr>
                            <td>2015.07.14</td><td>학교기업 선정(애드버 게임 코리아)</td>
                         </tr> 
                        <tr>
                            <td>2014.08.25</td><td>특성화고등학교 운영 성과평가 우수학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2014.06.30</td><td>공간정보 특성화고등학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2014.04</td><td>다문화 중점학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2014.04</td><td>2013학년도 교육부주관 취업역량강화사업 우수학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2013.12</td><td>2013학년도 국제교류 우수학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2012.12</td><td>2012학년도 서울특별시교육청 학교평가 우수학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2010.07</td><td>서울시교육청 취업기능강화를 위한 특성화고 육성사업 선정</td>
                         </tr>
                         <tr>
                            <td>2010.03</td><td>교육과학기술부지원 영어중점 창의경영학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2010.03</td><td>서울디지텍고등학교 곽일천 교장선생님 취임</td>
                         </tr> 
                         <tr>
                            <td>2009.03.12</td><td>정부부처 사업추진 문화체육관광부 선정, 문화관광부사업 문화콘텐츠 고교 특성화 지원사업 선정</td>
                         </tr> 
                         <tr>
                            <td>2009.03</td><td>정부부처 중소기업청 기술사관육성사업 선정</td>
                         </tr> 
                         <tr>
                            <td>2008.03</td><td>정보통신부 특성화고 육성사업 선정, 노동부 취업지원을 위한 확충사업선정</td>
                         </tr>  
                         <tr>
                            <td>2006.03</td><td>중소기업청 "기업 공고 맞춤교육 인력양성 사업" 학교 선정</td>
                         </tr> 
                         <tr>
                            <td>2002.10.04</td><td>청지공업고등학교를 서울디지텍고등학교로 교명 변경</td>
                         </tr> 
                         <tr>
                            <td>2001.03.04</td><td>전자게임과 3개반, 인터넷통신과 3개반 신설(입학)</td>
                         </tr> 
                         <tr>
                            <td>1995.10.04</td><td>유성전자공업학교를 청지공업고등학교 교명 변경</td>
                         </tr> 
                         <tr>
                            <td>1982.12.30</td><td>학교법인 청지학원 설립 인가. 설립자 겸 초대이사장에 곽태영 이사장님 취임</td>
                         </tr> 
                         <tr>
                            <td>1978.02.09</td><td>제 1회 졸업. 학칙 변경으로 상과 폐지, 전자과 증설, 유성실업학교를 유성전자공업학교로 교명 변경</td>
                         </tr> 
                         <tr>
                            <td>1975.02.03</td><td>서울특별시 교육감으로부터 유성실업학교 인가. 상 과(주·야) 4학급,<br/>전자과(주·야) 4학급 - 총24학급. 설립자 겸 초대교장에 이채선 선생님 취임</td>
                         </tr> 
                    </table>

		
	</div>
 </main>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->
  
 </body>
<script>
        $(document).ready(function(){
            $("tr:even").css("background-color","lightgray");
            $("tr>td:first-child").css("text-align","center");
        });
    </script>
</html>