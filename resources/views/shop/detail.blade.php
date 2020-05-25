@extends('layout.app')

@section('content')

<div class="h1 my-3">Schuh: {{ $product->name }}</div>

<div>
    <img src="{{ url('/img/P2601_03.jpg') }}" />
    <p>Erscheinungsjahr: {{ $product->erscheinungsjahr }}</p>
    <p>Farbe: {{ $product->farbe }}</p>
    <p>Grösse: {{ $product->grosse}}</p>
    <p>Marke:</p>
</div>

@endsection