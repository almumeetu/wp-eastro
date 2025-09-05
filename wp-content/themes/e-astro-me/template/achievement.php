<?php
/*
 * Template Name: Achievement Template
 * Description: A custom Overseas page template for the theme.
 */

get_header(); ?>

     <section class="certificates-awerd pb-130 pt-130">
                <div class="container">
                    <div class="section-heading text-center mb-80 mt-80">
                        <h4 class="sub-heading after-none" data-text-animation="fade-in"
                                        data-duration="1.5">Certification and Award State</h4>
                        
                    </div>

                    <div class="row">
                        <div class="col-xl-12 pb-3">
                            <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/awrds/company-aciement.png" alt="awerd img">
                        </div>
                        <div class="col-xl-12 pb-3">
                            <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/awrds/company-achevemnt-2.png" alt="awerd img">
                        </div>
                        <div class="col-xl-12 pb-3">
                            <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/images/social-contribution.png" alt="awerd img">
                        </div>
                    </div>
            </section>

<?php
get_footer();