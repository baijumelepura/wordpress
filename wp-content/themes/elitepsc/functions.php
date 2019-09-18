<?php
/**
 * elitepsc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elitepsc
 */

if ( ! function_exists( 'elitepsc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function elitepsc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on elitepsc, use a find and replace
		 * to change 'elitepsc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'elitepsc', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'elitepsc' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'elitepsc_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'elitepsc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elitepsc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'elitepsc_content_width', 640 );
}
add_action( 'after_setup_theme', 'elitepsc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elitepsc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'elitepsc' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'elitepsc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'elitepsc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function elitepsc_scripts() {

/*
* JS
*/
$link = "{$_SERVER['REQUEST_URI']}";
$link_array = explode('/',$link);
foreach( $link_array as $link_array){
	if( $link_array != '')$link_arrays[]=$link_array;
}


if($link_arrays[0] != 'book-now'){
wp_enqueue_script( 'elitepsc_1', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_2', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_3', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_4', get_template_directory_uri() . '/js/css3-animate-it.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_5', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_6', get_template_directory_uri() . '/js/css3-animate-it.js', array(), '20151215', true );
wp_enqueue_script( 'elitepsc_7', get_template_directory_uri() . '/js/bootstrap-dropdownhover.min.js', array(), '20151215', true );
 wp_enqueue_script( 'elitepsc_8', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
 wp_enqueue_script( 'elitepsc_9', get_template_directory_uri() . '/js/gallery.js', array(), '20151215', true );
 wp_enqueue_script( 'elitepsc_10', get_template_directory_uri() . '/js/player.min.js', array(), '20151215', true );
 wp_enqueue_script( 'elitepsc_11', get_template_directory_uri() . '/js/comming-soon.js', array(), '20151215', true );
 wp_enqueue_script( 'elitepsc_12', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );
 // CSS
 wp_enqueue_style( 'elitepsc-style',get_template_directory_uri().'/css/bootstrap.min.css' );
 wp_enqueue_style( 'elitepsc-style_1',get_template_directory_uri().'/css/style.css');
 wp_enqueue_style( 'elitepsc-style_3',get_template_directory_uri(). '/css/responsive.css');
}
if($link_arrays[0] == 'book-now'){
	wp_enqueue_script( 'elitepsc_1', get_template_directory_uri() . '/appointment/js/jquery-2.1.4.min.js', array(), '20151215', true );
	wp_enqueue_script( 'elitepsc_2', get_template_directory_uri() . '/appointment/js/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_script( 'elitepsc_3', get_template_directory_uri() . '/appointment/js/wickedpicker.js', array(), '20151215', true );

	wp_enqueue_style( 'elitepsc-style',get_template_directory_uri().'/appointment/css/jquery-ui.css' );
	wp_enqueue_style( 'elitepsc-style_1',get_template_directory_uri().'/appointment/css/wickedpicker.css');
	wp_enqueue_style( 'elitepsc-style_3',get_template_directory_uri(). '/appointment/css/style.css');
}



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	 wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elitepsc_scripts' );

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

