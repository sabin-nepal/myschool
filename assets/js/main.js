$(document).ready(function(){
	$(".hero-slider").owlCarousel({
		loop:true,
		autoplay:true,
		items:1,
		dots:false,
		navs:true
	});	
	$(".testimonial-slider").owlCarousel({
		items:1,
		dots:true,
		navs:true
	});	
	$(".product-carousel").owlCarousel({
		items:4,
		loop:true,
		margin:10,
		dots:true,
		responsive:{
	        0:{
	        	center:true,
	            items:1
	        },
	        640:{
	        	center:true,
	            items:2
	        },
	        991:{
	        	center:true,
	        	items:3,
	        },
	        1200:{
	            items:4
	        }
	    }
	});
});

//responsive navbar
$(document).ready(function(){
	$(".mobile_menu_icon").on('click',function(){
		$(".custom_nav .nav-links").toggleClass("show");
	});
});

$(document).ready(function(){
	$(".js-background").each(function(){
		var img_url = $(this).data('background');
		$(this).css({"background":"url("+img_url+")"})
	})
})