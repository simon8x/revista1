<?php get_header(); ?>
<style>.misha_loadmore_consejos{	background-color: #ddd;	border-radius: 2px;	display: block;	text-align: center;	font-size: 14px;	font-size: 0.875rem;	font-weight: 800;	letter-spacing:1px;	cursor:pointer;	text-transform: uppercase;	padding: 10px 0;	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;  }.misha_loadmore_consejos:hover{	background-color: #767676;	color: #fff;}strong.search-excerpt { background: yellow; }
</style>
<?php	 ?>		  
<div class="container main-wrapper">   <!-- Begin Main Banner -->   
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
	</div>   <!-- End Main Banner -->   
	<div class="main-content mag-content clearfix">        
		<div class="row blog-content">         
			<div class="col-md-8">            
				<h2 class="block-title"><span>Resultados de la b&Uacute;squeda:</span></h2>            
				<?php 	$url = get_bloginfo('url');  				
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>					
							<article class="simple-post simple-big clearfix">					   
								<div class="simple-thumb">						  
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-nota');  ?></a>					   
								</div>					   
								<header>																		
								<?php  $terms = get_the_terms( get_the_id(), 'marca' );								
								if($terms != false): ?>							
								<p class="simple-share">	
									<a href="<?php echo get_term_link( $terms[0]->term_id ); ?>" class="taxo">	
										<?php echo $terms[0]->name; ?>								
									</a> | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>							
								</p>							
								<?php endif;	?>
									 <h3>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php 
												echo wp_trim_words( get_the_title(), 10, '...' );
											?>
										</a>

									</h3>
									
									<?php
									$excerpt = get_field( "extracto" );																		$keys= explode(" ",$s);									$excerpt 	= preg_replace('/('.implode('|', $keys) .')/iu',										'<strong class="search-excerpt">\0</strong>',										$excerpt);                           
									if( $value2 ) {                                
										echo '<p class="excerpt">' . limitar_texto($excerpt, 170) . '</p>';
										} ?>
								</header>					
							</article>
						<?php endwhile; endif;?>
						<?php if ( $wp_query->max_num_pages > 1 )						
								echo '<div class="misha_loadmore_consejos">Cargar más</div>'; 										
								//wp_reset_postdata();?>			      
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
								<section class="bloque gray bottom-search">               
									<h3>Busca m&aacute;s informaci&oacute;n</h3>			
									<?php echo do_shortcode( '[wi_autosearch_suggest_form]' ); ?>           
								</section>               
							</div>        
							<!--sidebar-->
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
									<div class="inter-ad">
									</div>    
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
										<a class="twitter-timeline" href="https://twitter.com/motorpressautos" data-tweet-limit="5"></a>  
									</div>   
									<div class="widget cus-adwidget">   
										<!-- /317699715/autotest_home_300x600_3 -->
										<div id='div-gpt-ad-1537879262253-0'>
											<script>
												googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879262253-0'); });
											</script>
										</div>   
									</div>    
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
									<div class="widget cus-adwidget">  
										<!-- /317699715/autotest_home_300x600_4 -->
										<div id='div-gpt-ad-1537879364070-0'>
											<script>
												googletag.cmd.push(function() { googletag.display('div-gpt-ad-1537879364070-0'); });
											</script>
										</div>  
									</div>    
									<div class="inter-ad"></div>    
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
					</div>   <!-- .main-content -->
				</div><!-- .main-wrapper -->
				<div class="modal modal-loading fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"  role="dialog" aria-hidden="true" data-backdrop="static"> 
					<div class="modal-dialog modal-sm">    
						<div class="modal-content">            
							<div class="modal-body">               
								<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>                
									<span class="sr-only">Cargando...</span>            
							</div>        
						</div>    
					</div>
				</div>
<?php get_footer(); ?>