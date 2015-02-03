<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('project_id');
			$table->string('name')->unique();
			$table->integer('size');
			$table->string('mime')->default('application/octet-stream');
			$table->boolean('hidden')->default(false);
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
		Schema::drop('project_files');
	}

}
