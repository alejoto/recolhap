<?php

class RightcathController extends \BaseController {

	public function getIndex () {
		return 1;
	}

	public function getPatient ($patient_id) {
		$p=Patient::find($patient_id);

		$now=date('Y-m-d');
		$thisyear=(int)substr($now,0,4);
		$thismonth=substr($now,5,2);
		$today=substr($now,8,2);
		$this_month_and_day=$thismonth.$today;
		$this_month_and_day=(int)$this_month_and_day;

		$birthdate=$p->birthd;
		$birthyear=(int)substr($birthdate,0,4);
		$birthmonth=substr($birthdate,5,2);
		$birthday=substr($birthdate,8,2);
		$birth_month_and_day=$birthmonth.$birthday;
		$birth_month_and_day=(int)$birth_month_and_day;

		if ($birth_month_and_day>$this_month_and_day) {
			$age= $thisyear-$birthyear-1;
		}  else {
			$age=$thisyear-$birthyear;
		}
		return View::make(
			'rightcath.create',
			compact(
				'p',
				'age',
				'patient_id'
				)
			)
		;
	}

	public function getCath ($cath) {
		//
	}

	/**
	 * Display a listing of the resource.
	 * GET /rightcath
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /rightcath/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /rightcath
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /rightcath/{id}
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
	 * GET /rightcath/{id}/edit
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
	 * PUT /rightcath/{id}
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
	 * DELETE /rightcath/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}