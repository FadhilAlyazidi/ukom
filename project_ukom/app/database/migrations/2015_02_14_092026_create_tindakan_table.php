<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tindakans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_tindkan');
            $table->string('nm_tindakan');
            $table->string('ket');
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
		Schema::drop('tindakans');
	}

}
