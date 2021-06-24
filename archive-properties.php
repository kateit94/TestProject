<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hotel-property
 */

get_header();
?>
    <div class="w-100 properties__heading-form-section">
        <div class="container">
            <div class="row properties__heading-form">
                <?php get_template_part( 'template-parts/content', 'property-top-form' ); ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row properties__heading-section">
            <h1><?php echo __ ('300+ Places to Stay', 'hotel-property');?></h1>
            <?php get_template_part( 'template-parts/content', 'property-top-bar' ); ?>
        </div>
        <div class="row">
            <div class="col-8">
                <main id="primary" class="site-main">
                    <div class="properties__grid-list d-flex flex-wrap" id="response">

                    <?php if ( have_posts() ) : ?>

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'property-grid-card' );

                        endwhile;

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                    </div>
                    <?php hotel_property_pagination();?>
                </main><!-- #main -->
            </div>
            <div class="col-4 shadow properties__sidebar">
                <?php get_template_part( 'template-parts/content', 'property-sidebar' ); ?>
            </div>
        </div>
    </div>

<?php
get_footer();
