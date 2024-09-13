(function ($) {


    $(document).ready(function(){
      $("#sticky-header").sticky({topSpacing:0});

      // Show scroll-to-top button when user scrolls down
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.shopgrove-scrool-top').fadeIn();
        } else {
            $('.shopgrove-scrool-top').fadeOut();
        }
    });
    
      // Scroll to top when button is clicked
      $('.shopgrove-scrool-top').click(function() {
          $('html, body').animate({ scrollTop: 0 }, 'slow');
      });      

       
    });


})(jQuery);
