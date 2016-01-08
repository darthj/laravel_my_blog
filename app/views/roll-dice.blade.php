
@extends('layouts.master')

@section('content')
	<h2>Your guess was {{{ $guess }}}</h2>
	<h2>The dice roll was {{{ $number }}}</h2>
	@if($guess == $number)
		<h2>You guessed the number!</h2>
	@else
		<h2> You guessed incorrectly.</h2>
	@endif

	<h2>Let's play roll dice Again</h2>
	<a href="{{{action('HomeController@rollDice', array(1))}}}">Guess 1</a>
	<a href="{{{action('HomeController@rollDice', array(2))}}}">Guess 2</a>
	<a href="{{{action('HomeController@rollDice', array(3))}}}">Guess 3</a>
	<a href="{{{action('HomeController@rollDice', array(4))}}}">Guess 4</a>
	<a href="{{{action('HomeController@rollDice', array(5))}}}">Guess 5</a>
	<a href="{{{action('HomeController@rollDice', array(6))}}}">Guess 6</a>
	<br>
	<a href="{{{action('HomeController@showResume')}}}">Back to my resume</a>
	<br>
	<a href="{{{action('HomeController@showPortfolio')}}}">Back to my portfolio</a>


@stop