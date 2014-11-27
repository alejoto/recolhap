<?php
class QueryHelper {
	public function countuniques ($duplications) {
		//Number of events where evaluator (digiter) is same as logged user
		//$evaluations=Evaluation::whereDigiter_id('','=',$user->email);

		//function for removing duplicated patient records
		$pre_processed=array();
		foreach ($duplications->get() as $e) {
			$pre_processed[$e->eval_id]=$e->patient_id;
		}
		$processed=array_unique($pre_processed);
		return $processed;
	}
}

class TablesController extends \BaseController {
	public function __construct(){
		$this->beforeFilter(
			'addhospital',
			array(
				'only' =>array(
					'getIndex'
					)
				)
			)
		;
	}


	public function getIndex () {

		$q=new QueryHelper;
		$user=Auth::user();

		//debugging user.  Should be commented on production
		//$user=User::whereEmail('julcefo@yahoo.com')->first();


		//logged user as investigator
		$investigator=$user->investigator;

		//Clinic where logged user belongs to
		$clinic=$investigator->hospital;

		$cln_id=$clinic->hospital_id;

		//Number of events where evaluator (digiter) is same as logged user
		$evaluations=Evaluation::whereDigiter_id($user->email);

		$singlepatients=$q->countuniques($evaluations);
		

		$eval_clin=Evaluation::whereHospital_id($clinic->hospital_id);
		/*$pre_count_eval_clin=array();
		foreach ($eval_clin->get() as $e) {
			$pre_count_eval_clin[$e->eval_id]=$e->patient_id;
		}*/
		
		$count_eval_clin=$q->countuniques($eval_clin);
		//array_unique($pre_count_eval_clin);

		$pre_doctors=$clinic->investigator;
		$doctors=array();
		foreach ($pre_doctors as $p) {
			$doctors[$p->id]=$p->user_id;
		}
		$null_clinics=Evaluation::whereHospital_id(null)
		->where(
			function($query) use ($doctors) {
				$i=0;
				foreach ($doctors as $d) {
					if ($i==0) {
						$query->where('digiter_id','=',$d);
					} else {
						$query->orWhere('digiter_id','=',$d);
					}
					$i++;
				}
			}
			)
		;
		//
		$pre_null_clinic=array();
		foreach ($null_clinics->get() as $n) {
			$pre_null_clinic[$n->eval_id]=$n->patient_id;
		}

		$mypatients=Patient::whereHas(
			'evaluation',
			function($q) use($user) {
				$q->whereDigiter_id($user->email);
			}
			)
		;
		$nullclinic=array_unique($pre_null_clinic);
		$count_eval_clin=array_merge($count_eval_clin,$nullclinic);
		$count_eval_clin=array_unique($count_eval_clin);
		
		return View::make(
			'tables.index',
			compact(
				'user',
				'investigator',
				'clinic',
				'evaluations',
				'precount_patients',
				'singlepatients',
				//'eval_clin'
				'pre_count_eval_clin',
				'count_eval_clin',
				'null_clinics',
				'nullclinic',
				'mypatients'
				//'pre_doctors',
				//'doctors'
				)
			)
		;
	}
	/**
	 * Display a listing of the resource.
	 * GET /tables
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tables/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tables
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /tables/{id}
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
	 * GET /tables/{id}/edit
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
	 * PUT /tables/{id}
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
	 * DELETE /tables/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}