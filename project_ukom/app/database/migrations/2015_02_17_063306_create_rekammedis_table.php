<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekammedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekammediss', function(Blueprint $table)
		{
			$table->increments('id');
            $table->String('no_rm');
			$table->string('kd_tindakan');
            $table->string('kd_obat');
            $table->string('kd_user');
            $table->string('no_pasien');
            $table->string('diagnosa');
            $table->string('keluhan');
            $table->Date('tgl_pemeriksaan');
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
		Schema::drop('rekammediss');
	}

}
