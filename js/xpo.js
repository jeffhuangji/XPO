;
(function($){
  $(document).ready(function() {
    hamburger();
  });

  function hamburger() {
    $('.hamburger').click(function() {
      $(this).toggleClass('active');
      $('#sidebar-left > .region-left').toggleClass('expanded');
    });
  } 

})(window.jQuery);