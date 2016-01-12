<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

	public static $rules = array(
	    'title'      => 'required|min:10|max:100',
	    'content'    => 'required|max:10000'
	);

}
