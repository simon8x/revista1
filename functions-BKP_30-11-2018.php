<?php

require_once get_template_directory() . '/load-more-consejos.php';

/* Cargar hojas de estilo y scripts dinamicamente: */

function ss_scripts() {

	

    if (!is_admin()) {

		

        wp_deregister_script('jquery'); 

        wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', false, '1.11.2', true);

        

        wp_register_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true );

        wp_register_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );

        wp_register_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.js', array('jquery'), '1.0', true );

        

        wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '3.6.0', true );

        wp_register_script( 'gmap', 'https://maps.googleapis.com/maps/api/js?v=3.exp', array(), '3.0', true );



        wp_register_script( 'jquerypp', get_template_directory_uri() . '/js/jquerypp.custom.js', array('jquery'), '1.0', true );

        wp_register_script( 'elastislide', get_template_directory_uri() . '/js/jquery.elastislide.js', array('jquery'), '1.0', true );

		//autocomplete

		//wp_register_script( 'typeahead', get_template_directory_uri() . '/js/typeahead.js', array('jquery'), '1.0', true );

		

		



        // Una vez que registramos el script debemos colocarlo en la cola de WordPress, antes encolamos la hojas de estilo:

        wp_enqueue_style( 'style', get_stylesheet_uri() );  

        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css', array(), '1.0', 'all');		

        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/plugins/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');

        wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', array('bootstrap'), '1.0', 'all');

        wp_enqueue_style( 'customizer', get_template_directory_uri() . '/css/customizer.css', array('bootstrap'), '1.0', 'all');



        //wp_enqueue_style( 'noto', 'http://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic' );

        wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext' );

        

        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'plugin' );

        wp_enqueue_script( 'scripts' );

        wp_enqueue_script( 'bootstrap');

        wp_enqueue_script( 'modernizr' );

        wp_enqueue_script( 'gmap');

        wp_enqueue_script( 'jquerypp');

        wp_enqueue_script( 'elastislide');

		//wp_enqueue_script( 'typeahead' ); //autocomplete plugin

		//wp_enqueue_script( 'autocomplete' ); //autocomplete

		

	

        

	}



}





// Agregamos la función a la lista de cargas de WordPress.

add_action( 'wp_enqueue_scripts', 'ss_scripts' );





function wpb_move_comment_field_to_bottom( $fields ) {

$comment_field = $fields['comment'];

unset( $fields['comment'] );

$fields['comment'] = $comment_field;

return $fields;

}

 

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );







// REMOVE WP EMOJI

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

remove_filter( 'the_content_feed', 'wp_staticize_emoji' );

remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );





function add_custom_post_type_to_query( $query ) {

    if ( $query->is_home() && $query->is_main_query() ) {

        $query->set( 'post_type', array('post', 'consejos', 'noticias', 'lanzamientos') );

    }

}

add_action( 'pre_get_posts', 'add_custom_post_type_to_query' );







/* Cut Strings: */

function limitar_texto($string, $n){

	$stg = strip_tags($string);

	

	if ( strlen ($stg) > $n )

	{
    $stg2 = quitar_tildes($stg);
	echo substr($stg2, 0, $n) . '…';

	}

	else { 
	
	$stg2 = quitar_tildes($stg);
	echo $stg2; 
	
	}

}





/*

-- ===================================================

-- Funcion para quitar todos los acentos de una cadena

-- ===================================================

*/

function quitar_tildes($cadena) {

$no_permitidas = array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");

$permitidas= array ("&aacute;","&eacute;","&iacute;","&oacute;","&uacute;","&Aacute;","&Eacute;","&Iacute;","&Oacute;","&Uacute;","&ntilde;","&Ntilde;","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");

$texto = str_replace($no_permitidas, $permitidas ,$cadena);

return $texto;

}





/*

-- ====================================================

-- Cambiar el logo de wordpress en la pantalla de login

-- ====================================================



function custom_loginlogo() {

echo '<style type="text/css">

h1 a {

    background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important; 

    height:95px !important;

    font-size:35px !important;

    width:100% !important;

    margin-bottom:7px !important;

    background-size:contain;

    background-color:#23503f;

    background-repeat:no-repeat;

    background-position: center center !important;

}

.login form {margin-top:10px !important;}

</style>';

}

add_action('login_head', 'custom_loginlogo');

*/





