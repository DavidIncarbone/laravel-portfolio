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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact("project"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
