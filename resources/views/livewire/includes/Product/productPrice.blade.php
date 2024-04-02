<div class="product-price  d-flex flex-column flex-shrink-1 ">
    @error('price')
        <p>{{ $message }}</p>
    @enderror

    <div class="info">
        <h4><i class="ti ti-cash ti-sm pb-1"></i> Pricing / Status <i class="ti ti-clock ti-sm pb-1"></i></h4>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label"><i class="ti ti-select ti-sm"></i> status</label>

        <div>
            <select class="form-select" wire:model='status'>
                <option value="Available">Beschikbaar</option>
                <option value="Sold">Uitverkocht</option>
                <option value="Upcoming">Verwacht</option>
            </select>
        </div>
    </div>

    <hr>

    <div class="form-price">
        <label for="price" class="form-label"><i class="ti ti-currency-euro ti-sm"></i> Basis Prijs</label>
        <div class=" input-group d-flex  flex-wrap-reverse ">
            <input type="text" class="form-control w-50 " wire:model='price'
                aria-label="Dollar amount (with dot and two decimal places)">
            <span class="input-group-text">$</span>
            <span class="input-group-text">0.00</span>
        </div>
    </div>



    <div class="form-sale">
        <label for="salesPrice" class="form-label"><i class="ti ti-discount ti-sm"></i> Korting</label>
        <input class="form-control" wire:model='salesPrice' type="text" placeholder="Discounted Price">
    </div>

    <hr>

    <div class="form-tax d-flex flex-row">
        @error('vat')
            <p>{{ $message }}</p>
        @enderror

        <input class="form-check-input" wire:model='vat' type="checkbox" value="" id="price-charge-tax"
            checked="">
        <label class="tax-label" for="price-charge-tax"> BTW in rekening brengen</label>
    </div>





</div>
