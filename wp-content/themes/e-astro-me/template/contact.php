<?php
/*
 * Template Name: Contact Us Template
 * Description: A custom Overseas page template for the theme.
 */

get_header(); ?>

  <!-- Contact Us Page -->
            <section class="cta-section pt-120 pb-80">
                <div class="container mt-80">
                    <div class="cta-wrap text-center">
                        <div class="section-heading text-center mb-80 mt-80">
                            <h4 class="sub-heading after-none" data-text-animation="fade-in"
                                        data-duration="1.5">Let’s make something great together!</h4>
                        </div>
                        <div class="office-details mt-5">
                            <div class="row g-4">

                                <!-- Office 1 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card office-card shadow-sm h-100">
                                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/office/1.png" class="card-img-top" alt="E-ASTRO Office">
                                        <div class="card-body">
                                            <h5 class="card-title">E-ASTRO CO.,LTD.</h5>
                                            <p class="card-text">서울시 양천구 목동서로 285</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Office 2 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card office-card shadow-sm h-100">
                                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/office/2.png" class="card-img-top" alt="HK-Dubai Office">
                                        <div class="card-body">
                                            <h5 class="card-title">HK-Dubai Office</h5>
                                            <p class="card-text">
                                                Rm 1303, 13/F Kwong Fat Comm Bldg Hong Kong.<br>
                                                Office – 319, Al Qaizi Building, Dubai
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Office 3 -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card office-card shadow-sm h-100">
                                        <img src="<?php echo esc_url(get_template_directory_uri( )); ?>/assets/img/office/3.png" class="card-img-top" alt="Ukraine Office">
                                        <div class="card-body">
                                            <h5 class="card-title">Ukraine Office</h5>
                                            <p class="card-text">Blvd Druthby narodiv 14-16, Kyiv, Ukraine</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Map Section -->
            <section class="map-section container mb-120">
                <div class="map-responsive">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.879248225262!2d126.86067231538208!3d37.53325427980221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9e55a1857b25%3A0x5b6e761fc4e37d96!2s285%20Mokdongseo-ro%2C%20Yangcheon-gu%2C%20Seoul%2C%20South%20Korea!5e0!3m2!1sen!2sbd!4v1691051234567"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

            <!-- Contact Form Section -->
            <section class="contact-form-section pb-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-form p-5 shadow rounded bg-white">
                                <h3 class="mb-4 text-center">Send us a message</h3>
                                <form action="#" method="POST">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" id="name" class="form-control" placeholder="Enter your name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" id="email" class="form-control"
                                            placeholder="Enter your email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input type="text" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="mb-4">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea id="message" class="form-control" rows="5"
                                            placeholder="Write your message here..."></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary px-4">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php
get_footer();