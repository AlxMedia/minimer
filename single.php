<?php get_header(); ?>

<div class="content">
	
	<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
			
			<div class="post-wrapper group">
				<header class="entry-header group">
					<h1 class="entry-title"><?php the_title(); ?></h1>
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
					<?php if ( get_theme_mod('post-formats-enable','off') == 'on' || get_post_format() ) : ?>
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					<?php else: ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('minimer-large'); ?>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="entry-content">
					<div class="entry themeform">	
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','minimer'),'after'=>'</div>')); ?>
						<div class="clear"></div>				
					</div><!--/.entry-->
				</div>
				<div class="entry-footer group">
					
					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','minimer').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<div class="entry-bar">
						<div class="entry-bar-left">
							<?php do_action( 'alx_ext_sharrre' ); ?>
						</div>
						<div class="entry-bar-right">
							<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
						</div>
					</div>

					<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
					
					<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
					
				</div>
			</div>

		</article><!--/.post-->
	<?php endwhile; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>