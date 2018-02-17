<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Validator;



class CategoryController extends Controller
{

    /**
     * Returns all categories
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.categories', compact('categories') );
    }

    public function createIndex()
    {
        $categories = Category::all();
        return view('admin.create-category', compact('categories') );
    }


    public function editIndex($id)
    {
        $category = Category::find($id);
        return view('admin.edit-category', compact('category') );

    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $category = new Category;

        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function delete($id){
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.categories');
    }

    public function update(Request $request, $id){
        Category::where('id', $id)->update([
            "title" => $request->title,
            "slug" => $request->slug,
        ]);


        return redirect()->route('admin.categories');
    }


}
