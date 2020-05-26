@extends('layout.app')

@section('content')

<div class="h1 my-3">Shop</div>
<a href="{{ route('shoppingcart.index') }}">Shoppingcart</a>

<div>
@foreach($products as $product)
    <div class="d-flex m-2">
        <div class="h6">{{ $product->name }}</div>
        <img src="{{ url('/img/P2601_03.jpg') }}" />
        <a href="{{ route('shop.product', $product->id) }}">go</a>
        <form method="post" action="{{ route('addProduct', $product) }}" >
            @csrf
            @method('PUT')

            <input type="submit" value="add To Cart" />
        </form>
    </div>
@endforeach
</div>
@endsection