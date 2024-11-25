<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}


                    
                </div>

                
            </div>
            <div class="container justify-content-center" >
            <div class="row">
                <div class="col-sm-8">
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
                                <td><a href="/products/{{$product->id}}/delete" class="btn btn-danger btn-small">Delete
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

       
        </div>   
       
    
</x-app-layout>