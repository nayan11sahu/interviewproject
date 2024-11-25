@extends('layouts.app')

@section('content')
    <h2>{{ $product->name }}</h2>
    <div>
        <img src="{{ $product->image }}" alt="{{ $product->name }}" style="width: 300px;">
        <p>{{ $product->description }}</p>
        <p><strong>Price: ${{ $product->price }}</strong></p>
        <a href="{{ route('cart.add', $product->id) }}" class="btn">Add to Cart</a>
    </div>
@endsection
