$(document).ready(function(){
	$('.stonehenge').stonehenge({
        speed: 2.0,
    });
    $(document).on('click','.openSignupModal',function(){
    	$(".closeLoginModal").click();
    })
    $(document).on('click','.openLoginModal',function(){
    	$(".closeSignupModal").click();
    })
})