<?php

class CompletedataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /completedata
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function getHospital () {
		return View::make('complete.hospital'); 
	}

	public function postHospital () {
		$u=Auth::user()->investigator->id;
		Investigator::whereId($u)
		->update(
			array(
				'hospital_id'=>Input::get('clinic')
				)
			)
		;
		/*DB::table('users')
            ->where('id', 1)
            ->update(array('votes' => 1));*/
		/*$i=Investigator::find($u);
		$i->hospital_id=1;
		$i->save();*/
		return 1;//s;//$i->ivt_name;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /completedata/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /completedata
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /completedata/{id}
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
	 * GET /completedata/{id}/edit
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
	 * PUT /completedata/{id}
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
	 * DELETE /completedata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}