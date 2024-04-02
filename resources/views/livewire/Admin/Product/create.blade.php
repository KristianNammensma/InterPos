<div class="card-body flex-column ">

    @if (session('success'))
        <span class="success-msg">{{ session('success') }}</span>
    @endif

    <form class="form-body" wire:submit='createProduct'>

        <div id="sticky-wrapper" class="sticky-wrapper flex-shrink-1 ">
            <div
                class="submit-f sticky-element bg-label-secondary
            d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <div class="d-flex flex-row">
                    <i class="ti ti-file-pencil ti-xl"></i>
                    <h4> Maak een Gerecht</h4>
                </div>

                <button>Creëren</button>
            </div>
        </div>


        <div class="form-items  d-flex flex-row flex-wrap justify-content-between ">
            @include('livewire.includes.Product.productInfo')


            @include('livewire.includes.Product.productPrice')

        </div>
    </form>
</div>
