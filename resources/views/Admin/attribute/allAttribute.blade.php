

@extends('welcome')


@section('title', 'allAttribute')


@section('page-style')
    @vite(['resources/css/page-create-product.scss'])
@endsection


@section('content')

    <h4 class="py-3 mb-4 ms-3">
        <span class="text-muted fw-light">Eigenschappen /</span> Alle Eigenschappen
    </h4>

    <div class="card d-flex flex-column w-100">
        @livewire('Admin.Attribute.AttributeController')
    </div>

@endsection
