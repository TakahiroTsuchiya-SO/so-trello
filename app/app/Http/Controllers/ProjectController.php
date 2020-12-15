<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('projects.create', [
            'user' => $user
        ]);
    }

    /**
     * プロフィールの保存
     *
     * @param Request $request
     * @return Response
     */

    public function store(Request $request, Project $project)
    {
        $this->validate($request, [
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png',
            ]
        ]);
        $user    = Auth::user();
        $project = new Project();

        if ($request->file('file')->isValid([])) {
        $path = $request->file('file')->store('public/img');
        }
        $project->project_image = basename($path);
        $project->title         = $request->title;
        $project->user_id       = $user->id;

        $project->save();
        return redirect('projects');
    }

    public function index()
    {
        $projects = Project::all();
        return view('projects/index', [
            'projects' => $projects,
        ]);
    }

    public function delete($id)
    {
        Project::find($id)->delete();
        return redirect('projects');
    }
}
