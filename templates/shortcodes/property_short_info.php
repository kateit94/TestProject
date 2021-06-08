<?php
$property_id = get_the_ID();
?>
<div class="property__short-info">
    <?php if (get_field('location', $property_id)) { ?>
        <p class="property__location">
            <?php the_field('location', $property_id); ?>
        </p>
    <?php } ?>
    <div class="property__short-info-items">
        <?php if (get_field('bedrooms', $property_id)) { ?>
            <span class="property__bedrooms">
                <?php the_field('bedrooms', $property_id); ?>
            </span>
        <?php } ?>
        <?php if (get_field('bathrooms', $property_id)) { ?>
            <span class="property__bathrooms">
                <?php the_field('bathrooms', $property_id); ?>
            </span>
        <?php } ?>
        <?php if (get_field('max_capability', $property_id)) { ?>
            <span class="property__capability">
                <?php the_field('max_capability', $property_id); ?>
            </span>
        <?php } ?>
        <?php if (get_field('square', $property_id)) { ?>
            <span class="property__square">
                <?php the_field('square', $property_id); ?>
            </span>
        <?php } ?>
    </div>
</div>