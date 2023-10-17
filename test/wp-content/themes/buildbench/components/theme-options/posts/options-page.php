<?php
// Buildbench page metabox init
CSF::createMetabox('buildbench_page_meta', array(
	'title'     => esc_html__('Page settings', 'buildbench'),
	'post_type' => 'page',
	'theme'     => 'light',
	'data_type' => 'unserialize',
));

// Buildbench page metabox filelds
CSF::createSection('buildbench_page_meta', array(
	'fields' => array(
		array(
			'title' => esc_html__('Banner title', 'buildbench'),
			'desc'  => esc_html__('Add your Page hero title', 'buildbench'),
			'id'    => 'header_title',
			'type'  => 'text',
		),
		array(
			'title'   => esc_html__('Banner image', 'buildbench'),
			'desc'    => esc_html__('Upload a page header image', 'buildbench'),
			'help'    => esc_html__('This default header image will be used for all your service.', 'buildbench'),
			'id'      => 'header_image',
			'type'    => 'media',
			'url'     => false,
			'library' => 'image',
		),

		array(
			'id'       => 'page_header_override',
			'type'     => 'switcher',
			'title'    => esc_html__('Override default header layout?', 'buildbench'),
			'subtitle' => esc_html__('Override customizer header layout', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => false,
		),
		array(
			'id'         => 'page_header_layout_style',
			'type'       => 'image_select',
			'title'      => esc_html__('Header Style', 'buildbench'),
			'subtitle'   => esc_html__('This is the site\'s single page header style.', 'buildbench'),
			'options'    => array(
				'transparent' => BUILDBENCH_IMG . '/admin/header-style/style1.png',
				'standard'    => BUILDBENCH_IMG . '/admin/header-style/style4.png',
				'classic'     => BUILDBENCH_IMG . '/admin/header-style/style3.png',
				'box'         => BUILDBENCH_IMG . '/admin/header-style/style5.png',
				'solid'       => BUILDBENCH_IMG . '/admin/header-style/style6.png',
			),
			'default'    => 'solid',
			'dependency' => array('page_header_override', '==', 'true'),
		),
		array(
			'id'         => 'page_body_box_layout',
			'type'       => 'switcher',
			'title'      => esc_html__('Box Layout', 'buildbench'),
			'subtitle'   => esc_html__('Body box layout', 'buildbench'),
			'text_on'    => esc_html__('Yes', 'buildbench'),
			'text_off'   => esc_html__('No', 'buildbench'),
			'default'    => false,
			'dependency' => array('page_header_override', '==', 'true'),
		),
		array(
			'id'             => 'page_body_box_bg_image',
			'type'           => 'media',
			'title'          => esc_html__('Background Image', 'buildbench'),
			'subtitle'       => esc_html__('Body background image', 'buildbench'),
			'url'            => false,
			'preview_width'  => 50,
			'preview_height' => 50,
			'dependency'     => array('page_body_box_layout', '==', 'true')
		),
	)
));