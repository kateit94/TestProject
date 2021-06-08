<div class="property__amenities">
    <h3 class="property__amenities-title">
        <?php echo __('Amenities', 'hotel-property')?>
    </h3>
    <div class="property__amenities-wrapper">
        <?php
        $property_id = get_the_ID();
        $amenities_list = wp_get_post_terms( $property_id, 'amenity', array('fields' => 'all') );
        if ($amenities_list) {
            foreach ($amenities_list as $amenity) {
                echo '<span class="d-inline-block w-100">' .$amenity->name.'</span>';
            }
        }
        ?>
    </div>
</div>