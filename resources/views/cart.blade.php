@extends('layouts.default')

@section('content')
<div class="container">

    @if ($cartItems->isEmpty())
        <p>No products in the cart yet!</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $cartItem)
                    <tr>
                        <td><img src="{{ $cartItem->product->image }}" alt="{{ $cartItem->product->title }}" class="img-fluid"
                                style="width: 100px;"></td>
                        <td>{{ $cartItem->product->title }}</td>
                        <td>₹{{ number_format($cartItem->product->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a>
</div>
@endsection