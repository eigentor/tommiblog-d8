(function ($) {
  
  // $(document).ready(function(){
  //   $('body').click(function{
  //     alert('Jo mei');
  //   });

  // Open and close the main mobile menu
    $('.region-top-wide .switch-mobile-main-menu').click(function(){
       $('.region-top-wide .main-menu-mobile').slideToggle( "normal", function() {

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