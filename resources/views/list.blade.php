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
                    <button class="btn btn-outline-primary mx-auto">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                        </svg>
                        Download</button>
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