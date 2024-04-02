<div class="product-info  d-flex flex-column flex-shrink-1 ">
    <div class="info">
        <h4><i class="ti ti-tools-kitchen-2 ti-sm pb-2"></i> Gerecht informatie</h4>
    </div>

    @error('name')
        <p>{{ $message }}</p>
    @enderror


    <div class="form-name">
        <label for="name" class="form-label"><i class="ti ti-pencil ti-sm"></i> Naam</label>
        <input class="form-control" wire:model='name' type="text" placeholder="Titel">
    </div>

    <div class="form-desc">
        <label for="description" class="form-label">Beschrijving</label>

        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <div class="desc-items d-flex flex-column ">
            <div class="form-control" id="toolbox"><i class="ti ti-book ti-sm"></i></div>
            <input class="form-control" id="description" wire:model='description' type="text"
                placeholder="Beschrijving">
        </div>

    </div>

    <div class="col-md-6 mb-4 mt-4 w-100">
        <label for="select2Primary" class="form-label">Categorie</label>
        <select id="selectpickerMultiple" multiple wire:model="selectedCategories" class="selectpicker w-100"
            data-style="btn-default" multiple data-icon-base="ti" data-tick-icon="ti-check text-white">
            @foreach ($categories as $c)
                <option id="{{ $c->id }}" value="{{ $c->id }}"> {{ $c->name }} </option>
            @endforeach
        </select>

    </div>

</div>
