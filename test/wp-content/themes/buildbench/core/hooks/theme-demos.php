<?php
function buildbench_import_files() {
	$demo_content_installer = BUILDBENCH_REMOTE_CONTENT;

	return [
		[
			'import_file_name'           => 'Buildbench Default',
			'import_file_url'            => $demo_content_installer . '/default/main.xml',
			'import_customizer_file_url' => $demo_content_installer . '/default/customizer.dat',
			'import_widget_file_url'     => $demo_content_installer . '/default/widgets.wie',
			'import_preview_image_url'   => $demo_content_installer . '/default/screenshot.png',
			'preview_url'                => BUILDBENCH_LIVE_URL
		],
		[
			'import_file_name'           => 'WooCommerce Demo',
			'import_file_url'            => $demo_content_installer . '/woo/main.xml',
			'import_customizer_file_url' => $demo_content_installer . '/woo/customizer.dat',
			'import_widget_file_url'     => $demo_content_installer . '/woo/widgets.wie',
			'import_preview_image_url'   => $demo_content_installer . '/woo/screenshot.png',
			'preview_url'                => BUILDBENCH_LIVE_URL . 'buildbench-woo/'
		]
	];
}

add_action('pt-ocdi/import_files', 'buildbench_import_files');

function buildbench_after_import($selected_import) {
	// Set homepage in imported demo
	$page_setup_array = [
		"Buildbench Default" => [
			"slug" => "home one",
		],
		"WooCommerce Demo"   => [
			"slug" => "Home",
		],
	];
	if(is_array($page_setup_array)) {
		foreach($page_setup_array as $i => $values) {
			if($i === $selected_import['import_file_name']) {
				foreach($values as $key => $value) {
					//Set Front page
					$page = get_page_by_title($values['slug']);
					if(isset($page->ID)) {
						update_option('page_on_front', $page->ID);
						update_option('show_on_front', 'page');
					}
				}
			}
		}
	}

	// Set menu after demo import
	$primary_menu = get_term_by('name', 'main', 'nav_menu');
	$footer_menu = get_term_by('name', 'Footer Menu', 'nav_menu');
	set_theme_mod( 'nav_menu_locations' , array(
			'primary' => $primary_menu->term_id,
			'footer' => $footer_menu->term_id,
		)
	);
}

add_action('pt-ocdi/after_import', 'buildbench_after_import');