<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.category')->with(compact('categories'));
    }

    public function create()
    {
        return view('category.createcategory');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name
        ]);

        return redirect('category');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit')->with((compact('category')));
    }

    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'name' => $request->name
        ]);

        return redirect('/category');
    }

    public function delete($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/category');
    }
}
