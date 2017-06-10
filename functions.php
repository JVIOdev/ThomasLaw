<?php
/**
 * Thomaslawplc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Thomaslawplc
 */

if ( ! function_exists( 'thomaslawplc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thomaslawplc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Thomaslawplc, use a find and replace
	 * to change 'thomaslawplc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'thomaslawplc', get_template_directory() . '/languages' );

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
add_image_size( 'home-middle', 300, 190, true );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'thomaslawplc' ),
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
	add_theme_support( 'custom-background', apply_filters( 'thomaslawplc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'thomaslawplc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thomaslawplc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thomaslawplc_content_width', 640 );
}
add_action( 'after_setup_theme', 'thomaslawplc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thomaslawplc_widgets_init() {
	register_sidebar(array(
	'name'          => __('Page Sidebar', 'complete'),
	'id'            => 'sidebar-page',
	'description'   => __('When you assign widgets to this area, it will be displayed on all pages.', 'complete'),
	'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s"><div class="widget_wrap">'.$editbutton,
	'after_widget'  => '<span class="widget_corner"></span></div></div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));
	
	register_sidebar(array(
	'name'          => __('Blog Sidebar', 'complete'),
	'id'            => 'sidebar-blog',
	'description'   => __('When you assign widgets to this area, it will be displayed on all posts and blog.', 'complete'),
	'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s"><div class="widget_wrap">'.$editbutton,
	'after_widget'  => '<span class="widget_corner"></span></div></div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));	
 
	register_sidebar( array(
		'name'          => __( 'Header Topbar Left Widget', 'complete' ),
		'description'   => __( 'Appears on header', 'complete' ),
		'id'            => 'headerleft',
		'before_widget' => '<div class="left">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Topbar Right Widget', 'complete' ),
		'description'   => __( 'Appears on header', 'complete' ),
		'id'            => 'headerright',
		'before_widget' => '<div class="right">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) ); 
	
	register_sidebar( array(
		'name'          => __( 'Footer 1 Column', 'complete' ),
		'description'   => __( 'Appears on footer 1 columns', 'complete' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 2 Columns', 'complete' ),
		'description'   => __( 'Appears on footer 2 columns', 'complete' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 3 Columns', 'complete' ),
		'description'   => __( 'Appears on footer 3 columns', 'complete' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 4 Columns', 'complete' ),
		'description'   => __( 'Appears on footer 4 columns', 'complete' ),
		'id'            => 'footer-4',
		'before_widget' => '<div id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'thomaslawplc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thomaslawplc_scripts() {

	wp_enqueue_style('thomaslawplc-animated_css',get_template_directory_uri().'/assets/css/animate.min.css', 'animated_css' );
	wp_enqueue_style('thomaslawplc-awesome_css',get_template_directory_uri().'/assets/css/bootstrap.min.css', 'bootstrap_css' );
	wp_enqueue_style( 'thomaslawplc-style', get_stylesheet_uri() );

	wp_enqueue_script('thomaslawplc_bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), true);
	wp_enqueue_script('thomaslawplc_testimonialjs',get_template_directory_uri().'/assets/js/jquery.bxslider.min.js', array('jquery'), true);
	wp_enqueue_script('complete_galjs1',get_template_directory_uri().'/assets/js/jquery.flexslider-min.js', array('jquery'), true);
	wp_enqueue_script('complete_galjs3',get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thomaslawplc_scripts' );


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

include_once ( get_template_directory() . '/inc/aq_resizer.php');

if ( !class_exists( 'ReduxFramework' ) && file_exists( get_template_directory()  . '/inc/redux/framework.php' ) ) {
    require_once get_template_directory() . '/inc/redux/framework.php';
}

if ( ! class_exists( 'Redux' ) ) {
    return;
}


/**
 * Redux params
 */

$opt_name = 'tl_settings';

$args = array(
    'opt_name'             => $opt_name,
    'display_name'         => wp_kses( sprintf( __( 'Theme settings%s%s', 'bg' ), '', '</a>' ), wp_kses_allowed_html( 'post' )),
    'display_version'      => '1.0',
    'menu_type'            => 'menu',
    'allow_sub_menu'       => true,
    'menu_title'           => esc_html__( 'Theme settings', 'bg' ),
    'page_title'           => esc_html__( 'Theme settings', 'bg' ),
    'google_api_key'       => '',
    'google_update_weekly' => false,
    'async_typography'     => true,
    'admin_bar'            => true,
    'admin_bar_icon'       => 'dashicons-admin-generic',
    'admin_bar_priority'   => '100',
    'global_variable'      => '',
    'dev_mode'             => false,
    'update_notice'        => false,
    'customizer'           => false,
    'allow_tracking' => false,
    'ajax_save' => false,
    'page_priority'        => '27.11',
    'page_parent'          => 'themes.php',
    'page_permissions'     => 'manage_options',
    'menu_icon'            => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTcuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDIyNC43MjYgMjI0LjcyNiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjI0LjcyNiAyMjQuNzI2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggZD0iTTIyMy42MTIsMTA5LjU4NkwxOTAuNSwzNS43NTJjLTAuMDAxLTAuMDAyLTAuMDAyLTAuMDA0LTAuMDAzLTAuMDA2bC0wLjA0My0wLjA5NmMtMC4xMTEtMC4yNDctMC4yNDMtMC40NzktMC4zODktMC43ICBjLTAuMDM5LTAuMDYtMC4wODYtMC4xMTQtMC4xMjctMC4xNzFjLTAuMTMxLTAuMTgyLTAuMjcyLTAuMzUzLTAuNDI0LTAuNTE0Yy0wLjA2LTAuMDYzLTAuMTIxLTAuMTI1LTAuMTg0LTAuMTg1ICBjLTAuMTY4LTAuMTU5LTAuMzQ1LTAuMzA2LTAuNTMzLTAuNDRjLTAuMDQ5LTAuMDM2LTAuMDk0LTAuMDc2LTAuMTQ1LTAuMTFjLTAuMjM2LTAuMTU2LTAuNDg2LTAuMjktMC43NDYtMC40MDUgIGMtMC4wNzQtMC4wMzMtMC4xNTEtMC4wNTctMC4yMjctMC4wODZjLTAuMjA0LTAuMDc4LTAuNDExLTAuMTQzLTAuNjI1LTAuMTk0Yy0wLjA4OC0wLjAyMS0wLjE3NS0wLjA0Mi0wLjI2NC0wLjA1OCAgYy0wLjI5My0wLjA1NC0wLjU5MS0wLjA5LTAuODk2LTAuMDloLTU4LjQyOGMtMS0zLjExMS0yLjk0My01Ljc5NC01LjQ4NS03LjczN3YtNy4yNjJjMC0yLjc2MS0yLjIzOS01LTUtNWgtOS4zMzQgIGMtMi43NjEsMC01LDIuMjM5LTUsNXY3LjM4MWMtMi40NjUsMS45MzMtNC4zNDcsNC41NzItNS4zMjYsNy42MTlIMzguNzM0Yy0wLjMwNSwwLTAuNjAyLDAuMDM3LTAuODk2LDAuMDkgIGMtMC4wOSwwLjAxNi0wLjE3NiwwLjAzNy0wLjI2NCwwLjA1OGMtMC4yMTQsMC4wNTEtMC40MjIsMC4xMTYtMC42MjUsMC4xOTRjLTAuMDc2LDAuMDI5LTAuMTUzLDAuMDUzLTAuMjI3LDAuMDg2ICBjLTAuMjYsMC4xMTUtMC41MSwwLjI0OC0wLjc0NiwwLjQwNWMtMC4wNTEsMC4wMzQtMC4wOTYsMC4wNzQtMC4xNDUsMC4xMWMtMC4xODgsMC4xMzQtMC4zNjUsMC4yOC0wLjUzMywwLjQ0ICBjLTAuMDY0LDAuMDYtMC4xMjQsMC4xMjItMC4xODUsMC4xODVjLTAuMTUzLDAuMTYxLTAuMjkzLDAuMzMzLTAuNDI0LDAuNTE0Yy0wLjA0MiwwLjA1OC0wLjA4OCwwLjExMi0wLjEyNywwLjE3MSAgYy0wLjE0NiwwLjIyMS0wLjI3OCwwLjQ1My0wLjM4OSwwLjdsLTAuMDQzLDAuMDk2Yy0wLjAwMSwwLjAwMi0wLjAwMiwwLjAwNC0wLjAwMywwLjAwNkwwLjg5NywxMDkuODQ4ICBDMC4zMzUsMTEwLjY1NywwLDExMS42MzYsMCwxMTIuNjk2YzAsMjEuMzU4LDE3LjM3NiwzOC43MzQsMzguNzM0LDM4LjczNGMyMS4zNTgsMCwzOC43MzQtMTcuMzc2LDM4LjczNC0zOC43MzQgIGMwLTEuMDYtMC4zMzQtMi4wMzgtMC44OTctMi44NDdMNDYuNDU2LDQyLjY5Nmg1MC45ODZjMS4wMDcsMi45MDUsMi44MzEsNS40MjQsNS4yMDQsNy4yODZ2MTI1LjM4MUg1OC4zMDggIGMtMS44NzEsMC0zLjU4NiwxLjA0NS00LjQ0NCwyLjcwOEw0MC4xMSwyMDQuNzM4Yy0wLjc5OSwxLjU1LTAuNzMzLDMuNDA1LDAuMTc0LDQuODk0YzAuOTA4LDEuNDg5LDIuNTI1LDIuMzk4LDQuMjcsMi4zOThoMTM1LjUxOSAgYzAuMDA2LTAuMDAxLDAuMDEyLDAsMC4wMiwwYzIuNzYxLDAsNS0yLjIzOSw1LTVjMC0wLjk4LTAuMjgyLTEuODk0LTAuNzY5LTIuNjY1bC0xMy41NjMtMjYuMjk0ICBjLTAuODU4LTEuNjYzLTIuNTczLTIuNzA4LTQuNDQ0LTIuNzA4SDEyMS45OFY1MC4xMDFjMi40NDktMS44NzMsNC4zMzQtNC40MzYsNS4zNjMtNy40MDVoNTAuODI4bC0zMC40NzUsNjcuOTU0ICBjLTAuMDA4LDAuMDE4LTAuMDEyLDAuMDM2LTAuMDIsMC4wNTRjLTAuMDIzLDAuMDU0LTAuMDQsMC4xMS0wLjA2MiwwLjE2NWMtMC4wOSwwLjIyOS0wLjE2MiwwLjQ2My0wLjIxNywwLjY5OSAgYy0wLjAxNCwwLjA2Mi0wLjAzMiwwLjEyMi0wLjA0NCwwLjE4NGMtMC4wNTUsMC4yODctMC4wODMsMC41NzYtMC4wODcsMC44NjZjMCwwLjAyNy0wLjAwOCwwLjA1MS0wLjAwOCwwLjA3OCAgYzAsMjEuMzU4LDE3LjM3NiwzOC43MzQsMzguNzM0LDM4LjczNHMzOC43MzQtMTcuMzc2LDM4LjczNC0zOC43MzRDMjI0LjcyNiwxMTEuNTE0LDIyNC4yOTgsMTEwLjQ0MiwyMjMuNjEyLDEwOS41ODZ6ICAgTTY0LjY0NiwxMDcuNjk2SDEyLjgyMmwyNS45MTItNTcuNzgxTDY0LjY0NiwxMDcuNjk2eiBNMTE4LjIyNiwzNy41M2MwLDMuMjE3LTIuNjE3LDUuODMzLTUuODMzLDUuODMzICBjLTMuMjE3LDAtNS44MzQtMi42MTctNS44MzQtNS44MzNjMC0zLjIxNywyLjYxNy01LjgzMyw1LjgzNC01LjgzM0MxMTUuNjA5LDMxLjY5NiwxMTguMjI2LDM0LjMxMywxMTguMjI2LDM3LjUzeiBNMTU5Ljk4LDEwNy42OTYgIGwyNS45MTMtNTcuNzgxbDI1LjkxMiw1Ny43ODFIMTU5Ljk4eiIgZmlsbD0iI0ZGRkZGRiIvPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4=',
    'last_tab'             => '',
    'page_icon'            => 'icon-themes',
    'page_slug'            => 'tl_options',
    'save_defaults'        => true,
    'default_show'         => false,
    'default_mark'         => '',
    'show_import_export'   => true,
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => false,
    'output_tag'           => true,
    'database'             => '',
    'system_info'          => false
);

$GLOBALS['redux_notice_check'] = 1;

/* Footer social icons */

$args['intro_text'] = '';
$args['footer_text'] = '';


/**
 * Initialize Redux
 */

Redux::setArgs( $opt_name , $args );


/**
 * Include redux option fields (settings)
 */

require get_template_directory() . '/inc/options-fields.php';


/**
 * Append custom css to redux framework admin panel
 *
 * @return void
 * @since  1.0
 */

if ( !function_exists( 'bg_redux_custom_css' ) ):
    function bg_redux_custom_css() {
        wp_register_style( 'bg-redux-custom', get_template_directory_uri().'/assets/css/admin/options.css', array( 'redux-admin-css' ), bg_THEME_VERSION, 'all' );
        wp_enqueue_style( 'bg-redux-custom' );
    }
endif;

add_action( 'redux/page/bg_settings/enqueue', 'bg_redux_custom_css' );


/**
 * Remove redux framework admin page
 *
 * @return void
 * @since  1.0
 */

if ( !function_exists( 'bg_remove_redux_page' ) ):
    function bg_remove_redux_page() {
        remove_submenu_page( 'tools.php', 'redux-about' );
    }
endif;

add_action( 'admin_menu', 'bg_remove_redux_page', 99 );

if ( !function_exists( 'tl_get_option' ) ):
	function tl_get_option( $option ) {

		global $tl_settings;

		if ( empty( $tl_settings ) ) {
			$tl_settings = get_option( 'tl_settings' );
		}

		if ( isset( $tl_settings[$option] ) ) {
			return is_array( $tl_settings[$option] ) && isset( $tl_settings[$option]['url'] ) ? $tl_settings[$option]['url'] : $tl_settings[$option];
		} else {
			return false;
		}

	}
endif;

function custom_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

function custom_excerpt_length( $length ) {     
    return 55; //Change this number to any integer you like.
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//make a better wordpress excert
function better_excerpts(
        $words = 40,
        $link_text = 'Read more &#187;',
        $allowed_tags = '',
        $container = 'p', $smileys = 'no'
)
{
global $post;
if ( $allowed_tags == 'all' ) $allowed_tags = '<a>,<i>,<em>,<b>,<strong>,<ul>,<ol>,<li>,<span>,<blockquote>,<img>';
$text = preg_replace('/[.*]/', '', strip_tags($post->post_content, $allowed_tags));
$text = explode(' ', $text);
$tot = count($text);
for ( $i=0; $i<$words; $i++ ) : $output .= $text[$i] . ' '; endfor;
if ( $smileys == "yes" ) $output = convert_smilies($output);
?><?php echo force_balance_tags($output) ?><?php if ( $i < $tot ) : ?> ...<?php else : ?><?php endif; ?>
<?php if ( $i < $tot ) :
if ( $container == 'p' || $container == 'div' ) : ?><?php endif;
if ( $container != 'plain' ) : ?><<?php echo $container; ?>><?php if ( $container == 'div' ) : ?><?php endif; endif; ?>
<a href="<?php the_permalink(); ?>" title="<?php echo $link_text; ?>">Read more</a><?php
if ( $container == 'div' ) : ?><?php endif; if ( $container != 'plain' ) : ?></<?php echo $container; ?>><?php endif;
if ( $container == 'plain' || $container == 'span' ) : ?><?php endif;
endif;
}


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';
/*******************************
 PAGINATION
********************************
 * Retrieve or display pagination code.
 *
 * The defaults for overwriting are:
 * 'page' - Default is null (int). The current page. This function will
 *      automatically determine the value.
 * 'pages' - Default is null (int). The total number of pages. This function will
 *      automatically determine the value.
 * 'range' - Default is 3 (int). The number of page links to show before and after
 *      the current page.
 * 'gap' - Default is 3 (int). The minimum number of pages before a gap is 
 *      replaced with ellipses (...).
 * 'anchor' - Default is 1 (int). The number of links to always show at begining
 *      and end of pagination
 * 'before' - Default is '<div class="emm-paginate">' (string). The html or text 
 *      to add before the pagination links.
 * 'after' - Default is '</div>' (string). The html or text to add after the
 *      pagination links.
 * 'title' - Default is '__('Pages:')' (string). The text to display before the
 *      pagination links.
 * 'next_page' - Default is '__('&raquo;')' (string). The text to use for the 
 *      next page link.
 * 'previous_page' - Default is '__('&laquo')' (string). The text to use for the 
 *      previous page link.
 * 'echo' - Default is 1 (int). To return the code instead of echo'ing, set this
 *      to 0 (zero).
 *
 * @author Eric Martin <eric@ericmmartin.com>
 * @copyright Copyright (c) 2009, Eric Martin
 * @version 1.0
 *
 * @param array|string $args Optional. Override default arguments.
 * @return string HTML content, if not displaying.
 */
 
function emm_paginate($args = null) {
	$defaults = array(
		'page' => null, 'pages' => null,
		'range' => 3, 'gap' => 3, 'anchor' => 1,
		'before' => '<div class="pagination-box"><ul class="pagination-list">', 'after' => '</ul></div>',
		'title' => __('Pages:'),
		'nextpage' => __('Next &raquo;'), 'previouspage' => __('&laquo Previous'),
		'echo' => 1
	);

	$r = wp_parse_args($args, $defaults);
	extract($r, EXTR_SKIP);

	if (!$page && !$pages) {
		global $wp_query;

		$page = get_query_var('paged');
		$page = !empty($page) ? intval($page) : 1;

		$posts_per_page = intval(get_query_var('posts_per_page'));
		$pages = intval(ceil($wp_query->found_posts / $posts_per_page));
	}

	$output = "";
	if ($pages > 1) {
		$output .= "$before";
		$ellipsis = "<li><span class='emm-gap'>...</span></li>";

		if ($page > 1 && !empty($previouspage)) {
			$output .= "<li><a href='" . get_pagenum_link($page - 1) . "' class='emm-prev'>$previouspage</a></li>";
		}

		$min_links = $range * 2 + 1;
		$block_min = min($page - $range, $pages - $min_links);
		$block_high = max($page + $range, $min_links);
		$left_gap = (($block_min - $anchor - $gap) > 0) ? true : false;
		$right_gap = (($block_high + $anchor + $gap) < $pages) ? true : false;

		if ($left_gap && !$right_gap) {
			$output .= sprintf('%s%s%s',
				emm_paginate_loop(1, $anchor),
				$ellipsis,
				emm_paginate_loop($block_min, $pages, $page)
			);
		}
		else if ($left_gap && $right_gap) {
			$output .= sprintf('%s%s%s%s%s',
				emm_paginate_loop(1, $anchor),
				$ellipsis,
				emm_paginate_loop($block_min, $block_high, $page),
				$ellipsis,
				emm_paginate_loop(($pages - $anchor + 1), $pages)
			);
		}
		else if ($right_gap && !$left_gap) {
			$output .= sprintf('%s%s%s',
				emm_paginate_loop(1, $block_high, $page),
				$ellipsis,
				emm_paginate_loop(($pages - $anchor + 1), $pages)
			);
		}
		else {
			$output .= emm_paginate_loop(1, $pages, $page);
		}

		if ($page < $pages && !empty($nextpage)) {
			$output .= "<li><a href='" . get_pagenum_link($page + 1) . "' class='emm-next'>$nextpage</a></li>";
		}

		$output .= $after;
	}

	if ($echo) {
		echo $output;
	}

	return $output;
}

/**
 * Helper function for pagination which builds the page links.
 *
 * @access private
 * @param int $start The first link page.
 * @param int $max The last link page.
 * @return int $page Optional, default is 0. The current page.
 */
function emm_paginate_loop($start, $max, $page = 0) {
	$output = "";
	for ($i = $start; $i <= $max; $i++) {
		$output .= ($page === intval($i))
			? "<li><a href='" . get_pagenum_link($i) . "' class='active'>$i</a></li>"
			: "<li><a href='" . get_pagenum_link($i) . "' class='emm-page'>$i</a></li>";
	}
	return $output;
}


remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links');
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');