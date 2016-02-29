jQuery(document).ready(function(){

	//********************* bx-slider call *********************//
	jQuery('.bxslider').bxSlider({
	    auto: true,
	    pager: false,
	    mode: 'fade',
	    speed: 900,
	    pause: 5000,
	    adaptiveHeight: true,
	    autoHover: true
	});

 });
 
jQuery(window).load(function(){

	jQuery.each( jQuery('.blog-content-wrapper .tg-column-3 .blog-block'), function(k,v){
		var height1 = jQuery(jQuery('.blog-content-wrapper .tg-column-3 .blog-block')[k]).height();
		var height2 = jQuery(jQuery('.blog-content-wrapper .tg-column-3 .blog-block')[k+1]).height();
		
		var height = ( height1 > height2 ? height1 : height2 );
		jQuery(jQuery('.blog-content-wrapper .tg-column-3 .blog-block')[k]).height( height );
		jQuery(jQuery('.blog-content-wrapper .tg-column-3 .blog-block')[k+1]).height( height );
	});
});