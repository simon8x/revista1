<?php get_header(); ?>



<div class="container main-wrapper">



   <div class="mag-content clearfix">



      <div class="row">



         <div class="col-md-12">



            <div class="ad728-wrapper">



				<!-- /317699715/autotest_home_superbanner -->
				<div id='div-gpt-ad-1537880161841-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537880161841-0'); });
					</script>
				</div>





            </div>



         </div>



      </div>



   </div>



   <div class="main-content mag-content clearfix">
      <div class="row main-body correccion-1">
         <div class="col-md-12">
            <div class="row">
			<?php 
			// espacio 1
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => 'espacio-1', 'compare' => '='))
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
                      <?php 
                        $qcat = "";
					    $es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba';} ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
					<h3 class="news-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php 
								echo wp_trim_words( get_the_title(), 10, '...' );
							?>
						</a>
					</h3>
                        <?php
							$value2 = "";
                            $value2 = get_field( "extracto" );
                            if( $value2 ) { echo '<p class="excerpt">' . limitar_texto($value2, 210) . '</p>'; }
                        ?>
                     </header>
                  </article>
               </div>
				<?php endwhile; endif;wp_reset_postdata();?>
				<?php 
			// espacio 2
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => 'espacio-2', 'compare' => '='))
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
                      <?php 
                        $qcat = "";
					    $es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba';} ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
					<h3 class="news-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php 
								echo wp_trim_words( get_the_title(), 10, '...' );
							?>
						</a>
					</h3>
                        <?php
							$value2 = "";
                            $value2 = get_field( "extracto" );
                            if( $value2 ) { echo '<p class="excerpt">' . limitar_texto($value2, 210) . '</p>'; }
                        ?>
                     </header>
                  </article>
               </div>
				<?php endwhile; endif;wp_reset_postdata();?>
            </div>
            <div class="row">
			<?php 
			/////////////////// ESPACIO 3 /////////////
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => 'espacio-3', 'compare' => '='))
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
					 <?php 
						$qcat = "";
						$es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba'; }
					 ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
                        <!-- post title -->
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
              <?php endwhile; endif;wp_reset_postdata();?>
			  <?php 
			  /////////////////// ESPACIO 4 /////////////
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => 'espacio-4', 'compare' => '='))
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
					 <?php 
						$qcat = "";
						$es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba'; }
					 ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
                        <!-- post title -->
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
              <?php endwhile; endif;wp_reset_postdata();?>
               <?php 
			  /////////////////// ESPACIO 5 /////////////
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' => 'espacio-5', 'compare' => '='))
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
					 <?php 
						$qcat = "";
						$es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba'; }
					 ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
                        <!-- post title -->
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
              <?php endwhile; endif;wp_reset_postdata();?>
			 <?php 
			  /////////////////// ESPACIO 6 /////////////
			 $args="";
			 $args =  array( 'post_type' =>  array('pruebas', 'noticias', 'lanzamientos', 'consejos'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 1,
							 'meta_query' => array(array('key' => 'espacios_home', 'value' =>'espacio-6', 'compare' => '='))
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
					 <?php 
						$qcat = "";
						$es_una_prueba = "";
						$qcat = get_post_type();
					    if ($qcat == "pruebas") { $es_una_prueba = 'es-prueba'; }
					 ?>
                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
                     <header class="news-details">
                        <!-- post title -->
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
              <?php endwhile; endif;wp_reset_postdata();?>
			</div>
            <div class="row">

               <div class="col-md-12">

                  <div class="ad728-wrapper mid-wrapper">

					 <!-- /317699715/autotest_home_728x90_2 -->
			<div id='div-gpt-ad-1537878667145-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537878667145-0'); });
					</script>
				</div>

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



					  <?php 

                        $qcat = "";

					    $es_una_prueba = "";



					    $qcat = get_post_type();



					    if ($qcat == "pruebas") {



							$es_una_prueba = 'es-prueba';



						}



					 ?>



                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>



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















