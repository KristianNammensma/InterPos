@extends('welcome')


@section('title', 'category')


@section('page-style')
    @vite(['resources/css/page-all-product.scss'])
@endsection


@section('content')
    <h4 class="py-3 mb-2">
        <span class="text-muted fw-light">Product /</span> Categorie Lijst
    </h4>

    <div class="form-card d-flex flex-column">
        @livewire('Admin.Product.Category.CategoryController')
    </div>

@endsection
