@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-md-4">
                    <img width="100%" src="{{ asset("storage/cover_image/".$post->cover_image) }}" />
                </div>
                <div class="col-md-8">
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>Written On {{ $post->created_at }} By {{ $post->user->name }}</small>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts</p>
    @endif
@endsection
