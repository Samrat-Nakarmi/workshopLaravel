<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('food.dashboard')->with(compact('foods'));
    }

    public function food()
    {
        $categories = Category::all();
        return view('food.createfood')->with(compact('categories'));
    }

    public function store(Request $request)
    {
        $image = $request->image_path->store('images');
        Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'image_path'=> $image,
            'category_id'=>$request->category_id,
            'staus' => $request->status
        ]);

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        Food::findOrFail($id)->delete();
        return redirect('/dashboard');
    }
    
    public function edit($id)
    {
        $food = Food::findOrFail($id);
        $categories = Category::all();
        return view('food.edit')->with(compact('food', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->image_path->store('images');
        // dd($image);
        Food::findOrFail($id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'image_path'=> $image,
            'category_id'=>$request->category_id,
            'staus' => $request->status
        ]);

        return redirect('/dashboard');
    }
}
