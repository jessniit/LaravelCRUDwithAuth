<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL CRUD</title>
   
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/product" text-light>Products</a>
    </li>

  </ul>
</nav>
   @if($message=Session::get('success'))
   <div class="alert alert-success alert-block">
    <strong>{{$message}}</strong>
   @endif
   </div>

    <div class="container">
        <h1> New Products</h1>
        <div class="row justify-content center" >
            <div class="col-sm-8">
               <div class="card mt-3 p-3">

                <form method="POST" action="/products/store" enctype="multipart/form-data">
                @csrf    
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name"  class="form-control" value="{{old('name')}}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif

                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="disc" rows="4" class="form-control">{{old('disc')}}</textarea>
                        @if($errors->has('disc'))
                        <span class="text-danger">{{$errors->first('disc')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control" value="{{old('image')}}"/>
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                      <button type="submit" class="btn btn-dark">Submit</button> 
                </form>
               </div>
            </div>
        </div>
    </div>
</body>
</html>