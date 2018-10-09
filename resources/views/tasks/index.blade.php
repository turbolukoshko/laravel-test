@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h1>Test message!</h1>
                    <a href="/create" class="btn btn-success">Create task</a>
                <div>
                    <ul>
                        @foreach($tasks as $task)
                            <li>
                                <hr>
                                <a href="/tasks/{{$task->id}}">{{$task->name}}</a>
                                <a href="/tasks/{{$task->id}}" class="btn btn-success">Show</a>
                                <a href="/edit/{{$task->id}}" class="btn btn-success">Edit</a>
                                <a href="/delete-task/{{$task->id}}" class="btn btn-success">Delete</a>
                                <hr>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection