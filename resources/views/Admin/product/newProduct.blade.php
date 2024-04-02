@extends('welcome')


@section('title', 'new product')


@section('page-style')
    @vite(['resources/css/page-create-product.scss'])
@endsection


@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Gerechten /</span> Nieuw gerecht
    </h4>

    <!-- Sticky Actions -->
    <div class="row">
        <div>
            <div class="form-layout">
                @livewire('Admin.Product.Create')
            </div>

        </div>
    </div>





@endsection
