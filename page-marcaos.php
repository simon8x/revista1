<?php get_header(); ?>

<style>

.misha_loadmore{

	background-color: #ddd;

	border-radius: 2px;

	display: block;

	text-align: center;

	font-size: 14px;

	font-size: 0.875rem;

	font-weight: 800;

	letter-spacing:1px;

	cursor:pointer;

	text-transform: uppercase;

	padding: 10px 0;

	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;  

}

.misha_loadmore:hover{

	background-color: #767676;

	color: #fff;

}

</style>

<div class="container main-wrapper">

    

    <!-- Begin Main Banner -->

   <div class="mag-content clearfix">

        <div class="row">

            <div class="col-md-12">

                <div class="ad728-wrapper">

                    <?php echo adrotate_ad(43); ?>

                </div>

            </div>

        </div>

    </div>

    <!-- End Main Banner -->



  <div class="main-content mag-content clearfix">

      

	  <div class="breadcrumbs">

			<?php

			if(function_exists('bcn_display'))

			{

				bcn_display();

			}?>

	  </div>

	  	  

	  <div id="galeria-de-marcas" class="demo-3">



          <div class="fixed-bar">



			  <!-- Elastislide Carousel -->

			  <ul id="carouseldos" class="elastislide-list">

				  

				  <?php

				     $args = array( 'hide_empty' => 1 );

					 $terms = get_terms( 'marca', $args );

					 if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {

						

						foreach ( $terms as $term ) { ?>

						    <?php

                               $loguito = get_field('imagen_de_marca', $term);

							   

							   $image_attributes = wp_get_attachment_image_src( $loguito, 'full' );

							   if ( $image_attributes ) {

                            ?>							

							<li>

							    <a href="<?php echo get_term_link( $term ); ?>" title="<?php echo $term->name; ?>">

								    <img src="<?php echo $image_attributes[0]; ?>" alt="" />

								</a>

							</li>

							<?php } ?>

				  <?php	} } ?>

			  </ul>

			  <!-- End Elastislide Carousel -->



		  </div><!-- End Gallery -->



	  </div>

	  

      <div class="row main-body-in" data-stickyparent>

          

        <div class="col-md-8">



          <h3 class="block-title"><span>&Uacute;ltimas Pruebas</span></h3>

 

          <?php

          // The Query

          query_posts( array( 'post_type' => 'pruebas', 'posts_per_page' => 1 ) );



          // The Loop

          while ( have_posts() ) : the_post(); ?>

               <section class="bloque gray">

                    <div class="row">

                        <div class="col-xs-12">

                            <!-- article -->

                            <article id="post-<?php the_ID(); ?>" <?php post_class('news-block big-block'); ?>>



                                <!-- post thumbnail -->

                                <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                    <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                        <figure class="image-overlay">

                                            <?php the_post_thumbnail('thumbnail-nota-big');  ?>

                                        </figure>

                                    </a>

                                <?php endif; ?>

                                <!-- /post thumbnail -->



                                <header class="news-details">

                                    <!-- post title -->

									<h3 class="news-title">

										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

											<?php 

												$custitle = "";

												$custitle = get_the_title();



												echo limitar_texto($custitle, 60);

											?>

										</a>

									</h3>

                                    <!-- /post title -->



                                    <div class="meta">

                                        <?php

                                        $terms = get_the_terms( get_the_id(), 'marca' );

                                        ?>

                                        <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                            <?php echo $terms[0]->name; ?>

                                        </a>

                                        | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                                    </div>



                                    <!-- post details -->

                                    <div class="entry">

                                        <?php

											$value2 = "";

											$value2 = get_field( "extracto" );



											if( $value2 ) {



												echo '<p class="excerpt">' . limitar_texto($value2, 240) . '</p>';



											}

										?>

                                    </div>

                                    <!-- / post details -->



                                </header>



                            </article>

                            <!-- /article -->

                        </div>

                    </div>

               </section>

          <?php

          endwhile;



          // Reset Query

          wp_reset_query();

          ?>





          <?php

          // The Query

          query_posts( array( 'post_type' => 'pruebas', 'posts_per_page' => 2, 'offset' => 1 ) ); ?>



          <section class="bloque">

          <?php if (have_posts()): while (have_posts()) : the_post(); ?>



                <?php $class = ($i%2); ?>



                   <?php if ($class == 0): ?>

                        <div class="row">

                            <div class="col-md-6">

                                <!-- article -->

                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>



                                    <!-- post thumbnail -->

                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                            <figure class="image-overlay">

                                               <?php the_post_thumbnail('thumbnail-nota');  ?>

                                            </figure>

                                        </a>

                                    <?php endif; ?>

                                    <!-- /post thumbnail -->



                                    <header class="news-details">

										<!-- post title -->

										<h3 class="news-title">

											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

												<?php 

													$custitle = "";

													$custitle = get_the_title();



													echo limitar_texto($custitle, 60);

												?>

											</a>

										</h3>

										<!-- /post title -->



                                        <div class="meta">

                                            <?php

                                            $terms = get_the_terms( get_the_id(), 'marca' );

                                            ?>

                                            <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                                <?php echo $terms[0]->name; ?>

                                            </a>

                                            | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                                        </div>



                                    </header>



                                </article>

                                <!-- /article -->

                            </div>

                   <?php else: ?>

                            <div class="col-md-6">

                                <!-- article -->

                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>



                                    <!-- post thumbnail -->

                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                            <figure class="image-overlay">

                                                <?php the_post_thumbnail('thumbnail-nota');  ?>

                                            </figure>

                                        </a>

                                    <?php endif; ?>

                                    <!-- /post thumbnail -->



                                    <header class="news-details">

                                    <!-- post title -->

									<h3 class="news-title">

										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

											<?php 

												$custitle = "";

												$custitle = get_the_title();



												echo limitar_texto($custitle, 60);

											?>

										</a>

									</h3>

                                    <!-- /post title -->



                                        <div class="meta">

                                            <?php

                                            $terms = get_the_terms( get_the_id(), 'marca' );

                                            ?>

                                            <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                                <?php echo $terms[0]->name; ?>

                                            </a>

                                            | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                                        </div>



                                    </header>



                                </article>

                                <!-- /article -->

                            </div>

                        </div> <!-- end of .row -->

                   <?php endif; ?>

            <?php

            $i++;

            endwhile; ?>



            <?php else: ?>



                <div class="row">

                    <!-- article -->

                    <article>

                        <h2>No se encuentra ningun contenido para mostrar.</h2>

                    </article>

                    <!-- /article -->

                </div> <!-- end of .row -->



            <?php endif;

            // Reset Query

            wp_reset_query();

            ?>

          </section>

		  

		  

		   <!-- Begin Main Banner -->

		   <div class="banner-central clearfix">

				<div class="row">

					<div class="col-md-12">

						<div class="ad728-wrapper">

							<?php echo adrotate_ad(32); ?>

						</div>

					</div>

				</div>

			</div>

			<!-- End Main Banner -->





          <?php

            // The Query

            query_posts( array( 'post_type' => 'pruebas', 'posts_per_page' => 3 ) ); ?>



             <section class="bloque hor gray">

                <div class="row">

                    <div class="col-xs-12">

                        <h4 class="sectittle">M&aacute;s Leidas</h4>

            <?php

            while ( have_posts() ) : the_post(); ?>



                    <article class="simple-post simple-big clearfix">

                        <!-- post thumbnail -->

                        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                            <div class="simple-thumb">

                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                    <?php the_post_thumbnail('thumbnail-nota-horizontal');  ?>

                                </a>

                            </div>

                        <?php endif; ?>

                        <!-- /post thumbnail -->



                        <header>

                            <p class="simple-share">

                                <?php

                                $terms = get_the_terms( get_the_id(), 'marca' );

                                ?>

                                <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                    <?php echo $terms[0]->name; ?>

                                </a>

                                | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                            </p>



                             <h3>

                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

									<?php 

									    $custitle = "";

										$custitle = get_the_title();



										echo limitar_texto($custitle, 40);

									?>

								</a>

                            </h3>



                            <?php

							$value2 = "";

                            $value2 = get_field( "extracto" );



                            if( $value2 ) {



                                echo '<p class="excerpt">' . limitar_texto($value2, 190) . '</p>';



                            }

                            ?>

                        </header>

                    </article>



            <?php

            endwhile;



            // Reset Query

            wp_reset_query();

            ?>

                    </div>

                </div><!-- End of .row -->

            </section>





            <section class="bloque">

                <?php $k = 0; $wp_query = null; ?>

                <?php $wp_query = new WP_Query( array( 'post_type' => 'pruebas', 'posts_per_page' => 4, 'offset' => 4, 'paged' => $paged ) );  ?>

                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>



                    <?php $cl = ($k%2); ?>



                    <?php if ($cl == 0): ?>

                        <div class="row">

                            <div class="col-md-6">

                                <!-- article -->

                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>



                                    <!-- post thumbnail -->

                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                            <figure class="image-overlay">

                                                <?php the_post_thumbnail('thumbnail-nota');  ?>

                                            </figure>

                                        </a>

                                    <?php endif; ?>

                                    <!-- /post thumbnail -->



                                    <header class="news-details">

                                    <!-- post title -->

									<h3 class="news-title">

										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

											<?php 

												$custitle = "";

												$custitle = get_the_title();



												echo limitar_texto($custitle, 60);

											?>

										</a>

									</h3>

                                    <!-- /post title -->



                                        <div class="meta">

                                            <?php

                                            $terms = get_the_terms( get_the_id(), 'marca' );

                                            ?>

                                            <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                                <?php echo $terms[0]->name; ?>

                                            </a>

                                            | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                                        </div>



                                    </header>



                                </article>

                                <!-- /article -->

                            </div>

                    <?php else: ?>

                            <div class="col-md-6">

                                <!-- article -->

                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>



                                    <!-- post thumbnail -->

                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>

                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                                            <figure class="image-overlay">

                                                <?php the_post_thumbnail('thumbnail-nota');  ?>

                                            </figure>

                                        </a>

                                    <?php endif; ?>

                                    <!-- /post thumbnail -->



                                    <header class="news-details">

                                    <!-- post title -->

									<h3 class="news-title">

										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

											<?php 

												$custitle = "";

												$custitle = get_the_title();



												echo limitar_texto($custitle, 60);

											?>

										</a>

									</h3>

                                    <!-- /post title -->



                                        <div class="meta">

                                            <?php

                                            $terms = get_the_terms( get_the_id(), 'marca' );

                                            ?>

                                            <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">

                                                <?php echo $terms[0]->name; ?>

                                            </a>

                                            | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>

                                        </div>



                                    </header>



                                </article>

                                <!-- /article -->

                            </div>

                        </div> <!-- end of .row -->

                    <?php endif; ?>



                <?php

                $k++;

                endwhile; ?>



                <?php

                /*$max_page = $wp_query->max_num_pages;

                if (!$paged && $max_page >= 1) {

                $current_page = 1;

                }

                else {

                $current_page = $paged;

                }*/

                ?>

                <!--div class="page-nav">

                    <div class="page-nav-2">

                        <span class="page-index"><?php //printf(__('Pagina %1$s de %2$s'), $current_page, $max_page); ?></span>



                        <?php /*echo paginate_links(array(

                        "base" => add_query_arg("paged", "%#%"),

                        "format" => '',

                        "type" => "plain",

                        "total" => $max_page,

                        "current" => $current_page,

                        "show_all" => false,

                        "end_size" => 2,

                        "mid_size" => 2,

                        "prev_next" => false,

                        "next_text" => '',

                        "prev_text" => '',

                        ));*/

                        ?>

                        <?php // wp_reset_query(); ?>

                    </div>

                </div-->

				

				

            </section>

	

	

			<?php

					global $wp_query; // you can remove this line if everything works for you

					 

					// don't display the button if there are not enough posts

					if (  $wp_query->max_num_pages > 1 )

						echo '<div class="misha_loadmore">Cargar más</div>'; // you can use <a> as well

					?>

				
                    <div class="row">

                        <div class="col-md-12">

                            <div class="ad728-wrapper">

                                <?php echo adrotate_ad(33); ?>

                            </div>

                        </div>

                    </div>
			

	

            <section class="bloque gray bottom-search">

                <h3>Busca m&aacute;s informaci&oacute;n</h3>



                <!-- <div class="input-group stylish-input-group">

                    <span class="input-group-addon">

                        <button type="submit">

                            <span class="glyphicon glyphicon-search"></span>

                        </button>

                    </span>

                    <input id="company_works_at" name="company_works_at" type="text" class="form-control"  placeholder="&iquest;Qu&eacute; marca o modelo estas buscando?" >

                </div>-->

				

				<?php echo do_shortcode( '[wi_autosearch_suggest_form]' ); ?>

            </section>



        </div><!-- End Left big column -->



        <div class="col-md-4">



            <?php get_sidebar(); ?>



        </div><!-- End last column -->



      </div><!-- .main-body -->

      

    </div><!-- .main-content -->





</div><!-- .main-wrapper -->



     

<?php get_footer(); ?>