<?php
/*
 * Template Name: Gallery Template
 * Description: A custom Overseas page template for the theme.
 */

get_header(); ?>

          <!-- Gallery Section Start Form Here -->
            <section class=" container pt-120 pb-120">

                <div class="section-heading text-center mt-80 mb-80 ">

                    <h4 class="sub-heading after-none" data-text-animation="fade-in"
                                        data-duration="1.5">Our Gallery</h4>
                </div>
                <div class="gallery-item large">
                    <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/gallery/2.jpg" alt="Shipping Container">
                </div>
                <div class="gallery-row">
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/lpg/lpg-5.jpg" alt="Bathroom">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/lpg/lpg-7.jpg" alt="Factory">
                    </div>
                </div>
                <div class="gallery-item large">
                    <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/lpg/lpg-1.jpg" alt="Shipping Container">
                </div>
                <div class="gallery-row">
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/lpg/lpg-2.jpg" alt="Sweaters">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/lpg/lpg-3.jpg" alt="Escalators in Mall">
                    </div>
                </div>
                <div class="gallery-row">
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/gallery/4.png" alt="Sweaters">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/gallery/5.png" alt="Escalators in Mall">
                    </div>
                </div>
            </section>
            <!-- Gallery Section End Form Here -->
<?php
get_footer();