/*

-- =======================================================================

-- Funcion para Obtener coordenadas partir de una dirección en Google Maps

-- =======================================================================

*/

function getCoordinates($address){

    $address = urlencode($address);

    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;

    $response = file_get_contents($url);

    $json = json_decode($response,true);

 

    $lat = $json['results'][0]['geometry']['location']['lat'];

    $lng = $json['results'][0]['geometry']['location']['lng'];

 

    return array($lat, $lng);

}

	

/**

 * Filters for the_title()

 */

function gp121028_filter_title( $title ) {

    $substrings = explode( ' ', $title );

    $title = ( ! empty( $substrings[0] ) ) ? $substrings[0] . '<span>' . $substrings[1] . '</span>' : $title;

    return $title;

}



function team_filter_title( $title ) {

    $lines = explode( ' ', $title);

	$output = false;

	$count = 0;



	foreach( $lines as $line ) {

		$count++;

		$output .= '<span class="line-'.$count.'">'.$line.'</span> ';

	}



	return $output;

}





add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );

/*

 * Modify TinyMCE editor to remove H1.

 */

function tiny_mce_remove_unused_formats($init) {

    // Add block format elements you want to show in dropdown

    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5';

    return $init;

}





/**

 * void debug ( mixed Var [, bool Exit] )

 *

 */

 

if (!function_exists("debug")) {

 

    function debug($var, $exit = false) {

        echo "\n<pre>";

 

        if (is_array($var) || is_object($var)) {

            echo htmlentities(print_r($var, true));

        } 

        elseif (is_string($var)) {

            echo "string(" . strlen($var) . ") \"" . htmlentities($var) . "\"\n";

        } 

        else {

            var_dump($var);

        }

        echo "</pre>";

 

        if ($exit) {

            exit;

        }

    }

}



//Add thumbnail, automatic feed links and title tag support

if (function_exists('add_theme_support')) { 

    add_theme_support('post-thumbnails'); 

    

    add_image_size( 'thumbnail-nota', '340', '196', true );

    add_image_size( 'thumbnail-nota-big', '710', '408', true );

    add_image_size( 'thumbnail-nota-horizontal', '255', '180', true );

    add_image_size( 'thumbnail-single', '730', '425', true );



    add_image_size( 'banner_720x90', '720', '90', false );

    add_image_size( 'banner_300x250', '300', '250', false );

    add_image_size( 'banner_300x600', '300', '600', false );



    add_image_size( 'galeria_thumb', '140', '82', true );

    add_image_size( 'galeria_big', '730', '425', true );



    add_image_size( 'rivales-tamanio', '102', '56', true );

    

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    

    function themename_custom_logo_setup() {

    $defaults = array(

        'height'      => 88,

        'width'       => 132,

        'flex-height' => true,

        'flex-width'  => true,

        'header-text' => array( 'site-title', 'site-description' ),

    );

    add_theme_support( 'custom-logo', $defaults );

    }

    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

}





//Add content width (desktop default)

if ( ! isset( $content_width ) ) {

	$content_width = 768;

}





/*

register_nav_menus( array(

    'primary' => __( 'Menu Principal' ),

    'foomenu' => __( 'Menu al Pie' )

) );

 */



/*

//Add menu support and register main menu

if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {

    // file does not exist... return an error.

    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );

} else {

   // file exists... require it.

   require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

}

 * 

 */





// Remove the admin bar from the front end

//show_admin_bar(false);





function myfeed_request( $qv ) {

    if ( isset( $qv['feed'] ) ) {

        $qv['post_type'] = get_post_types();

    }

    return $qv;

}

add_filter( 'request', 'myfeed_request' );





add_action( 'thumbnail', 'wp_head', 'wprss_my_feeds' );



function wprss_my_feeds() {

    $post_types = array('project');

    foreach( $post_types as $post_type ) {

        $feed = get_post_type_archive_feed_link( $post_type );

        if ( $feed === '' || !is_string( $feed ) ) {

            $feed =  get_bloginfo( 'rss2_url' ) . "?post_type=$post_type";

        }

        printf(__('<link rel="%1$s" type="%2$s" href="%3$s" />'),"alternate","application/rss+xml",$feed);

    }

}





// Register sidebar

