@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-2">{{ $product->name }} | Detail</h1>
    <hr>
    <br>


    <div class="container">
        <div class="row">
            <div class="col-md-9" style="display:flex">

                <div class="container m-2 p-2">
                    <div class="container m-2 p-2">
                        <h2>{{ $product->name }}</h2>
                        <hr>
                        <p>{{ $product->description }}</p>
                        <img src="/public/images/{{ $product->image }}" height="450px" alt="...">
                        <h3>Price: ${{ $product->price }}</h3>

                        <a href="{{ route('products.index') }}" class="btn btn-success">Go Home</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
