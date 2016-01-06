<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/{name}', function($name)
{
	if ($name == 'portfolio'){
		return "This is my portfolio!!!";
	}else if ($name == 'resume'){

		return "This is my resume!!!";
	}else {
		return "Hello Kosher B!!";
	}	
});