<div class="container">



   <div class="main-content mag-content clearfix">



      <div class="row blog-content">



         <div class="col-md-8">



            <?php 



			 $args="";



			 $args =  array( 'post_type' => array('pruebas', 'noticias'),



							 'post_status' => 'publish',



							 'posts_per_page'=> 8,);



			$the_query = new WP_Query ($args);



			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>



				<article class="simple-post simple-big clearfix">



				   <div class="simple-thumb">



					  <a href="<?php the_permalink(); ?>">



						<?php the_post_thumbnail('thumbnail-nota');  ?>



					  </a>



					  <?php 

                        $qcat = "";

					    $es_una_prueba = "";



					    $qcat = get_post_type();



					    if ($qcat == "pruebas") {



							$es_una_prueba = 'es-prueba';



						}



					 ?>



                     <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>



				   </div>



				   <header>



                        <!-- post title -->

						<h3 class="news-title">

							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

								<?php 
									echo wp_trim_words( get_the_title(), 10, '...' );
								?>

							</a>

						</h3>

						<!-- /post title -->



					    <?php

							$value2 = "";

                            $value2 = get_field( "extracto" );



                            if( $value2 ) {



                                echo '<p class="excerpt">' . limitar_texto($value2, 230) . '</p>';



                            }

                        ?>



				   </header>



				</article>



			<?php endwhile; endif;wp_reset_postdata();?>







            <div class="row">



               <div class="col-md-12">



                  <div class="ad728-wrapper">



					 <!-- /317699715/autotest_home_728x90_3 -->
					<div id='div-gpt-ad-1537878865292-0'>
						<script>
							googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537878865292-0'); });
						</script>
					</div>



                  </div>



               </div>



            </div>



         </div>



         <div class="col-md-4">



            <aside class="sidebar">



               <div class="widget cus-adwidget">



				 <!-- /317699715/autotest_home_300x600_1 -->
				<div id='div-gpt-ad-1537879052360-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879052360-0'); });
					</script>
				</div>



               </div>



               <div class="inter-ad"></div>



               <div class="widget cus-adwidget">



				 <!-- /317699715/autotest_home_300x600_2 -->
				<div id='div-gpt-ad-1537879171402-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879171402-0'); });
					</script>
				</div>



               </div>               



				<div class="widget cus-adwidget twtt-att">

					<div class="head-ttr">

						<div class="logo-ttr">

							<img src="//autotest.com.ar/wp-content/uploads/2018/10/ttr.png" alt="ttr">

						</div>

						<div class="titu-ttr">

							<span>TWITTER AUTO TEST</span>

						</div>

					</div>


					<a class="twitter-timeline" href="https://twitter.com/AutoTestArg?ref_src=twsrc%5Etfw">Tweets by AutoTestArg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

				</div>



               <div class="widget cus-adwidget">



				<!-- /317699715/autotest_home_300x600_3 -->
				<div id='div-gpt-ad-1537879262253-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879262253-0'); });
					</script>
				</div>



               </div>



               <div class="inter-ad"></div>



               <div class="widget cus-adwidget">



				 <!-- /317699715/autotest_home_300x600_4 -->
				<div id='div-gpt-ad-1537879364070-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879364070-0'); });
					</script>
				</div>



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



					<a href="<?php the_field('link_boton_ep','option')?>"><?php the_field('texto_de_boton_ep','option')?></a>



				</div>



			 </div>



			 <?php  } ?>



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



							 'offset' => 8,



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



							 <?php 

								$qcat = "";

								$es_una_prueba = "";



								$qcat = get_post_type();



								if ($qcat == "pruebas") {



									$es_una_prueba = 'es-prueba';



								}



							 ?>



							 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>



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



					   </div> <?php if(($m == 3) || ($m == 5) ) echo '</div><div class="row">';?>



				<?php } else { $m=$m+2; ?>



					<div class="row aviso-post">



						<div class="col-md-6">



		               <div class="widget cus-adwidget">



						  <!-- /317699715/autotest_home_300x250_cont_1 -->
						<div id='div-gpt-ad-1537879584597-0' style='height:250px; width:300px;'>
							<script>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879584597-0'); });
							</script>
						</div>



		               </div>  



					   </div>



				



					   <div class="col-md-6">



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



							 <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>



							 <header class="news-details">



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



					</div>   



				<?php } ?>







               <?php endwhile; endif; wp_reset_postdata();?>



            </div>



         </div>



         <div class="col-md-4">



         	<aside class="sidebar">



               <div class="widget cus-adwidget">



				  <!-- /317699715/autotest_home_300x600_5 -->
				<div id='div-gpt-ad-1537879461018-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879461018-0'); });
					</script>
				</div>



               </div>         		



               <div class="inter-ad"></div>



               <div class="widget cus-adwidget">



					<div class="head-fb">

						<div class="logo-ttr">

							<img src="//autotest.com.ar/wp-content/uploads/2018/10/fbb.png" alt="ttr">

						</div>

						<div class="titu-ttr">

							<span>FACEBOOK AUTO TEST</span>

						</div>

					</div>

					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frevistaautotest%2F&tabs&width=340&height=181&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>



	            </div>



	            <div class="inter-ad"></div>



               <div class="widget cus-adwidget">



				  <!-- /317699715/autotest_home_300x600_6 -->
					<div id='div-gpt-ad-1539351904376-0'>
						<script>
							googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539351904376-0'); });
						</script>
					</div>



               </div>



               <div class="inter-ad"></div> 



               <div class="widget cus-adwidget">



				  <!-- /317699715/autotest_home_300x600_7 -->
				<div id='div-gpt-ad-1539352010381-0'>
					<script>
						googletag.cmd.push(function() { googletag.display('div-gpt-ad-1539352010381-0'); });
					</script>
				</div>



               </div>    



            </aside>



         </div>



      </div>



   </div>



</div>



</div>



<div id="go-top-button" class="fa fa-angle-up" title="Ir arriba"></div>



<div class="mobile-overlay" id="mobile-overlay"></div>



<?php get_footer(); ?>