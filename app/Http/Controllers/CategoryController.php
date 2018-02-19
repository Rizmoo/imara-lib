<?php

namespace App\Http\Controllers;

use App\Category;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Integer;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('type', 'category')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::where('parent_id', null)->get();
        return view('admin.categories.create', compact('parents'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->all();

        if (Input::get('parent_id') !== null) {
            $parent = Category::where('id', Input::get('parent_id'))->firstOrFail();
            $node = new Category($attributes);
            $node->appendToNode($parent)->save();
        } else {
            $node = new Category($attributes);
            $node->save(); // Saved as root
        }

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $kids = Category::where('parent_id', $category->id)->get();
        if ($kids ->count() == 0){
            $files = File::where('subject',$category->id)->get();
            return view('download', compact('files'));
        }
       return view('admin.categories.show', compact('category','kids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    public function subcat()
    {
        $cat_id = Input::get('cat_id');
        $id = (int)$cat_id;
        $kid = Category::where('parent_id', '=',$id)->get();
        return response()->json($kid);
    }
}
