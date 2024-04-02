<div>
    @if (session()->has('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif


    <form class="form-body" wire:submit='createAttribute'>
        <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1">
            <div
                class="submit-f sticky-element bg-label-secondary
                  d-flex justify-content-sm-evenly align-items-sm-center flex-column flex-sm-row">
                <div class="d-flex flex-row">
                    <i class="ti ti-file-pencil ti-xl"></i>
                    <h4> Maak eigenschap</h4>
                </div>

                <button wire:submit='createAttribute'>Creëren</button>
            </div>
        </div>



        {{-- @include('livewire.includes.Attribute.newAttributeCard') --}}

        <div class="form-items  d-flex flex-row flex-wrap justify-content-evenly ">
            @include('livewire.includes.Attribute.attributeInfo')


            @include('livewire.includes.Attribute.attributePrice')

        </div>

    </form>
</div>
