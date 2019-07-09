<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<?php if ( have_posts() ) : ?>
		
		<?php while ( have_posts() ): the_post(); ?>
			<?php get_template_part('content'); ?>
		<?php endwhile; ?>
		
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>
		
</div><!--/.content-->

<?php get_sidebar(); ?>
	
<?php get_footer(); ?>