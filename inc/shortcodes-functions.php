<?php
/*
 * Register shortcode to display short info about property
 */
add_shortcode( 'property_short_info', 'property_short_info_shortcode_handler' );

function property_short_info_shortcode_handler( $atts ){

    ob_start();

    get_template_part( "templates/shortcodes/property_short_info" );

    return ob_get_clean();
}

/*
 * Register shortcode to property amenities
 */
add_shortcode( 'property_amenities', 'property_amenities_shortcode_handler' );

function property_amenities_shortcode_handler( $atts ){

    ob_start();

    get_template_part( "templates/shortcodes/property-amenities" );

    return ob_get_clean();
}
/*
 * Register shortcode to property reviews
 */
add_shortcode( 'property_reviews', 'property_reviews_shortcode_handler' );

function property_reviews_shortcode_handler( $atts ){

    ob_start();

    get_template_part( "templates/shortcodes/property-reviews" );

    return ob_get_clean();
}