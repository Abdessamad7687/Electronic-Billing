@extends('layout')
@section('content')

<div class="container p-4 my-2">
        

        <!-- alert when product is added successfylly -->
        @if(Session()->has('message'))
            <div class="alert alert-primary" role="alert">
                {{ Session()->get('message') }}
            </div>
        @endif

    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001 6.971 2.789Zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z" />
                </svg>
            </span>

                    <!-- Product Name  -->

            <input type="text" class="form-control" placeholder="Product Name" aria-label="Username" id="product_name" name="name">

            <span class="input-group-text" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                    <path
                        d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z" />
                    <path
                        d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z" />
                </svg>
            </span>



            <!-- Category -->


            <select name="category">
                <option value="Phone">Phone</option>
                <option value="Tablette">Tablette</option>
                <option value="Laptop">Laptop</option>
            </select>
        </div>

        @error('name')
                <span class="text-danger my-2">{{$message}}</span>
        @enderror


        <div class="input-group mb-3 net">
            <!-- Product Price  -->
            <span class="input-group-text">Product Price $</span>
            <input type="number" name="price" id="price" class="form-control">
            <span class="input-group-text">
                Quantity
            </span>
             <!-- Product Quantity  -->
            <input type="number" name="quantity" id="quantity" class="form-control" value="1" placeholder="Quantity">
        </div>

        @error('price')
                <span class="text-danger my-2">{{$message}}</span>
        @enderror


        <!-- Product Storage  -->

        <div class="input-group mb-3">
            <span class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sd-card"
                    viewBox="0 0 16 16">
                    <path
                        d="M6.25 3.5a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm2 0a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2z" />
                    <path fill-rule="evenodd"
                        d="M5.914 0H12.5A1.5 1.5 0 0 1 14 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5V3.914c0-.398.158-.78.44-1.06L4.853.439A1.5 1.5 0 0 1 5.914 0zM13 1.5a.5.5 0 0 0-.5-.5H5.914a.5.5 0 0 0-.353.146L3.146 3.561A.5.5 0 0 0 3 3.914V14.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-13z" />
                </svg>
            </span>
            <input type="text" class="form-control" placeholder="128GB" name="storage" aria-label="Username">
            <span class="input-group-text">Color</span>

            <!-- Product Color -->
            <input type="text" class="form-control" name="color" placeholder="black" aria-label="Server">
        </div>

        @error('storage')
                <span class="text-danger my-2">{{$message}}</span>
        @enderror


        <!-- Calculating the total -->
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text">
                Total
            </span>
            <input type="number" id="total" name="total" class="form-control" readonly="true">
        </div>

        <!-- Submit Button   -->
        <div class="input-group">
            <button type="submit" id="create" class="btn btn-info w-100 mt-3">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                </span>
                Add Product</button>
        </div>
    </form>
    </div>

@endsection
