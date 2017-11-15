@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Create a new post</h1>
                <hr/>
                <form method="POST" action="/posts">
                    {{ csrf_field() }}
                    @if( count($errors) )
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach( $errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Body</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="body">{{ old('body') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
