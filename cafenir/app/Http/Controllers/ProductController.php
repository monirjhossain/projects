<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('backend.product.index' ,[
            'products' => $products,
        ]);
    }
    
    public function create()
    {
        $catagories = Category::all();
        return view('backend.product.create',[
            'categories' => $catagories
        ]);
    }

    public function productSave(Request $request){
        $request->validate([
            'name' => 'required',
            'p_category' => 'required',
            'price' => 'required',
            'product_photo' => 'required'
        ]);
        
        $product_photo = $request->file('product_photo')->getClientOriginalName();
        $request->file('product_photo')->move('product_photo', $product_photo);
        
        Product::create([
            'name' => $request->name,
            'p_category' => $request->p_category,
            'price' => $request->price,
            'product_photo' => $product_photo
        ]);
        return redirect('admin/product')->with('success', 'Your Product has been added successfully');
    }

    public function productEdit($id){
        $products = Product::find($id);
        $categories = Category::all();
        return view('backend.product.edit', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function productUpdate(Request $request , $id){
        $request->validate([
            'name' => 'required',
            'p_category' => 'p_category',
            'price' => 'required',
            'product_photo' => 'required'
        ]);

        $productupdate = Product::find($id);
        $productupdate->name = $request->input('name');
        $productupdate->p_category = $request->input('p_category');
        $productupdate->price = $request->input('price');
        $productupdate->product_photo = $request->input('product_photo');

            $file = $request->file('product_photo');
            $extention = $file->getClientOriginalExtension();
            $product_photo = time() . '.' . $extention;
            $file->move('product_photo', $product_photo);
            $productupdate->product_photo = $product_photo;
        
        $productupdate->Save();
        return redirect('admin/product')->with('success', 'Your Product has been Updated!');
    }



    public function destroy($id){
        $productdelete = Product::find($id);
        $productdelete->delete();
        return redirect('admin/product')->with('success', 'Your Product deleted successfully!');
    }
}
