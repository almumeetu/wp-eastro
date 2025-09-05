<?php
/**
 * e-astro-me functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package e-astro-me
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function e_astro_me_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on e-astro-me, use a find and replace
		* to change 'e-astro-me' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'e-astro-me', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'e-astro-me' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'e_astro_me_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'e_astro_me_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function e_astro_me_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'e_astro_me_content_width', 640 );
}
add_action( 'after_setup_theme', 'e_astro_me_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function e_astro_me_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'e-astro-me' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'e-astro-me' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'e_astro_me_widgets_init' );

/**
 * Theme Assets Enqueue
 */
function e_astro_me_enqueue_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // === CSS ===
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('carousel-ticker', get_template_directory_uri() . '/assets/css/carouselTicker.css', array(), $theme_version, 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), $theme_version, 'all');
    wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/css/venobox.min.css', array(), $theme_version, 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version, 'all');

    // === JS (Vendor First) ===
    wp_enqueue_script('jquery'); // WP bundled jQuery
    
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap-bundle.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/vendor/gsap.min.js', array(), $theme_version, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/vendor/imagesloaded-pkgd.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('carousel-ticker', get_template_directory_uri() . '/assets/js/vendor/jquery.carouselTicker.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/vendor/jquery.isotope.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/vendor/meanmenu.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/vendor/nice-select.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/js/vendor/odometer.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('scroll-smoother', get_template_directory_uri() . '/assets/js/vendor/scroll-smoother.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('scroll-trigger', get_template_directory_uri() . '/assets/js/vendor/scroll-trigger.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('split-type', get_template_directory_uri() . '/assets/js/vendor/split-type.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/vendor/swiper.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/js/vendor/venobox.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/vendor/waypoints.min.js', array('jquery'), $theme_version, true);

    // === Main JS ===
    wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'e_astro_me_enqueue_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

