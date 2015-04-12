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

		Db::raw('DROP DATABASE technasium_online;');
		Db::raw('CREATE DATABASE technasium_online;');


		Artisan::call('migrate:refresh');


		$this->call('UsersTableSeeder');
	}

}
