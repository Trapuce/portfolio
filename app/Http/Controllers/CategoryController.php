<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Inertia\Inertia;


class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $categories = CategoryResource::collection(Category::all());
        return Inertia::render('categories/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('categories/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required' , 'min:3'],
           ]);

             Category::create([
                'name'=>$request->name,
             ]);

             return redirect()->route('categories.index')->with('message', 'Category created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return Inertia::render('categories/edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' =>['required', 'min:3'],
        ]);

        $project->update([
            'name' =>$request->name,
        ]);
        return redirect()->route('categories.index')->with('message', 'Category update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
       $category->delete();

       return redirect()->back()->with('message', 'category delete successfully');;
    }
}
