@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit Post </h1>
    </div>



    <div class="row">
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
                @method('put')
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title', $post->title) }}" autofocus>
                    @error('title')
                        <small id="title_notif" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" readonly required value="{{ old('old', $post->slug) }}">
                    @error('slug')
                        <small id="title_notif" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id', $category->id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="body">Body</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="hidden" id="body" name="body" value="{{ old('body', $post->body) }}" />
                    <trix-editor input="body"></trix-editor>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
@endsection
