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
		'name'                  => _x( 'Work Experiences', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Work Experience', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Work Experiences', 'text_domain' ),
		'name_admin_bar'        => __( 'Work Experience', 'text_domain' ),
		'archives'              => __( 'Experience Archives', 'text_domain' ),
		'attributes'            => __( 'Experience Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Experiences', 'text_domain' ),
		'add_new_item'          => __( 'Add New Experience', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Experience', 'text_domain' ),
		'edit_item'             => __( 'Edit Experience', 'text_domain' ),
		'update_item'           => __( 'Update Experience', 'text_domain' ),
		'view_item'             => __( 'View Experience', 'text_domain' ),
		'view_items'            => __( 'View Experiencess', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Work Experience', 'text_domain' ),
		'description'           => __( 'Work Experience', 'text_domain' ),
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
