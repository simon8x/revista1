<?php get_header(); ?><style>.misha_loadmore_consejos{	background-color: #ddd;	border-radius: 2px;	display: block;	text-align: center;	font-size: 14px;	font-size: 0.875rem;	font-weight: 800;	letter-spacing:1px;	cursor:pointer;	text-transform: uppercase;	padding: 10px 0;	transition: background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, color 0.3s ease-in-out;  }.misha_loadmore_consejos:hover{	background-color: #767676;	color: #fff;}</style><?php	 $tipo = get_post_type( get_queried_object_id() );?>		  <div class="container main-wrapper">   <!-- Begin Main Banner -->   <div class="mag-content clearfix">      <div class="row">         <div class="col-md-12">            <div class="ad728-wrapper">              <?php echo adrotate_ad(43); ?>            </div>         </div>      </div>   </div>   <!-- End Main Banner -->   <div class="main-content mag-content clearfix">      <div class="breadcrumbs">         <?php if(function_exists('bcn_display')) { bcn_display(); }?>      </div>      <div class="row blog-content">         <div class="col-md-8">            <h3 class="block-title"><span>CONSEJOS / TIPS</span></h3>            <?php 				$url = get_bloginfo('url');                $args="";			   $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;               $args =  array( 'post_type' => 'consejos',               			 'post_status' => 'publish',               			 'posts_per_page'=> 5,						 'paged' => $paged,);						 				$temp = $wp_query;				$wp_query = null;               $wp_query = new WP_Query ($args);               if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) :$wp_query->the_post(); ?>					<article class="simple-post simple-big clearfix">					   <div class="simple-thumb">						  <a href="<?php the_permalink(); ?>">						  <?php the_post_thumbnail('thumbnail-nota');  ?>						  </a>					   </div>					   <header>					      <p class="simple-share">                                <?php                                if($tipo):                                    ?>                                    <a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo">                                        <?php echo $tipo; ?>                                    </a>                                    | <span><i class="fa fa-clock-o"></i> <?php the_time('d.m.y'); ?></span>                                <?php endif; ?>                          </p>						  <h3>                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">									<?php 									    $custitle = "";										$custitle = get_the_title();										echo limitar_texto($custitle, 55);									?>								</a>                            </h3>                            <?php							$value2 = "";                            $value2 = get_field( "extracto" );                            if( $value2 ) {                                echo '<p class="excerpt">' . limitar_texto($value2, 170) . '</p>';                            }                            ?>					   </header>					</article>            <?php endwhile; ?>			<?php endif;?>						<?php if (  $wp_query->max_num_pages > 1 )						echo '<div class="misha_loadmore_consejos">Cargar más</div>'; 										wp_reset_postdata();					?>			      <div class="row">         <div class="col-md-12">            <div class="ad728-wrapper">              <?php echo adrotate_ad(32); ?>            </div>         </div>      </div>		            <section class="bloque gray bottom-search">               <h3>Busca m&aacute;s informaci&oacute;n</h3>			<?php echo do_shortcode( '[wi_autosearch_suggest_form]' ); ?>           </section>            <section class="bloque gray bottom-search" style="background-color:rgb(221, 11, 36);">                  <h2>TE ASESORAMOS</h2>                  <form role="form" name="form" id="form-contacto" action="<?php echo $url;?>/contacto-enviar" method="post">                     <div class="form-group">                        <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" required tabindex="1">                     </div>                     <div class="form-group">                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required tabindex="2">                     </div>                     <div class="form-group">                        <input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel" tabindex="3">                     </div>                     <div class="form-group">                        <select class="form-control" id="asunto" name="asunto" placeholder="Asunto" required tabindex="4">						   <option value="">Seleccione un asunto o motivo</option>							<?php if( have_rows('motivos_contacto', 'option') ): 									while( have_rows('motivos_contacto', 'option') ): the_row();  ?>									<option value="<?php the_sub_field('motivosasunto', 'option');?>"><?php the_sub_field('motivosasunto', 'option');?></option>									<?php								endwhile; 							endif;	?>                                                                   </select>                     </div>                     <div class="form-group">                        <textarea name="comentarios" rows="5" required class="form-control" id="comentarios" tabindex="5"></textarea>                     </div>                     *Importante: es obligatorio completar los campos. <input type="submit" name="submit" id="submit" value="ENVIAR CONSULTA >" tabindex="6" class="btn btn-bl-ve text-uppercase pull-right" />                     <input type="hidden" name="action" value="send" />                  </form>            </section>         </div>         <div class="col-md-4">            <aside class="sidebar">    <div class="widget cus-adwidget">    <?php echo adrotate_ad(34); ?>    </div>    <div class="inter-ad"></div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(35); ?>    </div>                 <div class="widget cus-adwidget twtt-att">    <div class="head-ttr">      <div class="logo-ttr">        <img src="http://autotest.com.ar/wp-content/uploads/2018/10/ttr.png" alt="ttr">      </div>      <div class="titu-ttr">        <span>TWITTER AUTO TEST</span>      </div>    </div>    <a class="twitter-timeline"     href="https://twitter.com/motorpressautos"     data-tweet-limit="5">    </a>  </div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(36); ?>    </div>    <div class="widget cus-adwidget">    <div class="head-fb">      <div class="logo-ttr">        <img src="http://autotest.com.ar/wp-content/uploads/2018/10/fbb.png" alt="ttr">      </div>      <div class="titu-ttr">        <span>FACEBOOK AUTO TEST</span>      </div>    </div>    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frevistaautotest%2F&tabs&width=340&height=181&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>    </div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(37); ?>    </div>    <div class="inter-ad"></div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(38); ?>    </div>      <div class="inter-ad"></div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(39); ?>    </div>      <div class="inter-ad"></div>    <div class="widget cus-adwidget">    <?php echo adrotate_ad(40); ?>    </div>              </aside>         </div>      </div>   </div>   <!-- .main-content --></div><!-- .main-wrapper --><div class="modal modal-loading fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"    role="dialog" aria-hidden="true" data-backdrop="static">    <div class="modal-dialog modal-sm">        <div class="modal-content">            <div class="modal-body">                <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>                <span class="sr-only">Cargando...</span>            </div>        </div>    </div></div><?php get_footer(); ?>