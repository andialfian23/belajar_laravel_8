@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Create New Post </h1>
    </div>



    <div class="row">
        <div class="col-lg-8">
            <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" required value="{{ old('title') }}" autofocus>
                    @error('title')
                        <small id="title_notif" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" readonly required value="{{ old('old') }}">
                    <small id="slug_notif" class="form-text text-danger"></small>
                    @error('slug')
                        <small id="title_notif" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id" value="{{ old('category_id') }}">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <small id="slug_notif" class="form-text text-danger"></small>
                </div>
                <div class="form-group mb-2">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror" />
                    @error('image')
                        <small id="image_notif" class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="body">Body</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="hidden" id="body" name="body" value="{{ old('body') }}" />
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
