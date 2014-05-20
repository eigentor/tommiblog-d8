(function ($) {
  
  $(document).ready(function(){
    
  // Open and close the main mobile menu
    $('#block-mobilemenuswitcher').click(function(){
       $('#block-mainnavigation').slideToggle( "normal", function() {
       });
       $('#block-socialmediablockheader').slideToggle( "normal", function() {
       });
       $('#block-tommiblog-search').slideToggle( "normal", function() {
       });
       // Add the class 'active-menu' so we know the menu is in an open state.
       // If the class is already there, remove it while closing the menu.
       if($('.region-top-wide .main-menu-mobile').hasClass('active-menu')) {
          $('.region-top-wide .main-menu-mobile').removeClass('active-menu');
        } else {
         $('.region-top-wide .main-menu-mobile').addClass('active-menu');
        } 
    });

       
  });  // end document.ready

})(jQuery);