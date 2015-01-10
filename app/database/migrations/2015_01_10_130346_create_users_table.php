<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 * @param Blueprint $table
	 * @return void
	 */
	public function up(Blueprint $table)
	{
		$table->increments('id');
        $table->string('email')->unique();
        $table->string('password');
        $table->boolean('is_teacher');

        $table->timestamps();
	}

	/**
	 * Reverse the migrations.
	 * @param Blueprint $table
	 * @return void
	 */
	public function down(Blueprint $table)
	{
        Schema::drop('users');
    }

}
