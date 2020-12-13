(function($) {
	"use strict";
	var fullHeight = function() {
		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});
	};
	fullHeight();
	// loader
	var loader = function() {
		setTimeout(function() {
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();
	// Scrollax
   $.Scrollax();
	var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: true,loop: true,rtl: true,autoplay:true,items:1,margin: 30,stagePadding: 0,nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{items: 1},600:{items: 2},1000:{items: 3}}});
		$('.carousel-properties').owlCarousel({
			center: true,loop: true,items:6,margin: 30,stagePadding: 0,nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{0:{items: 1},600:{items: 2},1000:{items: 3}}});};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});
	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});
	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),st = $w.scrollTop(),navbar = $('.ftco_navbar'),	sd = $('.js-scroll-wrap');
			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {navbar.addClass('scrolled');}}
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {navbar.removeClass('scrolled sleep');}}
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {navbar.addClass('awake');}
				if(sd.length > 0) {sd.addClass('sleep');}}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {navbar.removeClass('awake');navbar.addClass('sleep');}
				if(sd.length > 0) {sd.removeClass('sleep');}}
		});};
	scrollWindow();
	var counter = function() {
		$('#section-counter, .hero-wrap, .ftco-counter').waypoint( function( direction ) {
			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
			}
		} , { offset: '95%' } );
	}
	counter();
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
    /*Begin Change logo on scroll*/
    var initialSrc = "assests/front/images/logo2.png";
    var scrollSrc = "assests/front/images/logo.png";
    $(window).scroll(function() {
        var value = $(this).scrollTop();
        if (value > 150)
            $("img.logo").attr("src", scrollSrc );
        else
            $("img.logo").attr("src" , initialSrc );
    });
    /* End Change logo on scroll*/
/* begin Button scroll */
    var btn = $('#scrollTop');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });
    /* **** End  Button scroll ****  */
/*   Begin go to section + smooth scroll */
// handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function(e) {
        // target element id
        var id = $(this).attr('href');
        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();
        // top position relative to the document
        var pos = $id.offset().top;
        // animated top scrolling
        $('body, html').animate({scrollTop: pos});
    });
    /*   End  go to section + smooth scroll */
//  add class active to nav bar on click
    $('.navbar-nav .nav-item ').on('click',function (){

        $(this).addClass('active').siblings().removeClass('active');

    })
/* begin auto active nav sections */
    // if window = section Select this section from nav
    var index = $("#index").offset();
    var about = $("#about").offset();
    var ourWork = $("#our-work").offset();
    var contact = $("#contact").offset();
    // var projects = $("#projects").offset();
    // var testmonails = $("#testmonails").offset();
    var supports = $("#supports").offset();
    $(document).ready(function() {
        $(window).scroll(function(){
            var screenPosition = $(document).scrollTop();
            if(screenPosition >= index.top ){
                $( ".index" ).addClass( "active" );
                $(".index").siblings().removeClass("active");
            }
            if (screenPosition >= about.top -150) {
                $( ".about" ).addClass( "active" );
                $(".about").siblings().removeClass("active");
            }
            if (screenPosition >= ourWork.top -150 ) {
                $( ".our-work" ).addClass( "active" );
                $(".our-work").siblings().removeClass("active");
            }
            // if (screenPosition >= projects.top -150) {
            //     $( ".projects" ).addClass( "active" );
            //     $(".projects").siblings().removeClass("active");
            // }
            // if (screenPosition >= testmonails.top -150) {
            //     $( ".testmonails" ).addClass( "active" );
            //     $(".testmonails").siblings().removeClass("active");
            // }
                 if (screenPosition >= supports.top -150) {
                $( ".supports" ).addClass( "active" );
                $(".supports").siblings().removeClass("active");
            }
            if (screenPosition >= contact.top -150 ) {
                $( ".contact" ).addClass( "active" );
                $(".contact").siblings().removeClass("active");
            }
        });
    });
    /* End auto active nav sections */


/* Begin our supports slide */
    var oursupports = function() {
        $('.carousel-support').owlCarousel({
            center: true,loop: true,rtl: true,autoplay:250,autoplaySpeed:1200,autoplayTimeout:1500,
            autoplayHoverPause:true,paginationSpeed: 1500,items:1,margin: 30,stagePadding: 0,nav    : true,smartSpeed :900,dots: false,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{0:{items: 1},600:{items: 2},1000:{items: 3}}
        });
    };
    oursupports();
/* End  our supports slide*/
/* begin on load website */
    $(window).load(function () {
        // load Element
        $(".on-load .spinner").fadeOut(2000, function () {
            $(this).parent().fadeOut(2000, function () {
                $(".on-load").remove();
            });
            // show scroll
            $("body").css("overflow-y", "auto");
        });
    });
    /* End on load website */



/* End read more model script */

/**  begin Validation */

var formError = true,  // setting error status
message = true;
$(".email, .name, .phone, .subject").blur(function (){  // click out event
if($(this).val().length < 5){    // less than 5 car
    $(this).parent().find('.error').fadeIn(200);
    $(this).css('border','1px solid red');
    formError = true;
} else{
    $(this).parent().find('.error').fadeOut(200);
    $(this).css('border','1px solid green');
    formError = false;
}
if($(this).val().length > 30){   // more than 30 car
    $(this).parent().find('.more-than').fadeIn(200);
    $(this).css('border','1px solid red');
    formError = true;
}else{
    $(this).parent().find('.more-than').fadeOut(200);
    $(this).css('border','1px solid grean');
    formError = false;
}
}); // End of blur event
/* Begin message validation */
$('.messages').blur(function (){
if($(this).val().length < 10){  // message less than 10 car
    $(this).parent().find('.error').fadeIn(200);
    $(this).css('border','1px solid red');
    message = true;
}else {
    $(this).parent().find('.error').fadeOut(200);
    $(this).css('border','1px solid green');
    message = false;
}
if($(this).val().length > 100){
    $(this).parent().find('.more-than').fadeIn(200);
    $(this).css('border','1px solid red');
    message = true;
} else {
    $(this).parent().find('.more-than').fadeOut(200);
    $(this).css('border','1px solid green');
    message = false;
}
}); // end of messages blur
/* End of message validation */
/* Begin check form and submit if no errors */
$('.submit').submit(function (e){
if (formError === true || message === true){
    e.preventDefault();
}
});
/* End check form and submit if no errors */
/**  End Validation */
})(jQuery);
