

@extends('welcome')


@section('title', 'Create Order Pages')

@section('page-style')
    @vite(['resources/css/page-create-order.scss', 'resources/css/tabler-icons.scss'])

@endsection


@section('content')

    <!-- Sticky Actions -->
    <div class="row">
        <div>
            <div class="form-layout">
                @livewire('Admin.Order.Create')
                @livewire('Admin.Order.Cart')
            </div>

        </div>
    </div>


    {{-- <x-modal name='test' title='Test'>
        @slot('body')
            @livewire('Admin.Order.Create')
        @endslot
    </x-modal>

    <button x-data x-on:click="$dispatch('open-modal', { name : 'test'})" class="btn btn-primary">open</button> --}}




@endsection

{{-- <!-- Page Scripts -->
@section('page-script')
    @vite(['resources/assets/js/form-layouts.js', 'resources/assets/js/extended-ui-sweetalert2.js', 'resources/assets/js/app-ecommerce-product-add.js', 'resources/assets/js/ui-modals.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('vendor-script')
    @vite(['resources/assets/vendor/libs/quill/katex.js', 'resources/assets/vendor/libs/sweetalert2/sweetalert2.js', 'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js', 'resources/assets/vendor/libs/quill/quill.js', 'resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/dropzone/dropzone.js', 'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js', 'resources/assets/vendor/libs/flatpickr/flatpickr.js', 'resources/assets/vendor/libs/tagify/tagify.js', 'resources/assets/vendor/libs/jquery-sticky/jquery-sticky.js', 'resources/assets/vendor/libs/cleavejs/cleave.js', 'resources/assets/vendor/libs/cleavejs/cleave-phone.js', 'resources/assets/vendor/libs/select2/select2.js'])
@endsection --}}
