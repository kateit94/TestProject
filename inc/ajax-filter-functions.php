<?php
add_action('wp_ajax_myfilter', 'properties_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'properties_filter_function');

function properties_filter_function(){
    $args = array(
        'post_type' => 'properties',
        'orderby' => 'date',
        'order'	=> 'DESC',
    );

    if ($_POST['sort-properties'] == 'price-to-high') {
        $args['meta_key'] = 'price';
        $args['orderby'] = 'meta_value';
        $args['order'] = 'DESC';

    } elseif ($_POST['sort-properties'] == 'price-to-low') {
        $args['meta_key'] = 'price';
        $args['orderby'] = 'meta_value';
        $args['order'] = 'ASC';
    }



    $query = new WP_Query( $args );
    ob_start();
    if( $query->have_posts() ) {
        while( $query->have_posts() ): $query->the_post();
            get_template_part( 'template-parts/content', 'property-list-card' );
        endwhile;
        wp_reset_postdata();
    }
    echo ob_get_clean();

    die();
}