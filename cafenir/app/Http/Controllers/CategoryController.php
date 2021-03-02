<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\ParentCategory;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('backend.category.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        $parent_categories = ParentCategory::all();
        return view('backend.category.create', [
            'parent_categories' => $parent_categories
        ]);
    }

    public function categorySave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_category_id' => 'required',
            'category_photo' => 'required'
        ]);

        $category_photo = $request->file('category_photo')->getClientOriginalName();
        $request->file('category_photo')->move('category_photo', $category_photo);


        Category::create([
            'name' => $request->name,
            'parent_category_id' => $request->parent_category_id,
            'category_photo' => $category_photo
        ]);
        return redirect('/admin/category')->with('success', 'Category Uploaded successfully');
    }

    public function categoryEdit($id){
        $categories = Category::find($id);
        return view('backend.category.edit', compact('categories', $categories));
    }

    public function destroy($id)
    {
        //dd($request);
        $categorydelete = Category::find($id);
        $categorydelete->delete();
        return redirect('admin/category')->with('success', 'Your Category has been deleted');
    }
}
