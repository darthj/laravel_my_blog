
@extends('layouts.master')

@section('content')
	<h1>Posts</h1>
	@if($post)
	<p>	{{{$post->title}}} </p>
	<p>	{{{$post->content}}} </p>
	@else
	<p>This post does not exist.</p>
	@endif
@stop