add_action('widgets_init', 'theme_register_sidebar');

function theme_register_sidebar() {

    if ( function_exists('register_sidebar') ) {

        

        register_sidebar(array(

            'name'  => __( 'Barra Lateral Secciones' ),

            'id' => 'sidebar-sec',

            'before_widget' => '<div id="%1$s" class="widget cus-adwidget">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="block-title"><span>',

            'after_title' => '</span></h3>',

         ));

		 

		 register_sidebar(array(

            'name'  => __( 'Barra Lateral Single' ),

            'id' => 'sidebar-sing',

            'before_widget' => '<div id="%1$s" class="widget cus-adwidget">',

            'after_widget' => '</div>',

            'before_title' => '<h3 class="block-title"><span>',

            'after_title' => '</span></h3>',

         ));

        

    }

}



function wpfme_has_sidebar($classes) {

    if (is_active_sidebar('sidebar')) {

        // add 'class-name' to the $classes array

        $classes[] = 'has_sidebar';

    }

    // return the $classes array

    return $classes;

}

add_filter('body_class','wpfme_has_sidebar');







// Disable the theme / plugin text editor in Admin

define('DISALLOW_FILE_EDIT', true);





// function to display number of posts.

function getPostViews($postID){

    $count_key = 'post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

        return "0 View";

    }

    return $count;

}



// function to count views.

function setPostViews($postID) {

    $count_key = 'post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        $count = 0;

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

    }else{

        $count++;

        update_post_meta($postID, $count_key, $count);

    }

}





//Desactivar nuevo editor Gutenberg:

add_filter( 'gutenberg_can_edit_post_type', '__return_false' );



if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Opciones generales',

		'menu_title'	=> 'Opciones generales',

		'menu_slug' 	=> 'opciones-generales',

		'icon_url'		=> 'dashicons-admin-settings',

		'redirect'		=> false

	));

		acf_add_options_page(array(

		'page_title' 	=> 'Espacio patrocinado',

		'menu_title'	=> 'Espacio patrocinado',

		'menu_slug' 	=> 'Espacio patrocinado',

		'icon_url'		=> 'dashicons-awards',

		'redirect'		=> false

	));

		acf_add_options_page(array(

		'page_title' 	=> 'Contenido recomendado',

		'menu_title'	=> 'Contenido recomendado',

		'menu_slug' 	=> 'contenido-recomendado',

		'icon_url'		=> 'dashicons-editor-expand',

		'redirect'		=> false

	));

}



add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );

//Quitar logo Escritorio

function remove_wp_logo( $wp_admin_bar ) {

	$wp_admin_bar->remove_node( 'wp-logo' );

}



function contactos_page()

{

		

    add_menu_page(__('Contactos', 'Terciar'), 

				  __('Contactos', 'Terciar'), 

				  'edit_pages', 

				  'contacto', 

				  'contactos_menu',

				  'dashicons-email-alt');

   

}



add_action('admin_menu', 'contactos_page');



function contactos_menu()

{ 

?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/buttons/1.1.1/css/buttons.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.1.1/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>

<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/buttons/1.1.1/js/buttons.html5.min.js"></script>

<?php 

//Admin contactos

global $wpdb;

$table = $wpdb->prefix."contacto"; 

$file_dir=get_bloginfo('template_directory'); //table table-striped table-bordered 

$rowsec = $wpdb->get_results("SELECT * FROM $table  ORDER BY id desc"); 

?>



	<div class="wrap container">

		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-6">

		<h4 class="btn btn-success"><?php _e('Contactos');?></h4>

		<hr>

			<table id="tabla" class="display" cellspacing="0" width="100%">

				<thead>

					<tr>

						<th>Nombre</th>

						<th>email</th>

						<th>Telefono</th>

						<th>Asunto</th>

						<th>Comentarios</th>

						<th>Fecha alta</th>

					</tr>

				</thead>

				<tfoot>

					<tr>

						<th>Nombre</th>

						<th>email</th>

						<th>Telefono</th>

						<th>Asunto</th>

						<th>Comentarios</th>

						<th>Fecha alta</th>

					</tr>

				</tfoot>

				<tbody>

					<?php

					foreach ( $rowsec as $sec ) { 

						echo '<tr>';

						echo '<td>'. $sec->nombre . '</td>';

						echo '<td>'. $sec->email . '</td>';

						echo '<td>'. $sec->tel . '</td>';

						echo '<td>'. $sec->asunto . '</td>';

						echo '<td>'. $sec->comentarios . '</td>';

						echo '<td>'. $sec->fecalta . '</td>';

						echo '</tr>';

					} ?>

				</tbody>

			</table>

		</div>

	</div>

<script>

$(document).ready(function() {

    $('#tabla').DataTable( {

        dom: 'Bfrtip',

		"oLanguage": {

                "sUrl": "<?php echo $file_dir;?>/js/dataTables.spanish.txt"

            },

        buttons: [

            'copyHtml5',

            'excelHtml5',

            'csvHtml5',

            'pdfHtml5'

        ]

    } );

} )

</script>

<?php 

} 



