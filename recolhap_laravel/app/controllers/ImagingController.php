<?php

class ImagingController extends AgeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($patient_id)
	{
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make(
			'imaging.index',
			compact(
				'patient_id',
				'p',
				'age'
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
			'imaging.create',
			compact(
				'patient_id',
				'p',
				'age'
				)
			)
		;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($patient_id)
	{
		$model=Input::get('model');
		$date=Input::get('date');
		$patient=Input::get('patient');

		$e=new Evaluation;
		$e->patient_id=$patient;
		$e->digiter_id=Auth::user()->email;
		$e->save();
		$e_id=$e->eval_id;

		$d=new $model;
		if($model=='Ecocardio') {
			$d->doppl_date =$date;
			$d->doppl_type=Input::get('doppl_type');
			$d->doppl_syst_press=Input::get('doppl_syst_press');
			if(Input::get('doppl_right_dilat')!=''){$d->doppl_right_dilat=Input::get('doppl_right_dilat');}
			if(Input::get('doppl_right_dysf')!=''){$d->doppl_right_dysf=Input::get('doppl_right_dysf');}
			if(Input::get('doppl_pleur_effuss')!=''){$d->doppl_pleur_effuss=Input::get('doppl_pleur_effuss');}
			if(Input::get('left_heart_dysf')!=''){$d->left_heart_dysf=Input::get('left_heart_dysf');}
			$d->eject_fract=Input::get('eject_fract');
			if(Input::get('tapse')!=''){$d->tapse=Input::get('tapse');}
			if(Input::get('tryc_reg_vel')!=''){$d->tryc_reg_vel=Input::get('tryc_reg_vel');}
			if(Input::get('doppl_cong_defects')!=''){$d->doppl_cong_defects=Input::get('doppl_cong_defects');}
			if(Input::get('doppl_cong_defects_otros')!=''){$d->doppl_cong_defects_otros=Input::get('doppl_cong_defects_otros');}
			if(Input::get('doppl_septum_dev')!=''){$d->doppl_septum_dev=Input::get('doppl_septum_dev');}
		}

		if($model=='Xqray') {
			$d->xray_date =$date;
			$d->alveolar_infiltrates=Input::get('alveolar_infiltrates');
			$d->hypoperfusion_areas=Input::get('hypoperfusion_areas');
			$d->right_heart_cardiomeg=Input::get('right_heart_cardiomegs');
			if(Input::get('pleur_effuss')!=''){$d->pleur_effuss=Input::get('pleur_effuss');}
			if(Input::get('b_kerkey_lines')!=''){$d->b_kerkey_lines=Input::get('b_kerkey_lines');}
			if(Input::get('pulm_cone_evertion')!=''){$d->pulm_cone_evertion=Input::get('pulm_cone_evertion');}
			if(Input::get('cardiothrx_index')!=''){$d->cardiothrx_index=Input::get('cardiothrx_index');}
		}

		if($model=='Tcqangio') {
			$d->a_tc_date =$date;
			$d->a_tc_main_pulm_art_diamt=Input::get('a_tc_main_pulm_art_diamt');
			$d->a_tc_rt_pulm_art_diamt=Input::get('a_tc_rt_pulm_art_diamt');
			$d->a_tc_left_pulm_art_diamt=Input::get('a_tc_left_pulm_art_diamt');
			if(Input::get('a_tc_rt_heart_dilat')!=''){$d->a_tc_rt_heart_dilat=Input::get('a_tc_rt_heart_dilat');}
			if(Input::get('a_tc_tep_pattern')!=''){$d->a_tc_tep_pattern=Input::get('a_tc_tep_pattern');}
			$d->a_tc_pulm_thrombos=Input::get('a_tc_pulm_thrombos');
			if(Input::get('a_tc_inft_interst')!=''){$d->a_tc_inft_interst=Input::get('a_tc_inft_interst');}
			if(Input::get('a_tc_inft_alv')!=''){$d->a_tc_inft_alv=Input::get('a_tc_inft_alv');}
			if(Input::get('a_tc_inft_nodular')!=''){$d->a_tc_inft_nodular=Input::get('a_tc_inft_nodular');}
			if(Input::get('a_tc_mosaic')!=''){$d->a_tc_mosaic=Input::get('a_tc_mosaic');}
			if(Input::get('a_tc_inft_retic')!=''){$d->a_tc_inft_retic=Input::get('a_tc_inft_retic');}
			if(Input::get('a_tc_inft_honeycomb')!=''){$d->a_tc_inft_honeycomb=Input::get('a_tc_inft_honeycomb');}
			if(Input::get('a_tc_pleural_effusion')!=''){$d->a_tc_pleural_effusion=Input::get('a_tc_pleural_effusion');}
			$d->a_tc_congenit=Input::get('a_tc_congenit');
			if(Input::get('a_tc_congenit_otros')!=''){$d->a_tc_congenit_otros=Input::get('a_tc_congenit_otros');}
		}

		if($model=='Mri') {
			$d->mri_date =$date;
			$d->mri_fevd=Input::get('mri_fevd');
			$d->mri_main_art_diam=Input::get('mri_main_art_diam');
			$d->mri_rt_art_diam=Input::get('mri_rt_art_diam');
			$d->mri_lt_art_diam=Input::get('mri_lt_art_diam');
			$d->mri_rt_heart_dilat=Input::get('mri_rt_heart_dilat');
			$d->mri_defects=Input::get('mri_defects');
			if(Input::get('mri_other_defects')!=''){$d->mri_other_defects=Input::get('mri_other_defects');}
		}

		if($model=='Pulmqarteriography') {
			$d->artergph_date =$date;
			$d->artergph_TEP=Input::get('artergph_TEP');
		}

		if($model=='Gammagr') {
			$d->gamma_date =$date;
			$d->gamma_tep=Input::get('gamma_tep');
		}

		if($model=='Duplexqlegs') {
			$d->legsdoppler_date =$date;
			$d->legsdoppler_result_left=Input::get('legsdoppler_result_right');
			$d->legsdoppler_result_right=Input::get('legsdoppler_result_left');
		}

		$d->eval_id=$e_id;
		$d->save();
		return 1;
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
