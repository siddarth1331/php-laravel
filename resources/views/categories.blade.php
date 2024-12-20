@extends('layouts.default')
@section('title', 'Ecom - Categories')
@section('content')
<main class="container">
    <section>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-6 col-lg-4">
                    <p>{{ $category->title }}</p>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection