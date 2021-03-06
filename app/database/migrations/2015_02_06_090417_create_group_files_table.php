<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('group_id');
			$table->integer('user_id');
			$table->string('name');
			$table->integer('size');
			$table->string('mime')->default('application/octet-stream');
			$table->binary('file');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_files');
	}

}
