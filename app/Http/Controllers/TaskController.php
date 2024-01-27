<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}

   /**
        * タスク登録
        *
        * @param Request $request
        * @return Response
        */
