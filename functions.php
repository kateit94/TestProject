<?php
/**
 * hotel-property functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hotel-property
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hotel_property_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hotel_property_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hotel-property, use a find and replace
		 * to change 'hotel-property' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hotel-property', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'hotel-property' ),
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
				'hotel_property_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'hotel_property_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hotel_property_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hotel_property_content_width', 640 );
}
add_action( 'after_setup_theme', 'hotel_property_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hotel_property_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hotel-property' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
		)
	);
    register_sidebar(
        array(
            'name'          => esc_html__( 'Top footer', 'hotel-property' ),
            'id'            => 'top-footer-widget',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Main footer 1', 'hotel-property' ),
            'id'            => 'main-footer-widget-1',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Main footer 2', 'hotel-property' ),
            'id'            => 'main-footer-widget-2',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Main footer 3', 'hotel-property' ),
            'id'            => 'main-footer-widget-3',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Main footer 4', 'hotel-property' ),
            'id'            => 'main-footer-widget-4',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Copyright footer', 'hotel-property' ),
            'id'            => 'copyright-footer-widget',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Property Single Sidebar', 'hotel-property' ),
            'id'            => 'property-single-sidebar-widget',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Property Single Bottom', 'hotel-property' ),
            'id'            => 'property-single-bottom-widget',
            'description'   => esc_html__( 'Add widgets here.', 'hotel-property' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

}
add_action( 'widgets_init', 'hotel_property_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hotel_property_scripts() {
	wp_enqueue_style( 'hotel-property-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hotel-property-style', 'rtl', 'replace' );

    //Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), 1 );

    wp_enqueue_style( 'hotel-property-min-style', get_stylesheet_directory_uri() . '/assets/css/theme.min.css', false, '1.0', 'all' );

    //Fancybox 3 CSS
    wp_enqueue_style( 'fancybox-style','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );

    //Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1', true );
    //Fancybox 3 JS
    wp_enqueue_script ('fancybox-script', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), '3.5.7', true);

	wp_enqueue_script( 'hotel-property-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'hotel-property-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), _S_VERSION, true );






    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'hotel_property_scripts' );

add_action( 'admin_enqueue_scripts', 'hotel_property_scripts_for_gallery' );
function hotel_property_scripts_for_gallery(){
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-widget');
    wp_enqueue_script('jquery-ui-sortable');

    if ( ! did_action( 'wp_enqueue_media' ) )
        wp_enqueue_media();

    wp_enqueue_script('admin_scripts',get_stylesheet_directory_uri() . '/assets/js/custom-gallery.js', array('jquery','jquery-ui-sortable') );
    wp_enqueue_style('admin_styles',get_stylesheet_directory_uri() . '/assets/css/admin.css', array(), 1 );
}

//* Enqueue Scripts and Styles for ACF
add_action( 'acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts' );
function my_acf_admin_enqueue_scripts() {

    // register script
    wp_register_script( 'acf-input-js', get_stylesheet_directory_uri() . '/assets/js/acf-input.js', false, '1.0.0');
    wp_enqueue_script( 'acf-input-js' );

}


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
 * CPT functions.
 */
require get_template_directory() . '/inc/cpt-functions.php';
/**
 * Shortcodes functions.
 */
require get_template_directory() . '/inc/shortcodes-functions.php';
/**
 * Custom gallery functions.
 */
require get_template_directory() . '/inc/custom-gallery.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


