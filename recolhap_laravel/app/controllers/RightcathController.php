<?php


class RightcathController extends AgeController {
	public function __construct(){
		//$p=Patient::find($patient_id);
		//$age=$this->age($p->birthd);
	}

	/**
	 * Display a listing of the resource.
	 * GET /rightcath
	 *
	 * @return Response
	 */
	public function index($patient_id)
	{
		//$dates=new ManagingDates;
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);

		return View::make('rightcath.index',
			compact(
				'patient_id',
				'p',
				'age'
				)
			)
		;
	}

	public function create($patient_id)
	{
		//$dates=new ManagingDates;
		$p=Patient::find($patient_id);

		$age=$this->age($p->birthd);

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
	//

	/**
	 * Store a newly created resource in storage.
	 * POST /rightcath
	 *
	 * @return Response
	 */
	public function store()
	{
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
		$vreac_test_done= 	Input::get('vreac_test_done');

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

		$rid=$r->right_cathet_id;

		if ($vreac_test_done=='si') {
			$reactivity_date		=$rt_cat_date;
			$reactivity				=Input::get('reactivity');
			$test_drug				=Input::get('test_drug');
			$post_res_vasc_pulm		=Input::get('post_res_vasc_pulm');
			$post_res_vasc_pulm_unit=Input::get('post_res_vasc_pulm_unit');
			$post_res_vasc_syst		=Input::get('post_res_vasc_syst');
			$post_res_vasc_syst_unit=Input::get('post_res_vasc_syst_unit');
			$post_pap_sys			=Input::get('post_pap_sys');
			$post_pap_dias			=Input::get('post_pap_dias');
			$post_pas_sys			=Input::get('post_pas_sys');
			$post_pas_dias			=Input::get('post_pas_dias');
			$post_rt_atr_press		=Input::get('post_rt_atr_press');
			$post_pulm_wedg_press	=Input::get('post_pulm_wedg_press');
			$post_pulm_gradient		=Input::get('post_pulm_gradient');
			$post_cardiac_outp		=Input::get('post_cardiac_outp');
			$post_cardiac_index		=Input::get('post_cardiac_index');
			$post_rt_ventr_oxim		=Input::get('post_rt_ventr_oxim');
			$post_pulm_artery		=Input::get('post_pulm_artery');
			$post_rt_atr_oxim		=Input::get('post_rt_atr_oxim');
			$post_heart_rate		=Input::get('post_heart_rate');
			$eval_id				=$e_id;
			$rightcath_id			=$rid;

			$v=new Vasoreactivetest;
			$v->reactivity_date		=$reactivity_date;
			$v->reactivity			=$reactivity;
			$v->test_drug			=$test_drug;
			$v->post_res_vasc_pulm	=$post_res_vasc_pulm;
			$v->post_res_vasc_pulm_unit	=$post_res_vasc_pulm_unit;
			$v->post_res_vasc_syst	=$post_res_vasc_syst;
			$v->post_res_vasc_syst_unit	=$post_res_vasc_syst_unit;
			$v->post_pap_sys		=$post_pap_sys;
			$v->post_pap_dias		=$post_pap_dias;
			$v->post_pas_sys		=$post_pas_sys;
			$v->post_pas_dias		=$post_pas_dias;
			$v->post_rt_atr_press	=$post_rt_atr_press;
			$v->post_pulm_wedg_press=$post_pulm_wedg_press;
			$v->post_pulm_gradient	=$post_pulm_gradient;
			$v->post_cardiac_outp	=$post_cardiac_outp;
			$v->post_cardiac_index	=$post_cardiac_index;
			$v->post_rt_ventr_oxim	=$post_rt_ventr_oxim;
			$v->post_pulm_artery	=$post_pulm_artery;
			$v->post_rt_atr_oxim	=$post_rt_atr_oxim;
			$v->post_heart_rate		=$post_heart_rate;
			$v->eval_id				=$eval_id;
			$v->rightcath_id		=$rightcath_id;
			$v->save();

		}


		return 1;
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