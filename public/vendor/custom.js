
// Detect Screen
$(function(){
  var width = $(window).innerWidth();
  var height = $(window).innerHeight();
  var thumbheight = (height-100)/5;
  $('.minbox').css({ height: thumbheight + 'px' });
  $('.fullscreen').css({ height: height-100 + 'px',width: $(window).innerWidth() + 'px' });
  $('.fullheight').css({ height: height-100 + 'px'});
  $('.halfheight').css({ minHeight: height/2 + 'px'});
  $('.4height').css({ height: height/4 + 'px'});
  $('.3height').css({ height: height/3 + 'px'});
  $('.fullwidth').css({ width: width + 'px'});
  $(window).resize(function(){
    var width = $(window).innerWidth();
    var height = $(window).innerHeight();
    var thumbheight = (height-100)/5;
    $('.minbox').css({ height: thumbheight + 'px' });
    $('.fullscreen').css({ height: height-100 + 'px',width: $(window).innerWidth() + 'px' });
    $('.fullheight').css({ height: height-100 + 'px'});
    $('.fullwidth').css({ width: width + 'px'});
    $('.halfheight').css({ minHeight: height/2 + 'px'});
    $('.4height').css({ height: height/4 + 'px'});
    $('.3height').css({ height: height/3 + 'px'});
  });
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 120) {
        $("#header").addClass("fixed");
    } else {
        $("#header").removeClass("fixed");
    }
});
$(document).ready(function() {
  $('#menu').slicknav({
  		prependTo:'#nav-mobile'
  });
  $('#masonry').isotope({
    // options...
    itemSelector: '.items',
    masonry: {
      columnWidth: 190
    }
  });
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
	$('a.backtop').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 2000);
		return false;
	 });
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,

	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});

	 var owl = $(".slider");
	      owl.owlCarousel({
        items:1,
        margin:0,
        stagePadding:0,
        smartSpeed:450,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:false
	  });

    $('.carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        768:{
            items:4,
            nav:true,
            loop:false
        }
    }
})

});

$(window).load(function() {

	  wow = new WOW(
		{
		  boxClass:     'wow',      // default
		  animateClass: 'animated', // default
		  offset:       0,          // default
		  mobile:       true,       // default
		  live:         true        // default
		}
	  )
	  wow.init();
});
