@extends('layouts.frontend')
@section('content')
    <section class="col-md-8">

        <article class="single-blog-item">

            <div class="alert alert-info">
               
                <a href="#">{{
                    $post->category->name
                    }}</a>
                updated
                <time>
                    {{
                    $post->created_at
                    }}
                </time>
            </div>

            <h1>{{
                $post->title
                }}</h1>
                
            
            <p>
                {!!
                $post->content
                !!}
            </p>

            

            
            

            

        </article>

        <h4>Related Articles</h4>
        @if (count($related) > 0)
        @foreach($related as $post)
        <div class="related-articles">
            <div class="alert alert-info">
                <a href="{{
                    route('singlepost', $post->slug)
                }}">
                   
                    {{
                    $post->title
                    }}


                  </a>
            </div>
        </div>
        @endforeach
        @else
        <div class="related-articles">
            <div class="alert alert-info">
                <a href="#">
                    No related post found
                </a>
            </div>
        </div>
        @endif
        
        

        <div class="author">
            <p>Written by <strong class="text-capitalize">john doe</strong></p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        
    </section>
    <!-- end of blog-contents -->
@endsection
