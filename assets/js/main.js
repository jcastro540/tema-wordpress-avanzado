jQuery(document).ready(function(){
	jQuery('[data-toggle="tooltip"] ').tooltip();

	// INFINITE SCROLL
	var ias = $.ias({
        container: '#timeline',
        item: '.publication-item',
        pagination: '.pagination',
        next: '.pagination .next',
        triggetPageThreshold: 5
      });
    
    ias.extension(new IASTriggerExtension({
        text: 'Ver más publicaciones',
        offset: 3        
    }));
    
    var location = window.location.pathname;
   	var result = location.replace("/blog/", "/");

    ias.extension(new IASSpinnerExtension({

        src: result+'/wp-content/themes/wordpress-avanzado/assets/img/loader.gif'
    }));
    
    ias.extension(new IASNoneLeftExtension({
        text: 'No hay más publicaciones'
    }));


});