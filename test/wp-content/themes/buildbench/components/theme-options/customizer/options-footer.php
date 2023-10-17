<?php if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('Footer Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'       => 'footer_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Footer Style', 'buildbench'),
			'subtitle' => esc_html__('Select header footer style.', 'buildbench'),
			'options'  => array(
				'style-1' => BUILDBENCH_IMG . '/style/footer/style-1.png',
				'style-2' => BUILDBENCH_IMG . '/style/footer/style-2.png',
			),
			'default'  => 'solid'
		),

		array(
			'id'         => 'footer_mailchimp',
			'type'       => 'text',
			'title'      => esc_html__('MailChimp Shortcode', 'buildbench'),
			'dependency' => array('footer_style', '==', 'style-1')
		),

		array(
			'id'             => 'footer_bg_img',
			'type'           => 'media',
			'title'          => esc_html__('Footer Background', 'buildbench'),
			'url'            => false,
			'preview_width'  => 50,
			'preview_height' => 50,
			'button_title'   => esc_html__('Add Image', 'buildbench'),
		),

		array(
			'id'       => 'footer_bg_color',
			'type'     => 'color',
			'title'    => esc_html__('Copyright Background color', 'buildbench'),
			'subtitle' => esc_html__('You can change the copyright background color with rgba color or solid color', 'buildbench'),
			'default'  => '#101010'
		),

		array(
			'id'       => 'footer_copyright_color',
			'type'     => 'color',
			'title'    => esc_html__('Footer Copyright color', 'buildbench'),
			'subtitle' => esc_html__('You can change the footer\'s background color with rgba color or solid color', 'buildbench'),
		),

		array(
			'id'       => 'footer_social_links',
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

		array(
			'id'       => 'footer_copyright',
			'type'     => 'textarea',
			'title'    => esc_html__('Copyright Text', 'buildbench'),
			'subtitle' => esc_html__('This text will be shown at the footer of all pages.', 'buildbench'),
			'default'  => sprintf(esc_html__('Buildbench. All rights reserved', 'buildbench'), date('Y')),
		),

		array(
			'id'       => 'footer_padding_top',
			'type'     => 'text',
			'title'    => esc_html__('Footer Padding Top', 'buildbench'),
			'subtitle' => esc_html__('Use footer padding Top.', 'buildbench'),
			'default'  => '250px',
		),

		array(
			'id'       => 'back_to_top',
			'type'     => 'switcher',
			'title'    => esc_html__('Back to Top', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => true,
		),

	)
));