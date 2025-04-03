<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{

    public function index()
    {

        $projects = Project::all();
        // dd($projects);

        return view("projects.index", compact("projects"));
    }


    public function create()
    {
        return view("projects.create");
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();

        $newProject->name = $data["name"];
        $newProject->type = $data["type"];
        $newProject->customer = $data["customer"];
        $newProject->period = $data["period"];
        $newProject->summary = $data["summary"];
        $newProject->link = $data["link"];

        $newProject->save();
        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }


    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }


    public function update(Request $request, Project $project)
    {

        $data = $request->all();

        $project->name = $data["name"];
        $project->type = $data["type"];
        $project->customer = $data["customer"];
        $project->period = $data["period"];
        $project->summary = $data["summary"];
        $project->link = $data["link"];

        $project->update();

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route("projects.index");
    }
}
