<?php

$header_contact_info_show     = buildbench_option('header_contact_info_show', false);
$header_contact_phone_title   = buildbench_option('header_contact_phone_title');
$header_contact_phone         = buildbench_option('header_contact_phone');
$header_contact_mail_title    = buildbench_option('header_contact_mail_title');
$header_contact_mail          = buildbench_option('header_contact_mail');
$header_contact_address_title = buildbench_option('header_contact_address_title');
$header_contact_address       = buildbench_option('header_contact_address');

$header_nav_search_section    = buildbench_option('header_nav_search_section', true);
$header_quota_button          = buildbench_option('header_quota_button', true);
$header_quota_text            = buildbench_option('header_quota_text', esc_html__('Get a quote', 'buildbench'));
$header_quota_url             = buildbench_option('header_quota_url');
$header_nav_sticky            = buildbench_option('header_nav_sticky', false);

//   header contact info link
$header_contact_link            = buildbench_option('header_contact_link');
$header_mail_link               = buildbench_option('header_mail_link');
$header_address_link            = buildbench_option('header_address_link');
$show_shopping_cart           = buildbench_option('header_nav_shopping_cart_section', true);

?>

<div class="ts-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-7">

                <div class="top-bar">
                    <ul class="header-nav-right-info">
                        <li>
                            <?php if (isset($header_contact_link) && $header_contact_link  != '') { ?>
                                <a href="<?php echo esc_url($header_contact_link); ?>">
                                    <i class="fa fa-phone-square"></i>
                                    <?php echo esc_html($header_contact_phone); ?>
                                </a>
                            <?php } else { ?>
                                <i class="fa fa-phone-square"></i>
                                <?php echo esc_html($header_contact_phone); ?>
                            <?php } ?>
                        </li>
                        <li>
                            <?php if (isset($header_address_link) && $header_address_link  != '') { ?>
                                <a href="<?php echo esc_url($header_address_link); ?>" target="_blank">
                                    <i class="fa fa-globe"></i>
                                    <?php echo esc_html($header_contact_address); ?>
                                </a>
                            <?php } else { ?>
                                <i class="fa fa-globe"></i>
                                <?php echo esc_html($header_contact_address); ?>
                            <?php } ?>

                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top-bar text-right">
                    <ul class="unstyled">

                        <?php
                        $social_links = buildbench_option('general_social_links', []);
                        foreach ($social_links as $sl) :
                            $class = 'ts-' . str_replace('fa fa-', '', $sl['icon_class']);
                            $title = $sl["title"];
                        ?>
                            <li class="<?php echo esc_attr($class); ?>">
                                <a title="<?php echo esc_attr($title); ?>" target="_blank" href="<?php echo esc_url($sl['url']); ?>">
                                    <span class="social-icon"> <i class="<?php echo esc_attr($sl['icon_class']); ?>"></i> </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!-- Top bar end -->
            </div>
        </div>
    </div>
</div>
<!-- Top bar end -->

<header id="header" class="header-solid">
    <!-- navbar container start -->
    <div class="navbar-container <?php echo esc_attr($header_nav_sticky == true ? 'navbar-sticky' : ''); ?> ">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pt-10 pb-10">
                <a class="logo navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img 
                    class="img-fluid" 
                    src="<?php echo esc_url( buildbench_src( 'general_dark_logo', BUILDBENCH_IMG . '/logo-dark.png' ) ); ?>" 
                    alt="<?php bloginfo('name'); ?>">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-nav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php get_template_part('template-parts/navigations/nav', 'primary'); ?>
                <ul class="nav-right form-inline ml-auto">
                    <?php if ($header_nav_search_section == true) : ?>
                        <li class="nav-search-btn">
                            <a href="#modal-popup-2" class="xs-modal-popup"><i class="icon icon-search1"></i></a>
                            <!-- xs modal -->
                        </li>
                    <?php endif; ?>
                         <!-- header cart -->
                         <?php if ($show_shopping_cart == true && class_exists('WooCommerce')) : ?>

                            <li class="cart-link">
                                <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'buildbench'); ?>">
                                    <span class="icon icon-cart"></span>
                                    <sup><?php echo sprintf(_n('%d item', '%d', WC()->cart->cart_contents_count, 'buildbench'), WC()->cart->cart_contents_count); ?></sup>

                                </a>
                            </li>

                            <?php endif; ?>
                            <!-- hader cart end -->
                    <?php if ($header_quota_button == true && $header_quota_text != '') : ?>
                        <li class="nav-button">
                            <a href="<?php echo esc_url($header_quota_url); ?>" class="quote-btn">
                                <?php echo esc_html($header_quota_text); ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul><!-- Right menu end -->

            </nav>

        </div>
    </div>
    <!-- navbar contianer end -->
</header>