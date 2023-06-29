@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> My Posts </h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge badge-info ">
                                        Detail
                                    </a>
                                    <a href="/dashboard/posts/{{ $post->id }}" class="badge badge-warning ">
                                        Edit
                                    </a>
                                    <a href="/dashboard/posts/{{ $post->id }}" class="badge badge-warning ">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
