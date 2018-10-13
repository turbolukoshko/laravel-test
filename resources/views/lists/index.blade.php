@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h1>Lists task</h1>
                <div class="form-group">
                    <a class="btn btn-success" href="/lists/create">Create List</a>
                </div>
                <div>
                    <ul>
                        @foreach($lists as $list)
                            <li>
                                <a href="/tasks">{{$list->name}}</a>
                                <a href="/lists/{{$list->id}}" class="btn btn-success">Show</a>
                                <a href="/lists/{{$list->id}}/edit" class="btn btn-success">Edit</a>
                                <a href="/delete/{{$list->id}}" class="btn btn-success">Delete</a>
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection