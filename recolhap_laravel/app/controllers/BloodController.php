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
		$eval_arterialgasses=Evaluation::where('patient_id','=',$patient_id)->has('arterialgasses');
		$eval_hepatic=Evaluation::where('patient_id','=',$patient_id)->has('hepatic');
		$eval_renal=Evaluation::where('patient_id','=',$patient_id)->has('renal');
		$eval_reuma=Evaluation::where('patient_id','=',$patient_id)->has('reuma');
		$eval_reumaqana=Evaluation::where('patient_id','=',$patient_id)->has('reumaqana');
		$eval_reumaqanca=Evaluation::where('patient_id','=',$patient_id)->has('reumaqanca');
		$eval_reumaqantilip=Evaluation::where('patient_id','=',$patient_id)->has('reumaqantilip');
		$eval_reumaqcitrul=Evaluation::where('patient_id','=',$patient_id)->has('reumaqcitrul');
		$eval_reumaqenas=Evaluation::where('patient_id','=',$patient_id)->has('reumaqenas');
		$eval_reumaqspana=Evaluation::where('patient_id','=',$patient_id)->has('reumaqspana');
		$eval_coag=Evaluation::where('patient_id','=',$patient_id)->has('coag');


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
				'eval_vih',
				'eval_arterialgasses',
				'eval_hepatic',
				'eval_renal',
				'eval_reuma',
				'eval_reumaqana',
				'eval_reumaqanca',
				'eval_reumaqantilip',
				'eval_reumaqcitrul',
				'eval_reumaqenas',
				'eval_reumaqspana',
				'eval_coag'
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
			if (Input::get('t_4_total')!='') {
				$d->thyro_t_4_total=Input::get('t_4_total');
			}
			if (Input::get('t_4_free')!='') {
				$d->thyro_t_4_free=Input::get('t_4_free');
			}
		}
		if ($model=='Hemoqtropo') {
			$d->tropo_date=$date;
			$d->tropo_trop_result=Input::get('trop_result');
		}
		if ($model=='Pepqnatr') {
			$d->pep_natr_date=$date;
			$d->pep_natr_value=Input::get('pep_natr_value');

			if (Input::get('pro_pep_natr_value')!='') {
				$d->pro_pept_nat_value=Input::get('pro_pep_natr_value');
			}
		}
		if ($model=='Vih') {
			$d->hiv_date=$date;
			$d->hiv_result=Input::get('hiv_result');
		}

		if ($model=='Arterialgasses') {
			//
			$d->bld_gass_date=$date;
			$d->bld_gass_fio2=Input::get('bld_gass_fio2');
			$d->bld_gass_ph=Input::get('bld_gass_ph');
			$d->bld_gass_paco2=Input::get('bld_gass_paco2');
			$d->bld_gass_pao2=Input::get('bld_gass_pao2');
			$d->bld_gass_hco3=Input::get('bld_gass_hco3');

		}

		if ($model=='Hepatic') {
			//
			$d->hep_date=$date;
			$d->hep_ast=Input::get('hep_ast');
			$d->hep_alt=Input::get('hep_alt');
			$d->hep_fal=Input::get('hep_fal');
			if (Input::get('hep_albumin')!='') {
				$d->hep_albumin=Input::get('hep_albumin');
			}
			if (Input::get('hep_ggt')!='') {
				$d->hep_ggt=Input::get('hep_ggt');
			}
			if (Input::get('bili_tot')!='') {
				$d->bili_tot=Input::get('bili_tot');
			}
			if (Input::get('bili_dir')!='') {
				$d->bili_dir=Input::get('bili_dir');
			}

		}

		if ($model=='Renal') {
			//
			$d->renal_date=$date;
			$d->creat=Input::get('creat');
			if (Input::get('bun')!='') {
				$d->bun=Input::get('bun');
			}

		}

		if ($model=='Reuma') {
			//
			$d->reuma_date=$date;
			$d->reuma_fr=Input::get('f_reum');

		}

		if ($model=='Reumaqana') {
			//
			$d->ana_date=$date;
			$d->ana_result=Input::get('uns_ana_value');

		}

		if ($model=='Reumaqanca') {
			//
			$d->anca_date=$date;
			$d->anca_c_anca=Input::get('c_anca');
			$d->anca_p_anca=Input::get('p_anca');

		}

		if ($model=='Reumaqantilip') {
			//
			$d->antilip_date=$date;
			$d->antilip_acl_g=Input::get('acl_g');
			$d->antilip_acl_m=Input::get('acl_m');
			$d->antilip_a_coag_lup=Input::get('a_coag_lup');
			$d->antilip_anti_b2gp=Input::get('anti_b2gp');

		}

		if ($model=='Reumaqcitrul') {
			//
			$d->citrul_date=$date;
			$d->citrul_a_citrul=Input::get('a_citrul');

		}

		if ($model=='Reumaqenas') {
			//
			$d->enas_date=$date;
			$d->enas_anti_ro=Input::get('anti_ro');
			$d->enas_anti_la=Input::get('anti_la');
			$d->enas_anti_smith=Input::get('anti_smith');
			$d->enas_anti_rnp=Input::get('anti_rnp');
			$d->enas_antiRNP70=Input::get('antiRNP70');
			$d->enas_anti_u3=Input::get('anti_u3_rnp');
			$d->enas_antijo=Input::get('antijo');
			$d->enas_anti_scl=Input::get('anti_scl');

		}

		if ($model=='Reumaqspana') {
			//
			$d->spana_date=$date;
			$d->spana_ctmere=Input::get('centromere');
			$d->spana_anti_rna=Input::get('anti_rna_polim');
			$d->spana_anti_dna=Input::get('antidsDNA');

		}

		if ($model=='Coag') {
			//
			$d->coag_date=$date;
			$d->hep_tpt=Input::get('hep_tpt');
			$d->hep_tp=Input::get('hep_tp');
			$d->hep_inr=Input::get('hep_inr');

		}


		$d->eval_id=$e_id;
		$d->save();
		return 1;
	}

}
