@extends('layouts.default')
@section('title', 'Ecom - Products')
@section('content')
<main class="container">
    <section>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12 col-md-6 col-lg-4">
                    <img src="{{ $product->image }}" alt="" style="height:200px; width: 200px">
                    <p>{{ $product->title }}</p>
                    <p>{{ $product->description }}</p>
                    <p>{{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection