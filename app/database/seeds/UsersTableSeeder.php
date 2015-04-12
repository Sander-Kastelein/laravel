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

		$file = 'Hello world!';
		$project->createNewFile('test.txt',$file,strlen($file));


		$group1 = $teacher->createNewGroup('Gemaakte groep 1',$project,[$user]);

		

		$skills = [
			[
				'name'=>'Plannen & organiseren',
				'description_level_1'=>'De leerling kan een plan van aanpak voor een korte periode maken.',
				'description_level_2'=>'De leerling kan een plan van aanpak make nvoor de hele project periode.',
				'description_level_3'=>'De leerling kan een projectplan bedenken, schrijven en uitvoeren.'
			],
			[
				'name'=>'Kennisgerichtheid',
				'description_level_1'=>'De leerling kan informatie verzamelen en selecteren uit verschillende bronnen.',
				'description_level_2'=>'De leerling kan zijn ontwerp of onderzoek theoretisch onderbouwen en verantwoorden.',
				'description_level_3'=>'De leerling kan zich aantoonbaar verdiepen in de theorie die past bij het ontwerp of onderzoek.'
			],
			[
				'name'=>'Samenwerken',
				'description_level_1'=>'De leerling kan zijn sterke en zwakke punten benoemen bij het werken in een team.',
				'description_level_2'=>'De leerling kan samen met de teamgenoten een conflict tot een goed einde brengen.',
				'description_level_3'=>'De leerling heeft de verschillende wensen en belangen van de groep begrepen en kan daar mee omgaan.'
			],
			[
				'name'=>'Productgerichtheid',
				'description_level_1'=>'De leerling is gemotiveerd om een kwalitatief goed product te leveren.',
				'description_level_2'=>'De leerling is gemotiveerd om de beste oplossingen voor de opdrachtgever te bedenken en te realiseren.',
				'description_level_3'=>'De leerling kan de vraag van de opdrachtgever interpreteren en vertalen naar een gewenst product.'
			],
			[
				'name'=>'Procesgerichtheid',
				'description_level_1'=>'De leerling kan reflecteren op belangerijke momenten in het werkproces.',
				'description_level_2'=>'De leerling draagt creatieve oplossingen aan voor een probleem en houdt rekening met de opdrachtgever.',
				'description_level_3'=>'De leerling kan met kennis van bestaande oplossingen een nieuwe oplossing bedenken.'
			],
			[
				'name'=>'Inventiviteit',
				'description_level_1'=>'De leerling draagt fantasierijke oplossingen aan voor een probleem.',
				'description_level_2'=>'De leerling draagt creatieve oplossingen aan voor een probleem en houdt rekening met de opdrachtgever.',
				'description_level_3'=>'De leerling kan met kennis van bestaande oplossingen een nieuwe oplossing bedenken.'
			],
			[
				'name'=>'Doorzetten',
				'description_level_1'=>'Met hulp van de docent kan de leerling een tegenslag overwinnen.',
				'description_level_2'=>'In overleg met het team kan de leerling een tegenslag overwinnen.',
				'description_level_3'=>'De leerling kan zichzelf en het team motiveren om bij tegenslag toch door te gaan.'
			],
			[
				'name'=>'Individueel werken',
				'description_level_1'=>'De leerling kan een deeltaak in ht team zelfstandig uitvoeren en afronden.',
				'description_level_2'=>'De leerling kan zichelf aan het werk zetten ten dienste van het team.',
				'description_level_3'=>'De leerling neemt taken op zich en onderscheidt zich hiermee in het team.'
			]
		];


		foreach($skills as $skill){
			Skills::create($skill);
		}



	}

}