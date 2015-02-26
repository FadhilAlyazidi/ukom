<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dokters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('kd_dokter');
            $table->string('kd_poli');
			$table->Date('tgl_kunjungan');
            $table->integer('kd_user');
            $table->string('nm_dokter');
            $table->string('sip');
            $table->string('tmpt_lhr');
			$table->string('no_tlp');
			$table->string('alamat');
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
		Schema::drop('dokters');
	}

}
