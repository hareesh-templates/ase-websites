<?php

// Control core classes for avoid errors

if(class_exists('CSF')) {

	// include framework options
	include_framework_options(
		$option_list = [
			'default',
			'general',
			'style',
			'header',
			'banner',
			'blog',
			'footer',
		],
		// Folder name
		"customizer",
	);

	// include posts options
	include_framework_options(
		$option_list = [
			'posts',
			'page',
			'service',
			'project',
			'team',
		],
		// Folder name
		"posts",
	);
}
