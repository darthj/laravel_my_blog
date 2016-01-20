@extends('layouts.master')

@section('top-script')
	 <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
	<div class="container">
		<h1>Overview</h1>
		<p>To grow as a software developer and to join an organization committed to providing world class programming services. Offering analytic skills from fifteen years professional experience in counseling help clients resolve emotional issues. </p>

		 <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Education</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/codeup.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Codeup</h4>
                                    <h4 class="subheading">Software Engineering Bootcamp</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">An Intensive Full-stack LAMP bootcamp</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/CCU.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Colorado Christian University</h4>
                                    <h4 class="subheading">MA- Counseling</h4>
                                </div>
                                <div class="timeline-body">
                                   {{--  <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> --}}
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/harvard.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Harvard University</h4>
                                    <h4 class="subheading">AB - Economics</h4>
                                </div>
                                <div class="timeline-body">
                                    {{-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p> --}}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


		<h1>Technical Skills</h1>
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>Bootstrap</li>
				<li>JS</li>
				<li>github</li>
				<li>JQuery</li>
				<li>MySQL</li>
				<li>PHP</li>
				<li>Laravel</li>
				<li>Angular</li>
			</ul>

		<p>Licensed Professional Counselor (LPC) - Supervisor </p>
		<p>Fluent in Spanish</p>
		
	</div>
@stop