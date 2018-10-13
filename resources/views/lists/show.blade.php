@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="form-group">
                    <a href="/lists" class="btn btn-success">Back to list</a>
                    <a href="/create-task" class="btn btn-success">Create task</a>

                </div>
                <h1>{{$list->name}}</h1>

                {{--<ul>--}}
                    {{--@foreach($tasks as $task)--}}
                    {{--<li>--}}
                        {{--<a href="/tasks/{{$task->id}}">{{$task->name}}</a>--}}
                        {{--<a href="/tasks/{{$task->id}}" class="btn btn-success">Show</a>--}}
                        {{--<a href="/edit/{{$task->id}}" class="btn btn-success">Edit</a>--}}
                        {{--<a href="/delete-task/{{$task->id}}" class="btn btn-success">Delete</a>--}}
                        {{--<hr>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}


            </div>
        </div>
    </div>
@endsection