<?php

use Carbon\Carbon;

class Post extends BaseModel
{
    protected $table = 'posts';

    protected $fillable = array('title', 'body');

	public static $rules = array(
	    'title'      => 'required|min:5|max:100',
	    'content'    => 'required|max:10000'
	);

	public function setTitleAttributes($value)
	{
		$this->atrributes['title'] = $value;
		$this->attributes['slug']  = Str::slug($value);
	}
}
