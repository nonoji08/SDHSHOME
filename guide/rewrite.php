<!doctype html>
<html lang="kr">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus��">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>학과소개</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <link rel="stylesheet" type="text/css" href="./css/sub.css" />
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>
  <script type="text/javascript" src="./se/js/HuskyEZCreator.js" charset="utf-8"></script>
   <script>
  $(function(){
    //전역변수선언
    var editor_object = [];
     
    nhn.husky.EZCreator.createInIFrame({
        oAppRef: editor_object,
        elPlaceHolder: "content",
        sSkinURI: "./se/SmartEditor2Skin.html", 
        htParams : {
            // 툴바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseToolbar : true,             
            // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseVerticalResizer : false,     
            // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
            bUseModeChanger : true, 
        }
    });
     
    //전송버튼 클릭이벤트
    $("#savebutton").click(function(){
        //id가 smarteditor인 textarea에 에디터에서 대입
        editor_object.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
         
        // 이부분에 에디터 validation 검증
         
        //폼 submit
        $("#frm").submit();
    })
})

  </script>
 </head>
 <?php
	require_once("./config.php");
	$sql = "delete from board_list where idx='{$_GET['idx']}'";
	$result = $pdo->query($sql);
?>
 <body>
 <header>
 <!--include header-->
 <?php
	include('../header.php');
	
 ?>
 </header>
 <div class="container" style="height:970px;">
	<div class="content">
		<div class="sub-title-area">
		<form action="./rewrite_add.php" method="post" id="frm">
			<p class="content_title"><label for="title"><input type="text" name="title" style="margin-left:10px; width:555px;border:none;height:35px;font-size:25px" placeholder="제목을 입력해주세요" required></label></p>
				<ul>
					<li>H</li>
					<li>입학안내</li>
					<li>공간정보학과</li>
				</ul>
		</div>
		
		<textarea type="text" name="content" id="content" cols="100%" rows="30" style="width:740px;border:2px solid #66b4ff"></textarea><br>
		<button id = "savebutton" type="submit" class="write">글쓰기</button>
		<a href="http://52.78.55.166/guide/board.php"><button type="button" class="write" style="float:left">글목록</button></a>
  </form>
	</div>
<!--lnb include -->
	<?php
		include("./lnb.php");
	?>
<!--lnb end-->
	
 </div>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->  
 </body>
</html>