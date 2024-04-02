<div>
    <p>Attribute Received ID: {{ $attribute->id }}</p>
    {{-- <div class="card-body"> --}}

    @if (session('success'))
        <span class="success-msg">{{ session('success') }}</span>
    @endif



    <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1 ">
        <div
            class="submit-f sticky-element bg-label-secondary
            d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
            <div class="d-flex flex-row">
                <i class="ti ti-file-pencil ti-xl"></i>
                <h4> Wijzig Attribuut</h4>
            </div>

            <div class="d-flex flex-row w-25 justify-content-evenly ">
                <button class="bg-danger w-50 " wire:click='cancelEdit()'>Annuleer</button>
                <button class="w-50 " wire:click='update({{ $attribute->id }})'>Wijzig</button>
            </div>
        </div>
    </div>


    <div class="form-items  d-flex flex-row flex-wrap justify-content-between ">
        @include('livewire.includes.Attribute.Edit.attributeEditInfo')


        @include('livewire.includes.Attribute.Edit.attributeEditPrice')

    </div>

    {{-- </div> --}}
</div>
