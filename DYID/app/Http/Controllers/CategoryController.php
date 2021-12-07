<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function insertCategory(Request $request){
        $val = Validator::make($request->all(),[
            'name' => ['required', 'unique:categories','string', 'min:2'],
        ]);

        $val->validate();
        
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

        $val = Validator::make($request->all(),[
            'name' => ['required', 'unique:categories','string', 'min:2'],
        ]);

        $val->validate();

        $id = $request->id;
        $name = $request->name;
        Category::where('id', $id)->first()->update([
            'name' => $name
        ]);
        return redirect('/managecategory');
    }
}
