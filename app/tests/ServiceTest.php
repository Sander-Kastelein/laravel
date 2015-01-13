<?php

class ServiceTest extends TestCase {


	public static function setUpBeforeClass()
	{
		system("php artisan migrate:refresh --seed --force");
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testHomepage()
	{
		$crawler = $this->client->request('GET', '/');
		$this->assertRedirectedToAction('AuthController@getLogin');
	}

	public function testLogin()
	{
		$crawler = $this->client->request('POST','login');
	}

}