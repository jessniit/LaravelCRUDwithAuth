<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    Public function index()
    {
       return view('dashboard',['products'=>Product::get()]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'disc'=>'required',
            'image'=>'required']
        );
       //dd($request->all());
       $imagename=time().'.'.$request->image->extension();
       $request->image->move(public_path('products'),$imagename);
       //dd($imagename);
       
       $product=new Product;
       $product->image=$imagename;
       $product->name=$request->name;
       $product->description=$request->disc;
       $product->save();
        
       return back()->withSuccess('Product Created!!!');
    }

    public function edit($id)
    {
        //dd($id);
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'disc'=>'required',
            'image'=>'nullable']
        );
       //dd($request->all());

       $product=Product::where('id',$id)->first();
       if(isset($request->image))
       {
       $imagename=time().'.'.$request->image->extension();
       $request->image->move(public_path('products'),$imagename);
       $product->image=$imagename;
       //dd($imagename);
       }
       
    
       $product->name=$request->name;
       $product->description=$request->disc;
       $product->save();
        
       return back()->withSuccess('Product Updated!!!');
    }

    public function destroy($id)
    {
        $product=Product::where('id',$id)->first();
        $product->delete();

        return back()->withSuccess('Product deleted Successfully');
    }
}
