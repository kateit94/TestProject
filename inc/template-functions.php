<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hotel-property
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hotel_property_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'hotel_property_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hotel_property_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'hotel_property_pingback_header' );

/**
 * Custom pagination
 */

function hotel_property_pagination($wp_query, $pages = 1) {
    $args = array(
        'prev_next'          => true,
        'prev_text'          => __( '&laquo;', ' hotel-property' ),
        'next_text'          => __( '&raquo;', 'hotel-property' ),
        'base'    => '/?page=%#%',
        'format'            => '?page=%#%',
        'current' => max( 1, $pages ),
        'total'   => $wp_query->max_num_pages,
        'type'               => 'array',
    );

    $result = paginate_links( $args );
    ob_start();
    ?>
    <nav aria-label="<?php echo $args['screen_reader_text']; ?>" class="pagination-wrapper w-100 text-center">

        <ul class="pagination">

            <?php
            foreach ( $result as $key => $link ) {
                ?>
                <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
                    <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
                </li>
                <?php
            }
            ?>

        </ul>

    </nav>
    <?php
    echo ob_get_clean();
}

/**
 * Properties - Posts per page
 */

add_action( 'pre_get_posts', 'properties_per_page_function' );
function properties_per_page_function( $query ){

    if( ! is_admin() && $query->is_main_query() && $query->is_post_type_archive('properties') ) {
        $posts_per_page = $_POST['show-properties'] ?  $_POST['show-properties'] : 1;
        $query->set( 'posts_per_page', $posts_per_page);
    }
}

/**
 * Properties - date filter
 */
function acf_posts_where( $where ) {

    $where = str_replace( "meta_key = 'availability_dates_$", "meta_key LIKE 'availability_dates_%", $where );

    return $where;

}
add_filter( 'posts_where', 'acf_posts_where' );