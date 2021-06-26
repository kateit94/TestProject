<?php
add_action('wp_ajax_myfilter', 'properties_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'properties_filter_function');

function properties_filter_function(){
    $page = $_POST['page'] ? $_POST['page'] : 1;
    $posts_per_page = $_POST['show-properties'] ? $_POST['show-properties'] : 1;
    $args = array(
        'post_type' => 'properties',
        'orderby' => 'date',
        'order'	=> 'DESC',
        'paged' => $page,
        'posts_per_page' => $posts_per_page
    );

    if ($_POST['sort-properties'] == 'price-to-high') {
        $args['meta_key'] = 'price';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'ASC';

    } elseif ($_POST['sort-properties'] == 'price-to-low') {
        $args['meta_key'] = 'price';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';

    } elseif ($_POST['sort-properties'] == 'rooms-to-high') {
        $args['meta_key'] = 'rooms';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'ASC';

    } elseif ($_POST['sort-properties'] == 'rooms-to-low') {
        $args['meta_key'] = 'rooms';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';
    }

    $tax_query = array();

    if (isset($_POST['amenity'])) {
        array_push($tax_query, array(
            'taxonomy' => 'amenity',
            'field' => 'term_id',
            'terms' => $_POST['amenity'],
            'operator' => 'AND'

        ));
    }

    if (isset($_POST['extras'])) {
        array_push($tax_query, array(
            'taxonomy' => 'extras',
            'field' => 'term_id',
            'terms' => $_POST['extras'],
            'operator' => 'AND'
        ));
    }

    if (isset($_POST['accessibility'])) {
        array_push($tax_query, array(
            'taxonomy' => 'accessibility',
            'field' => 'term_id',
            'terms' => $_POST['accessibility'],
            'operator' => 'AND'
        ));
    }

    if (isset($_POST['bedroom_features'])) {
        array_push($tax_query, array(
            'taxonomy' => 'bedroom_features',
            'field' => 'term_id',
            'terms' => $_POST['bedroom_features'],
            'operator' => 'AND'
        ));
    }

    if (isset($_POST['property_type'])) {
        array_push($tax_query, array(
            'taxonomy' => 'property_type',
            'field' => 'term_id',
            'terms' => $_POST['property_type'],
            'operator' => 'AND'
        ));
    }

    if (isset($_POST['where']) && !empty($_POST['where'])) {
        array_push($tax_query, array(
            'taxonomy' => 'city',
            'field' => 'name',
            'terms' => $_POST['where'],
            'operator' => 'IN'
        ));
    }
    $meta_query = array();
    if( isset( $_POST['guests'] ) && $_POST['guests'] ) {
        array_push($meta_query, array(
            'key' => 'max_capability',
            'value' => $_POST['guests'],
            'type' => 'numeric',
            'compare' => '>='
        ));
    }
    if ( ! empty( $_POST['from'] ) && ! empty( $_POST['to'] ) ) {

        $date_from = DateTime::createFromFormat('Y-m-d', $_POST['from']);
        $from =  $date_from->format('Ymd');

        $date_to = DateTime::createFromFormat('Y-m-d', $_POST['to']);
        $to = $date_to->format('Ymd');


        array_push($meta_query,

                array(
                    'key'     => 'availability_dates_$_from',
                    'value'   => $from,
                    'compare' => '<='

                ),
                array(
                    'key'     => 'availability_dates_$_to',
                    'value'   => $from,
                    'compare' => '>='
                ),

                array(
                    'key'     => 'availability_dates_$_from',
                    'value'   => $to,
                    'compare' => '>='
                ),
                array(
                    'key'     => 'availability_dates_$_to',
                    'value'   => $to,
                    'compare' => '<='
                ),
                array(
                    'key'     => 'availability_dates_%_from',
                    'value'   => array($from, $to),
                    'compare' => 'NOT BETWEEN',
                    'type'    => 'DATE'

                )


        );


    }

    if ($meta_query) {
        $args['meta_query'] = $meta_query;
    }
    if ($tax_query) {
        $args['tax_query'] = $tax_query;
    }


    $wp_query = new WP_Query( $args );

    ob_start();

    if( $wp_query->have_posts() ) {
        while( $wp_query->have_posts() ): $wp_query->the_post();
            if($_POST['view'] == 'list') {
                get_template_part( 'template-parts/content', 'property-list-card' );
            } else {
                get_template_part( 'template-parts/content', 'property-grid-card' );
            }

        endwhile;
        wp_reset_postdata();
        hotel_property_pagination($wp_query, $page);
    }
    echo ob_get_clean();

    die();
}