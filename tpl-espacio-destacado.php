<?php 
	if( have_rows('flex_esp_destacado','option') ){ while ( have_rows('flex_esp_destacado','option') ) { the_row();?>
		<div class="ancho-completo recomendado" <?php if(get_field( 'imagen_de_fondo', 'option')) { ?>
		style="background-image:url(
		<?php the_field('imagen_de_fondo','option');?>); background-size: cover; background-position:center;
        <?php } ?>">
	<div class="container">
				<?php 
					if(get_field('esp_destacado_titulo', 'option')) { ?>		
						<div class="row">
							<div class="col-sm-12">
								<header class="center">
									<div class="espacio-20px"></div>
										<h3 class="text-center ttl-destacado"><?php the_field('esp_destacado_titulo','option')?></h3>
										<p class="text-center sttl-destacado"><?php the_field('esp_destacado_subtitulo','option')?></p>
										<div class="espacio-20px"></div>
								</header>
							</div>
						</div>
			<?php  } ?>
			<?php if( get_row_layout() == 'multiples_publicaciones' ){ ?>
			<!-- Múltiples publicaciones -->
			
		
					<div class="owl-carousel owl-theme">
						<?php 
						$publicaciones = get_sub_field('publicaciones', 'option');
						if( $publicaciones ): 
							$post = $publicaciones;
							foreach( $publicaciones as $post): 
								setup_postdata( $post ); ?>
									
										<div class="item">
											<article class="news-block small-block">
												<a href="<?php the_permalink(); ?>" class="overlay-link"><figure class="image-overlay"><?php the_post_thumbnail('thumbnail-nota');  ?></figure></a>
												<?php 
													$qcat = "";
													$es_una_prueba = "";
													$qcat = get_post_type();
													if ($qcat == "prueba") {
														$es_una_prueba = 'es-prueba';
													}
												 ?>
												 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
												 <header class="news-details">
												 <?php the_field('volanta_ep'); ?>
													<h3 class="news-title">
														<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></a>
													</h3>
												</header>
											</article>
										</div>
										
						<?php endforeach; ?>
					<?php endif;wp_reset_postdata();?>
							<div class="owl-theme">
								<div class="owl-controls">
									<div class="custom-nav owl-nav"></div>
								</div>
							</div>
			
					
					<?php 
						if(get_field('texto_del_botonenlace', 'option')) { ?>
							<div class="col-md-12 text-center">
								<div class="boton-patrocinado">
									<a href="<?php the_field('link_del_botonenlace','option')?>"><?php the_field('texto_del_botonenlace','option')?></a>
								</div>
							</div>
					<?php  } ?>
					
				</div>
			
			
			<?php } ?>
           

			<?php if( get_row_layout() == 'pubs_mas_leidas_por_categoria' ){ ?>
			<!-- Publicaciones más leídas por categoría -->

				<?php
				
				?>
				

					<div class="owl-carousel owl-theme">
						<?php 
						$cat_mas_leida = get_sub_field('publicaciones_por_categoria', 'option');
						$numero_de_articulos = get_sub_field('numero_de_articulos', 'option');
						var_dump($cat_mas_leida);
						echo '</hr>';
						var_dump($numero_de_articulos);
						$wp_query = new WP_Query(array(
							'post_type' => $cat_mas_leida,
							'posts_per_page' => $numero_de_articulos,
							'meta_key' => 'my_post_viewed',
							'orderby' => 'meta_value_num',
							'order'=> 'DESC'));
						while ($wp_query->have_posts()) : $wp_query->the_post();?>
							<div class="item">
								<article class="news-block small-block">
									<a href="<?php the_permalink(); ?>" class="overlay-link"><figure class="image-overlay"><?php the_post_thumbnail('thumbnail-nota');  ?></figure></a>
									<?php 
										$qcat = "";
										$es_una_prueba = "";
										$qcat = get_post_type();
										if ($qcat == "prueba") {
											$es_una_prueba = 'es-prueba';
										}
									 ?>
									 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
									 <header class="news-details">
									 <?php the_field('volanta_ep'); ?>
										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></a>
										</h3>
									</header>
								</article>
							</div>
										
						<?php endwhile; ?>
					<?php wp_reset_postdata();?>
							<div class="owl-theme">
								<div class="owl-controls">
									<div class="custom-nav owl-nav"></div>
								</div>
							</div>
					</div>
					<?php 
						if(get_field('texto_del_botonenlace', 'option')) { ?>
							<div class="col-md-12 text-center">
								<div class="boton-patrocinado">
									<a href="<?php the_field('link_del_botonenlace','option')?>"><?php the_field('texto_del_botonenlace','option')?></a>
								</div>
							</div>
					<?php  } ?>
		
				
			<?php } ?>
			
			
			<?php if( get_row_layout() == 'ultimas_publicaciones_por_categoria' ){ ?>
			<!-- Últimas publicaciones por categoría -->

				<?php
				
				?>
				

					<div class="owl-carousel owl-theme">
						<?php 
						$ultimas_categorias = get_sub_field('ultimas_categorias', 'option');
						$numero_de_publicaciones = get_sub_field('numero_de_publicaciones', 'option');
						$wp_query = new WP_Query(array(
							'post_type' => $ultimas_categorias,
							'posts_per_page' => $numero_de_publicaciones,
							'orderby' => 'post_date',
							'order'=> 'DESC'));
						while ($wp_query->have_posts()) : $wp_query->the_post();?>
							<div class="item">
								<article class="news-block small-block">
									<a href="<?php the_permalink(); ?>" class="overlay-link"><figure class="image-overlay"><?php the_post_thumbnail('thumbnail-nota');  ?></figure></a>
									<?php 
										$qcat = "";
										$es_una_prueba = "";
										$qcat = get_post_type();
										if ($qcat == "prueba") {
											$es_una_prueba = 'es-prueba';
										}
									 ?>
									 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
									 <header class="news-details">
									 <?php the_field('volanta_ep'); ?>
										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></a>
										</h3>
									</header>
								</article>
							</div>
										
						<?php endwhile; ?>
					<?php wp_reset_postdata();?>
							<!--div class="owl-theme">
								<div class="owl-controls">
									<div class="custom-nav owl-nav"></div>
								</div>
							</div-->
					</div>
					<?php 
						if(get_field('texto_del_botonenlace', 'option')) { ?>
							<div class="col-md-12 text-center">
								<div class="boton-patrocinado">
									<a href="<?php the_field('link_del_botonenlace','option')?>"><?php the_field('texto_del_botonenlace','option')?></a>
								</div>
							</div>
					<?php  } ?>

			
				
			<?php } ?>

	</div>
</div>
<?php } } ?>