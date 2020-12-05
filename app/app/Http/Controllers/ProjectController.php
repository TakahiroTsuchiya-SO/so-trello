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
        // $this->validate($request, [
        //     'file' => [
        //         'required',
        //         'file',
        //         'image',
        //         'mimes:jpeg,png',
        //     ]
        // ]);

        $user    = Auth::user();
        $project = new Project();

        $project->title     = $request->title;
        $project->user_id   = $user->id;

        // if ($request->file('file')->isValid([])) {
        //     $path = $request->file('file')->store('public');
        //     $project->project_image = basename($path);
        // }
        // $file = time() . $request->file->getClientOriginalName();
        // $path = public_path('uploads/');
        // $request->file->move($path, $file);
            // $path = $file->store('public/image');
            // $project->project_image = basename($path);

        $project->save();
        return redirect('projects');
        // $user = auth()->user();
        // $data = $request->all();
        // if ($request->file('project_image')->isValid([])) {
        //     $path = $request->project_image->store('public/image');
        //     $data['project_image'] = basename($path);
        // }
        // $validator = Validator::make($data, [
        //     'title' => ['required', 'string', 'max:50']
        // ]);
        // $validator->validate();
        // $project->projectStore($user->id, $data);

        // return redirect('projects');
    }

    public function index()
    {
        $projects = Project::all();
        // with("categories.tasks")
        //           ->get();
        // foreach($projects as $project){
        //     $categories = $project->categories;
        // }
        // dd($projects);
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
