<?php get_header(); ?>

<style>.misha_loadmore_consejos{	background-color: #ddd;	border-radius: 2px;	display: block;	text-align: center;	font-size: 14px;	font-size: 0.875rem;	font-weight: 800;	letter-spacing:1px;	cursor:pointer;	text-transform: uppercase;	padding: 10px 0;	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;  }.misha_loadmore_consejos:hover{	background-color: #767676;	color: #fff;}

</style>

<?php	 $tipo = get_post_type( get_queried_object_id() );?>		  

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

		<div class="breadcrumbs">         

			<?php if(function_exists('bcn_display')) { bcn_display(); }?>   

<?php //echo do_shortcode( '[flexy_breadcrumb]'); ?>			

<?php custom_breadcrumbs(); ?>

		</div>      

		<div class="row blog-content">         

			<div class="col-md-8">            

				<h3 class="block-title"><span>CONSEJOS / TIPS</span></h3>            

				<?php 	$url = get_bloginfo('url');                

						/*$args="";			   

						$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;               

						$args =  array( 'post_type' => 'consejos', 'post_status' => 'publish', 'posts_per_page'=> 5, 'paged' => $paged,);

						$temp = $wp_query;				

						$wp_query = null;               

						$wp_query = new WP_Query ($args);   */            

						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>					

							<article class="simple-post simple-big clearfix">					   

								<div class="simple-thumb">						  

									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail-nota');  ?></a>					   

								</div>					   

								<header>					      

									<p class="simple-share">                                

									<?php  if($tipo): ?>                                    

										<a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">                                        

									<?php echo $tipo; ?> </a> | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>                                

									<?php endif; ?>

									</p>

									<h3>

										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

											<?php 
												echo wp_trim_words( get_the_title(), 10, '...' );
											?>								

										</a>

									</h3>

									<?php

									$value2 = "";                            

									$value2 = get_field( "extracto" );                            

									if( $value2 ) {                                

										echo '<p class="excerpt">' . limitar_texto($value2, 150) . '</p>';

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

								<section class="bloque gray bottom-search" style="background-color:rgb(221, 11, 36);">                  

									<h2>TE ASESORAMOS</h2>                 

									<form role="form" name="form" id="form-contacto" action="<?php echo $url;?>/contacto-enviar" method="post">                    

										<div class="form-group">                        

											<input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" required tabindex="1"> 

										</div>

										<div class="form-group">                        

											<input type="email" class="form-control" id="email" placeholder="Email" name="email" required tabindex="2">                     

										</div>                     

										<div class="form-group">                        

											<input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel" tabindex="3">                     

										</div>                     

										<div class="form-group">                        

											<select class="form-control" id="asunto" name="asunto" placeholder="Asunto" required tabindex="4">						   

												<option value="">Seleccione un asunto o motivo</option>							

												<?php if( have_rows('motivos_contacto', 'option') ): while( have_rows('motivos_contacto', 'option') ): the_row();  ?>									

													<option value="<?php the_sub_field('motivosasunto', 'option');?>"><?php the_sub_field('motivosasunto', 'option');?></option>

												<?php endwhile; endif;	?>    

											</select>                     

										</div>                     

										<div class="form-group">                       

											<textarea name="comentarios" rows="5" required class="form-control" id="comentarios" tabindex="5"></textarea>                    

										</div>*Importante: es obligatorio completar los campos.

										<input type="submit" name="submit" id="submit" value="ENVIAR CONSULTA >" tabindex="6" class="btn btn-bl-ve text-uppercase pull-right" />                     <input type="hidden" name="action" value="send" />                  

									</form>          

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