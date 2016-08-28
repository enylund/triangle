App.pageLoad.push(function() {

  var $carousel = $('[data-artist-image-carousel]');

  if ( !$carousel.length || $carousel.data('flickity') ) return;

  $carousel.flickity({
    contain: true,
    wrapAround: true,
    accessibility: false,
    percentPosition: false,
    adaptiveHeight: true
  });
});