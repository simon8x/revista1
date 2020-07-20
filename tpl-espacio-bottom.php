<!-- .ancho-completo -->
<div class="container">
	<div class="main-content mag-content clearfix">
		<div class="row blog-content">
			<div class="col-md-8">
				<div class="row">
                <?php 
					$args="";
					$m = 2;
					$args =  array( 'post_type' => array('pruebas', 'noticias'),
							 'post_status' => 'publish',
							 'posts_per_page'=> 10,
							 'offset' => 11,);
					$the_query = new WP_Query ($args);
					if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) :$the_query->the_post(); ?>
							<?php 
								if($m%2==0){ echo '<div class="row">'; } ?>
										<?php 
											if ($m==3){ ?>
												<div class="col-md-6 aviso-post">
													<div class="widget cus-adwidget">
														<!-- /317699715/autotest_home_300x250_cont_1 -->
														<div id='div-gpt-ad-1537879584597-0' style='height:250px; width:300px;'>
															<script>
																googletag.cmd.push(function() {
																googletag.display('div-gpt-ad-1537879584597-0');
																});
															</script>
														</div>
													</div>
												</div>
										<?php } elseif($m==8) { ?> 	
													<div class="col-md-6">
														<div class="widget cus-adwidget">
															 <div class="jumbotron">
																<?php echo "Aviso";?>
														   </div>
														</div>
													</div>
										<?php } else { ?> 
													<div class="col-md-6">
														<article class="news-block small-block">
															<a href="<?php the_permalink(); ?>" class="overlay-link"><figure class="image-overlay"><?php the_post_thumbnail('thumbnail-nota');?></figure></a>
															<?php 
																$qcat = "";
																$es_una_prueba = "";
																$qcat = get_post_type();
																if ($qcat == "pruebas") {$es_una_prueba = 'es-prueba';}?>
																<a href="<?php echo get_post_type_archive_link( $qcat ); ?>" class="category <?php echo $es_una_prueba;?>"><?php echo $qcat;?></a>
																<header class="news-details">
																	<h3 class="news-title">
																		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></a>
																	</h3>
																</header>
														</article>
													</div>
										<?php } ?>
										<?php 
											if($m%2!=0){ 
												echo '</div>'; 
											} 
											$m++; ?>
                <?php endwhile; endif; wp_reset_postdata();?>
				</div>


			</div><!-- del col.md.8 -->
            <div class="col-md-4">
				<aside class="sidebar">
					<div class="widget cus-adwidget">
						<!-- /317699715/autotest_home_300x600_5 -->
						<div id='div-gpt-ad-1537879461018-0'>
							<script>
								googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879461018-0');});
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
								googletag.cmd.push(function() {
								googletag.display('div-gpt-ad-1539351904376-0');
								});
							</script>
						</div>
					</div>
                    <div class="inter-ad"></div>
						<div class="widget cus-adwidget">
							<!-- /317699715/autotest_home_300x600_7 -->
							<div id='div-gpt-ad-1539352010381-0'>
								<script>
									   googletag.cmd.push(function() {
										   googletag.display('div-gpt-ad-1539352010381-0');
									   });
								</script>
                           </div>
                        </div>
				</aside>
			</div>
		</div>
	</div>
</div>