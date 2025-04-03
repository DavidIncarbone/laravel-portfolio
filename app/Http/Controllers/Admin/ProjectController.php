<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

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
        $types = Type::all();

        return view("projects.create", compact("types"));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();

        $newProject->name = $data["name"];
        $newProject->type_id = $data["type_id"];
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
        $types = Type::all();
        return view("projects.edit", compact("project", "types"));
    }


    public function update(Request $request, Project $project)
    {

        $data = $request->all();

        $project->name = $data["name"];
        $project->type_id = $data["type_id"];
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