//////////////////Load More///////////////////

function misha_my_load_more_scripts() {

	global $wp_query; 

	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );

	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(

																	'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 

																	'posts' => json_encode( $wp_query->query_vars ),

																	'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,

																	'max_page' => $wp_query->max_num_pages

	) );

 	wp_enqueue_script( 'my_loadmore' );

}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );



function misha_loadmore_ajax_handler(){

	$args = json_decode( stripslashes( $_POST['query'] ), true );

	$args['paged'] = $_POST['page'] + 2; 

	//$args['offset'] = 4;

	$args['post_status'] = 'publish';

	

	query_posts( $args );?>

		<div class="row">

	<?php if( have_posts() ) : while( have_posts() ): the_post();?>



		  <div class="col-md-6">

              <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>

                  <?php if ( has_post_thumbnail()) : ?>

                      <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                          <figure class="image-overlay">

                              <?php the_post_thumbnail('thumbnail-nota');  ?>

                          </figure>

                      </a>

                  <?php endif; ?>

                  <header class="news-details">

                      <h3 class="news-title">

                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php 

											$custitle = "";

											$custitle = get_the_title();

											echo limitar_texto($custitle, 40);

											?></a>

                      </h3>

                      <div class="meta">

                          <?php

                          //if($tipo):

                              ?>

                              <a href="<?php echo get_post_type(); ?>" class="taxo">

                                  <?php echo get_post_type(); ?>

                              </a>

                              | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                          <?php //endif; ?>

                      </div>

                  </header>

              </article>

          </div>

	

<?php endwhile; endif;wp_reset_postdata();

?></div> <?php

	die; 

}

add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); 

add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler');



/* Elimina ítems del menú */

function my_remove_menu_pages() {

	if(!current_user_can('add_users')) {

		//remove_menu_page('upload.php'); // Multimedia

		remove_menu_page('link-manager.php'); // Enlaces

		//remove_menu_page('edit-comments.php'); // Comentarios

		//remove_menu_page('themes.php'); // Apariencia

		remove_menu_page('plugins.php'); // Plugins

		//remove_menu_page('users.php'); // Usuarios

		//remove_menu_page('tools.php'); // Herramientas

		//remove_menu_page('options-general.php'); // Ajustes

		remove_menu_page( 'index.php' );                  //Dashboard

		//remove_menu_page( 'edit.php?post_type=page' );    //Pages

		remove_menu_page( 'edit.php?post_type=acf-field-group' ); 

		remove_menu_page( 'edit.php' ); 

	}

}

add_action('admin_menu', 'my_remove_menu_pages');



function remove_core_updates() {

	if (current_user_can('update_core')) {

		return;

	}

	add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);

	add_filter('pre_option_update_core', '__return_null');

	add_filter('pre_site_transient_update_core', '__return_null');

}

add_action('after_setup_theme', 'remove_core_updates');



function new_dashboard_home($username, $user){

    if(array_key_exists('editor', $user->caps)){

        wp_redirect(admin_url('edit.php?post_type=noticias', 'http'), 301);

        exit;

    }

}

add_action('wp_login', 'new_dashboard_home', 10, 2);



 add_action( 'admin_menu', 'shmeh_menu' );

    add_action( 'parent_file', 'menu_highlight' );



    function shmeh_menu() {

        add_submenu_page( 'bla', 'Shmeh', 'Shmeh', 'manage_options', 'edit-tags.php?taxonomy=shmeh');

    }



    function menu_highlight( $parent_file ) {

        global $current_screen;



        $taxonomy = $current_screen->taxonomy;

        if ( $taxonomy == 'marca' ) {

            $parent_file = 'bla';

        }



        return $parent_file;

    }

	



