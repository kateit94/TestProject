<?php
function property_gallery_field( $name, $value = '' ) {

$html = '<div><ul class="property_gallery_mtb">';
        /* array with image IDs for hidden field */
        $hidden = array();


        if( $images = get_posts( array(
        'post_type' => 'attachment',
        'orderby' => 'post__in', /* we have to save the order */
        'order' => 'ASC',
        'post__in' => explode(',',$value), /* $value is the image IDs comma separated */
        'numberposts' => -1,
        'post_mime_type' => 'image'
        ) ) ) {

        foreach( $images as $image ) {
        $hidden[] = $image->ID;
        $image_src = wp_get_attachment_image_src( $image->ID, array( 80, 80 ) );
        $html .= '<li data-id="' . $image->ID .  '"><span style="background-image:url(' . $image_src[0] . ')"></span><a href="#" class="property_gallery_remove">&times;</a></li>';
        }

        }

        $html .= '</ul><div style="clear:both"></div></div>';
$html .= '<input type="hidden" name="'.$name.'" value="' . join(',',$hidden) . '" /><a href="#" class="button property_upload_gallery_button">Add Images</a>';

return $html;
}

/*
 * Add a meta box
 */
add_action( 'admin_menu', 'property_meta_box_add' );

function property_meta_box_add() {
    add_meta_box('propertydiv', // meta box ID
        'Property gallery', // meta box title
        'property_print_box', // callback function that prints the meta box HTML
        'properties', // post type where to add it
        'side', // position
        'high' ); // priority
}

/*
 * Meta Box HTML
 */
function property_print_box( $post ) {
    $meta_key = 'property_custom_gallery';
    echo property_gallery_field( $meta_key, get_post_meta($post->ID, $meta_key, true) );
}

/*
 * Save Meta Box data
 */
add_action('save_post', 'property_save');

function property_save( $post_id ) {
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return $post_id;

    $meta_key = 'property_custom_gallery';

    update_post_meta( $post_id, $meta_key, $_POST[$meta_key] );

    return $post_id;
}