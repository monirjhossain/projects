<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\ParentCategory;
use Illuminate\Support\Facades\Storage;

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
        // return $request;
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
        return redirect('admin/category')->with('success', 'Category Uploaded successfully');
    }

    public function categoryEdit($id){
        $categories = Category::find($id);
        $parent_categories = ParentCategory::all();
        return view('backend.category.edit', [
            'categories'=> $categories, 
            'parent_categories'=> $parent_categories]);
    }


    public function categoryUpdate(Request $request, $id){
        
        $request->validate([
            'parent_category_id' => 'required',
            'name' => 'required',
            'category_photo' => 'required'
        ]);

        $categoryupdate = Category::find($id);
        $categoryupdate->parent_category_id = $request->input('parent_category_id');
        $categoryupdate->name = $request->input('name');
        // $categoryupdate->category_photo = $request->input('category_photo');


        if($request->hasFile('category_photo')){
            $file = $request->file('category_photo');
            $extention = $file->getClientOriginalExtension();
            $category_photo = time() . '.' . $extention;
            $file->move('category_photo', $category_photo);
            

            $file_path = 'category_photo/'.$categoryupdate->category_photo;
            if(Storage::disk('upload')->exists($file_path)){
                Storage::disk('upload')->delete('category_photo/'.$categoryupdate->category_photo);
            }
            $categoryupdate->category_photo = $category_photo;
        }
        $categoryupdate->Save();
        return redirect('admin/category')->with('success', 'Your Category has been Updated!');
    }

    public function destroy($id)
    {
        //dd($request);
        $categorydelete = Category::find($id);
       $file_path =  'category_photo/'.$categorydelete->category_photo;
        if(Storage::disk('upload')->exists($file_path)){
             Storage::disk('upload')->delete('category_photo/'.$categorydelete->category_photo);
        }
        $categorydelete->delete();
        return redirect('/admin/category')->with('success', 'Your Category has been deleted');
    }
}
