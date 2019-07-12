<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'minimer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'minimer' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'minimer' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'minimer' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'minimer' ),
	'button_url'  => 'https://wordpress.org/support/theme/minimer/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'minimer' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'minimer' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'minimer' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'minimer' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'minimer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'minimer' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'minimer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'minimer' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'minimer' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Use Excerpts
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'excerpt-enable',
	'label'			=> esc_html__( 'Enable Excerpts', 'minimer' ),
	'description'	=> esc_html__( 'Show excerpt instead of full post', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Excerpt Length
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'minimer' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> '26',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'minimer' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'minimer' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'minimer' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'minimer' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '14',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'minimer' ),
	'description'	=> esc_html__( '2 columns of widgets', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'minimer' ),
	'description'	=> esc_html__( '2 columns of widgets', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'minimer' ),
	'description'	=> esc_html__( 'Comment count on bubbles', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'minimer' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'minimer' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'minimer' ),
		'categories'=> esc_html__( 'Related by categories', 'minimer' ),
		'tags'		=> esc_html__( 'Related by tags', 'minimer' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'minimer' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'minimer' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'minimer' ),
		'content'	=> esc_html__( 'Below content', 'minimer' ),
	),
) );
// Header: Search
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'minimer' ),
	'description'	=> esc_html__( 'Header search button', 'minimer' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'minimer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'minimer' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'minimer' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'minimer' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'minimer' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'minimer' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'minimer' ),
	'description'	=> esc_html__( 'A short description of you', 'minimer' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'minimer' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'minimer' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'minimer' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'minimer' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'minimer' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'minimer' ),
	'description'	=> esc_html__( 'Footer credit text', 'minimer' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'minimer' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cr',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'minimer' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'minimer' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'minimer' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'minimer' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'minimer' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'minimer' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'minimer' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'minimer' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function minimer_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'minimer' ),
		'description'	=> esc_html__( '(is_home) Primary', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'minimer' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'minimer' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'minimer' ),
		'description'	=> esc_html__( '(is_category) Primary', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'minimer' ),
		'description'	=> esc_html__( '(is_search) Primary', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'minimer' ),
		'description'	=> esc_html__( '(is_404) Primary', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	Kirki::add_field( 'minimer_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'minimer' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'minimer' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'minimer' ),
	) );
	
 } 
add_action( 'init', 'minimer_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'minimer' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'minimer' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'minimer' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'minimer' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'minimer' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'minimer' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'minimer' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'minimer' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'minimer' ) . ' <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'minimer' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'minimer' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'minimer' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'minimer' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'minimer' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'minimer' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'minimer' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'minimer' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'minimer' ),
	'description'	=> esc_html__( 'Select font for the theme', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'minimer' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'minimer' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'minimer' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'minimer' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'minimer' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'minimer' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'minimer' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'minimer' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'minimer' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'minimer' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'minimer' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'minimer' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'minimer' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'minimer' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'minimer' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'minimer' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'minimer' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'minimer' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'minimer' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'minimer' ),
		'arial'					=> esc_html__( 'Arial', 'minimer' ),
		'georgia'				=> esc_html__( 'Georgia', 'minimer' ),
		'verdana'				=> esc_html__( 'Verdana', 'minimer' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'minimer' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'minimer' ),
	'description'	=> esc_html__( 'Max-width of the container. Use default for full width.', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '1380',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'minimer' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '740',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Media Max-width
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-media-width',
	'label'			=> esc_html__( 'Content Media Max-width', 'minimer' ),
	'description'	=> esc_html__( 'Max-width of the content media', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Link Color
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-link',
	'label'			=> esc_html__( 'Link Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );
// Styling: Sidebar Color
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-sidebar',
	'label'			=> esc_html__( 'Sidebar Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Header Line
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header-line',
	'label'			=> esc_html__( 'Header Line Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Header Line Height
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'header-line-height',
	'label'			=> esc_html__( 'Header Line Height', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '10',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '20',
		'step'	=> '1',
	),
) );
// Styling: Header Color
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Comment Bubble
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-comment-bubble',
	'label'			=> esc_html__( 'Comment Bubble Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Category Label
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-category',
	'label'			=> esc_html__( 'Category Label Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Footer Color
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Color', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '#eeeeee',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'minimer_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'minimer' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'minimer' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
