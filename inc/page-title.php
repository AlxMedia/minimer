<div class="page-title group">
	<div class="page-title-inner group">
	
		<?php if ( is_home() ) : ?>
			<h2><?php echo minimer_blog_title(); ?></h2>
			
		<?php elseif ( is_single() ): ?>

		<?php elseif ( is_page() ): ?>
			<h2><?php the_title(); ?></h2>

		<?php elseif ( is_search() ): ?>
			<h1>
				<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
				<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
				<?php $search_results=$wp_query->found_posts;
					if ($search_results==1) {
						echo $search_results.' '.esc_html__('Search result','minimer');
					} else {
						echo $search_results.' '.esc_html__('Search results','minimer');
					}
				?>
			</h1>
			<div class="notebox">
				<?php esc_html_e('For the term','minimer'); ?> "<span><?php echo get_search_query(); ?></span>".
				<?php if ( !have_posts() ): ?>
					<?php esc_html_e('Please try another search:','minimer'); ?>
				<?php endif; ?>
				<div class="search-again">
					<?php get_search_form(); ?>
				</div>
			</div>
			
		<?php elseif ( is_404() ): ?>
			<h1><i class="fa fa-exclamation-circle"></i><?php esc_html_e('Error 404.','minimer'); ?> <span><?php esc_html_e('Page not found!','minimer'); ?></span></h1>
			<div class="notebox">	
				<p><?php esc_html_e( 'The page you are trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'minimer' ); ?></p>
				<?php get_search_form(); ?>
			</div>
			
		<?php elseif ( is_author() ): ?>
			<?php $author = get_userdata( get_query_var('author') );?>
			<h1><i class="fa fa-user"></i><span><?php echo $author->display_name;?></span></h1>
			
		<?php elseif ( is_category() ): ?>
			<h1><i class="fa fa-folder-open"></i><span><?php echo single_cat_title('', false); ?></span></h1>

		<?php elseif ( is_tag() ): ?>
			<h1><i class="fa fa-tags"></i><span><?php echo single_tag_title('', false); ?></span></h1>
			
		<?php elseif ( is_day() ): ?>
			<h1><i class="fa fa-calendar"></i><span><?php echo esc_html( get_the_time('F j, Y') ); ?></span></h1>
			
		<?php elseif ( is_month() ): ?>
			<h1><i class="fa fa-calendar"></i><span><?php echo esc_html( get_the_time('F Y') ); ?></span></h1>
				
		<?php elseif ( is_year() ): ?>
			<h1><i class="fa fa-calendar"></i><span><?php echo esc_html( get_the_time('Y') ); ?></span></h1>
		
		<?php else: ?>
			<h2><?php the_title(); ?></h2>

		<?php endif; ?>

		<?php if ( ! is_paged() ) : ?>
			<?php the_archive_description( '<div class="notebox">', '</div>' ); ?>
		<?php endif; ?>
	
	</div><!--/.page-title-inner-->
</div><!--/.page-title-->