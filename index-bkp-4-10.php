<?php get_header(); ?>
<div class="container main-wrapper">
   <div class="mag-content clearfix">
      <div class="row">
         <div class="col-md-12">
            <div class="ad728-wrapper">
				<?php echo adrotate_group(2); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="main-content mag-content clearfix">
      <div class="row main-body correccion-1">
         <div class="col-md-12">
            <div class="row">
			<?php 
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 2,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => array('espacio-1','espacio-2'), 'compare' => 'IN'))
							 );
			$the_query = new WP_Query ($args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
               <div class="col-md-6">
                  <article class="news-block">
                     <a href="<?php the_permalink(); ?>" class="overlay-link">
                        <figure class="image-overlay">
                           <?php the_post_thumbnail('thumbnail-nota-big');  ?>
                        </figure>
                     </a>
                     <a href="#" class="category"><?php echo get_post_type();?></a>
                     <header class="news-details">
                        <h3 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php
                        $value = get_field( "extracto" );
						if( $value ) { 
							echo '<p class="excerpt">' . $value . '</p>';
						} else {
							echo '<p class="excerpt">' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';
                        }
                        ?>
                     </header>
                  </article>
               </div>
				<?php endwhile; endif;wp_reset_postdata();?>
            </div>
            <div class="row">
			<?php 
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 4,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => array('espacio-3','espacio-4','espacio-5','espacio-6'), 'compare' => 'IN'))
							 );
			$the_query = new WP_Query ($args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
               <div class="col-md-3">
                  <article class="news-block small-block">
                     <a href="<?php the_permalink(); ?>" class="overlay-link">
                        <figure class="image-overlay">
                            <?php the_post_thumbnail('thumbnail-nota');  ?>
                        </figure>
                     </a>
                     <a href="#" class="category"><?php echo get_post_type();?></a>
                     <header class="news-details">
                        <h3 class="news-title">
                           <a href="<?php the_permalink(); ?>">
                           <?php the_title(); ?>
                           </a>
                        </h3>
                     </header>
                  </article>
               </div>
              <?php endwhile; endif;wp_reset_postdata();?>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="ad728-wrapper mid-wrapper">
					 <?php echo adrotate_group(3); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="espacio-20px"></div>

<div class="ancho-completo recomendado"
<?php if(get_field('imagen_de_fondo_cr','option')) { ?> style="background-image:url(<?php the_field('imagen_de_fondo_cr','option');?>);background-size: cover;background-position:center;<?php } ?>"> 

   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <header class="center">
               <div class="espacio-20px"></div>
               <h3 class="text-center">
                  <?php the_field('titulo_er','option');?>
               </h3>
               <p class="text-center"><?php the_field('subtitulo_cr','option');?></p>
               <div class="espacio-20px"></div>
            </header>
         </div>
      </div>
      <div class="row">
		<?php 
			$post_objects = get_field('articulos_cr', 'option');
			if( $post_objects ): 
				$post = $post_objects;
				foreach( $post_objects as $post): 
				setup_postdata( $post ); ?>
				<div class="col-md-3">
					<article class="news-block small-block">
					   <a href="<?php the_permalink(); ?>" class="overlay-link">
						  <figure class="image-overlay">
							 <?php the_post_thumbnail('thumbnail-nota');  ?>
						  </figure>
					   </a>
					   <a href="#" class="category"><?php echo get_post_type();?></a>
					   <header class="news-details">
						  <?php the_field('volanta_ep'); ?> 
						  <h3 class="news-title">
							 <a href="<?php the_permalink(); ?>">
							 <?php the_title(); ?>
							 </a>
						  </h3>
					   </header>
					</article>
				 </div>
				 <?php endforeach; ?>
			<?php endif;wp_reset_postdata();?>
      </div>
   </div>
</div> 



<div class="container">
   <div class="main-content mag-content clearfix">
      <div class="row blog-content">
         <div class="col-md-8">
            <?php 
			 $args="";
			 $args =  array( 'post_type' => array('pruebas', 'noticias'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 5,);
			$the_query = new WP_Query ($args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
				<article class="simple-post simple-big clearfix">
				   <div class="simple-thumb">
					  <a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('thumbnail-nota');  ?>
					  </a>
					  <a href="#" class="category"><?php echo get_post_type();?></a>
				   </div>
				   <header>
					  <h3>
						 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					  </h3>
					  <?php
                        $value = get_field( "extracto" );
						if( $value ) {
							echo '<p class="excerpt">' . $value . '</p>';
						} else {
							echo '<p class="excerpt">' . $ce = get_the_excerpt(); limitar_texto($ce, 50) . '</p>';
                        }
                        ?>
				   </header>
				</article>
			<?php endwhile; endif;wp_reset_postdata();?>

            <div class="row">
               <div class="col-md-12">
                  <div class="ad728-wrapper">
					 <?php echo adrotate_group(6); ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <aside class="sidebar">
               <div class="widget cus-adwidget">
				  Twitter
               </div>
               <div class="widget cus-adwidget">
				  <?php echo adrotate_group(4); ?>
				  <?php echo adrotate_group(5); ?>
               </div>
            </aside>
         </div>
      </div>
   </div>
</div>
<div class="espacio-20px"></div>
<div class="ancho-completo patrocinado" <?php if(get_field('imagen_de_fondo_ep','option')) { ?> style="background-image:url(<?php the_field('imagen_de_fondo_ep','option');?>);background-size: cover;background-position:center;<?php } ?>"> 
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <header class="center">
               <div class="espacio-20px"></div>
					 <div class="head-patro">
						<?php if(get_field('logo_ep','option')) { ?>
							<div class="izq-logo">
							  <div class="patro-logo">
								<img src="<?php the_field('logo_ep','option');?>" class="img-responsive" alt="">
							  </div>
							</div>
						<?php } ?>
						<div class="der-titulo">
						  <h3><?php the_field('titulo_ep','option');?></h3>
						  <p><?php the_field('subtitulo_ep','option');?></p>
						</div>
					  </div>
               <div class="espacio-20px"></div>
            </header>
         </div>
      </div>
      <div class="row">
		<?php 
			$post_objects = get_field('articulos_ep', 'option');
			if( $post_objects ): 
				$post = $post_objects;
				foreach( $post_objects as $post): 
				setup_postdata( $post ); ?>
				<div class="col-md-3">
					<article class="news-block small-block">
					   <a href="<?php the_permalink(); ?>" class="overlay-link">
						  <figure class="image-overlay">
							 <?php the_post_thumbnail('thumbnail-nota');  ?>
						  </figure>
					   </a>
					   <a href="#" class="category">
					   <?php the_field('volanta_ep'); ?>
					   </a>
					   <header class="news-details">
						  <h3 class="news-title">
							 <a href="<?php the_permalink(); ?>">
							 <?php the_title(); ?>
							 </a>
						  </h3>
					   </header>
					</article>
				</div>
				<?php endforeach; ?>
			 <?php endif;wp_reset_postdata();?>
			 <?php if(get_field('texto_de_boton_ep', 'option')) { ?>
			 <div class="col-md-12 text-center hidden">
				<div class="btn boton-patrocinado">
					<a href="<?php the_field('link_boton_ep','option')?>"><?php the_field('texto_de_boton_ep','option')?></a>
				</div>
			 </div>
			 <?php } ?>
      </div>
   </div>
</div>
<!-- .ancho-completo -->  
<div class="container">
   <div class="main-content mag-content clearfix">
      <div class="row blog-content">
         <div class="col-md-8">
            <div class="row">
			 <?php 
			 $args="";
			 $m = 1;
			 $args =  array( 'post_type' => array('pruebas', 'noticias'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 5,
							 'offset' => 5,
							 );
			$the_query = new WP_Query ($args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
				<?php if ((($m==1) || ($m==2) || ($m==5) || ($m==6)) && ($m < 7)) { $m++; ?>
						<div class="col-md-6">
						  <article class="news-block small-block">
							 <a href="<?php the_permalink(); ?>" class="overlay-link">
								<figure class="image-overlay">
								   <?php the_post_thumbnail('thumbnail-nota');  ?>
								</figure>
							 </a>
							 <a href="#" class="category"><?php echo get_post_type();?></a>
							 <header class="news-details">
								<h3 class="news-title">
								   <a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
								   </a>
								</h3>
							 </header>
						  </article>
					   </div> <?php if(($m == 3) || ($m == 5) ) echo '</div><div class="row">';?>
				<?php } else { $m=$m+2; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="widget cus-adwidget">
					   		<?php echo adrotate_group(7); ?>
							</div>
					   </div>
				
					   <div class="col-md-6">
						  <article class="news-block small-block">
							 <a href="<?php the_permalink(); ?>" class="overlay-link">
								<figure class="image-overlay">
								   <?php the_post_thumbnail('thumbnail-nota');  ?>
								</figure>
							 </a>
							 <a href="#" class="category"><?php echo get_post_type();?></a>
							 <header class="news-details">
								<h3 class="news-title">
								   <a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
								   </a>
								</h3>
							 </header>
						  </article>
					   </div>
					  </div>
				<?php } ?>

               <?php endwhile; endif;wp_reset_postdata();?>
            </div>
         </div>
         <div class="col-md-4">
            <aside class="sidebar">
               <div class="widget cus-adwidget">
				  Facebook
               </div>
               <div class="widget cus-adwidget">
				  <?php echo adrotate_group(8); ?>
               </div>
            </aside>
         </div>
      </div>
   </div>
</div>
</div>
<div id="go-top-button" class="fa fa-angle-up" title="Scroll To Top"></div>
<div class="mobile-overlay" id="mobile-overlay"></div>
<?php get_footer(); ?>