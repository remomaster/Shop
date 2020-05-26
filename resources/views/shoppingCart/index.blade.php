@extends('layout.app')

@section('content')

<div class="h1 my-3">Shoppingcart </div>

<div>
@foreach($products as $product)
    <div class="d-flex m-2">
        {{ $product->name }}
    </div>
@endforeach
</div>
@endsection