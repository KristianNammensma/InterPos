<div>
    <div class="d-flex flex-row justify-content-between ">

        @include('livewire.includes.search')
        <button wire:click="createRoute()" class="w-25">Nieuw gerecht <i class="ti ti-plus ti-xs"></i> </button>


    </div>


    @include('livewire.includes.Product.table')

    <div class="m-2 w-100">
        {{ $products->links() }}
    </div>
</div>
