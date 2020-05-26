@extends('layout.app')

@section('content')

<div class="h1 my-3">Schuh: {{ $product->name }}</div>

<div>
    <img src="{{ url('/img/P2601_03.jpg') }}" />
    <p>Erscheinungsjahr: {{ $product->year }}</p>
    <p>Farbe: {{ $product->color }}</p>
    <p>Grösse: {{ $product->size}}</p>
    <p>Marke: {{ $product->brand->title }}</p>
</div>

@endsection