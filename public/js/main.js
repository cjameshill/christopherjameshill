jQuery(document).ready(function($) {
  var $offcanvas = $('.off-canvas'),
      $main = $('.main'),
      $topbar = $('.topBar'),
      $bgFull = $('.bgFullOverlay'),
      $offcanvaswrapper = $('.off-canvas-wrapper'),
  $menuToggle = $('.menu-toggle');

    
  $menuToggle.on('click', function(event) {
    event.preventDefault();
    $offcanvas.toggleClass('is-open');
    $main.toggleClass('is-open');
    $bgFull.toggleClass('is-open');
  });
    
    $( window ).scroll(function() {
        if( $(window).scrollTop() >= 100 ) {
        $topbar.addClass('reduce');
        $offcanvas.removeClass('is-open');
        $main.removeClass('is-open');
     } else {
            $topbar.removeClass('reduce');
        }
    });
    

    
});

