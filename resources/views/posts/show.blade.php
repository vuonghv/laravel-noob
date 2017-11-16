@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{ $post->title }}</h3>
                <small>{{ $post->created_at->toFormattedDateString() }}</small>
                <p>{{ $post->body }}</p>
                <hr/>
                @foreach( $post->comments as $comment )
                    <p>{{ $comment->body }}<small class="text-muted">&nbsp;&nbsp;{{ $comment->created_at->diffForHumans() }}</small></p>
                @endforeach

                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" class="form-control" id="exampleInputEmail1" placeholder="Input your comment" required></textarea>
                    </div>
                    @include('layouts.error')
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
