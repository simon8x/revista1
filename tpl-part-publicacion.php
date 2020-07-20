<div class="col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class('news-block small-block'); ?>>
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a class="overlay-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<figure class="image-overlay"><?php the_post_thumbnail('thumbnail-nota');  ?></figure>
					</a>
		<?php endif; ?>
		<header class="news-details">
			<h3 class="news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '...' );?></a></h3>
			<div class="meta">
				<?php if($tipo): ?>
					<a href="<?php echo get_post_type_archive_link( $tipo ); ?>" class="taxo"><?php echo $tipo; ?></a> | <span class="article-date"> <?php the_time('d.m.y'); ?></span>
				<?php endif; ?>
			</div>
		</header>
	</article>
</div>