@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="/store-list" method="POST">
                    @csrf

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Create List</button>
                    </div>

                    <div class="form-group">
                        <input class="form-control" name="name" placeholder="Name">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection