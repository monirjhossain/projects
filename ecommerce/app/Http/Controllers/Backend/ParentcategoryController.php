<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\ParentCategory;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Service\Attribute\Required;

class ParentcategoryController extends Controller
{
    public function index()
    {

        return view('backend.pages.ParentCategory.index', [
            'parent_categories' => ParentCategory::latest()->paginate(4)
        ]);
    }

    public function create()
    {
        return view('backend.pages.ParentCategory.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'status' => $request->input('status'),
        ];

        ParentCategory::create($data);
        return redirect()->route('admin.parent-category.index')->with('pq-success', 'Success!! Parent Category create successfully');;
    }

    public function edit($id)
    {

        $parentCategories = ParentCategory::find($id);

        return view('backend.pages.ParentCategory.edit', compact('parentCategories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $parentcategory = ParentCategory::find($id);
        $parentcategory->update($request->all());

        return redirect()->route('admin.parent-category.index')
            ->with('success', 'Parent Category updated successfully!');
    }

    public function destroy($id)
    {
        ParentCategory::find($id)->delete();

        return redirect()->route('admin.parent-category.index')->with('danger', 'Parent Category has been deleted successfully!');
    }
}
