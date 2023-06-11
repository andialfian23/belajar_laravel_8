@extends('layouts.main')

@section('container')
    <h1>Post Categories</h1>

    <article class="mb-5">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="/categories/{{ $category['slug'] }}" class="text-decoration-none">
                        {!! $category['name'] !!}
                    </a>
                </li>
            @endforeach
        </ul>
    </article>
@endsection
