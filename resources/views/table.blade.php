@extends('layout')
@section('content')

<div class="container table">
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total</th>
            <th scope="col">Storage</th>
            <th scope="col">Color</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}$</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->total }}$</td>
            <td>{{ $product->storage }}</td>
            <td>{{ $product->color }}</td>
            <td>
                <a class="btn btn-primary">
                    Signle View
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
</div>

@endsection