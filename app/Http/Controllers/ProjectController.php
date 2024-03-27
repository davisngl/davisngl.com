<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return inertia('Projects', [
            'projects' => ProjectResource::collection(
                Project::query()
                    ->orderBy('order')
                    ->orderBy('created_at')
                    ->get()
            ),
        ]);
    }

    public function show(Project $project): Response
    {
        return inertia('Project', [
            'project' => ProjectResource::make($project),
        ]);
    }
}
