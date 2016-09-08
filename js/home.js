$(function(){
	//슬라이드
	var idx=0;
	var max=$('.slist li').length;
	var time=3000;
	var timer=setTimeout(function(){
		$('#slide .right').click();
	}, time);
	$('.slist').css('width', max*100+'%');
	$('.slist li').css('width', 100/max+'%');

	for(var i=0; i<max; ++i){
		$('.spanel').append('<div></div>');
	}
	$('.spanel div').first().addClass('act');
	$('.spanel div').click(function(){
		idx=$(this).index();
		slide(idx);
	});

	$('#slide .right').click(function(){
		++idx;
		if(idx==max){
			idx=0;
		}
		slide(idx);
	});

	$('#slide .left').click(function(){
		--idx;
		if(idx<0){
			idx=max-1;
		}
		slide(idx);
	});

	function slide(sidx){
		clearTimeout(timer);
		$('.spanel div').removeClass('act').eq(sidx).addClass('act');
		$('.slist').animate({
			marginLeft : -sidx * 100+'%'
		});
		timer=setTimeout(function(){
			$('#slide .right').click();
		}, time);
	}
});