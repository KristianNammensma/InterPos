@extends('welcome')


@section('title', 'editCategory')


@section('page-style')
    @vite(['resources/css/page-create-product.scss'])
@endsection


@section('content')

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Producten /</span> wijzig Categorie
    </h4>


    <div class="form-card d-flex flex-column">
        {{-- <p>Received ID: {{ $productID }}</p> --}}

        {{-- <p>Name: {{ $product->name }}</p> --}}
    </div>

    <div class="row">
        <div>
            <div class="form-layout">
                @livewire('Admin.Product.Category.Edit', ['categoryID' => $categoryID])
            </div>

        </div>
    </div>



@endsection
