<?php if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('Banner Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'       => 'sub_page_banner_style',
			'type'     => 'button_set',
			'title'    => esc_html__('Banner Style', 'buildbench'),
			'subtitle' => esc_html__('Box or Full width the banner.', 'buildbench'),
			'default'  => 'full',
			'options'  => array(
				'box'  => esc_html__('Box', 'buildbench'),
				'full' => esc_html__('Full', 'buildbench'),
			),
		),

		array(
			'id'         => 'page_banner_setting',
			'type'       => 'accordion',
			'accordions' => array(
				array(
					'title'  => esc_html__('Page Banner Settings', 'buildbench'),
					'icon'   => '',
					'fields' => array(
						array(
							'id'       => 'page_show_banner',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Banner?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the banner.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'       => 'page_show_breadcrumb',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Breadcrumb?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the Breadcrumb.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'    => 'banner_page_title',
							'type'  => 'text',
							'title' => esc_html__('Banner Title', 'buildbench'),
						),
						array(
							'id'             => 'banner_page_image',
							'type'           => 'media',
							'title'          => esc_html__('Banner Image', 'buildbench'),
							'url'            => false,
							'preview_width'  => 50,
							'preview_height' => 50,
						),
					)
				),
			),
		),

		array(
			'id'         => 'blog_banner_setting',
			'type'       => 'accordion',
			'accordions' => array(

				array(
					'title'  => esc_html__('Blog Banner Settings', 'buildbench'),
					'icon'   => '',
					'fields' => array(
						array(
							'id'       => 'blog_show_banner',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Banner?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the banner.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'       => 'blog_show_breadcrumb',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Breadcrumb?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the breadcrumb.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'    => 'banner_blog_title',
							'type'  => 'text',
							'title' => esc_html__('Banner Title', 'buildbench'),
						),
						array(
							'id'             => 'banner_blog_image',
							'type'           => 'media',
							'title'          => esc_html__('Banner Image', 'buildbench'),
							'url'            => false,
							'preview_width'  => 50,
							'preview_height' => 50,
						),
					)
				),
			),
		),

		array(
			'id'         => 'service_banner_settings',
			'type'       => 'accordion',
			'accordions' => array(

				array(
					'title'  => esc_html__('Service Banner Settings', 'buildbench'),
					'icon'   => '',
					'fields' => array(
						array(
							'id'       => 'show',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Banner?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the banner.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'       => 'show_breadcrumb',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Breadcrumb?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the breadcrumb.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'    => 'single_title',
							'type'  => 'text',
							'title' => esc_html__('Single Service Banner title', 'buildbench'),
						),
						array(
							'id'             => 'image',
							'type'           => 'media',
							'title'          => esc_html__('Banner Image', 'buildbench'),
							'url'            => false,
							'preview_width'  => 50,
							'preview_height' => 50,
						),
					)
				),
			),
		),

		array(
			'id'         => 'project_banner_settings',
			'type'       => 'accordion',
			'accordions' => array(

				array(
					'title'  => esc_html__('Project Banner Settings', 'buildbench'),
					'icon'   => '',
					'fields' => array(
						array(
							'id'       => 'show',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Banner?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the banner.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'       => 'show_breadcrumb',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Breadcrumb?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the breadcrumb.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'    => 'single_title',
							'type'  => 'text',
							'title' => esc_html__('Single project Banner title', 'buildbench'),
						),
						array(
							'id'             => 'image',
							'type'           => 'media',
							'title'          => esc_html__('Banner Image', 'buildbench'),
							'url'            => false,
							'preview_width'  => 50,
							'preview_height' => 50,
						),
					)
				),
			),
		),

		array(
			'id'         => 'shop_banner_settings',
			'type'       => 'accordion',
			'accordions' => array(

				array(
					'title'  => esc_html__('Shop Banner Settings', 'buildbench'),
					'icon'   => '',
					'fields' => array(
						array(
							'id'       => 'show',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Banner?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the banner.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'       => 'show_breadcrumb',
							'type'     => 'switcher',
							'title'    => esc_html__('Show Breadcrumb?', 'buildbench'),
							'subtitle' => esc_html__('Show or hide the breadcrumb.', 'buildbench'),
							'text_on'  => esc_html__('Yes', 'buildbench'),
							'text_off' => esc_html__('No', 'buildbench'),
							'default'  => true,
						),
						array(
							'id'    => 'title',
							'type'  => 'text',
							'title' => esc_html__('Shop Banner title', 'buildbench'),
						),
						array(
							'id'    => 'single_title',
							'type'  => 'text',
							'title' => esc_html__('Shop project Banner title', 'buildbench'),
						),
						array(
							'id'             => 'image',
							'type'           => 'media',
							'title'          => esc_html__('Banner Image', 'buildbench'),
							'url'            => false,
							'preview_width'  => 50,
							'preview_height' => 50,
						),
					)
				),
			),
		),

	)
));