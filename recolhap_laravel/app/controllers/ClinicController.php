<?php

class ClinicController extends AgeController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($patient_id)
	{
		$firsteval=Evaluation::where('patient_id','=',$patient_id)
		->has('firstqeval')
		->first();
		$f_month='pendiente';
		$f_year='';
		$afro='pendiente';
		$dxtype='pendiente';
		if ($firsteval!=null) {
			$f=$firsteval->firstqeval;
			if ($f->dxdate!=null) {
				$beginning=1;
				$dxdate=explode( '-' , $f->dxdate );
				$f_month=$dxdate[1];
				$f_year=$dxdate[0];
			}
			if ($f->afroamerican!=null) {
				$afro=$f->afroamerican;
			}
			if ($f->haptype!=null) {
				$dxtype=$f->haptype;
			}
			$start_date='';
		}
		$followup=Evaluation::where('patient_id','=',$patient_id)
		->has('followqup');
		$eval_hyperclott=Evaluation::where('patient_id','=',$patient_id)
		->has('hyperclotting');
		$hyperclot='antiphs_syndr|Síndrome antifosfolípido,protr20210_mutation|Mutación gen prot 20210,'.
		'c_protein_resist|Resistencia a la proteina C act,antitrbiii_deficiency|Deficiencia antitrombina III,prot_s_deficiency|Deficiencia proteína S,'.
		'prot_c_deficiency|Deficiencia proteína C,unspecific_tromboph|Trombofilia no específica,hyperhomocist|Hiperhomocisteinemia,'.
		'neoplasia|Enfermedad neoplásica,esplenectomy|Esplenectomizado';
		$hyperclot=explode(',', $hyperclot);
		foreach ($hyperclot as $key => $value) {
			$value=explode('|',$value);
			$hyperclot[$key]=$value;
		}
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make(
			'clinical.index',
			compact(
				'patient_id',
				'p',
				'age',
				'beginning',
				'f_month',
				'f_year',
				'afro',
				'dxtype',
				'followup',
				'eval_hyperclott',
				'hyperclot'
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
		$firsteval=Evaluation::where('patient_id','=',$patient_id)
		->has('firstqeval')
		->first();

		//
		$beginning=0;
		$afro=0;
		$dxtype=0;
		$f_month='';
		$f_year='';
		$f='';

		if ($firsteval!=null) {
			$f=$firsteval->firstqeval;
			if ($f->dxdate!=null) {
				$beginning=1;
				$dxdate=explode( '-' , $f->dxdate );
				$f_month=$dxdate[1];
				$f_year=$dxdate[0];
			}
			if ($f->afroamerican!=null) {
				$afro=1;
			}
			if ($f->haptype!=null) {
				$dxtype=1;
			}
		}

		//
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make(
			'clinical.create',
			compact(
				'patient_id',
				'p',
				'age',
				'beginning',
				'afro',
				'dxtype',
				'f_month',
				'f_year',
				'f'
				)
			)
		;
	}

	public function hyperclotting ($patient_id) {
		$eval_hyperclott=Evaluation::where('patient_id','=',$patient_id)
		->has('hyperclotting');
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make('clinical.hyperclot',
			compact(
				'eval_hyperclott',
				'patient_id',
				'p',
				'age'
				)
			);
	}

	public function savehyperclott ($patient_id) {
		$eval_hyperclott=Evaluation::where('patient_id','=',$patient_id)
		->has('hyperclotting');
		//$patient_id=
		$hyperclot='antiphs_syndr,protr20210_mutation,'.
		'c_protein_resist,antitrbiii_deficiency,prot_s_deficiency,'.
		'prot_c_deficiency,unspecific_tromboph,hyperhomocist,'.
		'neoplasia,esplenectomy,other_hyperclott_disord';
		$hyperclot=explode(',', $hyperclot);

		/*if ($eval_hyperclott->get()==null) {
			$check='null';
		} else {$check='mmm, not null';}*/

		if ($eval_hyperclott->first()!=null) {
			$h_id=$eval_hyperclott
			->first()
			->hyperclotting
			->hyperclotting_id;
			$h=Hyperclotting::find($h_id);
			foreach ($hyperclot as $y) {
				$h->$y=Input::get($y);
			}
			$h->save();
		} else {
			$e=new Evaluation;
			$e->patient_id=$patient_id;
			$e->digiter_id=Auth::user()->email;
			$e->save();
			$e_id=$e->eval_id;

			$h=new Hyperclotting;
			foreach ($hyperclot as $y) {
				$h->$y=Input::get($y);
			}
			$h->eval_id=$e_id;
			$h->save();
		}
		//
		return 1;//$hyperclot;
	}

	public function treatment ($patient_id) {
		$eval_treatment=Evaluation::where('patient_id','=',$patient_id)
		->has('drugqtreatment');
		//$treatment='';
		$p=Patient::find($patient_id);
		$age=$this->age($p->birthd);
		return View::make('clinical.treatment',
			compact(
				'eval_treatment',
				'patient_id',
				'p',
				'age'
				)
			)
		;
	}

	public function savetreatment ($patient_id) {

		$patient=	Input::get('patient');
		$drug=		Input::get('drug');
		$confirm=	Input::get('confirm');
		$drugdate=	Input::get('drugdate');

		$eval_treatment=Evaluation::where('patient_id','=',$patient_id)
		->whereHas('drugqtreatment',function($q) use($drug){
			$q->whereDrug($drug);
		});

		if ($eval_treatment->count()==0) {
			$e=new Evaluation;
			$e->patient_id=$patient_id;
			$e->digiter_id=Auth::user()->email;
			$e->save();
			$e_id=$e->eval_id;

			//
			$d=new Drugqtreatment;
			$d->drug=		$drug;
			$d->drug_ini=	$drugdate;
			$d->eval_id=	$e_id;
			$d->save();
			return 1;
		} else {
			return 2;
		}
	}

	public function updatetreatment ($patient_id){
		$id 			= Input::get('rowid');
		$drug_end		= Input::get('col2val');
		$suspend_cause 	= Input::get('col1val');
		//$table 			= Input::get('table');

		$d=Drugqtreatment::find($id);
		$d->suspend_cause 	= $suspend_cause;
		$d->drug_end 		= $drug_end;
		$d->save();

		return 1;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($patient_id)
	{
		$patient=		Input::get('patient');

		//first time evaluation (symptoms onset)
		$afroamerican=		Input::get('afroamerican');
		$dxdate=			Input::get('dxdate');
		$haptype=			Input::get('haptype');

		if($afroamerican=='') 	{$afroamerican=null;}
		if($dxdate=='') 		{$dxdate=null;}
		if($haptype=='') 		{$haptype=null;}

		//setting empty values as null

		//follow-up variables 
		$eval_date=					Input::get('eval_date');
		$dyspnea=					Input::get('dyspnea');
		$cough=						Input::get('cough');
		$chestpain=					Input::get('chestpain');
		$loweredema=				Input::get('loweredema');
		$hemoptysis=				Input::get('hemoptysis');
		$syncope=					Input::get('syncope');
		$improved_symts=			Input::get('improved_symts');
		$weight=					Input::get('weight');
		$height=					Input::get('height');
		$nyha_funct_class=			Input::get('nyha_funct_class');
		$sat_ox=					Input::get('sat_ox');
		$pulse=						Input::get('pulse');
		$pres_art_exfco=			Input::get('pres_art_exfco');
		$breathing=					Input::get('breathing');
		$cyanosis=					Input::get('cyanosis');
		$hepatomegaly=				Input::get('hepatomegaly');
		$ef_edema=					Input::get('ef_edema');
		$ing_yu=					Input::get('ing_yu');
		$finger_clubbing=			Input::get('finger_clubbing');

		if($dyspnea=='')			{$dyspnea=null;}
		if($cough=='')				{$cough=null;}
		if($chestpain=='')			{$chestpain=null;}
		if($loweredema=='')			{$loweredema=null;}
		if($hemoptysis=='')			{$hemoptysis=null;}
		if($syncope=='')			{$syncope=null;}
		if($improved_symts=='')		{$improved_symts=null;}
		if($weight=='')				{$weight=null;}
		if($height=='')				{$height=null;}
		if($nyha_funct_class=='')	{$nyha_funct_class=null;}
		if($sat_ox=='')				{$sat_ox=null;}
		if($pulse=='')				{$pulse=null;}
		if($pres_art_exfco=='')		{$pres_art_exfco=null;}
		if($breathing=='')			{$breathing=null;}
		if($cyanosis=='')			{$cyanosis=null;}
		if($hepatomegaly=='')		{$hepatomegaly=null;}
		if($ef_edema=='')			{$ef_edema=null;}
		if($ing_yu=='')				{$ing_yu=null;}
		if($finger_clubbing=='')	{$finger_clubbing=null;}

		$e=new Evaluation;
		$e->patient_id=$patient;
		$e->digiter_id=Auth::user()->email;
		$e->save();
		$e_id=$e->eval_id;

		//Each patient has only one record on "first_eval" table.
		//Next query verifies if first_eval record already exists.
		//if true, record will be updated, otherwise it will be created.
		$firsteval=Evaluation::where('patient_id','=',$patient_id)
		->has('firstqeval')
		->first();

		//creating record if firsteval==null
		if($firsteval==null) {
			if ($afroamerican!=null || $dxdate!=null || $haptype!=null ) {
				$o=new Firstqeval;
				if ($afroamerican!=null)	{$o->afroamerican =$afroamerican;}
				if ($dxdate!=null)			{$o->dxdate =$dxdate;}
				if ($haptype!=null)			{$o->haptype =$haptype;}
				$o->eval_id=$e_id;
				$o->save();
			}  
		} else {
			$id=$firsteval->firstqeval->first_eval_id;
			$o=Firstqeval::find($id);
			//$o->afroamerican=1;
			if ($afroamerican!=null)	{$o->afroamerican =$afroamerican;}
			if ($dxdate!=null)			{$o->dxdate =$dxdate;}
			if ($haptype!=null)			{$o->haptype =$haptype;}
			$o->eval_id=$e_id;
			$o->save();
		}

		$l=new Followqup;
		$l->eval_date		=$eval_date;
		$l->dyspnea			=$dyspnea;
		$l->cough			=$cough;
		$l->chestpain		=$chestpain;
		$l->loweredema		=$loweredema;
		$l->hemoptysis		=$hemoptysis;
		$l->syncope			=$syncope;
		$l->improved_symts	=$improved_symts;
		$l->weight			=$weight;
		$l->height			=$height;
		$l->nyha_funct_class=$nyha_funct_class;
		$l->sat_ox			=$sat_ox;
		$l->pulse			=$pulse;
		$l->pres_art_exfco	=$pres_art_exfco;
		$l->breathing		=$breathing;
		$l->cyanosis		=$cyanosis;
		$l->hepatomegaly	=$hepatomegaly;
		$l->ef_edema		=$ef_edema;
		$l->ing_yu			=$ing_yu;
		$l->finger_clubbing	=$finger_clubbing;
		$l->eval_id			=$e_id;
		$l->save();

		return 1;

		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($patient_id,$id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($patient_id,$id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($patient_id,$id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($patient_id,$id)
	{
		//
	}


}
