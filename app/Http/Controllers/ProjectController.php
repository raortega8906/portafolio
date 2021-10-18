<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        return view('admin.project.index', compact('projects')) ;
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(StoreProjectRequest $request)
    {
        if($request->hasFile('image'))
        {
            $validateData = $request->validated();
            $destinationPath = 'images';
            $file = $validateData['image'];
            $file_name = $file->getClientOriginalName();
            $file->move($destinationPath , $file_name);
            $validateData['image'] = $file_name;
            auth()->user()->projects()->create($validateData);
            return back()->with('status', 'Proyecto creado con éxito');
        }
        return back()->with('status-error', 'Faltan campos por llenar');
    }

    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        if($request->hasFile('image'))
        {
            $validateData = $request->validated();
            $destinationPath = 'images';
            $file = $validateData['image'];
            $file_name = $file->getClientOriginalName();
            $file->move($destinationPath , $file_name);
            $validateData['image'] = $file_name;
            $project->update($validateData);
            return back()->with('status', 'Proyecto actualizado con éxito');
        }
        return back()->with('status-error', 'Campos actualizados incorrectamente');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('status-error', 'Proyecto eliminado con éxito');
    }

}
