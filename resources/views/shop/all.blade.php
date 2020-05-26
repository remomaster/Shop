@extends('layout.app')

@section('content')

<div class="h1 my-3">Shop</div>
<a href="{{ route('shoppingcart.index') }}">Warenkorb</a>

<div>
@foreach($products as $product)	 <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="{{ url('/img/P2601_03.jpg') }}">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="{{ route('shop.product', $product->id) }}">{{ $product->name }}</a>
				  <form method="post" action="{{ route('addProduct', $product) }}" >
                    @csrf
                    @method('PUT')
                    <input type="submit" value="Zum Warenkorb hinzufügen" />
                </form>
                </h4>
                <h5>{{ $product->price }}.-</h5>
              </div>
            </div>
          </div>

        </div>
@endforeach
</div>
@endsection