<?php

class RekamMedisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rekammedis = Rekammedis::All();
		return View::make('rekammedis.index')->with("datarekammedis", $rekammedis);
        
        
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make("rekammedis");	  
	}
    
    public function buat()
	{
		return View::make("rekammedis.tambahrekammedis");
	}
    
   


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rekammedis = new Rekammedis;
        $rekammedis->no_rm                                = Input::get('no_rm');
        $rekammedis->kd_tindakan                          = Input::get('kd_tindakan');
        $rekammedis->kd_obat                              = Input::get('kd_obat');
        $rekammedis->kd_user                              = Input::get('kd_user ');
        $rekammedis->no_pasien                            = Input::get('no_pasien');
        $rekammedis->diagnosa                             = Input::get('diagnosa');
        $rekammedis->keluhan                              = Input::get('keluhan ');
        $rekammedis->tgl_pemeriksaan                      = Input::get('tgl_pemeriksaan');
        $rekammedis->ket                                  = Input::get('ket');
        $rekammedis->save();
        
        return View::make("rekammedis");
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
	   $rekammedis = Rekammedis::find($id);
		return View::make('rekammedis.ubah')->with('data', $rekammedis);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function ganti($id)
	{
	    $rekammedis = Rekammedis::find($id);
        $rekammedis->no_rm                        = Input::get('no_rm');
        $rekammedis->kd_tindakan                  = Input::get('kd_tindakan');
        $rekammedis->kd_obat                      = Input::get('kd_obat');
        $rekammedis->kd_user                      = Input::get('kd_user');
        $rekammedis->no_pasien                    = Input::get('no_pasien');
        $rekammedis->diagnosa                     = Input::get('diagnosa');
        $rekammedis->keluhan                      = Input::get('keluhan');
        $rekammedis->tgl_pemeriksaan              = Input::get('tgl_pemeriksaan');
        $rekammedis->ket                          = Input::get('ket');
        $rekammedis->save();
        
        return Redirect::to("rekammedis");
      
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	   $rekammedis = Rekammedis::find($id);
        $rekammedis->delete();
        return Redirect::to("rekammedis");
	}


}
