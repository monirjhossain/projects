<?php

namespace App\Http\Controllers\Backend;

// for validation 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\Category;
use App\Models\ParentCategory;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        // parent category data 

        return view('backend.pages.category.index', [
            'collections' => Category::latest()->paginate(4)
        ]);
    }
    public function create()
    {

        try {
            return view('backend.pages.category.create');
        } catch (Exception $e) {
            return 'Something Error';
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'status' => 'required'
        ]);

        $data = [
            'name' => $request->input('name'),
            'parent_id' => $request->input('parent_id'),
            'meta_description' => $request->input('meta_description'),
            'meta_title' => $request->input('meta_title'),
            'meta_keyword' => $request->input('meta_keyword'),
            'status' => $request->input('status'),
        ];

        Category::create($data);

        return redirect()->route('admin.category.index')->with('success', 'Success!! Category create successfully');

        // try {

        // } catch (Exception $e) {
        //     return redirect()->back()->with('message', 'Error');
        // }
    }
    // public function show(Category $category)
    // {

    // }
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.pages.category.edit', compact('categories'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
            'meta_description' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('admin.category.index')
            ->with('success', 'Category updated successfully!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('danger', 'Category deleted successfully!');
    }
}
