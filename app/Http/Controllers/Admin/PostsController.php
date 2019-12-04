<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\facultad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

    protected $dates = ['fecha_vencimiento'];
    
    public function index ()
    {

        $posts = Post :: all();
        return view ('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        $facultad = facultad::all();
        return view ('admin.posts.create',compact('facultad'));
    }

    public function store (Request $request )
    {
           $this -> validate ($request,[
               'titulo' =>'required',
            'descripcion'=> 'required',
            'facultad' =>'required'
           ]);

           $post = new Post ;
           $post->titulo= $request->get('titulo');
           $post->descripcion= $request->get('descripcion');
           $post->fecha_creacion= $request->has('fecha_Creacion') ? Carbon::parse($request ->get('fecha_creacion')) : null;
           $post->facultad_id= $request->get('facultad');
           $post->save();
           return back()->with('flash','el concurso ah sido creado');
    }
}
