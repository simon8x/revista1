<?php get_header(); ?>
<style>
.misha_loadmore{background-color: #ddd;border-radius: 2px;display: block;text-align: center;font-size: 14px;
	font-size: 0.875rem;font-weight: 800;letter-spacing:1px;cursor:pointer;text-transform: uppercase;padding: 10px 0;
	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;  
} 
.misha_loadmore:hover{ background-color: #767676;color: #fff;}
</style>
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
	  <div class="breadcrumbs">
			<?php
			if(function_exists('bcn_display'))  { bcn_display(); } ?>
			<?php //echo do_shortcode( '[flexy_breadcrumb]'); ?>
			<?php custom_breadcrumbs(); ?>
	  </div>
      <div class="row">
       <div class="col-md-8">
          <?php
             $i = 0;
             $tipo = get_post_type( get_queried_object_id() );
             if($tipo): ?>
				<h3 class="block-title"><span><?php echo $tipo; ?></span></h3>
          <?php endif; ?>
          <?php
          query_posts( array( 'post_type' => $tipo, 'posts_per_archive_page' => 1 ) );
          while ( have_posts() ) : the_post(); ?>
               <section class="bloque gray">
                    <div class="row">
                        <div class="col-xs-12">
                            <article id="post-<?php the_ID(); ?>" <?php post_class('news-block big-block'); ?>>
                                <?php if ( has_post_thumbnail()) : ?>
										<a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<figure class="image-overlay">
												<?php the_post_thumbnail('thumbnail-nota-big');  ?>
											</figure>
										</a>
                                <?php endif; ?>
                                <header class="news-details">
									<h3 class="news-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php 
												echo wp_trim_words( get_the_title(), 10, '...' );
											?>
										</a>
									</h3>
                                    <div class="meta">
                                        <?php if($tipo): ?>
                                            <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                <?php echo $tipo; ?>
                                            </a>
                                            | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="entry">
                                        <?php
											$value2 = "";
											$value2 = get_field( "extracto" );
											if( $value2 ) {
												echo '<p class="excerpt">' . limitar_texto($value2, 240) . '</p>';
											}
										?>
                                    </div>
                                </header>
                            </article>
                        </div>
                    </div>
               </section>
          <?php
          endwhile;
          //wp_reset_query();
		  wp_reset_postdata();
          ?>
          <?php
          query_posts( array( 'post_type' => $tipo, 'posts_per_archive_page' => 2, 'offset' => 1 ) ); ?>
          <section class="bloque">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php $class = ($i%2); ?>
                   <?php if ($class == 0): ?>
                        <div class="row">
                            <div class="col-md-6">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <figure class="image-overlay">
                                               <?php the_post_thumbnail('thumbnail-nota');  ?>
                                            </figure>
                                        </a>
                                    <?php endif; ?>
                                    <header class="news-details">
 										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php 
													echo wp_trim_words( get_the_title(), 10, '...' );
												?>
											</a>
										</h3>
                                        <div class="meta">
                                            <?php if($tipo): ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </header>
                                </article>
                            </div>
                   <?php else: ?>
                            <div class="col-md-6">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>
                                    <?php if ( has_post_thumbnail()) : ?>
                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <figure class="image-overlay">
                                                <?php the_post_thumbnail('thumbnail-nota');  ?>
                                            </figure>
                                        </a>
                                    <?php endif; ?>
                                    <header class="news-details">                                   
										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php 
													echo wp_trim_words( get_the_title(), 10, '...' );
												?>
											</a>
										</h3>
                                        <div class="meta">
                                            <?php if($tipo): ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </header>
                                </article>
                            </div>
                        </div> 
                   <?php endif; ?>
            <?php
            $i++;
            endwhile; ?>
            <?php else: ?>
                <div class="row">
                    <article>
                        <h2>No se encuentra ningun contenido para mostrar.</h2>
                    </article>
                </div>
            <?php endif;
            //wp_reset_query();
			wp_reset_postdata();
            ?>
          </section>
		   <div class="banner-central clearfix">
				<div class="row">
					<div class="col-md-12">
						<div class="ad728-wrapper">
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
          <?php
            query_posts(
                array(
                    'post_type' => $tipo,
                    'posts_per_page' => 3,
                    'meta_key' => 'my_post_viewed',
                    'orderby' => 'meta_value_num',
                    'order'=> 'DESC'
                )
            );
            ?>

             <section class="bloque hor gray">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="sectittle">M&aacute;s Leidas</h4>
						<?php while ( have_posts() ) : the_post(); ?>
								<article class="simple-post simple-big clearfix">
									<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<div class="simple-thumb">
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail('thumbnail-nota-horizontal');  ?>
												</a>
											</div>
									<?php endif; ?>
									<header>
                                        <h3>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php 
                                            echo wp_trim_words( get_the_title(), 10, '...' );
                                            ?>
                                        </a>
                                        </h3>
										<p class="simple-share">
										<?php if($tipo): ?>
											<a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
												<?php echo $tipo; ?>
											</a>
											| <span> <?php the_time('d.m.y'); ?></span>
										<?php endif; ?>
										</p>

										<?php
											$value2 = "";
											$value2 = get_field( "extracto" );
											if( $value2 ) {
												echo '<p class="excerpt">' . limitar_texto($value2, 180) . '</p>';
											}
										?>
									</header>
								</article>
								<?php
								endwhile;
								//wp_reset_query();
								wp_reset_postdata();
								?>
                    </div>
                </div>
            </section>
            
            <section class="bloque">
                <?php //$k = 0; $wp_query = null; ?>
                <?php //$wp_query = new WP_Query( array( 'post_type' => $tipo, 'posts_per_archive_page' => 4, 'offset' => 4, 'paged' => $paged ) );  ?>
                <?php // while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php query_posts(array( 'post_type' => $tipo, 'posts_per_archive_page' => 4, 'offset' => 4, 'paged' => $paged ) ); ?>
				<?php  //query_posts('offset=4');?>
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php $cl = ($k%2); ?>
                    <?php if ($cl == 0): ?>
                       <div class="row">
                            <div class="col-md-6">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>
                                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <figure class="image-overlay">
                                                <?php the_post_thumbnail('thumbnail-nota');  ?>
                                            </figure>
                                        </a>
                                    <?php endif; ?>
                                    <header class="news-details">
										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php 
													echo wp_trim_words( get_the_title(), 10, '...' );
												?>
											</a>
										</h3>
                                        <div class="meta">
                                           <?php if($tipo): ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </header>
                                </article>
                            </div>
                    <?php else: ?>
                            <div class="col-md-6">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>
                                    <?php if ( has_post_thumbnail()) :  ?>
                                        <a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <figure class="image-overlay">
                                                <?php the_post_thumbnail('thumbnail-nota');  ?>
                                            </figure>
                                        </a>
                                    <?php endif; ?>
                                    <header class="news-details">
										<h3 class="news-title">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php 
													echo wp_trim_words( get_the_title(), 10, '...' );
												?>
											</a>
										</h3>
                                        <div class="meta">
                                            <?php
                                            if($tipo):
                                                ?>
                                                <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">
                                                    <?php echo $tipo; ?>
                                                </a>
                                                | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
                                            <?php endif; ?>
                                      </div>
                                    </header>
                                </article>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
                $k++;
                endwhile; endif; wp_reset_postdata();?>
            </section>
			<?php
				//global $wp_query; 
				if (  $wp_query->max_num_pages > 1 )
					echo '<div class="misha_loadmore">Cargar más</div>'; ?>
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
		    <section class="bloque gray bottom-search">
                <h3>Busca m&aacute;s informaci&oacute;n</h3>
				<?php echo do_shortcode( '[wi_autosearch_suggest_form]' ); ?>
            </section>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>