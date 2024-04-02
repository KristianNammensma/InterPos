<div class="product-info  d-flex flex-column flex-shrink-1 ">
    <div class="info">
        <h4><i class="ti ti-box ti-sm"></i> Wijzig attribuut informatie</h4>
    </div>

    @error('name')
        <p>{{ $message }}</p>
    @enderror


    <div class="form-name">
        <label for="name" class="form-label"><i class="ti ti-pencil ti-sm"></i> Naam</label>
        <input class="form-control" wire:model="name" type="text" placeholder="Product Title">
        @error('editingProductName')
            <span>{{ $message }}</span>
        @enderror
    </div>

    <div class=" mt-4">
        <label for="status" class="form-label"><i class="ti ti-select ti-sm"></i> status</label>

        <div>
            <select class="form-select" wire:model='status'>
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



            <div>
                <div class="comment-toolbar">
                    <div class="d-flex justify-content-start">

                    </div>
                </div>
                <div class="">
                    <div class="form-control" id="toolbox"><i class="ti ti-book ti-sm"></i></div>
                    <input class="form-control" id="description" wire:model='description' type="text"
                        placeholder="Geen informatie">
                </div>


                {{-- <div wire:model="editingProductDescription" wire:keydown.enter.prevent="update({{ $product->id }})"
                wire:keydown.tab.prevent @blur="update({{ $product->id }}" contenteditable id="your-div-id">
                {{ $editingProductDescription }}
            </div> --}}
            </div>
        </div>

    </div>


</div>
