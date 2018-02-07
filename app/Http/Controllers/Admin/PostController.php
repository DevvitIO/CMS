<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Validator;
class PostController extends Controller
{

    /**
     * Returns all posts
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts', compact('posts') );
    }

    public function createIndex()
    {
        $posts = Post::all();
        return view('admin.create', compact('posts') );
    }


    public function editIndex($id)
    {
        $post = Post::find($id);
        return view('admin.edit', compact('post') );

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

        $post = new Post;

        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();
        return redirect()->route('admin.posts');
    }

    public function delete($id){
        Post::findOrFail($id)->delete();
        return redirect()->route('admin.posts');
    }

    public function update(Request $request, $id){
        Post::where('id', $id)->update([
            "title" => $request->title,
            "text" => $request->text,
        ]);


        return redirect()->route('admin.posts');
    }


}
