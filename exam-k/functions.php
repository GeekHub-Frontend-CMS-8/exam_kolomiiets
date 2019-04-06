<?php
/**
 * gh-kolomiiets functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gh-kolomiiets
 */

show_admin_bar( false );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function exam_k_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'exam_k_content_width', 640 );
}
add_action( 'after_setup_theme', 'exam_k_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function exam_k_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'exam-k' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'exam-k' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'exam_k_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function exam_k_scripts() {
	wp_enqueue_style( 'exam-k-style', get_stylesheet_uri() );
    wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style( 'awes', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );


    //----jqvery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script('jquery');


	//mans+iz
    wp_enqueue_script( 'asonry.pkgd.min', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js' );
    wp_enqueue_script( 'asonry', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js' );
    wp_enqueue_script( 'izotop', 'https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js', 'jquery', true );
    wp_enqueue_script( 'mans', get_template_directory_uri() . '/js/mans_inz.js', array(), 'jquery', true );
    wp_enqueue_script( 'masns', get_template_directory_uri() . '/js/sort.js', array(), 'jquery', true );
    //slick
    wp_enqueue_script('slick_slider',  'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',array(), 'jquery', true );
    wp_enqueue_script( 'exam-k-navigation', get_template_directory_uri() . '/js/main.js', array(), 'jquery', true );



}
add_action( 'wp_enqueue_scripts', 'exam_k_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/** Post type registration  */
require get_template_directory() . '/inc/post-type-registrations.php';

/** Meta-box registration  */
require get_template_directory() . '/inc/meta-box.php';
