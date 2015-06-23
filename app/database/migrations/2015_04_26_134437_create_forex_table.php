<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForexTable extends Migration {

	/**
	 * Run the migrations.  **** first time use Schema:Create instead of Schema::table *****
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forex', function(Blueprint $table)
		{

// Transaction Details

			$table->increments('id');
			$table->string('order_no');			
			$table->integer('lot_size');
			$table->string('type');
			$table->string('currency_pair');
			$table->date('open_time');
			$table->date('close_time');
			$table->boolean('isOpen');

			
//Indicators
			$table->boolean('indicator_MA25');
			$table->boolean('indicator_MA50');
			$table->boolean('indicator_MA100');
			$table->boolean('indicator_MA200');
		
			$table->boolean('indicator_BollingerBands');
			$table->boolean('indicator_ParabolicSAR');
			$table->boolean('indicator_MACD');
			$table->boolean('indicator_RSI');
			$table->boolean('indicator_Fib');
			$table->boolean('indicator_1');
			$table->boolean('indicator_2');

// Chart Patterns

			$table->boolean('chart_1');			
			$table->boolean('chart_2');
			$table->boolean('chart_3');
			$table->boolean('chart_4');
			$table->boolean('chart_5');
			$table->boolean('chart_6');
			$table->boolean('chart_7');
			$table->boolean('chart_8');
			$table->boolean('chart_9');
			$table->boolean('chart_0');
			$table->boolean('chart_A');

// Candle Patterns

			$table->boolean('candle_SpinningTop');
			$table->boolean('candle_Marubozu');
			$table->boolean('candle_Doji');
			$table->boolean('candle_Hammer');
			$table->boolean('candle_HangingMan');
			$table->boolean('candle_InvertedHammer');
			$table->boolean('candle_ShootingStar');
			$table->boolean('candle_1');

// News Releases

			$table->boolean('news_1');			
			$table->boolean('news_2');
			$table->boolean('news_3');
			$table->boolean('news_4');
			$table->boolean('news_5');
			$table->boolean('news_6');
			$table->boolean('news_7');
			$table->boolean('news_8');
			$table->boolean('news_9');
			$table->boolean('news_10');
			$table->boolean('news_11');

			$table->text('notes');
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
	Schema::drop('forex');
	}

}

