<?php if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('Blog Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'       => 'blog_sidebar',
			'type'     => 'select',
			'title'    => esc_html__('Sidebar', 'buildbench'),
			'subtitle' => esc_html__('Select where to show the blog sidebar.', 'buildbench'),
			'options'  => array(
				'1' => esc_html__('No sidebar', 'buildbench'),
				'2' => esc_html__('Left Sidebar', 'buildbench'),
				'3' => esc_html__('Right Sidebar', 'buildbench'),
			),
			'default'  => '3'
		),

		array(
			'id'       => 'blog_author',
			'type'     => 'switcher',
			'title'    => esc_html__('Blog author', 'buildbench'),
			'subtitle' => esc_html__('Do you want to show blog author?', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => false,
		)
	)
));