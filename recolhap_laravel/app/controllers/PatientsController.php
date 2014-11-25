<?php

class PatientsController extends \BaseController {

	public function getIndex () {
		return View::make('patients.index');
	}

	public function postIndex () {
		$docid=Input::get('doc');
		//doc structure: idtype in lowercase and numbers 
		//with no space.  Example cc71786766
		$p=Patient::find($docid);

		if ($p==null) {
			$r['check']=0;
			return json_encode($r);
		} else {
			$r['check']=1;
			$r['patient_id']	=$p->patient_id;
			//$r['timestamp']		=$p->timestamp;
			$r['name']			=$p->name;
			$r['surn']			=$p->surn;
			$r['gender']		=$p->gender;
			$r['birthd']		=$p->birthd;
			$r['countrybth']	=$p->countrybth;
			$r['citybth']		=$p->citybth;
			//$r['statebth']		=$p->statebth;
			$r['digiter_id']	=$p->digiter_id;

			return json_encode($r);
		}
		//return $r;
	}

	public function postStore () {
		$id=Input::get('docidnum');
		$check=Patient::find($id);
		if ($check!=null) {
			return Redirect::to('patients/exists/');
		} else {
			//
			$e=new Patient;
			$e->patient_id	=Input::get('docidnum');
			$e->name		=Input::get('name');
			$e->surn		=Input::get('surname');
			$e->gender		=Input::get('gender');
			$e->birthd		=date(
				'Y-m-d',mktime(
					0,0,0,
					Input::get('month'),
					Input::get('day'),
					Input::get('year')
					)
			)
			;//$birthd	;
			$e->countrybth	=Input::get('countrybth');
			$e->citybth		=Input::get('citybth');
			$e->statebth	=Input::get('statebth');
			$e->digiter_id	=Auth::user()->email;
			$e->save();

			return Redirect::to(
				'patients/patient/'.Input::get('docidnum')
				)
			;
		}
	}

	public function getAllpatients () {
		
	}

	public function getPatient ($patient) {
		$p=Patient::find($patient);
		if ($p==null) {
			return Redirect::to('allpatients');
		} else {
			return View::make(
				'patients.show',
				compact(
					'patient',
					'p'
					)
				)
			;
		}
			
	}

	/**
	 * Display a listing of the resource.
	 * GET /patients
	 *
	 * @return Response
	 */
	/*public function index()
	{
		return View::make('patients.index');
	}*/

	/**
	 * Show the form for creating a new resource.
	 * GET /patients/create
	 *
	 * @return Response
	 */
	/*public function create()
	{
		//
	}*/

	/**
	 * Store a newly created resource in storage.
	 * POST /patients
	 *
	 * @return Response
	 */
	/*public function store()
	{
		//
	}*/

	/**
	 * Display the specified resource.
	 * GET /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	/*public function show($id)
	{
		//
	}*/

	/**
	 * Show the form for editing the specified resource.
	 * GET /patients/{id}/edit
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
	 * PUT /patients/{id}
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
	 * DELETE /patients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}