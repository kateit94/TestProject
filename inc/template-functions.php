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
function hotel_property_pagination( $args = array(), $class = 'pagination' ) {

    if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
        return;
    }

    $args = wp_parse_args(
        $args,
        array(
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => __( '&laquo;', ' hotel-property' ),
            'next_text'          => __( '&raquo;', 'hotel-property' ),
            'screen_reader_text' => __( 'Posts navigation', 'hotel-property' ),
            'type'               => 'array',
            'current'            => max( 1, get_query_var( 'paged' ) ),
            'format'             => '?page=%#%',
        )
    );

    $links = paginate_links( $args );

    ?>

    <nav aria-label="<?php echo $args['screen_reader_text']; ?>" class="pagination-wrapper w-100 text-center">

        <ul class="pagination">

            <?php
            foreach ( $links as $key => $link ) {
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
}