<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        return view('web.portafolio', ['projects' => $projects]) ;
    }

    public function show(Project $project)
    {
        return view('web.work', ['project' => $project]);
    }
}
