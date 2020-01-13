<?php

/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy


// Register Custom Taxonomy
function product_taxonomy()
{

    $labels = array(
        'name'                       => _x('Product types', 'Taxonomy General Name', 'text_domain'),
        'singular_name'              => _x('Product type', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name'                  => __('Product type', 'text_domain'),
        'all_items'                  => __('Product types', 'text_domain'),
        'parent_item'                => __('Parent Product types', 'text_domain'),
        'parent_item_colon'          => __('Parent Product types:', 'text_domain'),
        'new_item_name'              => __('New Product types Name', 'text_domain'),
        'add_new_item'               => __('Add New Product types', 'text_domain'),
        'edit_item'                  => __('Edit Product types', 'text_domain'),
        'update_item'                => __('Update Product types', 'text_domain'),
        'view_item'                  => __('View Product types', 'text_domain'),
        'separate_items_with_commas' => __('Separate Product types with commas', 'text_domain'),
        'add_or_remove_items'        => __('Add or remove Product types', 'text_domain'),
        'choose_from_most_used'      => __('Choose from the most used', 'text_domain'),
        'popular_items'              => __('Popular Product types', 'text_domain'),
        'search_items'               => __('Search Product types', 'text_domain'),
        'not_found'                  => __('Not Found', 'text_domain'),
        'no_terms'                   => __('No Product types', 'text_domain'),
        'items_list'                 => __('Items list', 'text_domain'),
        'items_list_navigation'      => __('Product types list navigation', 'text_domain'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_in_rest'               => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy('product', array('product_type'), $args);
}
add_action('init', 'product_taxonomy', 0);
