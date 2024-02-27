@extends('layouts.app');

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img width="100%" src="{{ asset("storage/cover_image/".$post->cover_image) }}" />
    <br>
    <br>
    <div>{!! $post->body !!}</div>
    <hr>
    <small>Written On {{ $post->created_at }} By {{ $post->user->name }}</small>
    <hr>

    @if (Auth::user() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>

        <form method="POST" action="/posts/{{ $post->id }}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="submit" class="btn btn-danger delete-user" value="Delete">
        </form>
    @endif
@endsection
