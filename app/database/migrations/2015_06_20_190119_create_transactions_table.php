<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function(Blueprint $table)
			{
				$table->increments('id');
				$table->integer('bankAccountID');
				$table->date('transactionDate');
				$table->boolean('isNegitive');
				$table->integer('amount');
				$table->string('description');
				$table->string('category');
				$table->string('subCategory');
				$table->string('creator');
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
		Schema::drop('transactions');
	}

}
