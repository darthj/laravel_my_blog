@extends('layouts.master')

@section('content')
	<h1>Overview</h1>
	<p>I am seeking the opportunity to grow as a programmer. </p>

	<h1>Education</h1>
	<h4>codeup</h4>
	<p>Full Stack LAMP bootcamp which included programming and use of the following:</p>
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
	<h4>Colorado Christian University- MA - Counseling</h4>
	
	<h4>Harvard University - AB - Economics</h4>

	<h1>Other Distinctions</h1>
	<h4>Licensed Professional Counselor (LPC) - Supervisor </h4>
	<h4>Fluent in Spanish</h4>
	<a href="{{{action('HomeController@showPortfolio')}}}">Here is my portfolio</a>

@stop