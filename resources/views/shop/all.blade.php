@extends('layout.app')

@section('content')

<div class="h1 my-3">Shop</div>

<div>
@foreach($products as $product)
    <div class="d-flex m-2">
        <div class="h6">{{ $product->name }}</div>
    </div>
@endforeach
</div>
@endsection