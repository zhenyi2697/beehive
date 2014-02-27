<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('building', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('url_photo');
			$table->decimal('longitude');
			$table->decimal('latitude');
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
		Schema::drop('building');
	}

}
