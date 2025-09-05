<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #smooth-content and #smooth-wrapper divs and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-astro-me
 */
?>
            <footer class="footer-section footer-2 bg-dark-1">
                <div class="shape">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/shapes/footer-shape.png" alt="<?php esc_attr_e( 'Footer Shape', 'e-astro-me' ); ?>">
                </div>
                <div class="container">
                    <div class="footer-top">
                        <div class="footer-logo">
                            <?php
                            if ( has_custom_logo() ) {
                                the_custom_logo();
                            } else {
                                ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo-2.png" alt="<?php bloginfo( 'name' ); ?>">
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                        <p>
                            <?php esc_html_e( 'KOREA OFFICE - 285, Mokdongseo-Ro, YangCheon-Gu, Seoul, KOREA (08011)', 'e-astro-me' ); ?><br>
                            <?php esc_html_e( 'TEL ', 'e-astro-me' ); ?>
                            <a href="tel:82-2-2645-5640"><?php esc_html_e( '82-2-2645-5640', 'e-astro-me' ); ?></a>
                            <?php esc_html_e( ' E-mail ', 'e-astro-me' ); ?>
                            <a href="mailto:eastro@eastronew.com"><?php esc_html_e( 'eastro@eastronew.com', 'e-astro-me' ); ?></a>
                        </p>
                    </div>
                </div>
                <div class="copyright-area">
                    <div class="container">
                        <div class="row copyright-content justify-content-center">
                            <div class="col-lg-6 col-md-12">
                                <p class="mb-0"><?php printf( esc_html__( 'COPYRIGHT © %s EASTRO CO, LTD. All RIGHTS RESERVED.', 'e-astro-me' ), date( 'Y' ) ); ?></p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <ul class="copyright-list">
                                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'security' ) ) ?: home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Security', 'e-astro-me' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacy-policy' ) ) ?: home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Privacy & Cookie Policy', 'e-astro-me' ); ?></a></li>
                                    <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'terms-of-services' ) ) ?: home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Terms of Services', 'e-astro-me' ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ./ footer-section -->

            <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
            <!-- ./ scrollup -->

            <div id="theme-toogle" class="switcher-button">
                <div class="switcher-button-inner-left"></div>
                <div class="switcher-button-inner"></div>
            </div>
            <!-- ./ theme-toogle -->

        </div><!-- #smooth-content -->
    </div><!-- #smooth-wrapper -->

<?php wp_footer(); ?>
</body>
</html>