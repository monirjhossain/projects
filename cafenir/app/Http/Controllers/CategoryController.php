<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(){
        $categories = Category::all();
        return view('backend.category.index', [
            'categories' => $categories
        ]);
    }
    
    public function create(){
        return view('backend.category.create');
    }

    public function categorySave(Request $request){
        $request->validate([
            'name' => 'required',
            'category_photo' => 'required'
        ]);

        $category_photo = $request->file('category_photo')->getClientOriginalName();
        $request->file('category_photo')->move('category_photo', $category_photo);


        Category::create([
            'name' => $request->name,
            'category_photo' => $category_photo
        ]);
        return redirect('/admin/category')->with('success', 'Category Uploaded successfully');
    }

    // public function edit($id){
    //     $editcatagory = Category::find($id);
    //     return view('backend.category.update')->with('editcategory', $editcatagory);
    // }

    public function destroy($id){
        //dd($request);
        $categorydelete = Category::find($id);
        $categorydelete->delete();
        return redirect('admin/category')->with('success', 'Your Category has been deleted');
    }

}
