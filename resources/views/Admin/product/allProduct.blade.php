@extends('welcome')


@section('title', 'allProduct')


@section('page-style')
    @vite(['resources/css/page-all-product.scss'])
@endsection


@section('content')
    <h4 class="py-3 mb-4 ms-3 mt-2">
        <span class="text-muted fw-light">Gerechten /</span> Alle gerechten
    </h4>

    <div class="form-card d-flex flex-column">
        <div class="info">
            <h3> <i class="ti ti-chef-hat ti-xl pb-2"></i> Alle gerechten</h3>
        </div>
        @livewire('Admin.Product.ProductController')
    </div>

    @livewireScripts
@endsection
