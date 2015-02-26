<?php

class DokterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View ::make('dokter.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("dokter.tambahdokter");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $dokter->kd_dokter                         = Input::get('kd_dokter');
        $dokter->kd_poli                            = Input::get('kd_poli');
        $dokter->tgl_kunjungan                      = Input::get('tgl_kunjungan');
        $dokter->kd_user                            = Input::get('kd_user ');
        $dokter->sip                                = Input::get('sip');
        $dokter->tmpt_lhr                           = Input::get('tmpt_lhr');
        $dokter->no_tlp                             = Input::get('no_tlp');
        $dokter->alamat                             = Input::get('alamat');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
