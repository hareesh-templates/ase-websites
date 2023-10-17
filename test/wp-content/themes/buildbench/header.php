<?php
/**
 * The header template for the theme
 */
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php wp_head(); ?>
    </head>

<body <?php body_class(); ?> >
    <!-- nav search -->
    <div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="xs-search-panel">
					<?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div><!-- End xs modal -->
    <!-- end language switcher strart -->
<?php

$box_class = buildbench_option('general_body_box_layout');
$page_header_override = buildbench_meta_option(get_the_ID(), "page_header_override");

if($page_header_override == true) {
	$box_class = buildbench_meta_option(get_the_ID(), "page_body_box_layout");
}

?>
<div class="body-innner-content <?php echo esc_html($box_class == true ? "box-layout" : ''); ?>">

<?php

$header_style = buildbench_option('header_layout_style', 'solid');
$page_override_header = buildbench_meta_option(get_the_ID(), 'page_header_override');
$page_header_layout_style = buildbench_meta_option(get_the_ID(), 'page_header_layout_style', 'solid');

if($page_override_header == true):
	$header_style = $page_header_layout_style;
endif;

get_template_part('template-parts/headers/header', $header_style);
?>