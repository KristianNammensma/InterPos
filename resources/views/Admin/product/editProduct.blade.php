@extends('welcome')


@section('title', 'editProduct')


@section('page-style')
    @vite(['resources/css/page-create-product.scss'])
@endsection

@section('content')

    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Gerechten /</span> wijzig gerecht
    </h4>


    <div class="form-card d-flex flex-column">
        {{-- <p>Received ID: {{ $productID }}</p> --}}

        {{-- <p>Name: {{ $product->name }}</p> --}}
    </div>

    <div class="row">
        <div>
            <div class="form-layout">
                @livewire('Admin.Product.Edit', ['productID' => $productID])
            </div>

        </div>
    </div>



@endsection
