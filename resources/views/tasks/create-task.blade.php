@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Test message!</h1>

                <form method="POST" action="/performance-create">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="desc" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Create task</button>
                    </div>


                </form>

            </div>
        </div>
    </div>
@endsection