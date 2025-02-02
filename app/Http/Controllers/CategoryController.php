<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'category' => ['required', 'string', 'min:2', 'max:40', 'unique:categories'],
        ]);
        // $request->user()->fill($request->validated());

        if ( $request ) { 
            $category = new Category();
            $category->category = $request->input('category');
            $category->save();

            return Redirect::route('category.create')->with('status', 'success');
        }
        else{
            return Redirect::route('category.create')->with('status', 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $category = Category::find($category);
        $category->delete();

        return Redirect()->back()->with('status', 'success');
    }
}
