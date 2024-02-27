@extends('layouts.app') <!-- You can use your own layout or extend 'layouts.app' -->

@section('content')
    <div class="container">
        <h2>Edit Post</h2>


        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="body" id="body" class="form-control" rows="5">{{ $post->body }}</textarea>
            </div>
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="title">File</label>
                <input type="file" name="cover_image" id="title" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Post</button>
            </div>
        </form>
    </div>
@endsection
