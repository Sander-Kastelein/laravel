<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::raw('DROP DATABASE technasium_online;');
		DB::raw('CREATE DATABASE technasium_online;');


		Artisan::call('migrate:refresh');


		$this->call('UsersTableSeeder');
	}

}
