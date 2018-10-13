@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Show Task</h1>
                <h1>{{$task->name}}</h1>
                <p>{{$task->desc}}</p>
                <a class="btn btn-success" href="/tasks">Back to tasks</a>
            </div>
        </div>
    </div>
@endsection