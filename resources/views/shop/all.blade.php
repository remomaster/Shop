@extends('layout.app')

@section('content')

<div class="h1 my-3">Shop</div>

<div>
@foreach($products as $product)

	
	 <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{ url('/img/P2601_03.jpg') }}"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $product->name }}</a>
                </h4>
                <h5>{{ $product->price }}</h5>
              </div>
            </div>
          </div>

        </div>
@endforeach
</div>
@endsection