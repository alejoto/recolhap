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

	public function getShow ($patient_id) {
		return View::make('rightcath.show',
			compact(
				'patient_id'
				)
			);
	}

	public function postPatient () {
		$patient_id=		Input::get('patient_id');
		//
		//$rt_cat_date=		Input::get('wholedate');
		$rt_cat_year=		Input::get('year');
		$rt_cat_month=		Input::get('month');
		$rt_cat_day=		Input::get('day');
		//
		$rt_cat_date=		date(
			'Y-m-d',
			mktime(0,0,0,$rt_cat_month,$rt_cat_day,$rt_cat_year)
			)
		;
		$res_vasc_pulm=		Input::get('res_vasc_pulm');
		$res_vasc_pulm_unit=Input::get('res_vasc_pulm_unit');
		$res_vasc_syst=		Input::get('res_vasc_syst');
		$res_vasc_syst_unit=Input::get('res_vasc_syst_unit');
		$pap_sys=			Input::get('pap_sys');
		$pap_dias=			Input::get('pap_dias');
		$pas_sys=			Input::get('pas_sys');
		$pas_dias=			Input::get('pas_dias');
		$rt_atr_press=		Input::get('rt_atr_press');
		$pulm_wedg_press=	Input::get('pulm_wedg_press');
		$pulm_gradient=		Input::get('pulm_gradient');
		$cardiac_outp=		Input::get('cardiac_outp');
		$cardiac_index=		Input::get('cardiac_index');
		$rt_atr_oxim=		Input::get('rt_atr_oxim');
		$rt_ventr_oxim=		Input::get('rt_ventr_oxim');
		$pulm_artery=		Input::get('pulm_artery');
		$heart_rate=		Input::get('heart_rate');

		$e=new Evaluation;
		$e->patient_id=$patient_id;
		$e->digiter_id=Auth::user()->email;
		$e->save();
		$e_id=$e->eval_id;

		$r=new Rightcath;
		$r->rt_cat_date			=$rt_cat_date;
		$r->res_vasc_pulm		=$res_vasc_pulm;
		$r->res_vasc_pulm_unit	=$res_vasc_pulm_unit;
		$r->res_vasc_syst		=$res_vasc_syst;
		$r->res_vasc_syst_unit	=$res_vasc_syst_unit;
		$r->pap_sys				=$pap_sys;
		$r->pap_dias			=$pap_dias;
		$r->pas_sys				=$pas_sys;
		$r->pas_dias			=$pas_dias;
		$r->rt_atr_press		=$rt_atr_press;
		$r->pulm_wedg_press		=$pulm_wedg_press;
		$r->pulm_gradient		=$pulm_gradient;
		$r->cardiac_outp		=$cardiac_outp;
		$r->cardiac_index		=$cardiac_index;
		$r->rt_atr_oxim			=$rt_atr_oxim;
		$r->rt_ventr_oxim		=$rt_ventr_oxim;
		$r->pulm_artery			=$pulm_artery;
		$r->heart_rate			=$heart_rate;
		$r->eval_id				=$e_id;
		$r->save();


		return 1;
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