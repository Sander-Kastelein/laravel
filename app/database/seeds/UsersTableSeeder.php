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

		User::create([
			'email'=>'henk@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'name' => 'Henk Kastelein',
			'class' => '4A',
			'is_teacher'=>false
		]);

		User::create([
			'email'=>'sjaak@sanderkastelein.nl',
			'password'=>Hash::make('qwerty'),
			'name' => 'Sjaak Kastelein',
			'class' => '5G',
			'is_teacher'=>false
		]);



		$teacher = User::create([
			'email' => 'joop@binas.nl',
			'password'=>Hash::make('qwerty'),
			'name'=>'Joop BiNaS',
			'class'=>'Geen',
			'is_teacher'=>true
		]);


		$project = $teacher->createNewProject('Test project','Een leuk O&O project!');


		$group1 = $teacher->createNewGroup('Gemaakte groep 1',$project,[$user]);

		



	}

}