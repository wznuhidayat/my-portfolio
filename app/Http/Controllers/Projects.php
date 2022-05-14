<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Projects extends Controller
{
    public function getProject(Request $request)
    {
        $project = Project::findOrFail($request->input('id'));
        echo json_encode($project);
    }
}
