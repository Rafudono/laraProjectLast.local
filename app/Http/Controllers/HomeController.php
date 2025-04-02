<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = Post::simplePaginate(6);
        $postsPaginate = Post::paginate(6);

            //$posts=Post::where('category_id',$id)->paginate(6);

        $categories = Category::all();
        //dd($posts);
        return view('posts', compact('posts', 'categories'));
    }
public function showPostsByCategory($id)
{
    $posts=Post::where('category_id',$id)->simplePaginate(6);
    $categories = Category::all();
    return view('posts', compact('posts', 'categories'));
}
public function showPost($id)
{
    $post=Post::where('id', $id)->first();
    return view('singlePost', compact('post'));
}
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();

        return redirect()->route('posts.index');
    }
}
