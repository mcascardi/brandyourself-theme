<?php
/**
 * Functions.php
 *
 */

function brandyourself_theme_setup() {
  add_theme_support( 'title-tag' );

  $nav_locations = array(
			 'primary' => __( 'Primary Menu',      'twentyfifteen' ),
			 'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
			 );
  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus( $nav_locations );

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

  add_theme_support( 'automatic-feed-links' );
  
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

// register_nav_menu('main-nav');

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

// Register Custom Post Type
function work_experience_post_type() {

	$labels = array(
		'name'                  => _x( 'Work Experiences', 'Post Type General Name', 'brandyourself' ),
		'singular_name'         => _x( 'Work Experience', 'Post Type Singular Name', 'brandyourself' ),
		'menu_name'             => __( 'Work Experiences', 'brandyourself' ),
		'name_admin_bar'        => __( 'Work Experience', 'brandyourself' ),
		'archives'              => __( 'Experience Archives', 'brandyourself' ),
		'attributes'            => __( 'Experience Attributes', 'brandyourself' ),
		'parent_item_colon'     => __( 'Parent Item:', 'brandyourself' ),
		'all_items'             => __( 'All Experiences', 'brandyourself' ),
		'add_new_item'          => __( 'Add New Experience', 'brandyourself' ),
		'add_new'               => __( 'Add New', 'brandyourself' ),
		'new_item'              => __( 'New Experience', 'brandyourself' ),
		'edit_item'             => __( 'Edit Experience', 'brandyourself' ),
		'update_item'           => __( 'Update Experience', 'brandyourself' ),
		'view_item'             => __( 'View Experience', 'brandyourself' ),
		'view_items'            => __( 'View Experiencess', 'brandyourself' ),
		'search_items'          => __( 'Search Item', 'brandyourself' ),
		'not_found'             => __( 'Not found', 'brandyourself' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'brandyourself' ),
		'featured_image'        => __( 'Featured Image', 'brandyourself' ),
		'set_featured_image'    => __( 'Set featured image', 'brandyourself' ),
		'remove_featured_image' => __( 'Remove featured image', 'brandyourself' ),
		'use_featured_image'    => __( 'Use as featured image', 'brandyourself' ),
		'insert_into_item'      => __( 'Insert into item', 'brandyourself' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'brandyourself' ),
		'items_list'            => __( 'Items list', 'brandyourself' ),
		'items_list_navigation' => __( 'Items list navigation', 'brandyourself' ),
		'filter_items_list'     => __( 'Filter items list', 'brandyourself' ),
	);
	$args = array(
		'label'                 => __( 'Work Experience', 'brandyourself' ),
		'description'           => __( 'Work Experience', 'brandyourself' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work_experience', $args );

}
add_action( 'init', 'work_experience_post_type', 0 );
