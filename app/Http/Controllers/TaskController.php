<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function showOneTask($id)
    {
        $task = DB::table('tasks')->find($id);
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function createTask()
    {
        return view('tasks.create-task');
    }

    public function performanceCreateTask()
    {
        $create = DB::table('tasks')->insert($_POST);
        return redirect('tasks');
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->find($id);
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    public function updateTask($id)
    {
        $update = DB::table('tasks')->update($_POST);
        return redirect('tasks');
    }

    public function deleteTask($id)
    {
        $delete = DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect('tasks');
    }
}
