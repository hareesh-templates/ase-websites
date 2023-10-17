<?php
// Buildbench service metabox
CSF::createMetabox('buildbench_service_settings', array(
	'title'     => esc_html__('Service Settings', 'buildbench'),
	'post_type' => 'ts-service',
	'theme'     => 'light',
	'data_type' => 'unserialize',
));
// Buildbench service fields
CSF::createSection('buildbench_service_settings', array(
	'fields' => array(
		array(
			'title' => esc_html__('Service Icon', 'buildbench'),
			'desc'  => esc_html__('Service icon type image', 'buildbench'),
			'type'  => 'media',
			'url'   => false,
			'id'    => 'service_icon',
		),
		array(
			'title' => esc_html__('Service Banner image', 'buildbench'),
			'desc'  => esc_html__('Upload a service single page header image', 'buildbench'),
			'help'  => esc_html__("This default header image will be used for all your services.", 'buildbench'),
			'type'  => 'media',
			'url'   => false,
			'id'    => 'service_header_image',
		),
	)
));