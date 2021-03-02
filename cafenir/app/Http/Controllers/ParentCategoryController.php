<?php

namespace App\Http\Controllers;

use App\ParentCategory;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{
    public function index()
    {
        $parentcategories = ParentCategory::all();
        return view('backend.parentcategory.index', [
            'parentcategories' => $parentcategories
        ]);
    }

    public function create()
    {
        return view('backend.parentcategory.create');
    }

    public function parentcategorySave(Request $request)
    {
        $request->validate([
            'p_name' => 'required',
            'p_category_photo' => 'required'
        ]);

        $p_category_photo = $request->file('p_category_photo')->getClientOriginalName();
        $request->file('p_category_photo')->move('p_category_photo', $p_category_photo);


        ParentCategory::create([
            'p_name' => $request->p_name,
            'p_category_photo' => $p_category_photo
        ]);
        return redirect('/admin/parentcategory')->with('success', 'Parent Category Uploaded successfully');
    }

        public function parentcategoryEdit($id){
           $parentcategory = ParentCategory::find($id);
            return view('backend.parentcategory.edit', compact('parentcategory', $parentcategory));
        }

    //update image
    public function parentcategoryUpdate(Request $request, $id)
    {
        $request->validate([
            'p_name' => 'required',
            'p_category_photo' => 'required'
        ]);
        
        $parentcategory = ParentCategory::find($id);
        $parentcategory->p_name = $request->input('p_name');
        $parentcategory->p_category_photo = $request->input('p_category_photo');

        if($request->hasFile('p_category_photo')){
            $file = $request->file('p_category_photo');
            $extension = $file->getClientOriginalExtension();
            $p_category_photo = time() . '.' . $extension;
            $file->move('p_category_photo', $p_category_photo);
            $parentcategory->p_category_photo = $p_category_photo;
        }
        $parentcategory->save();
        return redirect('/admin/parentcategory')->with('success', 'Your Parent Category has been updated');
        
    }

    // public function edit($id){
    //     $editcatagory = ParentCategory::find($id);
    //     return view('backend.category.update')->with('editcategory', $editcatagory);
    // }

    public function destroy($id)
    {
        //dd($request);
        $p_categorydelete = ParentCategory::find($id);
        $p_categorydelete->delete();
        return redirect('admin/parentcategory')->with('success', 'Your Category has been deleted');
    }
}
