<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKunjunganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kunjungans', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('tgl_kunjungan');
            $table->integer('no_pasien');
            $table->string('kd_poli');
			$table->string('jam_kunjungan');
			
			
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
		Schema::drop('kunjungans');
	}

}
