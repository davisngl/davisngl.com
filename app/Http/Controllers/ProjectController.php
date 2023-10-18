<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return inertia('Projects', [
            'projects' => ProjectResource::collection(Project::all()),
        ]);
    }

    public function show(Project $project): Response
    {
        return inertia('Project', [
            'project' => ProjectResource::make($project),
        ]);
    }
}
