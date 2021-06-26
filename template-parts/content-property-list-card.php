<?php
$property_id = get_the_ID();
$main_image = get_the_post_thumbnail($property_id, 'full', array('class' => 'property-main-image'));

?>
<div class="property__list-card d-flex flex-row flex-wrap w-100">
    <div class="property__list-card-image col-4 rounded position-relative overflow-hidden">
        <a href="<?php echo get_post_permalink($property_id)?>">
            <?php echo $main_image; ?>
        </a>

        <?php if (get_field('price', $property_id)) {
            $property_price = get_field('price', $property_id);?>
            <div class="property__list-card-price position-absolute">
                <span class="property__sidebar-price"><?php echo '$ '. $property_price?></span><span><?php echo ' / '. __('Night', 'hotel-property')?></span>
            </div>

        <?php } ?>

    </div>
    <div class="property__list-card-wrapper col-8">
        <?php echo do_shortcode('[property_short_info]');?>
        <?php $property_excerpt = get_the_excerpt();
            if ( $property_excerpt ){ ?>
                <div class="property__list-card-excerpt">
                    <?php echo wpautop( $property_excerpt );?>
                </div>

        <?php }
        ?>
    </div>

</div>
