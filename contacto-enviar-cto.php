<?php
   /*
      	Template Name: contacto enviar cto
   */
?>
<?php 
		// id	nombre	email	tel	asunto	comentarios	fecalta

		if ( $_POST['nombre'] != '' && $_POST['asunto'] != '' &&
			$_POST['email'] != '' && $_POST['tel'] != '' ) 
			{ 
	
		$nombre					= addslashes($_POST["nombre"]);
		$email					= addslashes($_POST["email"]);		
		$tel					= addslashes($_POST["tel"]);
		$asunto					= addslashes($_POST["asunto"]);	
		$comentarios			= addslashes($_POST["comentarios"]);						
		//var_dump($_POST);
		global $wpdb;
		$table_name = $wpdb->prefix."contacto";
		$wpdb->insert( $table_name, 
					   array( 
						'nombre'           	=> 	$nombre,
						'email'            	=> 	$email,
						'tel'          		=> 	$tel,
						'asunto'           	=> 	$asunto,
						'comentarios'       => 	$comentarios
					)
		);
		$url = get_bloginfo('url'); 
		$contacto_ok="/contacto-ok-cto";
		$redirect = $url.$contacto_ok;
        wp_redirect($redirect);
        exit;
			}
?>