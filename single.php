<?php get_header(); ?>



<div class="container main-wrapper">

    

    <!-- End Main Banner -->

    <div class="mag-content clearfix">

      <div class="row">

        <div class="col-md-12">

          <div class="ad728-wrapper">

               <?php //echo adrotate_ad(54); ?>

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



      <div class="row blog-content" data-stickyparent>

	  

        <div class="col-md-8" data-stickycolumn>

            

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

					  <?php //echo adrotate_ad(55); ?>

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



    </div><!-- End Left big column -->



    <div class="col-md-4">

       <?php get_sidebar('singles'); ?>
	   
    </div><!-- End last column -->



  </div><!-- .blog-content -->

      

    </div><!-- .main-content -->





</div><!-- .main-wrapper -->





<?php get_footer(); ?>