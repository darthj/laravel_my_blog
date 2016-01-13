

@extends('layouts.master')

@section('content')
	<h1>Posts</h1>
	<div class="container">
		@foreach($posts as $post)
			<h3> <a href="{{{action('PostsController@show', $post->id)}}}">{{{$post->title}}}</a></h3>
			<p>{{{$post->content}}} </p>
			<p> Created {{{$post->created_at->diffForHumans()}}}</p>
		@endforeach
	{{ $posts->links() }}
	</div>
@stop