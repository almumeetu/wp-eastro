<?php
/*
 * Template Name: Director List
 */

get_header(); ?>

<div class="container pt-130 pb-120">
    <div class="section-heading text-center mb-80 mt-80">
        <h4 class="sub-heading after-none">Director List</h4>
    </div>

    <div class="mb-4">
        <div class="row gy-lg-0 gy-5">

            <?php
            $directors = new WP_Query(array(
                'post_type'      => 'director',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            ));

            if( $directors->have_posts() ):
                while( $directors->have_posts() ): $directors->the_post();
                    $position = get_post_meta( get_the_ID(), 'director_position', true );
                    $facebook = get_post_meta( get_the_ID(), 'director_facebook', true );
                    $twitter  = get_post_meta( get_the_ID(), 'director_twitter', true );
            ?>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="team-item fade-top">
                    <div class="team-thumb">
                        <div class="gradient-color"></div>
                        <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/default.png" alt="team">
                        <?php endif; ?>

                        <ul class="team-social-2">
                            <?php if($facebook): ?>
                                <li class="facebook"><a href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php endif; ?>
                            <?php if($twitter): ?>
                                <li class="twitter"><a href="<?php echo esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span><?php echo esc_html($position); ?></span>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
                echo "<p>No directors found.</p>";
            endif;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
