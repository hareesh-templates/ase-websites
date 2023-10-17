<?php

if(!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

// Create a sub-tab
CSF::createSection($prefix, array(
	'parent' => 'theme_settings', // The slug id of the parent section
	'title'  => esc_html__('Header Settings', 'buildbench'),
	'fields' => array(

		array(
			'id'       => 'header_layout_style',
			'type'     => 'image_select',
			'title'    => esc_html__('Header Style', 'buildbench'),
			'subtitle' => esc_html__('This is the site\'s main header style.', 'buildbench'),
			'options'  => array(
				'transparent' => BUILDBENCH_IMG . '/admin/header-style/style1.png',
				'standard'    => BUILDBENCH_IMG . '/admin/header-style/style4.png',
				'classic'     => BUILDBENCH_IMG . '/admin/header-style/style3.png',
				'box'         => BUILDBENCH_IMG . '/admin/header-style/style5.png',
				'solid'       => BUILDBENCH_IMG . '/admin/header-style/style6.png',
			),
			'default'  => 'solid',
		),

		array(
			'id'       => 'header_nav_sticky',
			'type'     => 'switcher',
			'title'    => esc_html__('Sticky Header', 'buildbench'),
			'subtitle' => esc_html__('Do you want to enable sticky nav?', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => false,
		),

		array(
			'id'       => 'header_contact_info_show',
			'type'     => 'switcher',
			'title'    => esc_html__('Contact', 'buildbench'),
			'subtitle' => esc_html__('Do you want to show contact?', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => true,
		),

		array(
			'id'       => 'header_contact_phone_title',
			'type'     => 'text',
			'title'    => esc_html__('Contact Phone Title', 'buildbench'),
			'subtitle' => esc_html__('Give contact phone number title.', 'buildbench'),
			'default'  => esc_html__('GIVE US A CALL', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_phone',
			'type'     => 'text',
			'title'    => esc_html__('Contact Phone', 'buildbench'),
			'subtitle' => esc_html__('Give contact phone number.', 'buildbench'),
			'default'  => esc_html__('+001 458 654 528', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_link',
			'type'     => 'text',
			'title'    => esc_html__('Contact Phone Link', 'buildbench'),
			'subtitle' => esc_html__('Give contact phone number link for example [ tel:123-456-7890 ].', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_mail_title',
			'type'     => 'text',
			'title'    => esc_html__('Contact Mail Title', 'buildbench'),
			'subtitle' => esc_html__('Give mail title.', 'buildbench'),
			'default'  => esc_html__('SEND MAIL TO US', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_mail',
			'type'     => 'text',
			'title'    => esc_html__('Contact Mail', 'buildbench'),
			'subtitle' => esc_html__('Give mail address.', 'buildbench'),
			'default'  => esc_html__('contact@domain.com', 'buildbench'),
		),

		array(
			'id'       => 'header_mail_link',
			'type'     => 'text',
			'title'    => esc_html__('Contact Mail Link', 'buildbench'),
			'subtitle' => esc_html__('Give contact mail link for example [ mailto:example@example.com ].', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_address_title',
			'type'     => 'text',
			'title'    => esc_html__('Contact Office Address Title', 'buildbench'),
			'subtitle' => esc_html__('Give office address title.', 'buildbench'),
			'default'  => esc_html__('VISIT OUR OFFICE AT', 'buildbench'),
		),

		array(
			'id'       => 'header_contact_address',
			'type'     => 'textarea',
			'title'    => esc_html__('Contact Office Address', 'buildbench'),
			'subtitle' => esc_html__('Give office address.', 'buildbench'),
			'default'  => esc_html__('105 Roosevelt Street CA', 'buildbench'),
		),

		array(
			'id'       => 'header_address_link',
			'type'     => 'text',
			'title'    => esc_html__('Address link', 'buildbench'),
			'subtitle' => esc_html__('Give address link. you can use google map link.', 'buildbench'),
		),

		array(
			'id'       => 'header_nav_search_section',
			'type'     => 'switcher',
			'title'    => esc_html__('Search Button Show', 'buildbench'),
			'subtitle' => esc_html__('Do you want to show search button in header?', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => false,
		),

		array(
			'id'       => 'header_quota_button',
			'type'     => 'switcher',
			'title'    => esc_html__('Quote Button Show', 'buildbench'),
			'subtitle' => esc_html__('Do you want to show search button in header?', 'buildbench'),
			'text_on'  => esc_html__('Yes', 'buildbench'),
			'text_off' => esc_html__('No', 'buildbench'),
			'default'  => true,
		),

		array(
			'id'         => 'header_quota_text',
			'type'       => 'text',
			'title'      => esc_html__('Quote Text', 'buildbench'),
			'subtitle'   => esc_html__('Navigation quote text.', 'buildbench'),
			'default'    => esc_html__('Get a quote', 'buildbench'),
			'dependency' => array('header_quota_button', '==', 'true'),
		),

		array(
			'id'         => 'header_quota_url',
			'type'       => 'text',
			'title'      => esc_html__('Quote Link', 'buildbench'),
			'subtitle'   => esc_html__('Navigation quote link.', 'buildbench'),
			'default'    => '#',
			'dependency' => array('header_quota_button', '==', 'true'),
		),

		array(
			'id'         => 'header_nav_shopping_cart_section',
			'type'       => 'switcher',
			'title'      => esc_html__('Shopping Cart Show', 'buildbench'),
			'subtitle'   => esc_html__('Do you want to show shopping cart button in header?', 'buildbench'),
			'text_on'    => esc_html__('Yes', 'buildbench'),
			'text_off'   => esc_html__('No', 'buildbench'),
			'default'    => true,
			'dependency' => array('header_layout_style', 'any', 'classic,solid'),
		),
	),
));