@extends('layouts.prod')

@section('main')

    <div class="container">
        <h1> Edit product {{$product->name}}</h1>
        <div class="row justify-content center" >
            <div class="col-sm-8">
               <div class="card mt-3 p-3">

                <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
                @csrf    
                @method('PUT')
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name"  class="form-control" value="{{old('name',$product->name)}}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="disc" rows="4" class="form-control">{{old('disc',$product->description)}}</textarea>
                        @if($errors->has('disc'))
                        <span class="text-danger">{{$errors->first('disc')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" value="{{old('image',$product->image)}}"/>
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                      <button type="submit" class="btn btn-dark">Update</button> 
                </form>
               </div>
            </div>
        </div>
    </div>
@endsection