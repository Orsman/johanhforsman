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

      // Declaring global variables
      var $headerText = $('.header-text'),
          $siteTitle = $('.site-title'),
          $header = $('header'),
          windowScroll = 0;

      // Identify if visitor has a large enough viewport for parallaxing title
      function isLargeViewport() {
        if($header.css('background-size') === '180%') {
          return false;
        } else {
          return true;
        }
      }

      //Apply fitText to Site-Title to make it nice and shiney on any screen size.
      $siteTitle.fitText(1.2, { minFontSize: '40px', maxFontSize: '110px'});

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
        $headerText.css({
          'margin-top' : -(windowScroll/4)+"px",
          'opacity' : 1-(windowScroll/700)
        });

        //Slowly parallax the background of Header
        $header.css({
          'background-position' : 'center ' + (-windowScroll/8)+"px"
        });
      }

      //Fade in scroll to top button when user have been scrolling down 200px
      $(window).scroll(function() {
        if ( $(this).scrollTop() > 400 ) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });

      //Add smooth scroll to top when user clicks button
      $('#back-to-top').click(function() {
        $('html, body').animate( {scrollTop: 0} , 600);
        return false;
      });

      // Show tool-tip when hovering over books
      $('.book').mouseenter(function() {
        $(this).find('.tool-tip').fadeIn();
      });
      $('.book').mouseleave(function() {
        $(this).find('.tool-tip').fadeOut();
      });

    });

}(jQuery));