<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{

		User::create([
			'email'=>'sander@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'is_teacher'=>false
		]);



		
	}

}