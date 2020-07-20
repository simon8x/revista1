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
	  
      <div class="row" data-stickyparent>
          
        <div class="col-md-8">

		  <?php
             $j = 0;
             $termino = get_queried_object();
             if($termino):
			 
			 $el_termino = $termino->name;
          ?>
          <?php endif; ?>

          <section class="bloque">
             <div class="meta-marca">
                 <div class="mar-logo">
                     <?php
                         $loguito_id = get_field('imagen_de_marca', $termino);

                         if( $loguito_id ) {

                             echo wp_get_attachment_image( $loguito_id, 'full', "", array( "alt" => "$el_termino" ) );

                         }
                     ?>
                 </div>
                 <div class="mar-des">
                     <?php
                         $lades = get_field('descripcion', $termino);

                         if( $lades ) {

                             echo '<h4 class="sectittle">Historia</h4>';
                             echo $lades;

                         }
                     ?>
                 </div>
             </div>
          </section>
		  
		  <section class="bloque">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="sectittle hmodelos">Modelos de autos <?php echo $el_termino; ?></h4>
						
						<?php
						  // The Query
						  $args = array(
								'post_type' => 'pruebas',
								'post_status' => 'publish',
								'tax_query' => array(
									array(
										'taxonomy' => 'marca',
										'field'    => 'slug',
										'terms'    => $termino->slug
									),
								),
								'posts_per_page' => -1,
								'orderby' => 'title',
	                            'order'   => 'ASC',
						  );
		  
						  query_posts( $args );

						  // The Loop
						  echo "<div id='los-modelos'>";
						  echo "<ul>";
						  while ( have_posts() ) : the_post(); ?>
						  
						     <li>
                                 <a href="<?php echo get_permalink(); ?>">
                                     <?php
                                         $value = get_field( "modelo" );

                                         if( $value ) {

                                             echo $value;

                                         } else {

                                             echo get_the_title();

                                         }
                                     ?>
                                 </a>
                             </li>
						  
						<?php
                          endwhile;
						echo "</ul>";
					    echo "</div>";

						  // Reset Query
						  wp_reset_query();
						?>
			        </div>
                </div><!-- End of .row -->
           </section>

          <?php
          // The Query
		  $args = array(
				'post_type' => 'pruebas',
				'post_status' => 'publish',
				'tax_query' => array(
					array(
						'taxonomy' => 'marca',
						'field'    => 'slug',
						'terms'    => $termino->slug
					),
				),
				'posts_per_page' => 4
		  );

          // The Query
          query_posts( $args ); ?>

            <section class="bloque hor gray">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="sectittle">&Uacute;ltimos autos <?php echo $el_termino; ?> que probamos:</h4>
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
                            <h3>
                                <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                            </h3>

                            <p class="simple-share">
                                <?php
                                $terms = get_the_terms( get_the_id(), 'marca' );
                                ?>
                                <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">
                                    <?php echo $terms[0]->name; ?>
                                </a>
                                | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                            </p>

                            <?php
                            $value2 = get_field( "extracto" );

                            if( $value2 ) {

                                echo '<p class="excerpt">' . $value2 . '</p>';

                            } else {

                                echo '<p class="excerpt">' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

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


            <?php
            // The Query
            $args = array(
                'post_type' => 'pruebas',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'marca',
                        'field'    => 'slug',
                        'terms'    => $termino->slug
                    ),
                ),
                'posts_per_page' => 3,
                'offset' => 4
            );

            // The Query
            query_posts( $args ); ?>

            <section class="bloque hor">
                <div class="row">
                    <div class="col-xs-12">
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
                                    <h3>
                                        <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                                    </h3>

                                    <p class="simple-share">
                                        <?php
                                        $terms = get_the_terms( get_the_id(), 'marca' );
                                        ?>
                                        <a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">
                                            <?php echo $terms[0]->name; ?>
                                        </a>
                                        | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                    </p>

                                    <?php
                                    $value2 = get_field( "extracto" );

                                    if( $value2 ) {

                                        echo '<p class="excerpt">' . $value2 . '</p>';

                                    } else {

                                        echo '<p class="excerpt">' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

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


            <section class="bloque">
                <div class="row">
                    <div class="col-xs-12"><h4 class="sectittle">&Uacute;ltimas noticias relacionadas con <?php echo $el_termino; ?></h4></div>
                </div>
                <?php $k = 0; $wp_query = null; ?>

                <?php
                    // The Query
                    $argsu = array(
                        'post_type' => 'noticias',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'marca',
                                'field'    => 'slug',
                                'terms'    => $termino->slug
                            ),
                        ),
                        'posts_per_page' => 4,
                        'paged' => $paged
                    );
                ?>

                <?php $wp_query = new WP_Query( $argsu );  ?>
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
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
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
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
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
                        <?php echo adrotate_ad(55); ?>
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

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(34); ?>

        </div>

        <div class="inter-ad"></div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(35); ?>

        </div>               

        <div class="widget cus-adwidget twtt-att">
            <div class="head-ttr">
                <div class="logo-ttr">
                    <img src="http://autotest.com.ar/wp-content/uploads/2018/10/ttr.png" alt="ttr">
                </div>
                <div class="titu-ttr">
                    <span>TWITTER AUTO TEST</span>
                </div>
            </div>
            <a class="twitter-timeline" 
            href="https://twitter.com/motorpressautos" 
            data-tweet-limit="5">
            </a>

        </div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(36); ?>

        </div>

        <div class="widget cus-adwidget">

            <div class="head-fb">
                <div class="logo-ttr">
                    <img src="http://autotest.com.ar/wp-content/uploads/2018/10/fbb.png" alt="ttr">
                </div>
                <div class="titu-ttr">
                    <span>FACEBOOK AUTO TEST</span>
                </div>
            </div>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frevistaautotest%2F&tabs&width=340&height=181&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

        </div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(37); ?>

        </div>

        <div class="inter-ad"></div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(38); ?>

        </div>

        <div class="inter-ad"></div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(39); ?>

        </div>

        <div class="inter-ad"></div>

        <div class="widget cus-adwidget">

            <?php echo adrotate_ad(40); ?>

        </div>

        </div><!-- End last column -->

      </div><!-- .main-body -->
      
    </div><!-- .main-content -->



</div><!-- .main-wrapper -->

     
<?php get_footer(); ?>