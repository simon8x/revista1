<?php
   /*
   	Template Name: buscador ajax
   */
   ?>
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

            <section class="bloque">
				<div class="row">
					<div class="col-md-12">
					
		<article>
			<?php
 
			  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
			  $query_args = array(
			    'post_type' => 'pruebas',
			    'paged' => $paged
			  );
 
			  $the_query = new WP_Query( $query_args );
			?>
 
			<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			  <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
				<div class="section-bg">
 
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<div class="author">By <?php the_author(); ?> </div>
			    </div>
			  </section>
			<?php endwhile; ?>
 
			<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
			<button class="loadmore2">Load More</button>
			<?php } ?>
 
			<?php else: ?>
			  <article>
			    <h1>Sorry...</h1>
			    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			  </article>
			<?php endif; ?>
		</article>	

 
<script>
	var posts_myajax = '<?php echo serialize( $the_query->query_vars ) ?>',
    current_page_myajax = 1,
    max_page_myajax = <?php echo $the_query->max_num_pages ?>
</script>
<script src="<?php bloginfo('template_url')?>/js/loadmore.js"></script>
						
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
         </div>
         <!-- End Left big column -->
         <div class="col-md-4" data-stickycolumn>
            <?php get_sidebar(); ?>
         </div>
         <!-- End last column -->
      </div>
      <!-- .main-body -->
   </div>
   <!-- .main-content -->
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
</div>
<!-- .main-wrapper -->
<?php get_footer(); ?>