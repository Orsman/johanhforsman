(function( $ ) {

    $(function() {
    // $() will work as an alias for jQuery() inside of this function

      var isMobile = false;

      // Identify if visitor on mobile with lame sniffing to remove parallaxing title
      if( navigator.userAgent.match(/Android/i) ||
          navigator.userAgent.match(/webOS/i) ||
          navigator.userAgent.match(/iPhone/i) ||
          navigator.userAgent.match(/iPod/i) ||
          navigator.userAgent.match(/iPad/i) ||
          navigator.userAgent.match(/BlackBerry/)
      ){
        isMobile = true;
      }

      // Global variables
      var $siteTitle = $('.site-title');
      var $header = $('header');
      var $nav = $('.nav');
      var windowScroll;

      // Identify if visitor has a large enough viewport for parallaxing title
      function isLargeViewport() {
        if($nav.css('position') === "relative") {
          return false;
        } else {
          return true;
        }
      }

      // If large viewport and not mobile, parallax the title
      if(!isMobile) {
        $(window).scroll(function() {
          if(isLargeViewport()) {
            slidingTitle();
          }
        });
      }

      // Window gets large enough, need to recalc all parallaxing title values
      $(window).resize(function() {
        if(isLargeViewport()) {
          slidingTitle();
        }
      });

      // Functional parallaxing calculations
      function slidingTitle() {
        //Get scroll position of window
        windowScroll = $(this).scrollTop();

        //Slow scroll of .siteTitle scroll and fade it out
        $siteTitle.css({
          'margin-top' : -(windowScroll/3)+"px",
          'opacity' : 1-(windowScroll/400)
        });

        //Slowly parallax the background of Header
        $header.css({
          'background-position' : 'center ' + (-windowScroll/8)+"px"
        });
      }

    });

}(jQuery));