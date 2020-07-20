    <div class="ancho-completo patrocinado" <?php if(get_field( 'imagen_de_fondo_ep', 'option')) { ?> style="background-image:url(
        <?php the_field('imagen_de_fondo_ep','option');?>);background-size: cover;background-position:center;
            <?php } ?>">

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

                                                <p>
                                                    <?php the_field('subtitulo_ep','option');?>
                                                </p>

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

                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

									<?php 
										echo wp_trim_words( get_the_title(), 10, '...' );
									?>

								</a>

                            </h3>

                                    </header>

                                </article>

                            </div>

                            <?php endforeach; ?>

                                <?php endif;wp_reset_postdata();?>

                                    <?php if(get_field('texto_de_boton_ep', 'option')) { ?>

                                        <div class="col-md-12 text-center">

                                            <div class="boton-patrocinado">

                                                <a href="<?php the_field('link_boton_ep','option')?>">
                                                    <?php the_field('texto_de_boton_ep','option')?>
                                                </a>

                                            </div>

                                        </div>

                                        <?php  } ?>

                    </div>

                </div>

    </div>