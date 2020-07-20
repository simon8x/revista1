		<div class="row los-competidores">

				  <?php foreach( $post_objects as $post):  ?>

					   <?php setup_postdata($post); ?>

					   <div class="col-sm-4 col-md-3">

							<div class="img-compet">

							 <?php 
								$qcat = "";
								$es_una_prueba = "";

								$qcat = get_post_type();

								if ($qcat == "pruebas") {

									$es_una_prueba = 'es-prueba';

								}
							 ?>

							 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>

							  <!-- post thumbnail -->


							  <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

								  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

									  <?php the_post_thumbnail('thumbnail-nota-big', array( 'class' => 'img-responsive' ) );  ?>

								  </a>

							  <?php endif; ?>


							  <!-- /post thumbnail -->

						  </div>


							<div class="txt-compet">

								<h3>

									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php 
											echo wp_trim_words( get_the_title(), 10, '...' );
										?>
									</a>

								</h3>

							  <div class="tit-texto">

                                 <?php

									$value2 = "";                            

									$value2 = get_field( "extracto" );                            

									if( $value2 ) {                                

										echo '<p class="excerpt">' . wp_trim_words( $value2, 16, '...' ) . '</p>';

								} ?>

							  </div>							  

						  </div>

					   </div>


				  <?php endforeach; ?>


			  <?php wp_reset_postdata();  ?>
		  
		</div>