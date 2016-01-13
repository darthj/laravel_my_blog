
@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Posts</h1>
		
		<p>	{{{$post->title}}} </p>
		<p>	{{{$post->content}}} </p>
		<p> Created {{{$post->created_at->diffForHumans()}}}</p>
		<br>
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
			<button class="btn btn-danger">Delete Post</button>
		{{Form::close()}}
	</div>
@stop