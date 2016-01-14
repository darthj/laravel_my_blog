<?php

class PostTableSeeder extends Seeder{
	public function run()
	{
		$user = User::firstOrFail();

		$post1 = new Post();
		$post1->title = 'First Title';
		$post1->content = 'This is the content of the first blog entry';
		$post1->user_id = $user->id;
		$post1->save();

		$post2 = new Post();
		$post2->title = 'Second Title';
		$post2->content = 'This is the content of the second blog entry';
		$post2->user_id = $user->id;
		$post2->save();

		$post3 = new Post();
		$post3->title = 'Title 3';
		$post3->content = 'This is the content of the third blog entry';
		$post3->user_id = $user->id;
		$post3->save();

		$post4 = new Post();
		$post4->title = 'Title 4';
		$post4->content = 'This is the content of the fourth blog entry';
		$post4->user_id = $user->id;
		$post4->save();

		$post5 = new Post();
		$post5->title = 'Title 5';
		$post5->content = 'This is the content of the fifth blog entry';
		$post5->user_id = $user->id;
		$post5->save();
	}
}