@extends('layout')
@section('content')

<div class="card p-5 mx-auto mt-5" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title text-center"> {{ $Product->name }} </h5>
        <hr>
        <p class="card-text">Category: {{ $Product->category }} </p>
        <p class="card-text">Price: {{ $Product->price }}$</p>
        <p class="card-text">Quantity: {{ $Product->quantity }}</p>
        <p class="card-text">Storage: {{ $Product->storage }} GB</p>
        <p class="card-text">Color: {{ $Product->color }}</p>
        <p class="card-text">Total: {{ $Product->total }}$</p>
    </div>
    

    <a href="{{ url('/table') }}" class="btn btn-sm btn-secondary my-2">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
        <path fill-rule="evenodd" d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
        </svg>

        <span>Download</span>

    </a>

    <a href="{{ url('/table') }}" class="btn btn-sm btn-light">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>

        <span>Back</span>
    </a>
</div>
@stop