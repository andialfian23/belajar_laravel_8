@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">
                    {{ $post->title }}
                </h1>

                <a href="/dashboard/posts" class="btn btn-success">Back to all my posts</a>
                <a href="/dashboard/posts" class="btn btn-warning">Edit</a>
                <a href="/dashboard/posts" class="btn btn-danger">Delete</a>

                <img src="https://source.unplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
