@extends('master')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-6 text-right p-5">
            <img src="{{ $product->gallery }}" alt="" style="width:200px">
        </div>
        <div class="col-md-6 p-5">
            <h2>{{ $product->name }}</h2>
            <strong class="strong">Price: <span class="text-success">Tk. {{ $product->price }}</span></strong>
            <p class="lead py-3">
                {{ $product->description }}
            </p>
            <div class="d-flex mt-3">
                <form action="/cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button class="btn btn-outline-primary">Add to Cart</button>
                </form>
                <form action="">
                    <button class="btn btn-outline-danger ml-4">Buy Now!</button>
                </form>


            </div>
        </div>
    </div>
</div>

@endsection