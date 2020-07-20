/*var ajaxurl = "http://autotest.com.ar/wp-admin/admin-ajax.php"; //"<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 2;
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page //,
            //'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
        };
 
        $.post(ajaxurl, data, function(response) {
            $('.my-posts').append(response);
            page++;
        });
    });
});*/
jQuery(function($){
	$('.misha_loadmore_consejos').click(function(){
		var button = $(this),
		    data = {
			'action': 'loadmore_consejos',
			'query': misha_loadmore_params_consejos.posts, // that's how we get params from wp_localize_script() function
			'page' : misha_loadmore_params_consejos.current_page
		};
 
		$.ajax({
			url : misha_loadmore_params_consejos.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Cargando...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) { 
					//button.text( 'Cargar más' ).prev().before(data); // insert new posts
					//button.text( 'Mostrar más' ).prev().after(data).hide().fadeIn(2000);
					button.text( 'Cargar más' ).prev().after(data);//.hide().fadeIn(2000);
					misha_loadmore_params_consejos.current_page++;
 
					if ( misha_loadmore_params_consejos.current_page == misha_loadmore_params_consejos.max_page ) 
						button.remove(); // if last page, remove the button
					
					// you can also fire the "post-load" event here if you use a plugin that requires it
					// $( document.body ).trigger( 'post-load' );
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	});

});


