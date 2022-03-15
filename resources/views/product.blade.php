@extends('master')

@section('content')

<div class="container custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $product)
            <div class="carousel-item {{ $product->id == 6 ? 'active' : '' }}">
                <img src="{{ $product->gallery }}" class="d-block w-25 mx-auto" alt="...">
                <div class="carousel-caption d-none d-md-block bg-secondary">
                    <h5>{{ $product->name }}</h5>
                    <p class="text-warning">TK. {{ $product->price }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

<div class="container">
    <h3 class="my-5">Treanding Products</h3>

    <div class="row justify-content-between">
        @foreach ($products as $product)
        <div class="col-md-2 p-2">
            <div class="card">
                <a href="product/{{ $product->id }}" class="text-decoration-none text-dark">
                    <img src="{{ $product->gallery }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                    </div>
                </a>
            </div>
        </div>

        @endforeach
    </div>

</div>

@endsection