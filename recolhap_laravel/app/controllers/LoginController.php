<?php

class LoginController extends \BaseController {

	public function postIndex () {

		//
		$email=$_POST['usr'];
		$pwd=$_POST['pwd'];
		if (Auth::attempt(array('email' => $email, 'password' => $pwd)))
		{
			if (Auth::user()->rol==1||Auth::user()->rol==2) {
				return 2;
			} else {
				return 1;
			}
		}
		return 0;
	}

	public function getLogout () {
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	* New user registration
	*/
	public function postRegister () {
		$email=Input::get('mail');
		if (User::whereEmail($email)->count()>0) {
			return 1;
		} else {
			$email=Input::get('mail');
			$pwd=Input::get('pwd1');

			//save user
			$u=new User;
			$u->email=	$email;
			$u->pwd=	Hash::make( $pwd );
			$u->save();

			//save investigator
			$i=new Investigator;
			$i->ivt_name=		Input::get('ivt_name');
			$i->ivt_surname=	Input::get('ivt_surname');
			$i->ivt_doc=		Input::get('ivt_doc');
			$i->ivt_specialty=	Input::get('ivt_specialty');
			$i->ivt_mobile=		Input::get('ivt_mobile');
			$i->user_id=		$email;
			$i->hospital_id=	Input::get('clinic_recolhap');
			$i->save();
			//

			$auth=array(
				'email' => $email, 
				'password' => $pwd
				)
			;

			//
			if (  Auth::attempt( $auth )  ) {
				return 2;
			}
		}
		
	}
	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
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

	/**
	 * Display the specified resource.
	 * GET /login/{id}
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
	 * GET /login/{id}/edit
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
	 * PUT /login/{id}
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
	 * DELETE /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}