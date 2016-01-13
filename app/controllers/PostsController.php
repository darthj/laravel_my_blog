<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		Log::info('This is some useful information.', Input::all());

		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		
		if(!$post){
			App::abort(404);
		}
		return View::make('posts.show')->with('post', $post);
	} 


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = POST::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

		return $this->validateAndSave($post);	

		// $post = Post::find($id);
		// $post->title = Input::get('title');
		// $post->content = Input::get('content');
		// $post->save();

		// return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		Session::flash('successMessage', 'Your delete was successful.');
		return Redirect::action('PostsController@index');
	}

	protected function validateAndSave($post){
		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			return Redirect::back()->withInput()->withErrors($validator); 
		} else {

			$post = new Post();
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->user_id = 1;

			$result = $post->save();

			if($result){
				Session::flash('successMessage', 'Your post was saved.');
				return Redirect::action('PostsController@show', $post->id);
			} else {
				return Redirect::back()->withInput;
			}
		}
	}

}
