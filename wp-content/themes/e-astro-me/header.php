<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-astro-me
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- header-area-start -->
<header class="header hero-header header-2 sticky-active">
    <div class="primary-header">
        <div class="primary-header-inner">
            <div class="header-logo d-lg-block">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img class="logo-dark" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-2.png" alt="<?php bloginfo( 'name' ); ?>">
                        <img class="logo-light" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-3.png" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                    <?php
                }
                ?>
            </div>
            <div class="header-right-wrap">
                <div class="header-menu-wrap">
                    <div class="mobile-menu-items">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container'      => false,
                                'menu_class'     => '',
                                'items_wrap'     => '<ul>%3$s</ul>',
                                'fallback_cb'    => false,
                            )
                        );
                        ?>
                    </div>
                    <div class="header-right">
                        <div class="header-right-item">
                            <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i class="fa-sharp fa-solid fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /.Main Header -->

<div class="mobile-side-menu">
    <div class="side-menu-content">
        <div class="side-menu-head">
            <div class="side-menu-logo">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a class="dark-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-2.png" alt="<?php bloginfo( 'name' ); ?>"></a>
                    <a class="light-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-3.png" alt="<?php bloginfo( 'name' ); ?>"></a>
                    <?php
                }
                ?>
            </div>
            <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
        </div>
        <div class="side-menu-wrap">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'mobile-menu',
                    'container'      => false,
                    'menu_class'     => '',
                    'items_wrap'     => '<ul>%3$s</ul>',
                    'walker'         => new WP_Bootstrap_Navwalker(), // Optional: If using Bootstrap nav walker
                    'fallback_cb'    => false,
                )
            );
            ?>
        </div>
    </div>
</div>
<!-- /.mobile-side-menu -->
<div class="mobile-side-menu-overlay"></div>

<div id="sidebar-area" class="sidebar-area">
    <button class="sidebar-trigger close">
        <svg class="sidebar-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7" style="enable-background: new 0 0 16 12.7" xml:space="preserve">
            <g>
                <rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16" height="2"></rect>
                <rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16" height="2"></rect>
            </g>
        </svg>
    </button>
    <div class="side-menu-content">
        <div class="side-menu-logo">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                ?>
                <a class="dark-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-2.png" alt="<?php bloginfo( 'name' ); ?>"></a>
                <a class="light-img" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-3.png" alt="<?php bloginfo( 'name' ); ?>"></a>
                <?php
            }
            ?>
        </div>
        <div class="side-menu-about">
            <div class="side-menu-header">
                <h3><?php esc_html_e( 'About Us', 'e-astro-me' ); ?></h3>
            </div>
            <p><?php esc_html_e( 'Welcome to E-Astro Company Ltd., a trusted trading company dedicated to delivering high-quality products and exceptional service to clients worldwide. We are a leading global trading company committed to excellence, innovation, and customer satisfaction with 40 years of industry and trading expertise. We specialize in trading LPG, LPG tank, raw cotton, raw yarn, capital machineries, electronics and Textile Product etc, ensuring competitive pricing, reliable supply chains, and seamless logistics. Our commitment to integrity, customer satisfaction, and market expertise has made us a preferred partner for businesses across South Asia region especially in Bangladesh and Myanmar. Whether sourcing, exporting, or distributing, we prioritize efficiency, transparency, and long-term relationships. At E-Astro Company Ltd, we bridge global markets with excellence—empowering your success through strategic trade solutions. Explore our offerings and discover how we can empower your business growth. Contact us today to discuss your trading needs—we’re here to make global commerce simpler, smarter, and more successful for you.', 'e-astro-me' ); ?></p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="rr-primary-btn"><?php esc_html_e( 'Contact Us', 'e-astro-me' ); ?></a>
        </div>
        <div class="side-menu-contact">
            <div class="side-menu-header">
                <h3><?php esc_html_e( 'Contact Us', 'e-astro-me' ); ?></h3>
            </div>
            <ul class="side-menu-list">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <p><?php esc_html_e( 'KOREA OFFICE - 285, Mokdongseo-Ro, YangCheon-Gu, Seoul, KOREA (08011)', 'e-astro-me' ); ?></p>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:82-2-2645-5640"><?php esc_html_e( '82-2-2645-5640', 'e-astro-me' ); ?></a>
                </li>
                <li>
                    <i class="fas fa-envelope-open-text"></i>
                    <a href="mailto:eastro@eastronew.com"><?php esc_html_e( 'eastro@eastronew.com', 'e-astro-me' ); ?></a>
                </li>
            </ul>
        </div>
        <ul class="side-menu-social">
            <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="g-plus"><a href="#"><i class="fab fa-fab fa-google-plus"></i></a></li>
        </ul>
    </div>
</div>
<!--/.sidebar-area-->

<div id="preloader">
    <div class="loading" data-loading-text="E.Astro"></div>
</div>
<!-- ./ preloader -->

<div id="smooth-wrapper">
    <div id="smooth-content">