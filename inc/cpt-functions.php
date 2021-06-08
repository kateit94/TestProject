<?php
/*
* Creating a function to create CPT for Properties
*/
function hotel_property_cpt_properties() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Properties', 'Post Type General Name', 'hotel-property' ),
        'singular_name'       => _x( 'Property', 'Post Type Singular Name', 'hotel-property' ),
        'menu_name'           => __( 'Properties', 'hotel-property' ),
        'parent_item_colon'   => __( 'Parent Property', 'hotel-property' ),
        'all_items'           => __( 'All Properties', 'hotel-property' ),
        'view_item'           => __( 'View Property', 'hotel-property' ),
        'add_new_item'        => __( 'Add New Property', 'hotel-property' ),
        'add_new'             => __( 'Add New', 'hotel-property' ),
        'edit_item'           => __( 'Edit Property', 'hotel-property' ),
        'update_item'         => __( 'Update Property', 'hotel-property' ),
        'search_items'        => __( 'Search Property', 'hotel-property' ),
        'not_found'           => __( 'Not Found', 'hotel-property' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'hotel-property' ),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'properties', 'hotel-property' ),
        'description'         => __( 'Properties', 'hotel-property' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'city', 'amenity', 'extras', 'accessibility', 'bedroom_features', 'property_type' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-building',

    );

    // Registering your Custom Post Type
    register_post_type( 'properties', $args );

}

add_action( 'init', 'hotel_property_cpt_properties', 0 );

/*
* Creating a function to create custom taxonomies for Properties
*/

function create_property_taxonomies(){
    //City
    register_taxonomy('city', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Cities', 'taxonomy general name' ),
            'singular_name'               => _x( 'City', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Cities' ),
            'popular_items'               => __( 'Popular Cities' ),
            'all_items'                   => __( 'All Cities' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit City' ),
            'update_item'                 => __( 'Update City' ),
            'add_new_item'                => __( 'Add New City' ),
            'new_item_name'               => __( 'New City Name' ),
            'separate_items_with_commas'  => __( 'Separate cities with commas' ),
            'add_or_remove_items'         => __( 'Add or remove cities' ),
            'choose_from_most_used'       => __( 'Choose from the most used cities' ),
            'menu_name'                   => __( 'Cities' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

    //Amenity
    register_taxonomy('amenity', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Amenities', 'taxonomy general name' ),
            'singular_name'               => _x( 'Amenity', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Amenities' ),
            'popular_items'               => __( 'Popular Amenities' ),
            'all_items'                   => __( 'All Amenities' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit Amenity' ),
            'update_item'                 => __( 'Update Amenity' ),
            'add_new_item'                => __( 'Add New Amenity' ),
            'new_item_name'               => __( 'New Amenity Name' ),
            'separate_items_with_commas'  => __( 'Separate amenities with commas' ),
            'add_or_remove_items'         => __( 'Add or remove amenities' ),
            'choose_from_most_used'       => __( 'Choose from the most used amenities' ),
            'menu_name'                   => __( 'Amenities' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

    //Extras
    register_taxonomy('extras', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Extras', 'taxonomy general name' ),
            'singular_name'               => _x( 'Extras', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Extras' ),
            'popular_items'               => __( 'Popular Extras' ),
            'all_items'                   => __( 'All Extras' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit Extras' ),
            'update_item'                 => __( 'Update Extras' ),
            'add_new_item'                => __( 'Add New Extras' ),
            'new_item_name'               => __( 'New Extras Name' ),
            'separate_items_with_commas'  => __( 'Separate extras with commas' ),
            'add_or_remove_items'         => __( 'Add or remove extras' ),
            'choose_from_most_used'       => __( 'Choose from the most used extras' ),
            'menu_name'                   => __( 'Extras' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

    //Accessibility
    register_taxonomy('accessibility', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Accessibility', 'taxonomy general name' ),
            'singular_name'               => _x( 'Accessibility', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Accessibility' ),
            'popular_items'               => __( 'Popular Accessibility' ),
            'all_items'                   => __( 'All Accessibility' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit Accessibility' ),
            'update_item'                 => __( 'Update Accessibility' ),
            'add_new_item'                => __( 'Add New Accessibility' ),
            'new_item_name'               => __( 'New Accessibility Name' ),
            'separate_items_with_commas'  => __( 'Separate accessibility with commas' ),
            'add_or_remove_items'         => __( 'Add or remove accessibility' ),
            'choose_from_most_used'       => __( 'Choose from the most used accessibility' ),
            'menu_name'                   => __( 'Accessibility' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

    //Bedroom features
    register_taxonomy('bedroom_features', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Bedroom features', 'taxonomy general name' ),
            'singular_name'               => _x( 'Bedroom features', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Bedroom features' ),
            'popular_items'               => __( 'Popular Bedroom features' ),
            'all_items'                   => __( 'All Bedroom features' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit Bedroom features' ),
            'update_item'                 => __( 'Update Bedroom features' ),
            'add_new_item'                => __( 'Add New Bedroom features' ),
            'new_item_name'               => __( 'New Bedroom features Name' ),
            'separate_items_with_commas'  => __( 'Separate bedroom features with commas' ),
            'add_or_remove_items'         => __( 'Add or remove bedroom features' ),
            'choose_from_most_used'       => __( 'Choose from the most used bedroom features' ),
            'menu_name'                   => __( 'Bedroom features' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

    //Property type
    register_taxonomy('property_type', 'properties',array(
        'hierarchical'  => false,
        'labels'        => array(
            'name'                        => _x( 'Property types', 'taxonomy general name' ),
            'singular_name'               => _x( 'Property type', 'taxonomy singular name' ),
            'search_items'                =>  __( 'Search Property types' ),
            'popular_items'               => __( 'Popular Property types' ),
            'all_items'                   => __( 'All Property types' ),
            'parent_item'                 => null,
            'parent_item_colon'           => null,
            'edit_item'                   => __( 'Edit Property type' ),
            'update_item'                 => __( 'Update Property type' ),
            'add_new_item'                => __( 'Add New Property type' ),
            'new_item_name'               => __( 'New Property type Name' ),
            'separate_items_with_commas'  => __( 'Separate property types with commas' ),
            'add_or_remove_items'         => __( 'Add or remove property type' ),
            'choose_from_most_used'       => __( 'Choose from the most used property types' ),
            'menu_name'                   => __( 'Property type' ),
        ),
        'show_ui'       => true,
        'query_var'     => true,
        'show_in_rest' => true,
    ));

}
add_action( 'init', 'create_property_taxonomies' );