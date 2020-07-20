<?php
   /*
   	Template Name: Autotest TV
   */
   ?>
<?php get_header(); ?>
<div class="container main-wrapper">
<div class="main-content mag-content clearfix">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php if (get_field('video_destacado', 'option')) {  ?>

<div class="embed-responsive embed-responsive-16by9">
	<div class="embed-container">
		<?php the_field('video_destacado', 'option');?>
	</div>
</div>
<?php } ?>
<?php the_content();?>
<?php endwhile;
endif;?>
</div>
</div>
<?php get_footer(); ?>