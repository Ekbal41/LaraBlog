@extends('layouts.frontend')
@section('content')
    <!-- blog-contents -->
    <section class="col-md-8">
        <p>Search results for <strong>{{ $search }}</strong></p>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <article class="blog-item">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="single_blog_page.html">
                                <img src="{{ $post->image ? asset('storage/' . $post->image) : asset('theme/img/blog/blog1.jpg') }}"
                                    class="img-thumbnail center-block" alt="Blog Post Thumbnail">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <p>
                                in
                                <a href="#">
                                    {{ $post->category->name }}
                                </a>

                                <time>{{ $post->created_at }}<time>
                            </p>
                            <h1>
                                <a href="{{ route('singlepost', $post->slug) }}">{{ $post->title }}</a>
                            </h1>
                        </div>
                    </div>
                </article> <!-- /.blog-item -->
            @endforeach
        @else
            <div class="alert alert-info">
                <p>No results found for <strong>{{ $search }}</strong></p>
            </div>
        @endif
    </section>
@endsection
