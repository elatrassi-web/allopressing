


// 3. SLIDER
//================================================================

// fullscreen-slider
var sliderAutoplay  = jQuery('#sliderAutoplay').val();

var fullscreenOwl = jQuery("#fullscreen-slider");
  fullscreenOwl.owlCarousel({
    loop:true,
    margin:0,
    items:1,
    autoplay: true,
    autoplayHoverPause:true,
    autoplayTimeout: sliderAutoplay,
    nav: true,
    dots: false,
    navSpeed: 3050,
    autoplayTimeout: 6500,
    singleItem: true,
    navText: [
    "<i class='ti-angle-left'></i>",
    "<i class='ti-angle-right'></i>"
    ],
    animateIn: 'pulse'
  });


  fullscreenOwl.on('changed.owl.carousel', function(event) {
0
    var $currentItem = jQuery('.owl-item', fullscreenOwl).eq(event.item.index);
    var $elemsToanim = $currentItem.find("[data-animation]");

    

    setAnimation ($elemsToanim);
    setEmpty ($elemsToanim);
  })

  function setAnimation ( _elem ) {
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    _elem.each ( function () {
      var $elem = jQuery(this);
      $elem.removeClass('animated');
      $elem.removeClass($elem.data( 'animation' ));

      var $animationType = 'animated ' + $elem.data( 'animation' );
      var $animationTimeOut = $elem.data( 'timeout' );

      if ($animationTimeOut) {
        window.setTimeout(function(){
          $elem.addClass($animationType);
        }, parseInt($animationTimeOut,10));
      } else {

        $elem.addClass($animationType);
      }
    });
  }

  function setEmpty ( _elem ) {
    var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    _elem.each ( function () {
      var $elem = jQuery(this);
      
      $elem.addClass('animate');
      $elem.removeClass('animated');
    });
  }

// coming-soon-carousel

var owl4 = jQuery("#coming-soon-carousel");
owl4.owlCarousel({
  loop:true,
  margin: 0,
  items:1,
  autoplay: true,
  autoplayTimeout: 3000,
  nav: false,
  dots: false,
  navSpeed: 2500,
  singleItem: true
});




// 6. ANIMATION ELEMENTS
//================================================================

window.addEventListener('load', function(){

  var $window           = $(window),
      win_height_padded = $window.height() * 1.1,
      isTouch           = Modernizr.touch;

  if (isTouch) { $('.animate').addClass('animated'); }

  $window.on('scroll',animateScroll);

  function animateScroll() {
    var scrolled = $window.scrollTop(),
    win_height_padded = $window.height() * 1.1;

    $(".animate:not(.animated)").each(function () {
      var $elem = jQuery(this);
      var offsetTop = $elem.offset().top;

      $elem.removeClass('animated');
      $elem.removeClass($elem.data( 'animation' ));

      if (scrolled + win_height_padded > offsetTop) {

        var $animationType = 'animated ' + $elem.data( 'animation' );
        var $animationTimeOut = $elem.data( 'timeout' );

        if ($animationTimeOut) {
          window.setTimeout(function(){
            $elem.addClass($animationType);
          }, parseInt($animationTimeOut,10));
        } else {
          
        }
      }
    });

  }

  animateScroll();
});


