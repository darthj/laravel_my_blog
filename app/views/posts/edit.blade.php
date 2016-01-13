@extends('layouts.master')

@section('content')
	<div class="container">
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		
		  <div class="form-group">
		    {{ $errors->first('title', '<span class="help-block">:message</span>') }}
		    {{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, array('placeholder'=> 'Type Title Here', 'class'=>'form-control')) }}
		  </div>
		  <div class="form-group">
		    {{ $errors->first('content', '<span class="help-block">:message</span>') }}
		    {{ Form::label('content', 'Content') }}
			{{ Form::textarea('content', null, array('placeholder'=> 'Type Content Here', 'class'=>'form-control')) }} 
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		
		{{ Form::close() }}
	</div>
@stop