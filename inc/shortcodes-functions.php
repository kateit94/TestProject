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
 * Register shortcode for property reviews
 */
add_shortcode( 'property_reviews', 'property_reviews_shortcode_handler' );

function property_reviews_shortcode_handler( $atts ){

    ob_start();

    get_template_part( "templates/shortcodes/property-reviews" );

    return ob_get_clean();
}
/*
 * Register shortcode for property price and rating (for sidebar)
 */
add_shortcode( 'property_price_and_rating', 'property_price_and_rating_shortcode_handler' );

function property_price_and_rating_shortcode_handler( $atts ){

    ob_start();

    get_template_part( "templates/shortcodes/property-price-and-rating" );

    return ob_get_clean();
}