<?php
/**
 * Dynasty3 functions and definitions
 *
 * @package WordPress
 * @subpackage Dynasty3
 * @since Dynasty3 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet. *
 * @since Dynasty3 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}
if ( ! function_exists( 'dynasty3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 * @since Dynasty3 1.0
 */

function dynasty3_setup() {
	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );	
	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'dynasty3' ),

		'social'  => __( 'Social Links Menu', 'dynasty3' ),

	) );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link','comment-form', 'comment-list', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif; // dynasty3_setup
add_action( 'after_setup_theme', 'dynasty3_setup' );
function dynasty3_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Widget Area', 'dynasty3' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dynasty3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sendblue', 'dynasty3' ),
		'id'            => 'sendblue',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dynasty3' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
		
}


add_action( 'widgets_init', 'dynasty3_widgets_init' );


if ( !function_exists( 'of_get_option' ) ) {

function of_get_option($name, $default = false) { 

    $optionsframework_settings = get_option('optionsframework');  
    // Gets the unique option id

    $option_name = $optionsframework_settings['id'];   
    if ( get_option($option_name) ) {

        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}
}
add_theme_support( 'post-thumbnails' );
function create_slide() {  
    register_post_type( 'slide',  
        array(  
            'labels' => array(  
                'name' => __( 'Slider' , 'dynasty3'),
                'singular_name' => __( 'Slider' , 'dynasty3'), 
                'add_new' => __('Add New Slider', 'dynasty3'),
				'edit_item' => __('Edit Slider', 'dynasty3'), 
                'new_item' => __('New Slider', 'dynasty3'),  
                'view_item' => __('View Slider', 'dynasty3'), 
                'search_items' => __('Search Slider', 'dynasty3'), 
                'not_found' => __('No Slider found', 'dynasty3'),
                'not_found_in_trash' => __('No Slider found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','editor','author','thumbnail','comments','custom-fields') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_slide' );

function create_blog() {  
    register_post_type( 'blog',  
        array(  
            'labels' => array(  
                'name' => __( 'Blog' , 'dynasty3'),
                'singular_name' => __( 'Blog' , 'dynasty3'), 
                'add_new' => __('Add New Blog', 'dynasty3'),
				'edit_item' => __('Edit Blog', 'dynasty3'), 
                'new_item' => __('New Blog', 'dynasty3'),  
                'view_item' => __('View Blog', 'dynasty3'), 
                'search_items' => __('Search Blog', 'dynasty3'), 
                'not_found' => __('No Blog found', 'dynasty3'),
                'not_found_in_trash' => __('No Blog found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 23,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','editor','author','thumbnail','comments','custom-fields') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_blog' );



//function add_featured_galleries_to_ctp( $post_types ) {
//    return array('blog');
//}
//add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );
//
//add_action( 'fg_post_types', 'add_featured_galleries_to_ctp' );


function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'blog'); // ($post_types comes in as array('post','page'). If you don't want FGs on those, you can just return a custom array instead of adding to it. )
    return $post_types;
}
add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );












function create_gallery() {  
    register_post_type( 'gallery',  
        array(  
            'labels' => array(  
                'name' => __( 'Gallery' , 'dynasty3'),
                'singular_name' => __( 'Gallery' , 'dynasty3'), 
                'add_new' => __('Add New Gallery', 'dynasty3'),
				'edit_item' => __('Edit Gallery', 'dynasty3'), 
                'new_item' => __('New Gallery', 'dynasty3'),  
                'view_item' => __('View Gallery', 'dynasty3'), 
                'search_items' => __('Search Gallery', 'dynasty3'), 
                'not_found' => __('No Gallery found', 'dynasty3'),
                'not_found_in_trash' => __('No Gallery found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 24,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','thumbnail','custom-fields') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_gallery' );

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {   
    $optionsframework_settings = get_option('optionsframework'); 
    // Gets the unique option id

    $option_name = $optionsframework_settings['id']; 
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[$name];

    } else {
        return $default;
    }
}
}

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {     
    $optionsframework_settings = get_option('optionsframework');     
    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];   
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}
}
function dynasty3_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


}
add_action( 'wp_enqueue_scripts', 'dynasty3_scripts_styles' );
