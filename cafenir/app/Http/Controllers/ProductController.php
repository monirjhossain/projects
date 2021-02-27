<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index' ,[
            'products' => $products
        ]);
    }
    public function create()
    {
        return view('backend.product.create');
    }

    public function productSave(Request $request){
        $request->validate([
            'name' => 'required',
            'element' => 'required',
            'price' => 'required',
            'product_photo' => 'required'
        ]);

        $product_photo = $request->file('product_photo')->getClientOriginalName();
        $request->file('product_photo')->move('product_photo', $product_photo);

        Product::create([
            'name' => $request->name,
            'element' => $request->element,
            'price' => $request->price,
            'product_photo' => $product_photo
        ]);
        return redirect('/admin/product')->with('success', 'Your Product has been added successfully');
    }

    public function destroy($id){
        $productdelete = Product::find($id);
        $productdelete->delete();
        return redirect('admin/product')->with('success', 'Your Product deleted successfully!');
    }
}
