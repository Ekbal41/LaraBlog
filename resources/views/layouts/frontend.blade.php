<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->

<head>

    <!-- meta -->
    <meta charset="utf-8">



    <title>
        {{ App\Models\Navbar::first()->site_name }}

    </title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">

 
</head>

<body class="">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('theme/img/logo.png') }}" alt="Site Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" {{ request()->routeIs('home') ? 'active' : '' }}"><a
                            href="{{ route('home') }}">Home</span></a></li>

                            <li class=" {{ request()->routeIs('reso') ? 'active' : '' }}"><a
                                href="{{ route('reso') }}">Resource</span></a></li>
                                <li class=" {{ request()->routeIs('design') ? 'active' : '' }}"><a
                                    href="{{ route('design') }}">Design Resource</span></a></li>
                </ul>
            </div><!-- end of /.navbar-collapse -->
        </div><!-- end of /.container -->
    </nav>
    <main>
        <div class="container ">
            <div class="row">
                @yield('content')
                <!-- sidebar -->
                <aside class="col-md-4 col-sm-8 col-xs-8">
                    <div class="sidebar">

                        <!-- search option -->
                        <div class="search-widget ">
                            <form action={{ route('search') }} method="POST">
                                @csrf
                                <div class="input-group margin-bottom-sm">
                                    <input class="form-control" style="width: 340px" name='search' type="text"
                                        placeholder="Search here">
                                    <button type='submit' class=" btn btn-primary btn-block">
                                        <i class="fa fa-search fa-fw"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <a href="http://themewagon.com/" class="template-images">
                            <img class="img-responsive" src="{{ asset('theme/img/store1.png') }}" alt="Template Store">
                            <div class="overlay"></div>
                        </a>

                        <!-- subscribe form -->
                        <div class="subscribe-widget">
                            <h4 class="text-capitalize text-center">
                                get recent update by email
                            </h4>
                            <div class="input-group margin-bottom-sm">
                                <input class="form-control" type="text" placeholder="Your Email">
                                <a href="#" class="input-group-addon">
                                    <i class="fa fa-paper-plane fa-fw"></i>
                                </a>
                            </div>
                        </div>

                        <!-- sidebar share button -->
                        <div class="share-widget hidden-xs hidden-sm">
                            <ul class="social-share text-center">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul> <!-- /.sidebar-share-button -->
                        </div> <!-- /.share-widget -->

                    </div>
                </aside>
                <!-- end of sidebar -->

            </div>
        </div>
    </main>



    <footer class="">
        <div class="container ">
            <div class="row">
                <!-- copyright -->
                <div class="col-md-4 col-sm-4">
                    Copyright &copy; <?php echo date('Y'); ?> <a href="#"
                        style="margin-left: 4px;">{{ App\Models\Footer::first()->copy_right }}</a>


                </div>

                <!-- footer share button -->
                <div class="col-md-4 col-sm-4">
                    <ul class="social-share text-center">
                        <li><a href="{{ App\Models\Footer::first()->twitter }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ App\Models\Footer::first()->facebook }}"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="{{ App\Models\Footer::first()->youtube }}"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="{{ App\Models\Footer::first()->instagram }}"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul> <!-- /.social-share -->
                </div>

                <!-- footer-nav -->
                <div class="col-md-4 col-sm-4">
                    <ul class="footer-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> <!-- /.footer-nav -->
                </div>
            </div>
        </div>
    </footer>


    <!--  Necessary scripts  -->

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
