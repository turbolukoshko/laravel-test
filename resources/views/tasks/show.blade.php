@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Test message!</h1>
                <h1>{{$task->name}}</h1>
                <p>{{$task->desc}}</p>

            </div>
        </div>
    </div>
@endsection