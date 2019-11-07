<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('show','index');
    }
    public function index()
    {
        return view('projects.index', [
            'projects' =>Project::latest()->paginate()
        ]);
    }
    public function show(Project $project)
    {
        return view('projects.show',[
            'project' => $project
        ]);

    }
    public function create()
    {
        return view('projects.create',[
            'project' =>new Project
        ]);
    }
    public function store(SaveProjectRequest $request)
    {
        $project = new Project( $request->only('title','url','description','image','image2','prevition') );

        $project->image = $request->file('image')->store('files');
        $project->image2 = $request->file('image2')->store('files');

        $project->save();

         return redirect()->route('projects.index')->with('status' , 'El proyecto fue creado con éxito');
    }

     public function home()
    {
        return view('home');
    }
     public function about()
    {
        return view('about');
    }
     public function contact()
    {
        return view('contact');
    }
    public function edit(Project $project)
    {
            return view('projects.edit', [
                'project' => $project
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
            $project->update($request->only('title','url','description'));
               return redirect()->route('projects.show', $project)->with('status' , 'El proyecto fue actualizado con éxito.');
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status' , 'El proyecto fue eliminado con éxito');
    }

}
