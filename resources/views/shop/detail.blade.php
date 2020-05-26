@extends('layout.app')

@section('content')

<div>	
		<a href="{{ route('shoppingcart.index') }}">Warenkorb</a>
      <div class="col-lg-9">
        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{ url('/img/P2601_03.jpg') }}" alt="">
          <div class="card-body">
            <h3 class="card-title">Schuh: {{ $product->name }}</h3>
            <h4>Erscheinungsjahr: {{ $product->year }}</h4>
			<h4>Farbe: {{ $product->color }}</h4>
			<h4>Grösse: {{ $product->size}}</h4>
			<h4>Marke: {{ $product->brand->title }}</h4>
          </div>
        </div>
      </div>
@endsection