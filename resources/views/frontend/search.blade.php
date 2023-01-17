<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ App\Models\Navbar::first()->site_name }}</title>
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">
</head>
<body>
    <section class="col-md-8"
    style="
    margin-top: 50px;
    margin-left: 200px;
    "
    >
       
        <div
        style="display: flex;
        justify-content: space-between;
        "
        >
            <div><p>Search results for <strong>{{ $search }}</strong></p></div>
           <div> <a href="{{ route('home') }}"
            style="color: #B77B3C; font-size: 20px; font-weight: 700; margin-top: 10px; margin-left: 10px; "
            >Back</a></div>
        </div>
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

                                <time>{{ $post->created_at->diffForHumans() }}<time>
                            </p>
                            <h1>
                                <a href="{{ route('singlepost', $post->slug) }}">{{ $post->title }}</a>
                            </h1>
                        </div>
                    </div>
                </article> <!-- /.blog-item -->
            @endforeach
            <a href="{{ route('home') }}"
            style="color: #B77B3C; font-size: 20px; font-weight: 700; margin-top: 30px; margin-left: 10px; "
            >Back to home</a>
        @else
            <div class="alert alert-info">
                <p>No results found for <strong>{{ $search }}</strong></p>
            </div>
        @endif
    </section>
    
    <script type="text/javascript" src="{{ asset('theme/js/jquery-2.1.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('theme/js/jQuery.scrollSpeed.js') }}"></script>

    <!-- smooth-scroll -->

    <script>
        $(function() {
            jQuery.scrollSpeed(100, 1000);
        });
    </script>

    
</body>
</html>