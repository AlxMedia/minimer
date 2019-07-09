<?php 
	$sidebar = minimer_sidebar_primary();
	$layout = minimer_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1">
	
		<div class="sidebar-skewed">
		
			<div class="sidebar-skew"><div class="sidebar-skew-inner"></div></div>
			<div class="sidebar-skew-bottom"><div class="sidebar-skew-inner-bottom"></div></div>
			
			<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
				<div id="profile" class="group">
					<?php if ( get_theme_mod('profile-image') ): ?>
						<div id="profile-image">
							<div class="profile-skew"><div class="profile-skew-inner"></div></div>
							<div class="profile-skew-bottom"><div class="profile-skew-inner-bottom"></div></div>
							<img src="<?php echo get_theme_mod('profile-image'); ?>" alt="" />
						</div>
					<?php endif; ?>
					<?php if ( get_theme_mod('profile-name') ): ?>
						<div id="profile-name"><?php echo get_theme_mod('profile-name'); ?></div>
					<?php endif; ?>
					<?php if ( get_theme_mod('profile-description') ): ?>
						<div id="profile-description"><?php echo get_theme_mod('profile-description'); ?></div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		
		</div>
		<div class="clear skew-clear"></div>
		
		<div class="sidebar-content dark">

			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>