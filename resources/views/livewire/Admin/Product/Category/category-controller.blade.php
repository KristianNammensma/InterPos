<div class="d-flex flex-column">
    <div class="info m-3 ">
        <h3> <i class="ti ti-notebook ti-xl pb-2"></i> Alle Categorieën</h3>
    </div>

    <div>
        <div class="d-flex flex-row justify-content-between ">
            @include('livewire.includes.search')
            @include('livewire.Admin.Product.Category.addCategory')
        </div>

    </div>


    @include('livewire.includes.Product.Category.table')




    {{-- <div class="m-2 w-100">
        {{ $Attribute->links() }}
    </div> --}}
</div>
