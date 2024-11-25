@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>

    @if (count($products) > 0)
        <table class="striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <a href="{{ route('cart.remove', $product->id) }}" class="btn red">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="#" class="btn green">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
