$(document).ready(function(){
    //#main-slider
	var slideHeight = $(window).height();
	$('#acceuil-carousel .carousel-item').css('height',slideHeight);

	$(window).resize(function(){
        'use strict';
		$('carousel-item .carousel-item').css('height',slideHeight);
    });
    
    //Scroll Menu
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>slideHeight ){
			$('.main-nav').addClass('fixed-top');
		} else {
			$('.main-nav').removeClass('fixed-top');
		}
	});


	$('.full-page-intro').css('height',slideHeight);

	$(window).resize(function(){
        'use strict';
		$('full-page-intro').css('height',slideHeight);
    });

	

	/* MODAL POPUP JQUERY pour les formulaire*/
	$('a[data-modal]').click(function(event) {
  $(this).modal({
    fadeDuration: 1000,
    fadeDelay: 1.75
  });
  return false;
});

})
