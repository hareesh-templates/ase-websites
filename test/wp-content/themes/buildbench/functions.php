<?php
/**
 * theme's main functions and globally usable variables, contants etc
 * added: v1.0
 * textdomain: buildbench, class: BUILDBENCH, var: $buildbench_, constants: BUILDBENCH_, function: buildbench_
 */

// shorthand contants
// ------------------------------------------------------------------------
define('BUILDBENCH_THEME', 'BUILDBENCH Construction WordPress Theme');
define('BUILDBENCH_VERSION', '2.1.2');
define('BUILDBENCH_MINWP_VERSION', '5.3');

// shorthand contants for theme assets url
// ------------------------------------------------------------------------
define('BUILDBENCH_THEME_URI', get_template_directory_uri());
define('BUILDBENCH_IMG', BUILDBENCH_THEME_URI . '/assets/images');
define('BUILDBENCH_CSS', BUILDBENCH_THEME_URI . '/assets/css');
define('BUILDBENCH_JS', BUILDBENCH_THEME_URI . '/assets/js');

// shorthand contants for theme assets directory path
// ----------------------------------------------------------------------------------------
define('BUILDBENCH_THEME_DIR', get_template_directory());
define('BUILDBENCH_IMG_DIR', BUILDBENCH_THEME_DIR . '/assets/images');
define('BUILDBENCH_CSS_DIR', BUILDBENCH_THEME_DIR . '/assets/css');
define('BUILDBENCH_JS_DIR', BUILDBENCH_THEME_DIR . '/assets/js');

define('BUILDBENCH_CORE', BUILDBENCH_THEME_DIR . '/core');
define('BUILDBENCH_COMPONENTS', BUILDBENCH_THEME_DIR . '/components');
define('BUILDBENCH_EDITOR', BUILDBENCH_COMPONENTS . '/editor');
define('BUILDBENCH_EDITOR_ELEMENTOR', BUILDBENCH_EDITOR . '/elementor');
define('BUILDBENCH_EDITOR_GUTENBERG', BUILDBENCH_EDITOR . '/gutenberg');
define('BUILDBENCH_INSTALLATION', BUILDBENCH_CORE . '/installation-fragments');
define('BUILDBENCH_REMOTE_CONTENT', esc_url('http://demo.themewinter.com/wp/demo-content/buildbench'));
define('BUILDBENCH_LIVE_URL', esc_url('https://demo.themewinter.com/wp/buildbench/'));

// set up the content width value based on the theme's design

// ----------------------------------------------------------------------------------------
if(!isset($content_width)) {
	$content_width = 800;
}

// set up theme default and register various supported features.
// ----------------------------------------------------------------------------------------

function buildbench_setup() {

	// make the theme available for translation
	$lang_dir = BUILDBENCH_THEME_DIR . '/languages';
	load_theme_textdomain('buildbench', $lang_dir);

	// add support for post formats
	add_theme_support('post-formats', [
		'standard', 'image', 'video', 'audio', 'gallery', 'woocommerce',
	]);

	// add support for automatic feed links
	add_theme_support('automatic-feed-links');

	// let WordPress manage the document title
	add_theme_support('title-tag');

	// add support for post thumbnails
	add_theme_support('post-thumbnails');

	// hard crop center center
	set_post_thumbnail_size(750, 465, ['center', 'center']);

	// woocommerce support
	add_theme_support('woocommerce', array(
		'thumbnail_image_width'         => 600,
		'gallery_thumbnail_image_width' => 300,
		'single_image_width'            => 600,
	));
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');

	// register navigation menus
	register_nav_menus(
		[
			'primary'    => esc_html__('Primary Menu', 'buildbench'),
			'footermenu' => esc_html__('Footer Menu', 'buildbench'),
		]
	);

	// HTML5 markup support for search form, comment form, and comments
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	));
	/*
	 * Enable support for wide alignment class for Gutenberg blocks.
	 */
	add_theme_support('align-wide');
	add_theme_support('editor-styles');
	add_theme_support('wp-block-styles');

}

add_action('after_setup_theme', 'buildbench_setup');

//Gutenberg optimization enqueue files
add_action('enqueue_block_editor_assets', 'buildbench_action_enqueue_block_editor_assets');
function buildbench_action_enqueue_block_editor_assets() {
	wp_enqueue_style('buildbench-fonts', buildbench_google_fonts_url(['Montserrat:300,300i,400,400i,500,600,700,800,900', 'Open Sans:400,700']), null, BUILDBENCH_VERSION);
	wp_enqueue_style('buildbench-gutenberg-editor-font-awesome-styles', BUILDBENCH_CSS . '/font-awesome.css', null, BUILDBENCH_VERSION);
	wp_enqueue_style('buildbench-gutenberg-editor-customizer-styles', BUILDBENCH_CSS . '/gutenberg-editor-custom.css', null, BUILDBENCH_VERSION);
	wp_enqueue_style('buildbench-gutenberg-editor-styles', BUILDBENCH_CSS . '/gutenberg-custom.css', null, BUILDBENCH_VERSION);
	wp_enqueue_style('buildbench-gutenberg-blog-styles', BUILDBENCH_CSS . '/blog.css', null, BUILDBENCH_VERSION);
}

// include the init.php
// ----------------------------------------------------------------------------------------
require_once BUILDBENCH_CORE . '/init.php';
require_once BUILDBENCH_COMPONENTS . '/editor/elementor/elementor.php';

// framework option include
require_once BUILDBENCH_COMPONENTS . '/theme-options/init.php';
add_filter('csf_fa4', '__return_true');

if(class_exists('CSF')) {
	add_filter( 'csf_welcome_page', '__return_false' );	
	require BUILDBENCH_THEME_DIR . '/compatibility/migration-controller.php';
	require BUILDBENCH_THEME_DIR . '/compatibility/mig-unyson-to-codestar.php';
	(new \Buildbench\Compatibility\Migration_Controller())->init();
}