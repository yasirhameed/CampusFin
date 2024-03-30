<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function show_category()
    {
        $category = Category::all();
        return view('dashboard_layouts.show_category', compact('category'));
    }

    public function category()
    {
        return view('dashboard_layouts.add_category');
    }



    public function add_category(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return view('dashboard_layouts.add_category')->with('success', 'category add successfully');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'category delete successfully');
    }
}
