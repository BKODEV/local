 //initialisation du plugin animate on scroll
 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

$(document).ready(function($) {

	"use strict";

//recuperation de la taille de l'ecran pour le slider
	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();


//caroussel copié
	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-md-arrow-back'></span>","<span class='ion-chevron-right'></span>"],
	    responsive:{
	      0:{
	        items:1,
	        nav:false
	      },
	      600:{
	        items:1,
	        nav:false
	      },
	      1000:{
	        items:1,
	        nav:false
	      }
	    }
		});
  
		$('.carousel-work').owlCarousel({
			autoplay: true,
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding:0,
			nav: true,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1,
					stagePadding: 0
				},
				600:{
					items: 2,
					stagePadding: 50
				},
				1000:{
					items: 3,
					stagePadding: 100
				}
			}
		});

	};
	carousel();

	// Pour le scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();


/* code copié et adapté de waypoint*/
	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}
		} , { offset: '95%' } );
	};
	contentWayPoint();

	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();
/*popup page index*/


 $('.btn-interess').click(function(event) {
         var titr = $(this).parent().prev().html();
        $('#pop-interess').find('.modal-mess').html('Voulez vous apprendre la cuisiner le plat :' + titr + '?');
         $('#ess').html('<p><strong><a class="btn btn-success" href="contact.html">Ecrivez nous!!</a></strong> et mettez comme Objet : formation ' + titr +'</p>');
        $(this).modal();
      return false;
      });
 
 $('.btn-message').click(function(event) {
        $(this).modal();
      return false;
      });
/*popup page menu*/
        $('.ct').hide();
        $('.ct2').hide();
        $('.ct1').hide();
        $('.recc1').click(function(event){
        var rec = $('.ct1').html();
         var titr = $(this).parent().siblings('h3').html();
        $('#pop-recette').find('.modal-mess').html('Recette de ' + titr + ' Pour 4 personnes');
         $('#recette').html(rec);
        $(this).modal();
      return false;
      });
         $('.recc2').click(function(event){
        var rec = $('.ct2').html();
         var titr = $(this).parent().siblings('h3').html();
        $('#pop-recette').find('.modal-mess').html('Recette de ' + titr + ' Pour 4 personnes');
         $('#recette').html(rec);
        $(this).modal();
      return false;
      });
          $('.recc').click(function(event) {
        var rec = $('.ct').html();
         var titr = $(this).parent().siblings('h3').html();
        $('#pop-recette').find('.modal-mess').html('Recette de ' + titr + ' Pour 4 personnes');
         $('#recette').html(rec);
        $(this).modal();
      return false;
      });     
      
      

});