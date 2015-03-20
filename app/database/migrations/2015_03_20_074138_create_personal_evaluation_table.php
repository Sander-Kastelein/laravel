<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalEvaluationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_evaluations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('group_id');
			$table->text('content');
			$table->string('title');
			$table->string('class');
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
		Schema::drop('personal_evaluations');
	}

}
