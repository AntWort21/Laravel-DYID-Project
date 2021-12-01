<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function insertCategory(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/managecategory');
    }
    public function deleteCategory(Request $request){
        $id = $request->id;
        $selectedCategory = Category::where('id', $id)->first();
        $selectedCategory->delete();
        return redirect('/managecategory');
    }
    public function updateCategory(Request $request){
        $id = $request->id;

        $name = $request->name;
        Category::where('id', $id)->first()->update([
            'name' => $name
        ]);
        return redirect('/managecategory');
    }
}
