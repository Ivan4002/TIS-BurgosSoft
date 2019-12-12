<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::all();
    	return view('admin.posts.index',compact('posts'));
    }
    public function create()
    {
    	$tags=Tag::all();
    	$categories=Category::all();
    	return view('admin.posts.create',compact('categories','tags'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'excerpt' => 'required'


        ]);
        $post=new Post;
        $post->title = $request->get('title');
        $post->url = str_slug($request->get('title'));
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at =$request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
        $post->category_id = $request->get('category');
        //etiquetas
        $post->save();

        $tags = [];

        foreach ($request->get('tags') as $tag)
        {
            $tags[] = Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;

        }


        $post->tags()->sync($tags);
        return back()->with('flash', 'Tu articulos  ha sido creada');
    }
}