@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/update-list/{{$list->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <a href="/lists" class="btn btn-success">Back to list</a>
                    </div>


                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{$list->name}}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Update list</button>

                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection