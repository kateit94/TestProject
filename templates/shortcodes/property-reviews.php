<div class="property__reviews">
    <h3 class="property__reviews-title">
        <?php echo __('Reviews', 'hotel-property')?>
    </h3>
    <div class="property__reviews-wrapper">
        <?php
        $property_id = get_the_ID();
        ?>
        <div class="property__reviews-items row">
            <div class="col-6">
                <?php if (get_field('reviews_cleanliness', $property_id)) {
                    $reviews_cleanliness = get_field('reviews_cleanliness', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Cleanliness', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_cleanliness/5*100?>%" aria-valuenow="<?php echo $reviews_cleanliness?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_cleanliness?></span>
                    </div>
                <?php } ?>

                <?php if (get_field('reviews_communication', $property_id)) {
                    $reviews_communication = get_field('reviews_communication', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Communication', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_communication/5*100?>%" aria-valuenow="<?php echo $reviews_communication?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_communication?></span>
                    </div>
                <?php } ?>

                <?php if (get_field('reviews_check-in', $property_id)) {
                    $reviews_checkin = get_field('reviews_check-in', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Check-in', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_checkin/5*100?>%" aria-valuenow="<?php echo $reviews_checkin?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_checkin?></span>
                    </div>
                <?php } ?>
            </div>
            <div class="col-6">
                <?php if (get_field('reviews_accuracy', $property_id)) {
                    $reviews_accuracy = get_field('reviews_accuracy', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Accuracy', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_accuracy/5*100?>%" aria-valuenow="<?php echo $reviews_accuracy?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_accuracy?></span>
                    </div>
                <?php } ?>

                <?php if (get_field('reviews_location', $property_id)) {
                    $reviews_location = get_field('reviews_location', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Location', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_location/5*100?>%" aria-valuenow="<?php echo $reviews_location?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_location?></span>
                    </div>
                <?php } ?>

                <?php if (get_field('reviews_value', $property_id)) {
                    $reviews_value = get_field('reviews_value', $property_id);?>
                    <div class="d-flex flex-row justify-content-between">
                        <span class="property__reviews-name me-auto"> <?php echo __('Value', 'hotel-property')?></span>
                        <div class="property__reviews-progress-bar progress align-self-center">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $reviews_value/5*100?>%" aria-valuenow="<?php echo $reviews_value?>" aria-valuemin="0" aria-valuemax="5"></div>
                        </div>
                        <span class="property__reviews-value alignright"><?php echo $reviews_value?></span>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>