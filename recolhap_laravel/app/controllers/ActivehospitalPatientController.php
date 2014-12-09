<?php


class ActivehospitalPatientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$u=Auth::user();
		$investigator=$u->investigator;
		$clinic=Hospital::find($investigator->hospital_id);//$investigator->hospital;
		$clinic_id=$clinic->hospital_id;
		//
		//
		$investigators_from_clinic=array();
		foreach ($clinic->investigator as $i) {
			$investigators_from_clinic[$i->id]=$i->user_id;
		}
		//
		$i_c=$investigators_from_clinic;
		//
		$eval=Evaluation::where(function($q) use($clinic){
			foreach ($clinic->investigator as $i) {
				$q->orWhere('digiter_id','=',$i->user_id);
			}
		});
		/*$patients=Patient::where(function($q) use($clinic){
			foreach ($clinic->investigator as $i) {
				$q->orWhere('digiter_id','=',$i->user_id);
			}
		});*/
		$patients=Patient::whereHas('evaluation',function($q) use($clinic){
			$q->where('digiter_id','=',1);
			foreach ($clinic->investigator as $i) {
				$q->orWhere('digiter_id','=',$i->user_id);
			}
		});

		return View::make(
			'activehospitalpatient.index',
			compact(
				'investigator',
				'clinic',
				'clinic_id',
				'i_c',
				'patients'
				)
			)
		;
	}



	public function search () {
		return View::make('activehospitalpatient.search');
	}

	public function postsearch () {
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
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$id=Input::get('docidnum');
		$check=Patient::find($id);
		if ($check!=null) {
			return 2;
			//return Redirect::to('patients/exists/');
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

			return 1;/*Redirect::to(
				'activehospital/patient/'.Input::get('docidnum')
				)
			;*/
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$p=Patient::find($id);
		$dates=new ManagingDates;
		$age=$dates->age($p->birthd);
		if ($p==null) {
			return Redirect::to('activehospital/patient');
		} else {
			return View::make(
				'activehospitalpatient.show',
				compact(
					'patient',
					'p',
					'age'
					)
				)
			;
		}
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
