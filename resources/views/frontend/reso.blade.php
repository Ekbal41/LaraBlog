@extends('layouts.frontend')
@section('content')
<header class="page-head">
    <div class="header-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>Resources</h1>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.header-wrapper -->
</header> <!-- /.page-head (header end) -->

<section class="page-content">
    <div class="container">
        <div class="row">
            <article class="col-md-12">
                <h1>one page web hosting review</h1>
                <p>Each of the below recommended hosting companies we have had previous experience with. Reviews are ongoing – this section is currently being edited with case studies on their way.</p>
                <h2>Firstly, there of 3 types of hosting:</h2>
                <ol>
                    <li>
                        <strong>Standard Hosting</strong> – good for HTML One Page websites. This is affordable website hosting on a server shared with other. This type of hosting can also host WordPress websites but is not as fast as Managed WordPress Hosting.
                    </li>
                    <li>
                        <strong>Managed WordPress Hosting</strong> – perfect for One Page WordPress themes, the hosting is tailored specifically for WordPress where the speed and security is optimised for you.
                    </li>
                    <li>
                        <strong>Online Website Builder</strong> – build your One Page website online, they take care of hosting and security. You signup, start building and it just works.
                    </li>
                </ol>

                <div class="resource-item">
                    <h3>Standard Hosting – Blue Host ($3.49/month)</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive center-block" src="{{asset('theme/img/blue-host.jpg')}}" alt="Blue Host">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <a href="#" class="label label-info">Blue Host</a> is your most affordable option at $3.49 where you can host <strong>unlimited sites with unlimited diskspace and bandwidth</strong>. They are very web established and have a huge support team 24-7.
                            </p>
                            <p>
                               This option also allows for a <strong>1-click WordPress install</strong> but the WordPress maintenance (upgrades) is up to you. The Blue Host WordPress hosting option further down is specifically tailed for WordPress websites. 
                            </p>
                            <a href="#" class="btn btn-learn">Learn more about Blue Host</a>
                        </div>
                    </div>
                </div>

                <div class="resource-item">
                    <h3>Standard Hosting – Media Temple ($20/month)</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive center-block" src="{{asset('theme/img/media-temple.jpg')}}" alt="Media Temple">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <a href="#" class="label label-info">Media Temple</a> is a modern hosting provider who have recently redesigned their dashboard for easy website management.
                            </p>
                            <p>
                                Their <a href="#">GRID hosting package</a> allows up to 100 websites on your account including 1TB bandwidth, 100GB storage and 1000 email accounts. 24/7/365 live support
                            </p>
                            <p>
                               <strong>Current Special:</strong>Use the coupon code 5GRIDAFF and drop the first month price down to $5 (from $20 reg price) for the monthly plan. Use the coupon code GRID20AFF to get -20% off the annual plan.
                            </p>
                            <a href="#" class="btn btn-learn">Learn more about Media Temple</a>
                        </div>
                    </div>
                </div>

                <div class="resource-item">
                    <h3>WordPress Hosting – Blue Host ($24.99/month + Free Domain)</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive center-block" src="{{asset('theme/img/wordpress-hosting.jpg')}}" alt="Blue Host">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <a href="#" class="label label-info">Blue Host WordPress Hosting</a> is specifically tailored for WordPress websites. You can <strong>host up to 5 WordPress websites within this package</strong>. They are very web established and have a huge support team 24-7.
                            </p>
                            <p>
                               This option also allows for a <strong>1-click WordPress install</strong> but the WordPress maintenance (upgrades) is up to you. The Blue Host WordPress hosting option further down is specifically tailed for WordPress websites. 
                            </p>
                            <a href="#" class="btn btn-learn">Learn more about Blue Host</a>
                        </div>
                    </div>
                </div>

                <div class="resource-item">
                    <h3>WordPress Hosting – WP Engine ($29/month)</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive center-block" src="{{asset('theme/img/wp-engine.jpg')}}" alt="Blue Host">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <a href="#" class="label label-info">WP Engine</a> are the leaders in specialised WordPress Hosting. Yes, a pricer option, but there is no question WP Engine is the most quality WordPress hosting available. They offer a 60 day risk-free trial and 2 months of free hosting when prepaying for a year. <strong>We host onepagelove.com on WP Engine.</strong>
                            </p>
                            <p>
                               <strong>Current Special:</strong> Get 40% off annual Personal, Professional, or Business plans (+2 free bonus months) using code SSL40OFF. Crazy deal this. Basically WP Engine are promoting their SSL certificates and this is a once off launch “announcement” special valid until 01 July 2015. So you don’t have to go SSL to get 40% off.
                            </p>
                            <a href="#" class="btn btn-learn">Learn more about Blue Host</a>
                        </div>
                    </div>
                </div>

                <div class="resource-item">
                    <h3>Online Website Builder – Squarespace ($10/month)</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="img-responsive center-block" src="{{asset('theme/img/squarespace.jpg')}}" alt="Blue Host">
                        </div>
                        <div class="col-md-9">
                            <p>
                                <a href="#" class="label label-info">Squarespace</a> allows you to build a beautiful One Page website for $10/month.
                            </p>
                            <p>
                                Honestly, the easiest way to create a One Page website is to use <a href="#">Squarespace</a> and just choose a beautiful template that suits your needs.
                            </p>
                            <p>
                                This is $10/month and they take care of hosting, security etc. You also get a free .com domain (if you pay annually) and they link it all for you. You also get a blog section if you want, or make your main site the blog.
                            </p>
                            <a href="#" class="btn btn-learn">Learn more about Blue Host</a>
                        </div>
                    </div>
                </div>

            </article>

            

        </div>
    </div>
</section>
@endsection