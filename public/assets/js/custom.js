$(document).ready(function(){
    scrollHeaderFunction();
	$('.stonehenge').stonehenge({
        speed: 2.0,
    });
    $(document).on('click','.openSignupModal',function(){
    	$(".closeLoginModal").click();
    })
    $(document).on('click','.openLoginModal',function(){
    	$(".closeSignupModal").click();
    })
    $(window).scroll(function () {
		scrollHeaderFunction();
	})
	function scrollHeaderFunction(){
		var scrollTop = $(document).scrollTop();
		if(scrollTop > 0){
			$(".headerAnimation").addClass('headerAnimationScroll');
			$(".firstServiceSlider").addClass('marginTopEffect');
			$(".headerImage").addClass('headerImageScrollEffect');
			$(".headerImageMob").addClass('headerImageScrollEffect');
		}else if(scrollTop == 0){
			$(".headerAnimation").removeClass('headerAnimationScroll');
			$(".firstServiceSlider").removeClass('marginTopEffect');
			$(".headerImage").removeClass('headerImageScrollEffect');
			$(".headerImageMob").removeClass('headerImageScrollEffect');
		}
	}
})