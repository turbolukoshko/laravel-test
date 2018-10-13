<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function index()
    {
        $lists = auth()->user()->lists;
        return view('lists.index', compact('lists'));
    }

    public function create()
    {
        return view('lists.create');
    }

    public function store(Request $request)
    {
//        $insert = App\Lists::create(['name' => $_POST['name'], 'user_id' => '1']);
        $list = new App\Lists;
        $list->name = $request->name;
        $list->user_id = $request->user()->id;
        $list->save();
        return redirect('lists');
    }

    public function show($id)
    {
        $list = App\Lists::find($id);
        return view('lists.show', compact('list'));
    }

    public function edit(Request $request, $id)
    {
        $list = App\Lists::find($id);
        return view('lists.edit', compact('list'));
    }

    public function update($id)
    {
        $flight = App\Lists::find($id);
        $flight->name = $_POST['name'];
//        dd($flight->name);
        $flight->save();
//        $update = App\Lists::where('name')->update(['name' => $_POST['name']]);
        return redirect('lists');
    }

    public function destroy($id)
    {
        $list = App\Lists::find($id);
        $list->delete();
        return redirect('lists');
    }
}
