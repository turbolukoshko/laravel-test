<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;

class TaskController extends Controller
{
    public function index()
    {
        $tasks= App\Task::all();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id)
    {
        $task = App\Task::find($id);
//        $task = DB::table('tasks')->find($id);
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    //App\Lists $id = 1
//    public function store()
//    {
//////        $task = new App\Task();
//////        $task->name = request()->get('name');
//////        $task->save();
//////        $taskNew = new App\Task([
//////            'name' => 'asd',
//////            'body' => 'asdsd'
//////        ]);
////        $create = DB::table('tasks')->insert(['create_at' => '', 'name' => $_POST['name'], 'desc' => $_POST['desc'], 'user_id' => 1, 'list_id' => 1]);
////        //return redirect('tasks');
//////        //return redirect()->route('show-list', ['id' => $id]);
////        //return redirect()->route('show-list', ['list' => $list->id]); // lists/1
////        return redirect()->to('/tasks');
//    }

    public function edit($id)
    {
        $task = DB::table('tasks')->find($id);
        return view('tasks.edit', [
            'task' => $task
        ]);
    }
    public function update($id)
    {
        $update = DB::table('tasks')->where('id', '=', $id)->update($_POST);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        $delete = DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect('tasks');
    }
}
