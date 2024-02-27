@extends('layouts.app') <!-- You can use your own layout or extend 'layouts.app' -->

@section('content')
    <div class="container">
        <h2>Create Post</h2>

        {{-- @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif --}}

        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="body" id="body" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="title">File</label>
                <input type="file" name="cover_image" id="title" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
        </form>
    </div>
@endsection
