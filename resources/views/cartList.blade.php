@extends('master')

@section('content')
<div class="container">
    <h3 class="my-5">My Cart Items</h3>
    <a href="/order" class="btn btn-success mb-5">Order Now</a>

    <div class="row justify-content-between">
        @foreach ($products as $product)
        <div class="col-md-8 p-2 mx-auto ">
            <div class="d-flex">
                <img src="{{ $product->gallery }}" class="card-img-top " style="width: 100px" alt="...">
                <div class="card-body p-5">
                    <h3 class="card-title">{{ $product->name }}</h3>
                </div>
                <div class="d-flex">
                    <a href="/remove-cart/{{ $product->cart_id }}" class="btn btn-danger my-auto">Remove From Cart</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>

@endsection