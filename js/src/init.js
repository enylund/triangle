// Global namespace, window variables, etc.

$ = jQuery;

var App = {
  pageInit: [],
  pageLoad: [],
  afterPageLoad: [],
  pageResize: [],
  pageScroll: [],
  windowWidth: $(window).width(),
  windowHeight: $(window).height(),
  scrollTop: $(window).scrollTop(),
  runFunctions: function(array){
    for(var i = 0; i < array.length; i++) {
      array[i]();
    }
  },
};

$(window).resize(function() {
  App.windowWidth  = $(window).width();
  App.windowHeight = $(window).height();
});

$(window).scroll(function() {
  App.scrollTop = $(window).scrollTop();
});

App.breakpoint = function(checkIfSize) {
  var xs = 480;
  var sm = 768;
  var md = 992;
  var lg = 1200;
  var breakpoint;

  if(App.windowWidth < xs) {
    breakpoint = 'xs';
  } else if(App.windowWidth >= md) {
    breakpoint = 'lg';
  } else if(App.windowWidth >= sm) {
    breakpoint = 'md';
  } else {
    breakpoint = 'sm';
  }

  if(checkIfSize !== undefined) {
    if(checkIfSize == 'xs') {
      return App.windowWidth < xs;
    } else if(checkIfSize == 'sm') {
      return (App.windowWidth >= xs && App.windowWidth < sm);
    } else if(checkIfSize == 'md') {
      return (App.windowWidth >= sm && App.windowWidth < md);
    } else if(checkIfSize == 'lg') {
      return App.windowWidth >= md;
    }
  } else {
    return breakpoint;
  }
};

App.breakpoint.isMobile = function() {
  return ( App.breakpoint('xs') || App.breakpoint('sm') );
};


//////////////////////////////////////////////////////////////
// On Page load
//////////////////////////////////////////////////////////////

$(document).on('page:load ready page:restore', function() {
  App.runFunctions(App.pageInit);
  App.runFunctions(App.pageResize);
  App.runFunctions(App.pageScroll);
  App.runFunctions(App.pageLoad);
  App.runFunctions(App.afterPageLoad);
});



