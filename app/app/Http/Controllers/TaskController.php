<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Project $project)
    {
        $project        ->load('categories.tasks');
        $categories     = $project
                        ->categories;
        foreach ($categories as $category) {
            $tasks[]    = $category
                        ->tasks;
        }

        $categoryJson   = json_encode($categories);
        $taskJson       = json_encode($tasks);
        dd($categoryJson);

        return view('tasks/index', [
            'project'       => $project,
            'tasks'         => $tasks,
            'categories'    => $categories,
            'categoryJson'  => $categoryJson,
            'taskJson'      => $taskJson,
        ]);
    }

    public function create(Project $project)
    {
        $categories = $project
            ->categories()
            ->pluck('title', 'id')
            ->prepend('カテゴリーを選択する', '');
        return view('tasks/create', [
            'categories' => $categories,
            'project'    => $project,
        ]);
    }

    public function store(Project $project, Request $request)
    {
        $task = new Task();

        $task->title        = $request->title;
        $task->category_id  = $request->category_id;
        $task->due_date     = $request->due_date;
        $task->owner        = $request->owner;
        $task->worker       = $request->worker;

        $task->save();
        return redirect()->route('tasks.index', [
            $project->id,
        ]);
    }
}
