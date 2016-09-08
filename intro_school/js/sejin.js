$(document).ready(function(){
            var i=0;
            setInterval(function(){
                i++
                $(".gyohun p").eq(i-1).css({"opacity":"1","margin":"23px"});
            },1000);
});