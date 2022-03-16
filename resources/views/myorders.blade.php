@extends('master')

@section('content')
<div class="container">
    <h3 class="my-5">My Orders</h3>
    <a href="/order" class="btn btn-success mb-5">Order Now</a>

    <div class="row justify-content-between">
        @foreach ($products as $product)
        <div class="col-md-8 p-2 mx-auto ">
            <div class="d-flex">
                <img src="{{ $product->gallery }}" class="card-img-top " style="width: 200px" alt="...">
                <div class="card-body p-5">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p>Delivery Status: {{ $product->status }}</p>
                    <p>Payment Method: {{ $product->payment_method }}</p>
                    <p>Payment Status: {{ $product->payment_status }}</p>
                    <p>Delivery Address: {{ $product->address }}</p>
                </div>
            </div>
        </div>

        @endforeach
    </div>

</div>

@endsection