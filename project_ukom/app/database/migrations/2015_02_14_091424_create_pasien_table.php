<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	
	{
		Schema::create('pasiens', function(Blueprint $table)
		{
			$table->increments('id');
			 $table->integer('no_pasien');
			$table->string('nm_pasien');
            $table->String('j_kel');
            $table->string('agama');
            $table->date('tgl_lahir');
            $table->string('no_tlp');
            $table->string('nm_kk');
            $table->string('hub_kel');
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
		Schema::drop('pasiens');
	}

}
