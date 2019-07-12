<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	
	<div class="post-wrapper group">
		<header class="entry-header group">
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-meta">
				<span class="posted-on"><?php esc_html_e('Posted on','minimer'); ?> <?php the_time( get_option('date_format') ); ?></span>
				<span class="byline"><?php esc_html_e('by','minimer'); ?> <span class="author"><?php the_author_posts_link(); ?></span></span>
				<span class="entry-category"><?php the_category(' '); ?></span>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<a class="entry-comments" href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
				<?php endif; ?>
			</div>
		</header>
		<div class="entry-media">
			<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
		</div>
		<div class="entry-content">
			<div class="entry themeform">
				
				<?php if ( get_theme_mod('excerpt-enable','off') == 'on' ) : ?>
					
					<?php if (get_theme_mod('excerpt-length','26') != '0'): ?>
						<?php the_excerpt(); ?>
					<?php endif; ?>
					
				<?php else: ?>
				
					<?php the_content(esc_html__('Continue reading...','minimer')); ?>
				
				<?php endif; ?>
				
			</div>
		</div>
	</div>

</article><!--/.post-->	