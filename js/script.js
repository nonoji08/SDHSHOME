document.createElement('main');
$(function(){
	//슬라이드
	var slidetime = 200;
	$('#main_menu>li').click(function(){
        if(!$('.sub_menu').is(":animated")){
            $('.sub_menu').slideUp(slidetime);
            if($(this).find('.sub_menu li').length!=0 && !$(this).children().is(":animated")){
                $(this).find('.sub_menu').slideDown(slidetime);
            }
        }
	});
    $('.sub_menu>li>a').mouseenter(function(){
        $(this).parent().animate({
            backgroundColor : "#1e90ff",
            color : "fff"
        }, slidetime);
    });
	//로그인, 회원가입 팝업
	$('#header_login .login').click(function(){
		$('.popup').show();
		if($('.popup .lform').length != 0){
			$('.popup .lform').show();
			return;
		}
		$.ajax({
			url : 'http://52.78.55.166/login/login.php',
			success: function(data){
				$('.popup').append(data);
				$('.popup .lform').show();
			}
		});
	});
    
    $('#header_login .modify').click(function(){
		$('.popup').show();
		if($('.popup .lform').length != 0){
			$('.popup .lform').show();
			return;
		}
		$.ajax({
			url : 'http://52.78.55.166/login/modify.php',
			success: function(data){
				$('.popup').append(data);
				$('.popup .lform').show();
			}
		});
	});
	
	$('#header_login .join').click(function(){
		$('.popup').show();
		if($('.popup .jform').length != 0){
			$('.popup .jform').show();
			return;
		}
		$.ajax({
			url : 'http://52.78.55.166/login/join.php',
			success: function(data){
				$('.popup').append(data);
				$('.popup .jform').show();
			}
		});
	});

	$('#header_login .logout').click(function(){
		$.ajax({
			url : 'http://52.78.55.166/login/logout.php',
			success: function(data){
				$('.popup').append(data);
				$('.popup .jform').show();
			}
		});
	});


	$('.popup').on('focus', 'form .label input', function(){
		$(this).closest('label').addClass('act');
	});

	$('.popup').on('focusout', 'form .label input', function(){
		if($(this).val().trim()==''){
			$(this).closest('label').removeClass('act');
		}
	});

	$('.popup').on('click', '.clbtn', function(){
		$('.popup, .popup form').hide();
	})
});