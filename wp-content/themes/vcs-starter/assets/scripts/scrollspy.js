jQuery('a').on( 'click', function(event) {
	var target 	= jQuery( this );
    var element = target.attr('href');
    // Commented Out for having scrollspy on all buttons,
    // no active class needed in this version.
    // jQuery('nav li a').removeClass('btn--nav__active')
    // target.addClass('btn--nav__active');

    jQuery("body, html").animate({ 
      scrollTop: jQuery( element ).offset().top - 90	
    }, 800);
});
