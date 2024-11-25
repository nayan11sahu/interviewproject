@extends('layouts.app')

@section('content')
    <h2>Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $product->image }}">
                    </div>
                    <div class="card-content">
                        <span class="card-title">{{ $product->name }}</span>
                        <p>${{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
@endsection
