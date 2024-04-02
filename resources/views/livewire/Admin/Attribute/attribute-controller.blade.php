<div>
    <div class="info m-3 ">
        <h3> <i class="ti ti-book ti-xl pb-2"></i> {{ $attributeTitle }}</h3>
    </div>

    <div class="d-flex flex-row justify-content-between m-4">
        @include('livewire.includes.search')
        <button wire:click="createRoute()" type="button" class="w-25 btn btn-primary">Nieuw eigenschap + </button>

    </div>

    @if ($isSub === false)
        @include('livewire.includes.Attribute.table')
    @endif

    @if ($isSub === true)
        @include('livewire.includes.Attribute.subTable')
    @endif

    <div class="m-2 w-100">
        {{ $Attribute->links() }}
    </div>
</div>
