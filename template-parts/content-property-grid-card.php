<?php
$property_id = get_the_ID();
$main_image = get_the_post_thumbnail($property_id, 'full', array('class' => 'property-main-image'));

?>
<div class="property__grid-card flex-item">
    <div class="property__grid-card-image position-relative overflow-hidden">
        <a href="<?php echo get_post_permalink($property_id)?>">
            <?php echo $main_image; ?>
        </a>

        <?php if (get_field('price', $property_id)) {
            $property_price = get_field('price', $property_id);?>
            <div class="property__grid-card-price position-absolute">
                <span class="property__sidebar-price"><?php echo $property_price?></span><span><?php echo ' / '. __('Night', 'hotel-property')?></span>
            </div>

        <?php } ?>

    </div>
    <div class="property__grid-card-wrapper">
        <?php echo do_shortcode('[property_short_info]');?>

        <div class="property__grid-card-author d-flex flex-row flex-wrap">
            <?php
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name');
            $full_name = '';

            if (!empty($fname) || !empty($lname)) {
                if( empty($fname)){
                    $full_name = $lname;
                } elseif( empty( $lname )){
                    $full_name = $fname;
                } else {
                    $full_name = "{$fname} {$lname}";
                }
            } else {
                if (empty($fname) || empty($lname)) {
                    $full_name = get_the_author();
                }
            }
            ?>
            <?php echo get_avatar( get_the_author_meta( 'ID' ) , 60 ); ?>
            <div>
                <div class="property__grid-card-author-name">
                    <?php echo $full_name;?>
                </div>
                <div class="property__grid-card-author-date">
                    <?php echo __('Listed on ', 'hotel-property') . get_the_date();?>
                </div>
            </div>
        </div>
        <div class="property__grid-card-cta d-flex flex-row flex-wrap align-content-center justify-content-between">
            <a href="#" class="property__details-cta-save text-decoration-none d-flex justify-content-center align-items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg> <span><?php echo __('Save', 'hotel-property');?></span></a>
            <a href="<?php echo get_post_permalink($property_id)?>" class="text-decoration-none property__details-cta d-inline-block"><?php echo __('Details', 'hotel-property');?></a>
        </div>
    </div>

</div>
