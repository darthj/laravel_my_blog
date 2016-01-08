<?php

class UserTableSeeder extends Seeder{
	public function run()
	{
		$user = new User();
		$user->first_name = 'test';
		$user->last_name = 'test';
		$user->username = 'testuser';
		$user->email = 'test@test.com';
		$user->birthday = '2016-01-01';
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->phone_number = '333-333-3333';
		$user->save();
	}
}