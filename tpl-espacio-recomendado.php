    <div class="ancho-completo recomendado" <?php if(get_field( 'imagen_de_fondo_cr', 'option')) { ?> 
        style="background-image:url(<?php the_field('imagen_de_fondo_cr','option');?>);
                background-size: cover;
                background-position:center;<?php } ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <header class="center">
                                <div class="espacio-20px"></div>
                                <h3 class="text-center">
                  <?php the_field('titulo_er','option');?>
               </h3>
                                <p class="text-center">
                                   <?php the_field('subtitulo_cr','option');?>
                               </p>
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
                                    <?php 
                        $qcat = "";
					    $es_una_prueba = "";
					    $qcat = get_post_type();
					    if ($qcat == "pruebas") {
							$es_una_prueba = 'es-prueba';
						}
					 ?>
                                        <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>">
                                            <?php echo $qcat;?>
                                        </a>

                                        <header class="news-details">

                                            <?php the_field('volanta_ep'); ?>

                                                <!-- post title -->

                                                <h3 class="news-title">

								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

									<?php 
										echo wp_trim_words( get_the_title(), 10, '...' );
									?>

								</a>

							</h3>

                                                <!-- /post title -->

                                        </header>

                                </article>

                            </div>

                            <?php endforeach; ?>

                                <?php endif;wp_reset_postdata();?>

                    </div>

                </div>

    </div>