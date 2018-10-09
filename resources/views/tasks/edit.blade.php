@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Test message!</h1>

                <form method="POST" action="/update-task/{{$task->id}}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{$task->name}}">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="desc">{{$task->desc}}</textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Edit task</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection