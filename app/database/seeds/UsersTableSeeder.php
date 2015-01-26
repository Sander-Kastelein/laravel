<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{

		$user = User::create([
			'email'=>'sander@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'is_teacher'=>false
		]);

		$teacher = User::create([
			'email' => 'leraar@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'is_teacher'=>true
		]);


		$group1 = $teacher->createNewGroup('Gemaakte groep 1');

		$group2 = Group::create([
			'name' => 'Test groep 2'
		]);

		$user->groups()->save($group1);
		$teacher->groups()->save($group1);


	}

}