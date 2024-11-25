@extends('layouts.prod')

@section('main')
<div class="container">
    <div class="text-right">
        <a href='products/create' class="btn btn-dark mt-2">New Product</a>
    </div>


    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th>Si No</th>
                <th>Name</th>
                <th>Description</th>
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td><img src="/products/{{$product->image}}" height="50" width="50"></td>
                <td><a href="/products/{{$product->id}}/edit" class="btn btn-dark btn-small">Edit</td>
                <td><a href="/products/{{$product->id}}/delete" class="btn btn-danger btn-small">Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
