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

	public function getInvestigator () {
		return View::make('complete.investigator');
	}

	public function postInvestigator () {
		if (Auth::user()->investigator==null) {
			$i=new Investigator;
			$i->ivt_name	=Input::get('ivt_name');
			$i->ivt_surname	=Input::get('ivt_surname');
			$i->ivt_doc		=Input::get('ivt_doc');
			$i->ivt_specialty	=Input::get('ivt_specialty');
			$i->ivt_mobile	=Input::get('ivt_mobile');
			$i->ivt_city	=Input::get('ivt_city');
			$i->ivt_country	=Input::get('ivt_country');
			$i->user_id		=Auth::user()->email;
			$i->hospital_id	=Input::get('hospital_id');
			$i->save();
		}
		return Redirect::to('patients');
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