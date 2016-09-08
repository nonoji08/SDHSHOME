<!doctype html>
<html lang="kr">
 <head>
  <?php
    require_once ("./db/dbconn.php");
     mysql_query ("set names utf8");
  ?>
  <meta charset="UTF-8">
  <title>학교소개</title>
  <link rel="stylesheet" type="text/css" href="../css/common.css" />
  <link rel="stylesheet" type="text/css" href="../css/intro_school.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
     
     <style type="text/css">
         .gall_box_wrap {width:100%; height:850px; float:left; position: relative;}
         .gall_box_wrap>ul:nth-child(4n-3) {margin-left:0px; width:175px; height:225px; float:left; margin-top:5px; !important;}
         .gall_box {width:175px; height:250px; float:left; margin-left:13px; margin-top:5px;}
         .gall_box>li:first-child {width:175px; height:175px; float:left; background-color:beige; padding:1px; border:2px solid #1E90FF; !important}
         .gall_box>li {width:175px; height:25px; float:left; }
         .gall_write_button {width:50px; height:25px; padding:0 3px; position:absolute; bottom:10px; right:10px;}
         .gall_box img {float:left; width:173px; height:169px; !important;}
         .paging {width:500px; height:30px;}
     </style>
     <?php
            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
            }
            else
            {
                $page = 1;
            }

            $pagelist = 12;
            $block = 10;
     
            $qry = "select * from gallary_board";
            $result = mysql_query($qry,$dbconn) or die(mysql_error());
            $row = mysql_fetch_assoc($result);
            $all_list = mysql_num_rows($result);
     
            $all_page = ceil($all_list/$pagelist);
            $all_block = ceil($all_page/$block);
            $now_block = ceil($page/$block);
            
            $start_page = 1;
            $prev_page = (($now_block - 1) * $block);
            $next_page = (($now_block + 1) * $block) - ($block - 1);
            $end_page = $all_page;
            
            
     ?>
 </head>
 <body>
 <header>
 <!--header include-->
 <?php
	include("../header.php");
 ?>
 </header>
 <div class="container" style="height:950px;">
 <!--lnb include -->
	<?php
		include("./lnb.php");
	?>
<!--lnb end-->
	<div class="content">
		<p class="content_title">갤러리</p>
		<!-- content -->
        <?php 

            $qry = "select * from gallary_board";
            $result = mysql_query($qry,$dbconn) or die(mysql_error());
            //$row = mysql_fetch_assoc($result);
            //print_r ($row);
            

        ?>
        <div class="gall_box_wrap">
            <?php
                $start_pos = strlen($_SERVER['DOCUMENT_ROOT'].'/intro_school');
                while($row=mysql_fetch_assoc($result))
                {
            ?>
            <ul class="gall_box">
                <li><a href="./gall_board.php?no=<?=$row['no']?>&page=<?=$page?>"><img src=".<?=substr($row['img'],$start_pos);?>"></a></li>
                <li>제목 : <?=$row['title'];?></li>
                <li>작성일 :<?=$row['date'];?></li>
                <li>조회수 :<?=$row['hit'];?></li>
            </ul>
            <?php
                }
            ?>
            <button onclick="location.href='./gall_write.php'" type="button" class="gall_write_button">글쓰기</button>
            <div class="paging">
                <?php
                    if($page!=1)
                    {
                        echo "<a href='./gallary.php?page=$start_page'>처음</a>";
                    }
                    if($now_block != 1)
                    {
                        echo "<a href='./gallary.php?page=$prev_page'>이전</a>";
                    }
                    for($p=1; $p<=$block; $p++)
                    {
                        echo "<a href='./gallary.php?page=$p'>$p</a>";
                    }
                    if($now_block != $all_page)
                    {
                        echo "<a href='./gallary.php?page=$next_page'>다음</a>";
                    }
                    if($page!=$end_page)
                    {
                        echo "<a href='./gallary.php?page=$end_page'>끝</a>";
                    }
                ?>
                
            </div>
        </div>    
    </div> 
	
 </div>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->
  
 </body>
</html>