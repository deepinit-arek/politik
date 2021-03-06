<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passport', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			
			/* Passport owner. */
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')->on('user')
				->onDelete('cascade');

			/* State issuing the passport. */
			$table->integer('state_id')->unsigned();
			$table->foreign('state_id')
				->references('id')->on('state')
				->onDelete('cascade');

			/* Unique key on owner and state ids. */
			$table->unique(array('user_id', 'state_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('passport');
	}

}
