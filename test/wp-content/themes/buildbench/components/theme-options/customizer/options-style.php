<?php
if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('Style Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'          => 'style_body_bg',
			'type'        => 'color',
			'title'       => esc_html__('Body Background', 'buildbench'),
			'subtitle'    => esc_html__('Site\'s main background color.', 'buildbench'),
			'default'     => '#ffffff',
			'output'      => 'body',
			'output_mode' => 'background-color', // Supports css properties like ( border-color, color, background-color etc )

		),

		array(
			'id'       => 'style_primary',
			'type'     => 'color',
			'title'    => esc_html__('Primary Color', 'buildbench'),
			'subtitle' => esc_html__('Site\'s main color.', 'buildbench'),
		),

		array(
			'id'       => 'secondary_color',
			'type'     => 'color',
			'title'    => esc_html__('Secondary Color', 'buildbench'),
			'subtitle' => esc_html__('Site\'s secondary color.', 'buildbench'),
		),

		array(
			'id'       => 'title_color',
			'type'     => 'color',
			'title'    => esc_html__('Title Color', 'buildbench'),
			'subtitle' => esc_html__('Blog title color.', 'buildbench'),
			'output'   => array(' .entry-header .entry-title a', 'h1', 'h2', 'h3', 'h4', 'h4', 'h5', 'h6'),
		),

		array(
			'id'       => 'body_font',
			'type'     => 'typography',
			'title'    => esc_html__('Body Font', 'buildbench'),
			'subtitle' => esc_html__('Choose the typography for the body.', 'buildbench'),
			'output'   => 'body',
			'extra_styles' => true,
			'default'        => array(
				'font-family' => 'Open Sans',
				'font-weight' => '400',
				'font-size'   => '16',
				'unit'        => 'px',
				'type'        => 'google',
				'extra-styles' => ['400', '500', '600', '700', '800']
			),
			'font_style'     => false,
			'text_align'     => false,
			'line_height'    => true,
			'letter_spacing' => true,
			'text_align'     => false,
			'text_transform' => false,
			'color'          => true,
			'subset'         => false,
		),

		array(
			'id'       => 'heading_font_one',
			'type'     => 'typography',
			'title'    => esc_html__('Heading H1 and H2 Fonts', 'buildbench'),
			'subtitle' => esc_html__('This is for heading google fonts.', 'buildbench'),
			'output'   => ['h1', 'h2'],

			'default'        => array(
				'font-family' => 'Montserrat',
				'font-weight' => '700',
				'unit'        => 'px',
				'type'        => 'google',
			),
			'font_style'     => true,
			'font_weight'    => true,
			'text_align'     => false,
			'line_height'    => true,
			'letter_spacing' => true,
			'text_align'     => false,
			'text_transform' => false,
			'color'          => true,
			'subset'         => false,
		),

		array(
			'id'             => 'heading_font_two',
			'type'           => 'typography',
			'title'          => esc_html__('Heading H3 Fonts', 'buildbench'),
			'subtitle'       => esc_html__('This is for heading google fonts.', 'buildbench'),
			'output'         => 'h3',
			'default'        => array(
				'font-family' => 'Montserrat',
				'font-weight' => '700',
				'font-size'   => '',
				'unit'        => 'px',
				'type'        => 'google',
			),
			'font_style'     => true,
			'text_align'     => false,
			'line_height'    => true,
			'letter_spacing' => true,
			'text_align'     => false,
			'text_transform' => false,
			'color'          => true,
			'subset'         => false,
		),

		array(
			'id'       => 'heading_font_three',
			'type'     => 'typography',
			'title'    => esc_html__('Heading H4 Fonts', 'buildbench'),
			'subtitle' => esc_html__('This is for heading google fonts.', 'buildbench'),
			'output'   => 'h4',

			'default'        => array(
				'font-family' => 'Montserrat',
				'font-weight' => '700',
				'font-size'   => '',
				'unit'        => 'px',
				'type'        => 'google',
			),
			'font_style'     => true,
			'text_align'     => false,
			'line_height'    => true,
			'letter_spacing' => true,
			'text_align'     => false,
			'text_transform' => false,
			'color'          => true,
			'subset'         => false,
		),

	),
));