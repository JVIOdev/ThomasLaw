jQuery(document).ready(function($){

	"use strict";
	

function init_mobile_menu() {
            var $mobile_menu = $('<div>').addClass('mobileMenu');

            
            var mobile_menu_category = 0;
            $('.menuBlock .mainMenu').find('li').each(function(i) {
                if ($(this).hasClass('active')) {
                    $mobile_menu.find('li').eq(i).addClass('active');
                    mobile_menu_category = i;
                }
            });
            
            $('.menuBlock .subMenu').find('li').each(function(i) {
                if ($(this).hasClass('active')) {
                    $($mobile_menu.find('li').eq(mobile_menu_category).find('a')[0]).addClass('active');
                }
            });
            
            if (!$('.mobileMenu').size()) {
             $('body').prepend($mobile_menu);
                $('body').prepend($('<div>').addClass('mobileMenu-shadow'));
            }
           
            var canClose = false;
            $('.mobileMenu li').each(function(i) {
                if ($(this).hasClass('active')) {
                    $('.mobileMenu').data('li_active', i);
                }
            });
            
            $('.mobile-toggler').on('click tap', function() {            	
                if (!$('.menuBlock .mainMenu').is(':visible')) //если меню мобильное
                {
                    canClose = false;
                    $('.mobileMenu li').removeClass('active');                    
                    $('.mobileMenu li').eq($('.mobileMenu').data('li_active')).addClass('active').find('div').show().parent('li').siblings().find('div:visible').hide();
                    if (!$('body').hasClass('showMobileMenu')) {
                        setTimeout(function() { canClose = true; }, 100);
                    }
                    $('body').toggleClass('showMobileMenu');
                    $('.mobileMenu').toggleClass('show');
                }
            });
            (jQuery)('.mobileMenu .menu-item-has-children').each(function(){
		$(this).find('> a').append('<i class="fa fa-angle-down"></i>');	
	});
            $('#menu-main-menu i').on('click', function(e) {
            	e.preventDefault();
                $(this).parents('li').toggleClass('active');
                $(this).parents('li').find('.sub-menu').slideToggle();                  
            });
            
        }
        init_mobile_menu();



	jQuery(".bxslider").bxSlider({
        mode: "fade",
        slideMargin: 3,
        speed: 1e3,
        controls: !0,
        auto: !0,
        pause: 5000,
        adaptiveHeight: false,
        autoHover: !0
    });
	
$(".video").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=1&showinfo=1&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });


	// Slider Initializations
	
	$('.hero-slider').flexslider({});
	$('.image-slider').flexslider({ animation: "slide"});
	$('.testimonials-slider').flexslider({ directionNav: false });
	
	// Slide Sizes
	
	$('.slider-fullscreen .slides li').each(function(){
		$(this).css('height', $(window).height());
	});
	
	$('.fullscreen-element').each(function(){
		$(this).css('height', $(window).height());
	});


	// Feature Selector
	
	$('.selector-tabs li').click(function(){
		$(this).parent('.selector-tabs').children('li').removeClass('active');
		$(this).addClass('active');
		
		var activeTab = $(this).index() + 1;
		
		$(this).closest('.feature-selector').find('.selector-content').children('li').removeClass('active');
		$(this).closest('.feature-selector').find('.selector-content').children('li:nth-child('+activeTab+')').addClass('active');
	});
	
	// Append .background-image-holder <img>'s as CSS backgrounds
	
	$('.background-image-holder').each(function(){
		var imgSrc= $(this).children('img').attr('src');
		$(this).css('background', 'url("' + imgSrc + '")');
    	$(this).children('img').hide();
        $(this).css('background-position', '50% 0%');
	});
	
	
	});
	

jQuery(window).load(function($){

  "use strict";
  	
  
	 jQuery('.loader').css('opacity', 0);
    setTimeout(function(){jQuery('.loader').hide();}, 600);
	// Align Elements Vertically
	
	alignVertical();
	
	jQuery(window).resize(function(){
		alignVertical();
	});
	
	 /*setTimeout(function(){jQuery('#hero-txt').css("visibility", 'visible').addClass('animated fadeInDown');}, 700);*/
	 setTimeout(function(){jQuery('#hero-soc').css("visibility", 'visible').addClass('animated fadeInDown');}, 800);
	

});

function alignVertical(){

		jQuery('.align-vertical').each(function(){
			var that = jQuery(this);
			var height = that.height();
			var parentHeight = that.parent().height();
			var padAmount = (parentHeight / 2) - (height/2);
			that.css('padding-top', padAmount);
		});
	
}

function alignBottom(){
	jQuery('.align-bottom').each(function(){
		var that = $(this);
		var height = that.height();
		var parentHeight = that.parent().height();
		var padAmount = (parentHeight) - (height) - 32;
		that.css('padding-top', padAmount);
	});
}

/*jQuery(document).ready(function($) {

	$('a[href*=#featured-box], a[href*=#contact-box]').bind("click", function(e){
      var anchor = $(this);
      $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top-20
      }, 1000);
      e.preventDefault();
   });
});*/

(function($){
$.fn.chunk = function(size) {
    var arr = [];
    for (var i = 0; i < this.length; i += size) {
        arr.push(this.slice(i, i + size));
    }
    return this.pushStack(arr, "chunk", size);
}
})(jQuery);

jQuery(document).ready(function($) {

	//duplicate hover state for parent menu when dropdown.
	(jQuery)('#topmenus .menu-item-has-children').each(function(){
		$(this).find('> a').append('<i class="fa fa-angle-down"></i>');	
	});

(jQuery)('#menu-main-menu-1 ul').each(function(){	
$(this).find('> li').chunk(3).wrap('<div class="col-md-3"></div>');

if (($(this).find('li').length >= 4) && ($(this).find('li').length <= 6)) {
  $(this).wrapInner('<div class="col-md-offset-5"></div>');   
}
if ($(this).find('li').length > 6) {
  $(this).wrapInner('<div class="col-md-offset-4"></div>');   
}
if ($(this).find('li').length <= 3) {
$(this).wrapInner('<div class="col-md-offset-6"></div>');	
}

});

});
	
