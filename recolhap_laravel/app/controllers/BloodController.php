<?php

class BloodController extends AgeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($patient_id)
	{
		$eval_hb=Evaluation::where('patient_id','=',$patient_id)->has('hb');
		$eval_hemoqdim=Evaluation::where('patient_id','=',$patient_id)->has('hemoqdim');
		$eval_hemoqthyro=Evaluation::where('patient_id','=',$patient_id)->has('hemoqthyro');
		$eval_hemoqtropo=Evaluation::where('patient_id','=',$patient_id)->has('hemoqtropo');
		$eval_pepqnatr=Evaluation::where('patient_id','=',$patient_id)->has('pepqnatr');
		$eval_vih=Evaluation::where('patient_id','=',$patient_id)->has('vih');

		//$dates=new ManagingDates;
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make(
			'blood.index',
			compact(
				'patient_id',
				'p',
				'age',
				'eval_hb',
				'eval_hemoqdim',
				'eval_hemoqthyro',
				'eval_hemoqtropo',
				'eval_pepqnatr',
				'eval_vih'
				)
			)
		;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($patient_id)
	{
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make(
			'blood.create',
			compact(
				'patient_id',
				'p',
				'age'
				)
			)
		;
	}

	public function saveblood ($patient_id) {
		$model=Input::get('model');
		$patient=Input::get('patient');
		$date=Input::get('date');
		$e=new Evaluation;
		$e->patient_id=$patient;
		$e->digiter_id=Auth::user()->email;
		$e->save();
		$e_id=$e->eval_id;
		$d=new $model;
		if ($model=='Hb') {
			$d->hb_date=$date;
			$d->hb_value=Input::get('hb_value');
		}
		if ($model=='Hemoqdim') {
			$d->dim_date=$date;
			$d->dim_d_dimer_value=Input::get('d_dimer_value');
		}
		if ($model=='Hemoqthyro') {
			$d->thyro_date=$date;
			$d->thyro_tsh=Input::get('tsh');
			$d->thyro_t_4_total=Input::get('t_4_total');
			$d->thyro_t_4_free=Input::get('t_4_free');
		}
		if ($model=='Hemoqtropo') {
			$d->tropo_date=$date;
			$d->tropo_trop_result=Input::get('trop_result');
		}
		if ($model=='Pepqnatr') {
			$d->pep_natr_date=$date;
			$d->pep_natr_value=Input::get('pep_natr_value');
			$d->pro_pept_nat_value=Input::get('pro_pep_natr_value');
		}
		if ($model=='Vih') {
			$d->hiv_date=$date;
			$d->hiv_result=Input::get('hiv_result');
		}
		$d->eval_id=$e_id;
		$d->save();
		return 1;
	}

}
