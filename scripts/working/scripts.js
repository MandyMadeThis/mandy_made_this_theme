$(window).load(function(){

	// init Isotope
	var $contain = $('.workItems').isotope({
	// options
	itemSelector: '.workItems li',
	masonry: {
		columnWidth: 300,
		isFitWidth: true
	}
	});

	// filter items on button click
	$('.filters').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$contain.isotope({ filter: filterValue });
	});
});


$(function(){

	if ($("body").hasClass("home")){
		var oldTop = 0;


		$(window).on("scroll",function(e){
			// How far are we scrolled down? in PX
			var tipTop = $(window).scrollTop();
			// Where in the document is our nav? In PX
			var navPosition = $('nav').css('position');
			var navHeight = $('nav').height();
			var navTop = $('nav').position().top;

			// this is a way to store the old navigation top
			if(navTop > 0) { // if NOT fixed
			oldTop = navTop; // store the value of the old navTop
			}

			//if we have scrolled past it
			if(tipTop >= navTop){
				$('header').addClass('sticky');
				$('header').css('padding-top',navHeight);
			}
			else {
				$('header').removeClass('sticky');
				$('header').css('padding-top',0);
			}

			// check if we need to unstick it because of the fixed bug
			if(oldTop > tipTop) {
				$('header').removeClass('sticky');
				$('header').css('padding-top',0);
			}

			}); // end window scroll


			//smoothscroll

			$('header nav a').smoothScroll({
				offset: -52,
			});
			}


			//Contact 

			$(function() {
				$('.contact').hide();
			}); //end of initial hide

			$('body').on('click','nav li:last-child', function(){
				$('.contact').slideUp().promise().done(function(){		
					$('.contact').addClass('revealed');
					$('.contact').slideToggle();
				});      
			});

			$('a.close').on('click', function(e) {
				$('.contact').slideUp().promise().done(function(){
					$('contact').removeClass('revealed');
				});    
			});

			$('button.hire').on('click', function(e) {
				$('html, body').animate({ scrollTop: 0 }, 200);
				$('contact').addClass('revealed');
				$('.contact').slideDown();      
			});

			$('.serviceContent button.quote').on('click', function(e) {
				$('html, body').animate({ scrollTop: 0 }, 200).promise().done(function(){
					$('contact').addClass('revealed');
					$('.contact').slideDown();
				});           
			});

			$('footer a.intouch').on('click', function(e) {
				$('html, body').animate({ scrollTop: 0 }, 200).promise().done(function(){
					$('contact').addClass('revealed');
					$('.contact').slideDown();
				});          
			});

			//accordian

			$(function() {
				$( "#accordion" ).accordion({
					heightStyle: "content"
				});
			});//end of accordion


			//Signature on single blog post

			var sig = false;
			$(window).on('scroll',function() {

				var sigTop = $('.svgWrap').offset().top - 500;
				var winTop = $(window).scrollTop();

				if(sigTop < winTop && !sig) {
					sig = true;
					animateSignature();
				}
			})

			var animateSignature = function() {
				$('.signature').attr('class', "signature animate");	
			}


});//end of doc ready


