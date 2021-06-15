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

    <!--    Hardcoded reviews based on the task -->
    <div class="property__reviews-text-wrapper">
        <div class="property__reviews-text-item d-flex flex-row flex-wrap">
            <div class="property__reviews-text__photo">
                <span class="rounded-circle d-block"></span>
            </div>
            <div class="property__reviews-text__text-wrapper flex-row">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="property__reviews-text__name">Hans Down</span>
                        <span class="property__reviews-text__date text-uppercase">09 APR 2018</span>
                    </div>
                    <div class="property__reviews-text__reply d-flex flex-wrap align-content-center">
                        <span class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</span>
                    </div>

                </div>
                <div class="property__reviews-text__body-text w-100">
                    Praesent ut fringilla ligula. Vivamus et lacus nec risus malesuada vestibulum. Phasellus lobortis viverra lobortis. Donec iaculis, erat eu bibendum faucibus.
                </div>
            </div>


        </div>
        <div class="property__reviews-text-item d-flex flex-row flex-wrap">
            <div class="property__reviews-text__photo">
                <span class="rounded-circle d-block"></span>
            </div>
            <div class="property__reviews-text__text-wrapper flex-row">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="property__reviews-text__name">Penny Tool</span>
                        <span class="property__reviews-text__date text-uppercase">09 APR 2018</span>
                    </div>
                    <div class="property__reviews-text__reply d-flex flex-wrap align-content-center">
                        <span class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</span>
                    </div>
                </div>
                <div class="property__reviews-text__body-text w-100">
                    Praesent ut fringilla ligula. Vivamus et lacus nec risus malesuada vestibulum. Phasellus lobortis viverra lobortis. Donec iaculis, erat eu bibendum faucibus.
                </div>
            </div>
        </div>
        <div class="property__reviews-text-item sub-item d-flex flex-row flex-wrap">
            <div class="property__reviews-text__photo">
                <span class="rounded-circle d-block"></span>
            </div>
            <div class="property__reviews-text__text-wrapper flex-row">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="property__reviews-text__name">Eric Widget</span>
                        <span class="property__reviews-text__date text-uppercase">09 APR 2018</span>
                    </div>
                    <div class="property__reviews-text__reply d-flex flex-wrap align-content-center">
                        <span class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</span>
                    </div>
                </div>
                <div class="property__reviews-text__body-text w-100">
                    Praesent ut fringilla ligula. Vivamus et lacus nec risus malesuada vestibulum. Phasellus lobortis viverra lobortis.
                </div>
            </div>
        </div>
        <div class="property__reviews-text-item d-flex flex-row flex-wrap">
            <div class="property__reviews-text__photo">
                <span class="rounded-circle d-block"></span>
            </div>
            <div class="property__reviews-text__text-wrapper flex-row">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="property__reviews-text__name">Penny Tool</span>
                        <span class="property__reviews-text__date text-uppercase">09 APR 2018</span>
                    </div>
                    <div class="property__reviews-text__reply d-flex flex-wrap align-content-center">
                        <span class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
  <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
</svg> Reply</span>
                    </div>
                </div>
                <div class="property__reviews-text__body-text w-100">
                    Praesent ut fringilla ligula. Vivamus et lacus nec risus malesuada vestibulum. Phasellus lobortis viverra lobortis. Donec iaculis, erat eu bibendum faucibus.
                </div>
            </div>
        </div>
    </div>
</div>