<?php
	/*
		Template Name: test-pruebas
	*/
?>
<?php get_header(); ?>

<div class="container main-wrapper">
    
    <!-- Begin Main Banner -->
    <div class="mag-content clearfix">
      <div class="row">
        <div class="col-md-12">
            
          <div class="suscribe-banner mid-wrapper">
            <a href="#!">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner-suscribe.png" alt="" />
            </a>
          </div>
            
        </div>
      </div>
    </div>
    <!-- End Main Banner -->

  <div class="main-content mag-content clearfix">
      <div class="row" data-stickyparent>
          
        <div class="col-md-8">

          <?php
             $i = 0;
             $tipo = get_post_type( get_queried_object_id() );
             if($tipo):
          ?>
                 <h3 class="block-title"><span><?php echo $tipo; ?></span></h3>
          <?php endif; ?>

          <?php
          // The Query
          query_posts( array( 'post_type' => $tipo, 'posts_per_archive_page' => 1 ) );

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
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <!-- /post title -->

                                    <div class="meta">
                                        <?php
                                        if($tipo):
                                            ?>
                                            <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                <?php echo $tipo; ?>
                                            </a>
                                            | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                        <?php endif; ?>
                                    </div>

                                    <!-- post details -->
                                    <div class="entry">
                                        <?php
                                        $value = get_field( "extracto" );

                                        if( $value ) {

                                            echo '<p class="excerpt">' . $value . '</p>';

                                        } else {

                                            echo '<p class="excerpt">' . $ce = get_the_excerpt(); limitar_texto($ce, 75) . '</p>';

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
          query_posts( array( 'post_type' => $tipo, 'posts_per_archive_page' => 2, 'offset' => 1 ) ); ?>

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
                                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                         </h3>
                                        <!-- /post title -->

                                        <div class="meta">
                                            <?php
                                            if($tipo):
                                                ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
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
                                            if($tipo):
                                                ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
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


          <?php
            // The Query
            query_posts( array( 'post_type' => $tipo, 'posts_per_archive_page' => 3 ) ); ?>

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
                                if($tipo):
                                    ?>
                                    <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                        <?php echo $tipo; ?>
                                    </a>
                                    | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                <?php endif; ?>
                            </p>

                            <h3>
                                <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
                            </h3>

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


            <section class="bloque">
                <?php $k = 0; $wp_query = null; ?>
                <?php $wp_query = new WP_Query( array( 'post_type' => $tipo, 'posts_per_archive_page' => 4, 'offset' => 4, 'paged' => $paged ) );  ?>
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
                                            if($tipo):
                                                ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
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
                                            if($tipo):
                                                ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
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
                $max_page = $wp_query->max_num_pages;
                if (!$paged && $max_page >= 1) {
                $current_page = 1;
                }
                else {
                $current_page = $paged;
                }
                ?>
                <div class="page-nav">
                    <div class="page-nav-2">
                        <span class="page-index"><?php printf(__('Pagina %1$s de %2$s'), $current_page, $max_page); ?></span>

                        <?php echo paginate_links(array(
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
                        ));
                        ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            </section>

            <section class="bloque gray bottom-search">
                <h3>Busca m&aacute;s informaci&oacute;n</h3>

                <div class="input-group stylish-input-group">
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    <input type="text" class="form-control"  placeholder="&iquest;Qu&eacute; marca o modelo estas buscando?" >
                </div>
            </section>

        </div><!-- End Left big column -->

        <div class="col-md-4" data-stickycolumn>

            <?php get_sidebar(); ?>

        </div><!-- End last column -->

      </div><!-- .main-body -->
      
    </div><!-- .main-content -->

    <!-- End Main Banner -->
    <div class="mag-content clearfix">
        <div class="row">
            <div class="col-md-12">
                <div class="ad728-wrapper">
                    <a href="#!">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-hor-720.jpg" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

</div><!-- .main-wrapper -->

     
<?php get_footer(); ?>