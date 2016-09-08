<!DOCTYPE html>
<html>
  <head>
    <!-- This stylesheet contains specific styles for displaying the map
         on this page. Replace it with your own styles as described in the
         documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial -->
    <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
	<link rel="stylesheet" type="text/css" href="../css/intro_school.css" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/common.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
	<style>
		#map{width:730px;height:300px}

	</style>
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
		<li>학교소개</li>
		<li>오시는길</li>
	</ul>
    <h4 class="content_title">오시는길</h4>
	</div>
		<div id="map"></div>
		<div id="location">
		<dl class="locinfo">
		<dt>
			<strong>주소</strong>
		</dt>
		<dd>
		서울특별시 용산구 회나무로 12길 27 서울디지텍고 우) 140-857
		</dd>
		<dt>
		<strong>대표번호</strong>
		</dt>
		<dd>
		<span>TEL 02-798-3641~3 FAX 02-794-0822 </span>
		</dd>
		</dl>
		</div>
    <script>
      function initMap() {
		  var myLatLng = {lat:37.539232, lng: 126.990632};
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: true,
          zoom: 18
        });

		   var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: '서울디지텍고등학교'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRvPskM6aSbqAKScon33dlmOZptE5vDME&callback=initMap"
    async defer></script>
	</div>

	
 </main>
<!--footer include -->
	<?php
		include("../footer.php");
	?>
<!--footer end-->  
    
  </body>
</html>