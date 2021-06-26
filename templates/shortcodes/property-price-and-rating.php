<div class="property__sidebar-price-and-info border-bottom">
    <?php
    $property_id = get_the_ID();
    ?>
    <?php if (get_field('price', $property_id)) {
    $property_price = get_field('price', $property_id);?>
        <span class="property__sidebar-price"><?php echo '$'. $property_price?></span><span><?php echo ' / '. __('Night', 'hotel-property')?></span>
        <input type="hidden" id="property-price" value="<?php echo $property_price?>">
        <input type="hidden" id="service-fee" value="40">

    <?php } ?>

    <div class="property__sidebar-rating">
        <?php $property_rating = 0;
        if (get_field('reviews_cleanliness', $property_id)) {
            $property_rating += get_field('reviews_cleanliness', $property_id);

        }
        if (get_field('reviews_communication', $property_id)) {
            $property_rating += get_field('reviews_communication', $property_id);
        }
        if (get_field('reviews_check-in', $property_id)) {
            $property_rating += get_field('reviews_check-in', $property_id);
        }
        if (get_field('reviews_accuracy', $property_id)) {
            $property_rating += get_field('reviews_accuracy', $property_id);
        }
        if (get_field('reviews_location', $property_id)) {
            $property_rating += get_field('reviews_location', $property_id);
        }
        if (get_field('reviews_value', $property_id)) {
            $property_rating += get_field('reviews_value', $property_id);
        }
        $property_rating_num = round($property_rating/6, 2);
        $property_rating_stars = floor($property_rating_num);
        ?>
        <div class="property__sidebar-stars d-inline-block me-2">
            <?php
            for ($i = 0; $i <5; $i++) {
                if ($i < $property_rating_stars) {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF8500" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>';
                } else {
                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#DBDFE9" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg>';
                }
            }
            ?>
        </div>
        <?php echo '<span class="fw-bold me-1">'. $property_rating_num .'</span> <span>'. __('78 reviews', 'hotel-property') . '</span>'; ?>

    </div>

</div>