<?php

class HospitalController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /hospital
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function postIndex () {
		$city_id=Input::get('city');
		$hospital=Input::get('clinic');
		$h=new Hospital;
		$h->hospital_name= $hospital;
		$h->city_id= $city_id;
		$h->save();
		return $h->id;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hospital/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hospital
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /hospital/{id}
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
	 * GET /hospital/{id}/edit
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
	 * PUT /hospital/{id}
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
	 * DELETE /hospital/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}