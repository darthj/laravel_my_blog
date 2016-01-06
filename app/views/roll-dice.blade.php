
@extends('layouts.master')

@section('content')
	<h2>Your guess was {{{ $guess }}}</h2>
	<h2>The dice roll was {{{ $number }}}</h2>
	@if($guess == $number)
		<h2>You guessed the number!</h2>
	@else
		<h2> You guessed incorrectly.</h2>
	@endif
@stop