<div>
    <p>Product Received ID: {{ $category->id }}</p>
    {{-- <div class="card-body"> --}}

    @if (session('success'))
        <span class="success-msg">{{ session('success') }}</span>
    @endif



    <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1 mb-4 ">
        <div
            class="submit-f sticky-element bg-label-secondary
            d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
            <div class="d-flex flex-row">
                <i class="ti ti-file-pencil ti-xl"></i>
                <h4> Wijzig Categorie</h4>
            </div>

            <div class="d-flex flex-row w-25 justify-content-evenly ">
                <button class="bg-danger w-50 " wire:click='cancelEdit()'>Annuleer</button>
                <button class="w-50 " wire:click='update({{ $category->id }})'>Wijzig</button>
            </div>
        </div>
    </div>


    <div class="form-items card d-flex flex-row flex-wrap justify-content-center ">
        <form class="w-75 m-4" wire:submit='createCategory'>

            @error('name')
                <p>{{ $message }}</p>
            @enderror
            <div class="mb-3 w-100">
                <label class="form-label" for="ecommerce-category-title">Titel</label>
                <input type="text" wire:model="name" required class="form-control" id="ecommerce-category-title"
                    placeholder="Categorie titel" name="categoryTitle" aria-label="category title">
            </div>
            <!-- Description -->

            <div class="form-desc">
                <label for="description" class="form-label">Beschrijving</label>

                @error('description')
                    <p>{{ $message }}</p>
                @enderror

                <div class="desc-items d-flex flex-column justify-content-center align-items-center">
                    <input class="form-control pt-3" id="description" wire:model='description' type="text"
                        placeholder="Product Beschrijving" style="padding-bottom: 20vh;">
                </div>

            </div>
            <!-- Status -->
            @error('status')
                <p>{{ $message }}</p>
            @enderror
            <div class="mb-4 ecommerce-select2-dropdown">
                <label class="form-label">Categorie status</label>
                <select id="ecommerce-category-status" class="select2 form-select"
                    data-placeholder="Selecteer categorie status" wire:model="status">
                    <option value="">Select category status</option>
                    <option value="Available">Beschikbaar</option>
                    <option value="Sold">Uitverkocht</option>
                    <option value="Upcoming">Verwacht</option>
                </select>
            </div>
        </form>

    </div>
</div>
