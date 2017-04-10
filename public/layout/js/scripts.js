$(function(){   
	var nav = $('header');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 150) { 
			nav.addClass("menu-fixo");             
		} else { 
			nav.removeClass("menu-fixo");

			} 
	});

    var cart = $('.header_barra');   
    $(window).scroll(function () { 
        if ($(this).scrollTop() > 150) { 
            cart.addClass("barramenu");             
        } else { 
            cart.removeClass("barramenu");

            } 
    }); 

        
});

$('nav#menu_mobile').mmenu();

$(".owl-carousel").owlCarousel({
	center: true,
	animateOut: 'lightSpeedOut',
    animateIn: 'lightSpeedIn',
    nav: true,    
    lazyLoad: true,	
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        600:{
            items:1
        },
        960: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
});

$('.testPo').webuiPopover({url:'#ShopCart', width:560, height:300, animation:'pop', style:'test; cartfixo'});
