<?php

class PasienController extends BaseController {
	public function index()
	{
        $pasien = Pasien::All();
		return View::make('pasien.index')->with("datapasien", $pasien);
        
	}
	public function create()
	{
        return View::make("pasien");	  
	}
    
   	public function buat()
	{
        return View::make("pasien.tambahpasien");	  
	}
    

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	   $pasien = new Pasien;
        $pasien->no_pasien                  = Input::get('no_pasien');
        $pasien->nm_pasien                  = Input::get('nm_pasien');
        $pasien->j_kel                      = Input::get('j_kel');
        $pasien->agama                      = Input::get('agama');
        $pasien->tgl_lahir                  = Input::get('tgl_lahir');
        $pasien->no_tlp                     = Input::get('no_tlp');
        $pasien->nm_kk                      = Input::get('nm_kk');
        $pasien->hub_kel                    = Input::get('hub_kel');
        $pasien->save();
        
        return Redirect::to("pasien");
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
		
        
        $pasien = Pasien::find($id);
		return View::make('pasien.ubah')->with('data', $pasien);
        
       
        
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function ganti($id)
	{
	    $pasien = Pasien::find($id);
        $pasien->no_pasien                  = Input::get('no_pasien');
        $pasien->nm_pasien                  = Input::get('nm_pasien');
        $pasien->j_kel                      = Input::get('j_kel');
        $pasien->agama                      = Input::get('agama');
        $pasien->tgl_lahir                  = Input::get('tgl_lahir');
        $pasien->no_tlp                     = Input::get('no_tlp');
        $pasien->nm_kk                      = Input::get('nm_kk');
        $pasien->hub_kel                    = Input::get('hub_kel');
        $pasien->save();
        
        return Redirect::to("pasien");
          
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$pasien = Pasien::find($id);
        $pasien->delete();
        return Redirect::to("pasien");
	}


}
