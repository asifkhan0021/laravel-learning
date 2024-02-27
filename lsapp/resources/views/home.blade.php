@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <h3>My Posts</h3>
                        @if (count($posts) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th colspan="2">Action</th>
                                </tr>

                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form method="POST" action="/posts/{{ $post->id }}" class="pull-right">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <input type="submit" class="btn btn-danger delete-user" value="Delete">
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>No posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
