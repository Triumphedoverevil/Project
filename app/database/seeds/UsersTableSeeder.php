<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create([

			'username'	=> 'chris',
			'email'		=> 'triumphedoverevil@gmail.com',
			'password'	=> '',
			'active'	=>  1



			]);


	}

}
