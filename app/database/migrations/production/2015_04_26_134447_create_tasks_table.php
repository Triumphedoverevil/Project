<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations. **** first time use Schema:Create instead of Schema::table *****
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category');
			$table->string('title');
			$table->text('body');
			$table->integer('user_id');
			$table->string('assignedBy');
			$table->string('assignedByEmail');
			$table->dateTime('dueDate');
			$table->integer('priority');
			$table->integer('attachment_id');
			$table->boolean('completed');
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
		Schema::drop('tasks');
	}

}
