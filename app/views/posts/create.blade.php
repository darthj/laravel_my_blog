@extends('layouts.master')

@section('content')
	<form method="POST" action="{{{ action('PostsController@store') }}}">
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input  name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{{ Input::old('title') }}}">
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea name="body" class='form-control' rows="5" id="body" placeholder="Body"> {{{ Input::old('body') }}} </textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
</form>

@stop