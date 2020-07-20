<?php get_header(); ?>







<div class="container main-wrapper">



    



    <!-- End Main Banner -->



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



    <!-- End Main Banner -->







    <div class="main-content mag-content clearfix">



	



	   <div class="breadcrumbs">



			<?php



			if(function_exists('bcn_display'))



			{



				bcn_display();



			}?>

		<?php //echo do_shortcode( '[flexy_breadcrumb]'); ?>

		<?php custom_breadcrumbs(); ?>

	   </div>







      <div class="row blog-content" data-stickyparent>



	  



        <div class="col-md-8">



            



          <?php if (have_posts()): while (have_posts()) : the_post(); ?>







            <article id="post-<?php the_ID(); ?>" <?php post_class('post-wrapper clearfix'); ?>>



			



				<?php



				  $i = 0;



			      $tipo = get_post_type( get_queried_object_id() );



			    ?>



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

                <h1 class="cus-single-title"><?php echo get_the_title(); ?></h1>



                <?php



                $gal_imgs = get_field('galeria_de_imagenes_noticias');







                $size_big = 'galeria_big';



                $size_thumb = 'galeria_thumb';







                $defimgbig = $gal_imgs [0]['sizes']['galeria_big'];







                if( $gal_imgs ): ?>



                    <div class="gallery">







                        <div class="image-preview">



                            <img id="preview" src="<?php echo $defimgbig; ?>" />



                        </div>







                        <!-- Elastislide Carousel -->



                        <ul id="carousel" class="elastislide-list">



                            <?php foreach( $gal_imgs as $image ):







                                $image_url = $image['sizes'][$size_thumb];



                                $image_url_big = $image['sizes'][$size_big];



                                ?>







                                <li data-preview="<?php echo $image_url_big; ?>"><a href="#!"><img src="<?php echo $image_url; ?>" alt="image04" /></a></li>







                            <?php endforeach; ?>



                        </ul>



                        <!-- End Elastislide Carousel -->







                    </div><!-- End Gallery -->



                <?php endif; ?>



                <div class="el-contenido">



                    <?php the_content(); ?>



                </div>







            </article>



            <!-- /article -->







         <?php endwhile; endif; ?>



		



		 <!-- End Main Banner -->



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



		<!-- End Main Banner -->





        <!-- Comment List -->



        <?php 

			// If comments are open or we have at least one comment, load up the comment template.

			if ( comments_open() || get_comments_number() ) :

				comments_template();

			endif;

		?>



		<!--  Relacionados: -->

		<div class="row single-relacionados">



		  <div class="col-xs-12">



			  <?php



			  $post_objects = get_field('modelos_relacionados_noticias');



			  if( $post_objects ): ?>



			  <h2 class="rel-tit">Tambi&eacute;n podr&iacute;a interesarte:</h2>



			  <?php include (TEMPLATEPATH . '/relacionados.php'); ?>



		  <?php endif; ?>	



		  </div>



	    </div>	

		<!-- End Relacionados: -->



    </div><!-- End Left big column -->







    <div class="col-md-4">



<?php get_sidebar('singles'); ?>



    </div><!-- End last column -->







  </div><!-- .blog-content -->



      



    </div><!-- .main-content -->











</div><!-- .main-wrapper -->











<?php get_footer(); ?>