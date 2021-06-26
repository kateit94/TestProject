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
/*
 * Register shortcode for related properties
 */
add_shortcode( 'related_properties', 'related_properties_shortcode_handler' );

function related_properties_shortcode_handler( $atts ){

    ob_start();
    ?>
    <div class="d-flex flex-wrap justify-content-between">
        <?php $args = array(
            'post_type' => 'properties',
            'post_status' => 'publish',
            'orderby' => 'rand',
            'post__not_in' => array(get_the_id()),
            'posts_per_page' => 3,
        );

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part( 'template-parts/content', 'property-grid-card' );
            }
            wp_reset_postdata();
        }?>
    </div>

    <?php

    return ob_get_clean();
}