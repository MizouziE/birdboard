<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show()
    {
        $project = Project::findOrFail(request('project'));

        return view('projects.show', compact('project'));
    }

    public function store()
    {
        //validate
        request()->validate(['title' => 'required', 'description' => 'required']);

        //persist
        Project::create(request(['title', 'description']));

        //redirect
        return redirect('/projects');

    }
}
