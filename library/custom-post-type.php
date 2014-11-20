<?php
/* 
 * Custom Post Types
*/

// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
	flush_rewrite_rules();
}

/*********************/
/* CUSTOM TAXONOMIES */
/*********************/

add_action('init', 'cptui_register_my_taxonomies');
function cptui_register_my_taxonomies() {
register_taxonomy( 'testimonial_category',array (
  0 => 'testimonial',
),
array( 'hierarchical' => true,
  'label' => 'Testimonial Categories',
  'show_ui' => true,
  'query_var' => true,
  'show_admin_column' => true,
  'labels' => array (
  'search_items' => 'Testimonial Categories',
  'popular_items' => 'Testimonial Categories',
  'all_items' => 'Testimonial Categories',
  'parent_item' => 'Testimonial Category',
  'parent_item_colon' => 'Testimonial Category',
  'edit_item' => 'Testimonial Category',
  'update_item' => 'Testimonial Category',
  'add_new_item' => 'Add New Testimonial Category',
  'new_item_name' => 'Testimonial Category',
  'separate_items_with_commas' => 'Testimonial Categories',
  'add_or_remove_items' => 'Testimonial Categories',
  'choose_from_most_used' => 'Testimonial Categories',
)
) ); 
}

// TESTIMONIALS
add_action('init', 'cptui_register_my_cpts');
function cptui_register_my_cpts() {
register_post_type('testimonial', array(
'label' => 'Testimonials',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'menu_icon' => 'dashicons-welcome-learn-more', // dashicons will be used in WP 3.8+
'rewrite' => array('slug' => 'testimonials', 'with_front' => true),
'query_var' => true,
'has_archive' => true,
'supports' => array('title','editor','revisions','author','excerpt'),
'labels' => array (
  'name' => 'Testimonials',
  'singular_name' => 'Testimonial',
  'menu_name' => 'Testimonials',
  'add_new' => 'Add Testimonial',
  'add_new_item' => 'Add New Testimonial',
  'edit' => 'Edit',
  'edit_item' => 'Edit Testimonial',
  'new_item' => 'New Testimonial',
  'view' => 'View Testimonial',
  'view_item' => 'View Testimonial',
  'search_items' => 'Search Testimonials',
  'not_found' => 'No Testimonials Found',
  'not_found_in_trash' => 'No Testimonials Found in Trash',
  'parent' => 'Parent Testimonial',
)
) ); 
}