<div class="properties__top-bar d-flex flex-wrap flex-row justify-content-between">
    <div class="d-flex flex-row flex-wrap mb-2">
        <select name="show-properties" class="me-3 rounded" form="filter" onchange="jQuery('#filter').submit()">
            <option value="1" selected>1</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>

        <span>Showing 1-10 of 178</span>
    </div>
    <div class="d-flex flex-row flex-wrap mb-2">
        <select name="sort-properties" class="rounded" form="filter" onchange="jQuery('#filter').submit()">
            <option value="most-recent">Most recent</option>
            <option value="price-to-high">By Price: low to high</option>
            <option value="price-to-low">By Price: high to low</option>
            <option value="rooms-to-high">By Rooms count: low to high</option>
            <option value="rooms-to-low">By Rooms count: high to low</option>
        </select>

        <div class="properties-grid-list-view d-flex flex-wrap flex-row ms-3">
            <input type="radio" id="grid" name="view" value="grid" form="filter" onchange="jQuery('#filter').submit()" checked>
            <label for="grid" class="properties-grid-view d-block text-center rounded-start active"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
                </svg></label>

            <input type="radio" id="list" name="view" value="list" form="filter" onchange="jQuery('#filter').submit()">
            <label for="list" class="properties-list-view d-block text-center rounded-end"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg></label>
        </div>
    </div>
</div>