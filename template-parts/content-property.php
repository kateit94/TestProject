<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hotel-property
 */

?>
<div class="container-fluid property__gallery position-relative p-0">
    <div class="d-flex flex-container">
        <?php
        $image_ids = get_post_meta( get_the_ID(), 'property_custom_gallery', true );
        $image_ids = explode(',', $image_ids);

        $main_image = get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'property-main-image'));
        $main_image_link = get_the_post_thumbnail_url(get_the_ID(), 'full', array('class' => 'property-main-image'));

        if (count( $image_ids) < 3) { ?>
            <div class="flex-item property__gallery-full">
                <?php echo $main_image; ?>
            </div>

        <?php } else { ?>
                <div class="flex-item property__gallery-left position-relative overflow-hidden">
                    <?php echo $main_image; ?>
                </div>
                <div class="flex-item property__gallery-right">
                    <div class="flex-container overflow-hidden">
                        <?php
                        $i = 0;

                        foreach ($image_ids as $image_id) {
                            if (!empty($image_id)) {
                                $gallery_item = wp_get_attachment_image($image_id, 'large', false, array('class' => 'property-gallery-image'));
                                $i++;
                                if ($i <= 4) {
                                    ?>
                                    <div class="flex-item p-0 position-relative overflow-hidden">
                                        <?php echo $gallery_item; ?>
                                    </div>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
        <?php }?>
    </div>
    <div class="property__gallery-view-all position-absolute d-flex">
        <a data-fancybox="gallery" class="property__gallery-main-cta text-decoration-none rounded   " href="<?php echo $main_image_link;?>" ><?php echo __('View Photos', 'hotel-property')?></a>
        <?php
        $image_ids = get_post_meta( get_the_ID(), 'property_custom_gallery' );
        if ( ! empty( $image_ids ) ) :
            $image_ids = explode( ',', $image_ids[0] );
            foreach($image_ids as $image_id) {
                if ( ! empty( $image_id ) ) :
                    $image_url = wp_get_attachment_url($image_id); ?>
                    <a data-fancybox="gallery" href="<?php echo $image_url;?>"></a>
                <?php
                endif;
            }
        endif;
        ?>
    </div>

</div>
<div class="container property">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
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
                <div class="col-sm-12 col-md-12 col-lg-4  property__single-sidebar">
                    <?php dynamic_sidebar( 'property-single-sidebar-widget' ); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="property__section-separator d-flex justify-content-center">

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
</div>