<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hotel-property
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="row">
        <div class="col-8">
            <?php
                the_title( '<h1 class="property__title">', '</h1>' );
		    ?>
            <div class="entry-content">
                <?php
                the_content();

                ?>
            </div><!-- .entry-content -->
        </div>
        <?php
        if ( is_active_sidebar( 'property-single-sidebar-widget' ) ) : ?>
            <div class="col-4 property__single-sidebar">
                <?php dynamic_sidebar( 'property-single-sidebar-widget' ); ?>
            </div>
        <?php endif; ?>
    </div>
    <?php
    if ( is_active_sidebar( 'property-single-bottom-widget' ) ) : ?>
        <div class="row">
            <div class="col-12 property__single-bottom">
                <?php dynamic_sidebar( 'property-single-bottom-widget' ); ?>
            </div>
        </div>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
