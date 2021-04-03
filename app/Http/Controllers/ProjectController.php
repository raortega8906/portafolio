<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        return view('admin.project.index', ['projects' => $projects]) ;
    }

    public function create(Request $request)
    {
        $validateData = [
            'title' => $request->input('title'),
            'url_clean' => $request->input('url_clean'),
            'image' => $request->file('image'),
            'content' => $request->input('content')
        ];
        if($request->hasFile('image'))
        {
            $destinationPath = 'images';
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file->move($destinationPath , $file_name);
            $validateData['image'] = $file_name;
            Project::create($validateData);
            return back()->with('status', 'Proyecto creado con éxito');
        }
        return back()->with('status-error', 'Alguno de los campos está sin llenar');
    }

    public function show(Project $project)
    {
        return view('admin.project.show', ['project' => $project]);
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit', ['project' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        $validateData = [
            'title' => $request->input('title'),
            'url_clean' => $request->input('url_clean'),
            'image' => $request->file('image'),
            'content' => $request->input('content')
        ];
        if($request->hasFile('image'))
        {
            $destinationPath = 'images';
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file->move($destinationPath , $file_name);
            $validateData['image'] = $file_name;
            $project->update($validateData);
        }
        return back()->with('status', 'Proyecto actualizado con éxito');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('status', 'Proyecto eliminado con éxito');
    }

}
