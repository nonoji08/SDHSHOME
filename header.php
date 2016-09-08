<header>
    <div id="header_login">
		<div class="wrap">
    <?php
        session_start();
            
        if($_SESSION['id']==true)
        {
            echo"
        <ul>
            <li>".$_SESSION['name']." 님 환영합니다</li>
            <li><a href='javascript:void(0)' class='logout'>로그아웃</a></li>
            <li><a href='javascript:void(0)' class='modify'>정보수정</a></li>
        </ul>
            ";
        }

        else
        {
            echo"
        <ul>
              <li><a href='javascript:void(0)' class='login'>로그인</a></li> 
              <li><a href='javascript:void(0)' class='join'>회원가입</a></li>
        </ul>
            ";
        }
    ?>
            
		</div>
    </div>
   <nav>
        <a href="/"><img id="title" src="/img/logo.png" alt="SDHS"></a>
        <ul id="main_menu">
            <li>
                <span>학교소개</span>
                <ul class="sub_menu">
					<li><a href="/intro_school/establish.php">설립정신/인사말</a></li>
					<li><a href="/intro_school/history.php">학교연혁</a></li>
                    <li><a href="/intro_school/school_motto.php">교훈/상징</a></li>
					<li><a href="/intro_school/purpose.php">교육목표</a></li>
					<li><a href="/intro_school/intro_map.php">오시는길</a></li>
				</ul>
            </li>
            <li>
                <span>알림마당</span>
                <ul class="sub_menu">
                    <li><a href="/notice/notice.php">공지사항</a></li>
                    <li><a href="/notice/paper.php">가정통신문</a></li>
                    <li><a href="/notice/video.php">교내행사영상</a></li>
                    <li><a href="/notice/picture.php">교내행사사진</a></li>
                    <li><a href="/notice/picturenotice.php">사진게시판</a></li>
                </ul>
            </li>
            <li>
                <span>입학안내</span>
                <ul class="sub_menu">
					<li><a href="/guide/guide.php">입학안내</a></li>
					<li><a href="/guide/board.php">입학문의 및 자료실</a></li>
					<li><a href="/guide/pass.php">합격자 조회</a></li>
					<li><a href="/guide/school_ad.php">학교홍보동영상</a></li>
					<li><a href="/guide/guide_uniform.php">교복안내</a></li>
					<li><a href="/guide/hacking_security_board.php">해킹/보안전문가 예비학교</a></li>
					<li><a href="/guide/game_development_board.php">게임개발자 예비학교</a></li>
					<li><a href="/guide/introduction_department.php">게임영상과</a></li>
					<li><a href="/guide/introduction_department.php">유비쿼터스과</a></li>
					<li><a href="/guide/guide.php">공간정보과</a></li>
				</ul>
            </li>
            <li>
                <span>학생마당</span>
                <ul class="sub_menu">
                    <li><a href="/student/board.php">학생게시판</a></li>
                    <li><a href="/student/rule.php">학생생활규정</a></li>
                    <li><a href="/student/teacher.php">교사미니홈피</a></li>
                    <li><a href="/student/afterschool.php">방과후학교</a></li>
                </ul>
            </li>
            <li>
                <span>열린마당</span>
                <ul class="sub_menu">
					<li><a href="/sub5/sub5.php">교장선생님께</a></li>
					<li><a href="/sub5/job.php">취업게시판</a></li>
					<li><a href="/sub5/college.php">진학게시판</a></li>
					<li><a href="/sub5/medical.php">보건게시판</a></li>
					<li><a href="/sub5/onlinebookcafe.php">온라인북카페</a></li>
					<li><a href="/sub5/free.php">자유게시판</a></li>
					<li><a href="/sub5/nutrition.php">영양게시판</a></li>
				</ul>
            </li>
            <li>
                <span>동 아 리</span>
                <ul class="sub_menu">
                   <li><a href="/club/on.php">ON</a></li>
                   <li><a href="/club/smartspace.php">SMART SPACE</a></li>
                   <li><a href="/club/root.php">ROOT</a></li>
                   <li><a href="/club/mod.php">MOD</a></li>
                   <li><a href="http://rntpwn8.dothome.co.kr/SDHSE.php" target="_blank">AGK(학교기업)</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>