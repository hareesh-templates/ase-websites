<?php
// Buildbench team metabox
CSF::createMetabox('buildbench_team_settings', array(
	'title'     => esc_html__('Team Settings', 'buildbench'),
	'post_type' => 'ts-team',
	'theme'     => 'light',
	'data_type' => 'unserialize',
));
// Buildbench team fields
CSF::createSection('buildbench_team_settings', array(
	'fields' => array(
		array(
			'title' => esc_html__('Designation', 'buildbench'),
			'type'  => 'text',
			'id'    => 'member_designation',
		),
		array(
			'title'  => esc_html__('Social Icons', 'buildbench'),
			'type'   => 'group',
			'id'     => 'member_social',
			'fields' => array(
				array(
					'title' => esc_html__('Title', 'buildbench'),
					'type'  => 'text',
					'id'    => 'social_title'
				),
				array(
					'title' => esc_html__('Link', 'buildbench'),
					'id'    => 'social_url',
					'type'  => 'text',
				),
				array(
					'title' => esc_html__('Social Icon', 'buildbench'),
					'id'    => 'social_icon',
					'type'  => 'icon',
				),
			),
		),
	)
));