<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.cate-list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.cate-add');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
        ]);

        // Create a new Category instance
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        // Redirect back to the list of categories
        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.cate-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Find the category to update
        $category = Category::findOrFail($id);

        // Validate the form data
        $request->validate([
            'name' => 'required',
        ]);

        // Update category information
        $category->name = $request->name;
        $category->save();

        // Redirect back to the list of categories
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirect back to the list of categories
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
