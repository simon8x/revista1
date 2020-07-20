<?php

   /*

   	Template Name: Autotest TV

   */

   ?>

<?php get_header(); ?>

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

	</div>   <!-- End Main Banner -->   

<div class="main-content mag-content clearfix">
    <div class="breadcrumbs">

       <?php if(function_exists('bcn_display')) { bcn_display(); }?>
<?php custom_breadcrumbs(); ?>
    </div>
	<div class="col-md-8">




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

    <div class="inter-ad"></div>

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

</div>

<?php get_footer(); ?>