<?php
//////////////////Load More///////////////////
add_action('wp_ajax_loadmore_consejos', 'misha_loadmore_ajax_handler_consejos'); 
add_action('wp_ajax_nopriv_loadmore_consejos', 'misha_loadmore_ajax_handler_consejos'); 

function misha_my_load_more_scripts_consejos() {
	global $wp_query; 
	//wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/js/myloadmore.js', array('jquery') );
	wp_register_script( 'my_loadmore_consejos', get_stylesheet_directory_uri() . '/js/lmconsejos.js', array('jquery') );
	wp_localize_script( 'my_loadmore_consejos', 'misha_loadmore_params_consejos', array(
																	'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
																	'posts' => json_encode( $wp_query->query_vars ),
																	'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
																	'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'my_loadmore_consejos' );
}
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts_consejos' );

function misha_loadmore_ajax_handler_consejos(){
	$args1 = json_decode( stripslashes( $_POST['query'] ), true );
	//echo json_decode( stripslashes( $_POST['query'] ), true );
	$args1['paged'] = $_POST['page'] + 1; 
	//echo $_POST['query'].'---'.$_POST['page'];
	
	//$args1['post_type'] = 'consejos';
	$args1['post_status'] = 'publish';
	//$my_query = new WP_Query( $args1 );
	query_posts( $args1 );?>

	<?php if( have_posts() ) : while(  have_posts() ):  the_post();?>

					<article class="simple-post simple-big clearfix">

					   <div class="simple-thumb">						  
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-nota');  ?></a>					   
								</div>					   
								<header>					      
									<p class="simple-share">                                
									<?php  if($tipo): ?>                                    
										<a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">                                        
									<?php echo $tipo; ?> </a> | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>                                
									<?php endif; ?>
									</p>
									<h3>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php 
											$custitle = "";										
											$custitle = get_the_title();										
											echo limitar_texto($custitle, 55);?>								
										</a>
									</h3>
									<?php
									$value2 = "";                            
									$value2 = get_field( "extracto" );                            
									if( $value2 ) {                                
										echo '<p class="excerpt">' . limitar_texto($value2, 150) . '</p>';
										} ?>
								</header>					

					</article>
	
<?php endwhile; endif;

	die; 
}

function wpd_consejos_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'consejos' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'wpd_consejos_query' );

function wpd_noticias_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'noticias' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 4 );
    }
}
add_action( 'pre_get_posts', 'wpd_noticias_query' );