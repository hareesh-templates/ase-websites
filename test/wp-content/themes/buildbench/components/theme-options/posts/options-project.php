<?php
// Buildbench project metabox
CSF::createMetabox('buildbench_project_zoon', array(
	'title'     => esc_html__('Project settings', 'buildbench'),
	'post_type' => 'ts-projects',
	'theme'     => 'light',
	'data_type' => 'unserialize',

));
// Buildbench projects fields
CSF::createSection('buildbench_project_zoon', array(
	'fields' => array(
		array(
			'title' => esc_html__('Project zone', 'buildbench'),
			'desc'  => esc_html__('Add your Project zone', 'buildbench'),
			'type'  => 'text',
			'id'    => 'project_zone',
		),
		array(
			'title' => esc_html__('Project Banner image', 'buildbench'),
			'desc'  => esc_html__('Upload a project single page header image', 'buildbench'),
			'help'  => esc_html__("This default header image will be used for all your project.", 'buildbench'),
			'type'  => 'media',
			'url'   => false,
			'id'    => 'project_header_image',
		),
	)
));