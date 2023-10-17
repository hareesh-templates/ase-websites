<?php if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('General Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'             => 'general_main_logo',
			'type'           => 'media',
			'title'          => esc_html__('Main logo', 'buildbench'),
			'subtitle'       => esc_html__('It\'s the main logo, mostly it will be shown on "dark or coloreful" type area.', 'buildbench'),
			'url'            => false,
			'preview_width'  => 50,
			'preview_height' => 50,
		),

		array(
			'id'             => 'general_dark_logo',
			'type'           => 'media',
			'title'          => esc_html__('Dark logo', 'buildbench'),
			'subtitle'       => esc_html__('It will be shown on any "light background" type area.', 'buildbench'),
			'url'            => false,
			'preview_width'  => 50,
			'preview_height' => 50,
		),

		array(
			'id'       => 'general_body_box_layout',
			'type'     => 'switcher',
			'title'    => esc_html__('Body box layout', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => false,
		),

		array(
			'id'             => 'general_body_box_bg_image',
			'type'           => 'media',
			'title'          => esc_html__('Background Image', 'buildbench'),
			'subtitle'       => esc_html__('Body background image', 'buildbench'),
			'url'            => false,
			'preview_width'  => 50,
			'preview_height' => 50,
			'dependency'     => array('general_body_box_layout', '==', 'true')
		),

		array(
			'id'       => 'general_social_links',
			'type'     => 'group',
			'title'    => esc_html__('Social Links', 'buildbench'),
			'subtitle' => esc_html__('Add social links and it\'s icon class bellow. These are all fontaweseome-4.7 icons.', 'buildbench'),
			'fields'   => array(
				array(
					'id'    => 'title',
					'type'  => 'text',
					'title' => esc_html__('Title', 'buildbench'),
				),
				array(
					'id'    => 'icon_class',
					'type'  => 'icon',
					'title' => esc_html__('Social Icon', 'buildbench'),
				),
				array(
					'id'    => 'url',
					'type'  => 'text',
					'title' => esc_html__('Social link', 'buildbench'),
				),
			),
		),

	)
));