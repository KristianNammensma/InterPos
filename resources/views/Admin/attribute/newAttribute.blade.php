
@extends('welcome')


@section('title', 'createProduct')

@section('page-style')
    @vite(['resources/css/page-create-product.scss'])
@endsection


@section('content')
    <h4 class="py-3 mb-4 ms-3 mt-4">
        <span class="text-muted fw-light">Eigenschappen /</span> Nieuwe eigenschap
    </h4>
    <!-- Sticky Actions -->
    <div class="row">
        <div>

            <div class="form-layout">
                @livewire('Admin.Attribute.Create')
            </div>

        </div>
    </div>





@endsection
