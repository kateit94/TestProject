<?php
?>
<div class="properties__taxonomy-group border-bottom">
    <?php
    $amenities = 'amenity';
    $amenities_terms = get_terms( $amenities, [
        'hide_empty' => false, // do not hide empty terms
    ]);
    if (!empty($amenities_terms)) {?>
        <h3><?php echo __('Amenities', 'hotel-property');?></h3>
        <div class="properties__taxonomy-list d-flex flex-row">
            <?php
            foreach( $amenities_terms as $term ) {
                echo '<span class="properties__taxonomy-item w-50"><input type="checkbox" form="filter" onchange="jQuery(\'#filter\').submit()" value="'. $term->term_id.'" name="amenity[]" id="'. $term->slug .'">'. $term->name .'</span>';
            } ?>
        </div>
        <?php
    }
    ?>
</div>
<div class="properties__taxonomy-group border-bottom">
    <?php
    $extras = 'extras';
    $extras_terms = get_terms( $extras, [
        'hide_empty' => false, // do not hide empty terms
    ]);
    if (!empty($extras_terms)) { ?>
        <h3><?php echo __('Extras', 'hotel-property');?></h3>
        <div class="properties__taxonomy-list d-flex flex-row">
            <?php
            foreach( $extras_terms as $term ) {
                echo '<span class="properties__taxonomy-item w-50"><input type="checkbox" form="filter" onchange="jQuery(\'#filter\').submit()" value="'. $term->term_id.'" name="extras[]" id="'. $term->slug .'">'. $term->name .'</span>';
            } ?>
        </div>
        <?php
    }
    ?>
</div>
<div class="properties__taxonomy-group border-bottom">
    <?php
    $accessibility = 'accessibility';
    $accessibility_terms = get_terms( $accessibility, [
        'hide_empty' => false, // do not hide empty terms
    ]);
    if (!empty($accessibility_terms)) { ?>
        <h3><?php echo __('Accessibility', 'hotel-property');?></h3>
        <div class="properties__taxonomy-list d-flex flex-column">
            <?php
            foreach( $accessibility_terms as $term ) {
                echo '<span class="properties__taxonomy-item"><input type="checkbox" form="filter" onchange="jQuery(\'#filter\').submit()" value="'. $term->term_id.'" name="accessibility[]" id="'. $term->slug .'">'. $term->name .'</span>';
            } ?>
        </div>
        <?php
    }
    ?>
</div>
<div class="properties__taxonomy-group border-bottom">
    <?php
    $bedroom_features = 'bedroom_features';
    $bedroom_features_terms = get_terms( $bedroom_features, [
        'hide_empty' => false, // do not hide empty terms
    ]);
    if (!empty($bedroom_features_terms)) { ?>
        <h3><?php echo __('Bedroom', 'hotel-property');?></h3>
        <div class="properties__taxonomy-list d-flex flex-column">
            <?php
            foreach( $bedroom_features_terms as $term ) {
                echo '<span class="properties__taxonomy-item"><input type="checkbox" form="filter" onchange="jQuery(\'#filter\').submit()" value="'. $term->term_id.'" name="bedroom_features[]" id="'. $term->slug .'">'. $term->name .'</span>';
            } ?>
        </div>
        <?php
    }
    ?>
</div>
<div class="properties__taxonomy-group">
    <?php
    $property_type = 'property_type';
    $property_type_terms = get_terms( $property_type, [
        'hide_empty' => false, // do not hide empty terms
    ]);
    if (!empty($property_type_terms)) { ?>
        <h3><?php echo __('Property type', 'hotel-property');?></h3>
        <div class="properties__taxonomy-list d-flex flex-row">
            <?php
            foreach( $property_type_terms as $term ) {
                echo '<span class="properties__taxonomy-item w-50"><input type="checkbox" form="filter" onchange="jQuery(\'#filter\').submit()" value="'. $term->term_id.'" name="property_type[]" id="'. $term->slug .'">'. $term->name .'</span>';
            } ?>
        </div>
        <?php
    }
    ?>
</div>
