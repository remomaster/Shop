@extends('layout.app')

@section('content')

<div class="h1 my-3">Shoppingcart </div>

<table class="table">
    <thead>
        <tr class="row">
            <th class="col-1 ">Id</th>
            <th class="col">Name</th>
        </tr>
    </thead>
    <tbody>
@foreach($products as $product)
    <tr class="row">
        <td class="col-1">
            {{ $product->id }} 
        </td>
        <td class="col">
            {{ $product->name }}
        </td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection