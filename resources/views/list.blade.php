@extends('layout')
@section('content')

<div class="container"> 
    <div class="row gap-5">
        @foreach($Products as $product)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> {{ $product->name }} </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $product->category }} </h6>
                    <p class="card-text">Price: {{ $product->price }}$</p>
                    <p class="card-text">Quantity: {{ $product->quantity }}</p>
                    <p class="card-text">Storage: {{ $product->storage }} GB</p>
                    <p class="card-text">Color: {{ $product->color }} GB</p>
                    <button class="btn btn-outline-primary mx-auto">Download</button>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection