<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view(Request $request){
        $products = Product::all();
        return view('product.view',compact('products'));
    }

    public function form(Request $request){
        return view('product.form');
    }
    public function create(Request $request){
        $request->validate(
        [
            'name'=>'required|string',
            'description'=>'required|string',
            'price'=>'required',
            'quantity'=>'required',
        ]);

        Product::create(
            [
                'name'=>$request->name,
                'description'=>$request->description,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
            ]
        );
        return redirect()->route('product.view')->with('success','product is added');
    }

    public function edit($id){
        $product= Product::find($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request,$id){
        
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product= Product::find($id);
        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
        ]);

        return redirect()->route('product.view');
    }

    public function delete($id){
        $product=Product::find($id);
        $product->delete();

        return redirect()->route('product.view');
    }
}
