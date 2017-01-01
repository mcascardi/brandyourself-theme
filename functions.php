<?php
/**
 * Functions.php
 *
 */

function brandyourself_theme_setup() {
  add_theme_support( 'title-tag' );

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( array(
	'primary' => __( 'Primary Menu',      'twentyfifteen' ),
	'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
	'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
				    ) );

  /*
   * Enable support for Post Formats.
   *
   * See: https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

  /*
   * Enable support for custom logo.
   *
   * @since Twenty Fifteen 1.5
   */
  add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

  /*
   * This theme styles the visual editor to resemble the theme style,
   * specifically font, colors, icons, and column width.
   */
  // add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

  // Indicate widget sidebars can use selective refresh in the Customizer.
  add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'brandyourself_theme_setup' );



/**
 * Theme URI
 *
 * Alias for  get_stylesheet_directory_uri()
 *
 * @return string
 */
function theme_uri()
{
    $path = get_stylesheet_directory_uri();
    $start = strpos($path, '//');
    if ($start !== false) {
        return substr($path, $start);
    }
    return $path;
}

/**
 * Theme Path
 *
 * Alias for  get_stylesheet_directory()
 *
 * @return string
 */
function theme_path()
{
    return get_stylesheet_directory();
}

register_nav_menu('main-nav');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function brandyourself_widgets_init() {
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => 'left_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'brandyourself_widgets_init' );