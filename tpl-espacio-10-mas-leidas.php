<div class="container">
	<div class="main-content mag-content clearfix">
		<div class="row blog-content">
			<div class="col-md-8">
			<?php 
				$cont_noticias=0;
				$args="";
				$args =  array( 'post_type' => array('pruebas', 'noticias'),'post_status' => 'publish','posts_per_page'=> 10,);
				$the_query = new WP_Query ($args);
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
				<?php $cont_noticias++;?>
					<article class="simple-post simple-big clearfix">
						<div class="simple-thumb">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-nota');  ?></a>
                            <?php 
								$qcat = "";
								$es_una_prueba = "";
								$qcat = get_post_type();
								if ($qcat == "pruebas") {$es_una_prueba = 'es-prueba';}?>
                                <a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
						</div>
                        <header>
                        <h3 class="news-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php echo wp_trim_words( get_the_title(), 10, '...' );?>
							</a>
						</h3>
                        <?php
							$value2 = "";
                            $value2 = get_field( "extracto" );
                            if( $value2 ) { echo '<p class="excerpt">' . limitar_texto($value2, 230) . '</p>';}?>
                        </header>
					</article>
					<?php if ($cont_noticias == 5) {?>
							<div class="row">
								<div class="col-md-12">
									<div class="ad728-wrapper">
                    <!-- /317699715/autotest_home_728x90_4 -->
                    <div id='div-gpt-ad-1545937338887-0'>
                      <script>
                      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1545937338887-0'); });
                      </script>
                    </div>
									</div>
								</div>
							</div>					
					<?php }  ?>
                    <?php endwhile; endif;wp_reset_postdata();?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ad728-wrapper">
                                <!-- /317699715/autotest_home_728x90_3 -->
                               <div id='div-gpt-ad-1537878865292-0'>
                                   <script>
                                       googletag.cmd.push(function() {
                                           googletag.display('div-gpt-ad-1537878865292-0');
                                       });
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
									googletag.cmd.push(function() {
										googletag.display('div-gpt-ad-1537879052360-0');
									});
								</script>
							</div>
					</div>
                    <div class="inter-ad"></div>
                    <div class="widget cus-adwidget">
						<!-- /317699715/autotest_home_300x600_2 -->
                        <div id='div-gpt-ad-1537879171402-0'>
							<script>
								googletag.cmd.push(function() {
								googletag.display('div-gpt-ad-1537879171402-0');
                                });
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
                        <a class="twitter-timeline" href="https://twitter.com/AutoTestArg?ref_src=twsrc%5Etfw">Tweets by AutoTestArg</a>
                       <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="widget cus-adwidget">
                        <!-- /317699715/autotest_home_300x600_3 -->
                       <div id='div-gpt-ad-1537879262253-0'>
                           <script>
                               googletag.cmd.push(function() {
                                   googletag.display('div-gpt-ad-1537879262253-0');
                               });
                           </script>
                       </div>
                    </div>
                    <div class="inter-ad"></div>
                    <div class="widget cus-adwidget">
                        <!-- /317699715/autotest_home_300x600_4 -->
                       <div id='div-gpt-ad-1537879364070-0'>
                           <script>
                               googletag.cmd.push(function() {
                                   googletag.display('div-gpt-ad-1537879364070-0');
                               });
                           </script>
                       </div>
                    </div>
                                        <div class="inter-ad"></div>
                    <div class="widget cus-adwidget">
                      <!-- /317699715/autotest_home_300x600_8 -->
                      <div id='div-gpt-ad-1545935841317-0'>
                        <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1545935841317-0'); });
                        </script>
                      </div>
                      
                    </div>

				      </aside>
            </div>
        </div>
    </div>
</div>