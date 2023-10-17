<?php
//
// Set a unique slug-like ID
$prefix = 'buildbench_customizer_options';

//
// Create customize options
CSF::createCustomizeOptions($prefix);

//
// Create a top-tab
CSF::createSection($prefix, array(
	'id'       => 'theme_settings', // Set a unique slug-like ID
	'title'    => esc_html__('Theme Settings', 'buildbench'),
	'priority' => 1,
));
