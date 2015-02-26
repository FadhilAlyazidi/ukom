<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoliklinikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('polikliniks', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('kd_poli');
			$table->string('nm_poli');
			$table->string('lantai');
			$table->timestamps();
            $table->timestamp('created_at');
            $table->timestamp('update_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('polikliniks');
	}

}
