<?php $format = get_post_format(); ?>

<div class="featured-post">
	
	<h2 class="featured-post-title">
		<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	</h2><!--/.post-title-->
	
	<div class="featured-post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail('minimer-medium'); ?>
			<?php else: ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
			<?php endif; ?>
			<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-play"></i></span>'; ?>
			<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
			<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
		</a>
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<a class="featured-post-comments" href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php endif; ?>
	</div><!--/.post-thumbnail-->
	
</div>