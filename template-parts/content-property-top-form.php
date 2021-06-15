<form class="properties__search-form">
    <div class="row">
        <div class="col-3 d-flex flex-column">
            <label for="where" class="text-uppercase"><?php echo __('where', 'hotel-property');?></label>
            <input type="search" name="where" placeholder="Anywhere" class="form-input"/>
        </div>
        <div class="col-2 d-flex flex-column">
            <label for="from" class="text-uppercase"><?php echo __('check-in', 'hotel-property');?></label>
            <input type="date" name="from"  class="form-input"/>
        </div>
        <div class="col-2 d-flex flex-column">
            <label for="to" class="text-uppercase"><?php echo __('check-out', 'hotel-property');?></label>
            <input type="date" name="to"  class="form-input"/>
        </div>
        <div class="col-3 d-flex flex-column">
            <label for="guests" class="text-uppercase"><?php echo __('guests', 'hotel-property');?></label>
            <select name="guests" id="guests" class="form-input">
                <option value="1">1 guest</option>
                <option value="2">2 guests</option>
                <option value="3">3 guests</option>
                <option value="4">4 guests</option>
                <option value="5">5 guests</option>
            </select>
        </div>
        <div class="col-2 d-flex flex-column align-content-end">
            <input type="submit" value="Search" />
        </div>
    </div>
</form>
