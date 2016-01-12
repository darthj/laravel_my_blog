@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Overview</h1>
		<p>I am seeking the opportunity to grow as a programmer.</p>

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
		<h2>Let's play roll dice</h2>
		<a href="{{{action('HomeController@rollDice', array(1))}}}">Guess 1</a>
		<a href="{{{action('HomeController@rollDice', array(2))}}}">Guess 2</a>
		<a href="{{{action('HomeController@rollDice', array(3))}}}">Guess 3</a>
		<a href="{{{action('HomeController@rollDice', array(4))}}}">Guess 4</a>
		<a href="{{{action('HomeController@rollDice', array(5))}}}">Guess 5</a>
		<a href="{{{action('HomeController@rollDice', array(6))}}}">Guess 6</a>
	</div>
@stop