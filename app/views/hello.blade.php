@extends('layouts.master')


@section('content')
 <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive center-block " src="img/desktop.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block " src="img/desktop.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block " src="img/desktop.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">beSpoke Software Solutions</h1>
                    {{-- <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>beSpoke Software Solutions</strong>
                        </small>
                    </h2> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Building websites that make you look good</h2>
                    <hr>
                    {{-- <img class="img-responsive img-border img-left" src="img/brogues.jpg" alt=""> --}}
                    <hr class="visible-xs">
                    <p>Bespoke -- custom made.  At beSpoke we build web applications to suit your business presence on the web.  We pecialize in making you look good.  Just like a tailor would make your suit to fit just you, beSpoke customizes the leading technology to make your site attractive and make people want to visit and stay a while. We focus on the client's needs and desired functionality and style. </p>
                    <p>Please look around at some of the sites and projects we have worked on. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

@stop


