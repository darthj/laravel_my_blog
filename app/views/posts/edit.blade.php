@extends('layouts.master')

@section('content')
	<form method="POST" action="{{{ action('PostsController@update', $post->id) }}}">
	  <div class="form-group">
	  	<input type="hidden" name="id" value="{{$post->id}}">
	    <input type="hidden" name="_method" value="PATCH">
	    <label for="title">Title</label>
	    <input  name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{{ $post->title }}}">
	  </div>
	  <div class="form-group">
	    <label for="body">Content</label>
	    <textarea name="content" class='form-control' rows="5" id="content"> {{{ $post->content }}} </textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop