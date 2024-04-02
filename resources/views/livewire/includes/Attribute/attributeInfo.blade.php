<div class="product-info  d-flex flex-column flex-shrink-1 ">
    <div class="info">
        <h4><i class="ti ti-box ti-sm"></i> Eigenschap informatie</h4>
    </div>

    @error('name')
        <p>{{ $message }}</p>
    @enderror


    <div class="form-name">
        <label for="name" class="form-label"><i class="ti ti-pencil ti-sm"></i> naam</label>
        <input required class="form-control" wire:model='name' type="text" placeholder="Eigenschap titel">
    </div>

    <div class=" mt-4">
        <label for="status" class="form-label"><i class="ti ti-select ti-sm"></i> status</label>

        <div>
            <select required class="form-select" wire:model='status'>
                <option value="Available">Beschikbaar</option>
                <option value="Sold">Uitverkocht</option>
                <option value="Upcoming">Verwacht</option>
            </select>
        </div>
    </div>

    <div class="form-desc">
        <label for="description" class="form-label">Beschrijving</label>

        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <div class="desc-items d-flex flex-column ">
            <div class="form-control" id="toolbox"><i class="ti ti-message-cog ti-sm"></i></div>
            <input class="form-control" id="description" wire:model='description' type="text"
                placeholder="Beschrijving">
        </div>

    </div>

</div>
