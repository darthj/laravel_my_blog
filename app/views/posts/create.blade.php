@extends('layouts.master')

@section('content')
	<form method="POST" action="{{{ action('PostsController@store') }}}">
	  <input type="hidden" name="user_id" value="1">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input  name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{{ Input::old('title') }}}">
	  </div>
	  <div class="form-group">
	    <label for="body">Content</label>
	    <textarea name="content" class='form-control' rows="5" id="body"> {{{ Input::old('content') }}} </textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop