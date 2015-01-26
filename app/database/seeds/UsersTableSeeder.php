<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{

		$user = User::create([
			'email'=>'sander@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'name' => 'Sander Kastelein',
			'class' => '5F',
			'is_teacher'=>false
		]);

		$teacher = User::create([
			'email' => 'joop@binas.nl',
			'password'=>Hash::make('qwerty'),
			'name'=>'Joop BiNaS',
			'class'=>'Geen',
			'is_teacher'=>true
		]);


		$group1 = $teacher->createNewGroup('Gemaakte groep 1');

		$group2 = Group::create([
			'name' => 'Test groep 2'
		]);

		$group1->addUser($user);


	}

}