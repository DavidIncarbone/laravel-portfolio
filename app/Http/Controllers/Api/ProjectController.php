<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return response()->json([
            "success" => true,
            "data" => $projects
        ]);
    }

    public function show(Project $project)
    {

        return response()->json([
            "success" => true,
            "data" => $project
        ]);
    }
}
