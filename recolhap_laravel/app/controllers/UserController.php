<?php

class UserController extends \BaseController {
	
	public function activate () {
		$id=Input::get('id');
		$u=User::find($id);
		$u->status=1;
		$u->save();
	 	return 1;
	}

	public function inactivate () {
		$id=Input::get('id');
		$u=User::find($id);
		$u->status=0;
		$u->save();
	 	return 1;
	}

	public function noactiveyet () {
		return View::make('accesslist.no_active_yet');
	}

	public function requestnewpwd () {
		$email=Input::get('email');
		$u=User::whereEmail($email);
		if ($u->count()>0) {
			//check if previous requests and delete
			Pwdreset::whereEmail($email)->delete();

			//hashing parameters
			$hash=password_hash(date('Y-m-d H:i:s').$email, PASSWORD_DEFAULT);
			//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
			$hash=str_replace('/','',$hash);

			//then set new request
			$r=new Pwdreset;
			$r->email=$email;
			$r->token=$hash;
			$r->save();

			$mssgdata=array(
				'link'=>$hash
				)
			;
			$maildata=array(
				'recipient'	=>$email,
				'r_name'	=>'USUARIO RECOLHAP',
				'subject'	=>'Restablecer contraseña'
				)
			;

			Mail::send(   'emails.resetpwd',   $mssgdata,  function($message) use ($maildata) {
    		$message->to($maildata['recipient'],$maildata['r_name'])
            ->subject($maildata['subject']);
});

			return 1;
		} else {
			return 2;
		}
			
		
	}

	public function resetpwd ($token) {
		$still=Pwdreset::whereToken($token)->count();
		return View::make(
			'password.reset',
			compact(
				'token',
				'still'
			)
			)
		;
	}

	public function savenewpassword () {
		$email=Input::get('email');
		$pwd=Input::get('pwd1');
		$token=Input::get('token');
		$p_reset=Pwdreset::whereToken($token)->whereEmail($email);
		if ($p_reset->count()>0) {
			User::whereEmail($email)->update(
				array(
					'pwd'=>Hash::make($pwd)
					)
				)
			;
			$p_reset->delete();
			return 1;
		} else {
			return 2;
		}
		
	}

	

	

	/**
	 * Store a newly created resource in storage.
	 * POST /user
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /user/{id}
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
	 * GET /user/{id}/edit
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
	 * PUT /user/{id}
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
	 * DELETE /user/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}