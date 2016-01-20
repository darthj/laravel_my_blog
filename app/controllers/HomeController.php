<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function sayHello($name = 'KosherB')
	{		
		return "Hello $name!";	
	}

	public function showContact()
	{
	
        return View::make('contact');
	}


	public function rollDice($guess)
	{
		$number = mt_rand(1,6);
		$data = array(
			'guess'=> $guess,
			'number'=> $number
		);

		return View::make('roll-dice')->with($data);
	}

	public function getLogin()
	{
		return View::make('login');
	}
	
	public function postLogin()
	{
		$email= Input::get('email');
		$password= Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
	    	Session::flash('successMessage', 'You are now logged in.');
	    	return Redirect::intended('/posts');
		} else {
	    Session::flash('errorMessage', 'Login failed. Please try again.');
	    return Redirect::back();
		}
	}
	
	public function getLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You are now logged out.');
		return Redirect::action('HomeController@showWelcome');
	}

	public function getContact()
	{
		return View::make('contact');
	}

	public function getEmailSentPage()
	{
		return View::make('email-sent');
	}

	public function doContact()
	{
		$from = Input::get('from');
		$email = Input::get('email');
		$subject = Input::get('subject');
		$body = Input::get('body');

		$data = [
			'from'=> $from,
			'email'=> $email,
			'subject'=> $subject,
			'body'=> $body
		];

		Mail::send('emails.contact', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['from']);
			$message->to('jeraldsaenz@me.com', 'Jerald Saenz')->subject($data['subject']);
		});
		Session::flash('successMessage', 'Your email has been sent');
		return Redirect::action('HomeController@getEmailSentPage');
	}
}
