@extends('layout')
@section('content')

<div class="container"> 
    <div class="row gap-5">
        <select class="form-select my-2">
        <option value="1">Latest</option>
        <option value="2">Today</option>
        <option value="3">This week</option>
        <option value="3">This month</option>
    </select>
        @foreach($Products as $product)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-center"> {{ $product->name }} </h5>
                    <hr>
                    <h6 class="card-subtitle mb-2">Category: {{ $product->category }} </h6>
                    <p class="card-text">Price: {{ $product->price }}$</p>
                    <p class="card-text">Quantity: {{ $product->quantity }}</p>
                    <p class="card-text">Storage: {{ $product->storage }} GB</p>
                    <p class="card-text">Color: {{ $product->color }}</p>
                    <p class="card-text">Total: {{ $product->total }}$</p>
                    <a class="btn btn-outline-primary" href="">View</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<footer id="sticky-footer" class="flex-shrink-0 py-4 text-white-50">
    <div class="container text-center">
      <small> &copy; Electronic-Billings</small>
    </div>
  </footer>


@endsection