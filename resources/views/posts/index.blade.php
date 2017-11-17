@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach( $posts as $post )
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p class="text-muted">By {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString() }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