////////// taxonomy modelo ///////////

function modelo_taxonomy() {  

    register_taxonomy(  

        'modelo',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 

        'pruebas',        //post type name

        array(  

            'hierarchical' => true,  

            'label' => 'Modelos',  //Display name

            'query_var' => true,

            'rewrite' => array(

                'slug' => 'modelo', // This controls the base slug that will display before each term

                'with_front' => true // Don't display the category base before 

            )

        )  

    );  

	

}  

add_action( 'init', 'modelo_taxonomy');



/**

 * Generate breadcrumbs

 */

function get_breadcrumb() {

    echo '<ol class="breadcrumb">';

    if (!is_home()) {

		//echo '<li class="breadcrumb-item">Ud. está aquí</li>';

        echo '<li class="breadcrumb-item"><a href="';

        echo get_option('home');

        echo '">';

        echo '<i class="fa fa-home">auto test </i>';

        echo "</a></li>";

        if (is_category() || is_single()) {

            echo '<li class="breadcrumb-item">';

            the_category(' </li><li class="breadcrumb-item"> ');

            if (is_single()) {

                echo "</li><li class='breadcrumb-item active'>";

                the_title();

                echo '</li>';

            }

        } elseif (is_page()) {

            echo '<li class="breadcrumb-item">';

            echo the_title();

            echo '</li>';

        }

    }

    elseif (is_tag()) {single_tag_title();}

    elseif (is_day()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F jS, Y'); echo'</li>';}

    elseif (is_month()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F, Y'); echo'</li>';}

    elseif (is_year()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('Y'); echo'</li>';}

    elseif (is_author()) {echo"<li class='breadcrumb-item'>Author Archive"; echo'</li>';}

    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}

    elseif (is_search()) {echo"<li class='breadcrumb-item'>Search Results"; echo'</li>';}

    echo '</ol>';

}



function pjw_login_adminbar( $wp_admin_bar) {

	if ( !is_user_logged_in() )

	$wp_admin_bar->add_menu( array( 'title' => __( 'Log In' ), 'href' => wp_login_url() ) );

}

add_action( 'admin_bar_menu', 'pjw_login_adminbar' );

add_filter( 'show_admin_bar', '__return_true' , 1000 );



// Breadcrumbs

function custom_breadcrumbs() {

       

    // Settings

    $separator          = '&gt;';

    $breadcrums_id      = 'breadcrumbs';

    $breadcrums_class   = 'breadcrumbs';

    $home_title         = 'auto test';

      

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)

    $custom_taxonomy    = 'modelo';

       

    // Get the query & post information

    global $post,$wp_query;

       

    // Do not display on the homepage

    if ( !is_front_page() ) {

       

        // Build the breadcrums

        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

           

        // Home page

        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';

        echo '<li class="separator separator-home"> ' . $separator . ' </li>';

           

        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

              

            echo '<li class="item-current item-archive">' . post_type_archive_title($prefix, false) . '</li>';

              

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

              

            // If post is a custom post type

            $post_type = get_post_type();

              

            // If it is a custom post type display name and link

            if($post_type != 'post') {

                  

                $post_type_object = get_post_type_object($post_type);

                $post_type_archive = get_post_type_archive_link($post_type);

              

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

                echo '<li class="separator"> ' . $separator . ' </li>';

              

            }

              

            $custom_tax_name = get_queried_object()->name;

			

            echo '<li class="item-current item-archive">' . $custom_tax_name . '</li>';

			//

				

				/*$postid=get_the_ID();					

				$args = array('taxonomy' =>'marca','orderby' => 'name','order' => 'ASC');					

				$terms = wp_get_post_terms( $postid, 'marca', $args ); 					

				foreach($terms as $cat) {									

				echo $cat->name; 

				echo get_category_link( $cat->term_id )  }	*/

	  			

	

              

        } else if ( is_single() ) {

              

            // If post is a custom post type

            $post_type = get_post_type();

              

            // If it is a custom post type display name and link

            if($post_type != 'post') {

                  

                $post_type_object = get_post_type_object($post_type);

                $post_type_archive = get_post_type_archive_link($post_type);

              

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

                echo '<li class="separator"> ' . $separator . ' </li>';

              

            }

              

            // Get post category info

            $category = get_the_category();

             

            if(!empty($category)) {

              

                // Get last category post is in

                $last_category = end(array_values($category));

                  

                // Get parent any categories and create array

                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');

                $cat_parents = explode(',',$get_cat_parents);

                  

                // Loop through parent categories and store in variable $cat_display

                $cat_display = '';

                foreach($cat_parents as $parents) {

                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';

                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';

                }

             

            }

              

            // If it's a custom post type within a custom taxonomy

            $taxonomy_exists = taxonomy_exists($custom_taxonomy);

            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                   

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );

                $cat_id         = $taxonomy_terms[0]->term_id;

                $cat_nicename   = $taxonomy_terms[0]->slug;

                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);

                $cat_name       = $taxonomy_terms[0]->name;

               

            }

              

            // Check if the post is in a category

            if(!empty($last_category)) {

                echo $cat_display;

                echo '<li class="item-current item-' . $post->ID . '"><' . get_the_title() . '">' . get_the_title() . '</li>';

                  

            // Else if post is in a custom taxonomy

            } else if(!empty($cat_id)) {

                  

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';

                echo '<li class="separator"> ' . $separator . ' </li>';

                echo '<li class="item-current item-' . $post->ID . '"><class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</li>';

              

            } else {

                  

                echo '<li class="item-current item-' . $post->ID . '"><class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</li>';

                  

            }

              

        } else if ( is_category() ) {

               

            // Category page

            echo '<li class="item-current item-cat">' . single_cat_title('', false) . '</li>';

               

        } else if ( is_page() ) {

               

            // Standard page

            if( $post->post_parent ){

                   

                // If child page, get parents 

                $anc = get_post_ancestors( $post->ID );

                   

                // Get parents in the right order

                $anc = array_reverse($anc);

                   

                // Parent page loop

                if ( !isset( $parents ) ) $parents = null;

                foreach ( $anc as $ancestor ) {

                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';

                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';

                }

                   

                // Display parent pages

                echo $parents;

                   

                // Current page

                echo '<li class="item-current item-' . $post->ID . '">< title="' . get_the_title() . '"> ' . get_the_title() . '</li>';

                   

            } else {

                   

                // Just display current page if not parents

                echo '<li class="item-current item-' . $post->ID . '"><class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</li>';

                   

            }

               

        } else if ( is_tag() ) {

               

            // Tag page

               

            // Get tag information

            $term_id        = get_query_var('tag_id');

            $taxonomy       = 'post_tag';

            $args           = 'include=' . $term_id;

            $terms          = get_terms( $taxonomy, $args );

            $get_term_id    = $terms[0]->term_id;

            $get_term_slug  = $terms[0]->slug;

            $get_term_name  = $terms[0]->name;

               

            // Display the tag name

            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</li>';

           

        } elseif ( is_day() ) {

               

            // Day archive

               

            // Year link

            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

               

            // Month link

            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';

            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

               

            // Day display

            echo '<li class="item-current item-' . get_the_time('j') . '"><class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</li>';

               

        } else if ( is_month() ) {

               

            // Month Archive

               

            // Year link

            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';

            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

               

            // Month display

            echo '<li class="item-month item-month-' . get_the_time('m') . '"><class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</li>';

               

        } else if ( is_year() ) {

               

            // Display year archive

            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</li>';

               

        } else if ( is_author() ) {

               

            // Auhor archive

               

            // Get the author information

            global $author;

            $userdata = get_userdata( $author );

               

            // Display author name

            echo '<li class="item-current item-current-' . $userdata->user_nicename . '">< class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</li>';

           

        } else if ( get_query_var('paged') ) {

               

            // Paginated archives

            echo '<li class="item-current item-current-' . get_query_var('paged') . '">< class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</li>';

               

        } else if ( is_search() ) {

           

            // Search results page

            echo '<li class="item-current item-current-' . get_search_query() . '">< class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</li>';

           

        } elseif ( is_404() ) {

               

            // 404 page

            echo '<li>' . 'Error 404' . '</li>';

        }

       

        echo '</ul>';

           

    }

       

}