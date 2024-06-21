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
	$('.simpleDatatableClass').DataTable();
    $(document).on('click','.btnDelete',function(){
    	var title = $(this).attr('data-title');
    	var info = $(this).attr('data-info');
    	var url = $(this).attr('data-url');
    	var id = $(this).attr('data-id');
    	$(".data-delete-info").html(info);
    	$(".deleteModalTitle").html("Remove " + title);
    	$(".btnDeleteYes").attr('data-url',url);
    	$(".btnDeleteYes").attr('data-id',id);
    	$('.deleteModal').modal('toggle');
    })
    $(document).on('click','.btnDeleteYes',function(){
    	var url = $(this).attr('data-url');
    	var id = $(this).attr('data-id');
    	var data = {
    		id:id
    	}
    	// $.ajaxSetup({
    	// 	headers:{
    	// 		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
    	// 	}
    	// })
    	$.ajax({
    		type:'POST',
    		url:url,
    		data:data,
    		success:function(resp){
    			console.log(resp);
    		}
    	})
    	console.log(url);
    })
})