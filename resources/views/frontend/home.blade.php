@extends('layouts.frontend')
@section('content')
    <!-- blog-contents -->
    <section class="col-md-8">
        <!--if message show message-->
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
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

                            <time>
                                <!--human readable time formate-->
                                {{ $post->created_at->diffForHumans() }}

                                <time>
                        </p>
                        <h1>
                            <a href="{{ route('singlepost', $post->slug) }}">{{ $post->title }}</a>
                        </h1>
                    </div>
                </div>
            </article> <!-- /.blog-item -->
        @endforeach












        <div class="page-turn">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    {{ $posts->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div> <!-- /.page-turn -->

    </section>
@endsection
<!-- end of blog-contents -->
