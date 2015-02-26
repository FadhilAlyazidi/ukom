<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laboratoriums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_lab');
            $table->string('no_rm');
            $table->string('hasil_lab');
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
		Schema::drop('laboratoriums');
	}

}
