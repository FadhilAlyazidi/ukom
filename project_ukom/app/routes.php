<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", function(){
        return View::make('login.index');
    }
);

Route::get("pasien/tambahpasien", function(){
        return View::make('pasien.tambahpasien');
    }
);
Route::get("rekammedis/tambahrekammedis", function(){
        return View::make('rekammedis.tambahrekammedis');
    }
);
Route::get("laboratorium/tambahlaboratorium", function(){
        return View::make('laboratorium.tambahlaboratorium');
    }
);

Route::controller("login", "LoginController");
Route::resource("pasien", "PasienController");
Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::resource("home", "HomeController");
Route::resource("rekammedis", "RekamMedisController");
Route::resource("dokter", "DokterController");
Route::resource("obat", "ObatController");
Route::resource("tindakan", "TindakanController");
Route::resource("kunjungan", "KunjunganController");
Route::resource("poliklinik", "PoliklinikController");
Route::resource("laboratorium", "LaboratoriumController");

Route::get("pasien", "PasienController@index");
Route::post("pasien/post", "PasienController@store");
Route::get("pasien/tambahpasien","PasienController@buat");
Route::resource("pasien", "PasienController");
Route::put('pasien/ubah/{id}',array('as' => 'ganti', 'uses' => 'PasienController@ganti'));
Route::get('pasien/ubah/{id}', array('as' => 'ubah', 'uses' => 'PasienController@ubah'));
Route::get("pasien/{id}/destroy","PasienController@destroy");
Route::get("rekammedis", "RekamMedisController@index");
Route::post("rekammedis/post", "RekamMedisController@store");
Route::get("rekammedis/tambahrekammedis","RekamMedisController@buat");
Route::resource("rekammedis", "RekamMedisController");

Route::get("rekammedis/{id}/destroy","RekamMedisController@destroy");
Route::post("laboratorium/post", "LaboratoriumController@store");
Route::get("laboratorium/tambahlaboratorium","LaboratoriumController@create");



