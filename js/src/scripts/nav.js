App.pageScroll.push(function() {
  var $people = $( '.people' );
  var offset = $( '.people' ).offset().top;
  console.log(offset.top);
  var $mainNavInnerWrapper = $('.main-nav__inner-wrapper');

  if( App.scrollTop < offset) {
    if ( $mainNavInnerWrapper.hasClass('active') ) {
      $mainNavInnerWrapper.removeClass('active');
    }
  } else if (App.scrollTop > offset) {
     if ( !$mainNavInnerWrapper.hasClass('active') ) {
      $mainNavInnerWrapper.addClass('active');
    }
  }

});