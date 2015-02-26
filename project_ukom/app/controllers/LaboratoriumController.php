<?php

class LaboratoriumController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View ::make('laboratorium.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make("laboratorium.tambahlaboratorium");	
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$laboratorium = new Laboratoium;
        $laboratorium->kd_lab                                     = Input::get('kd_lab ');
        $laboratorium->no_rm                                      = Input::get('no_rm');
        $laboratorium->hasil_lab                                  = Input::get('hasil_lab'); 
        $laboratorium->ket                                        = Input::get('ket ');
        $laboratoium->save();
        
        return Redirect::to("laboratorium");
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
