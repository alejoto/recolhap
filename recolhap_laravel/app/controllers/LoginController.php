<?php

class LoginController extends \BaseController {

	public function postIndex () {

		//
		$email=$_POST['usr'];
		$pwd=$_POST['pwd'];
		if (Auth::attempt(array('email' => $email, 'password' => $pwd)))
		{
		    return 1;
		}
		return 0;
	}

	public function getLogout () {
		Auth::logout();
		return Redirect::to('/');
	}
	public function postRegister () {
		$email=Input::get('mail');
		if (User::whereEmail($email)->count()>0) {
			return 1;
		} else {


			/*$coord2='2.3';
			$requester='4.3';
			$tasks='t45.6';

			$mssgdata=compact(
				'coord2'     
				,'requester'  
				,'tasks'  
				)
			;
			$subject='testing email data';

			$coord='joaleto@yahoo.com';
			$name='Alejandro Toro';
			$taskingeasy= 'no_reply@taskingeasy.com';

			$maildata=array(
			    'recipient'    =>    $coord
			   , 'r_name'    =>    $name
			   , 'sender'    =>    $taskingeasy
			   , 's_name'    =>    'The TaskingEasy team'
			   , 'subject'    =>    $subject
			);*/

			$mail='joaleto@yahoo.com';
			$subject='Collaborator left project';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= 'From: no reply<no_reply@healmydisease.com>' . "\r\n";
			$content=
			'<html>'.
				'<head>'.
					'<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type">'
					.'<title></title>'.
				'</head>'.
				'<body>'.
					'<h1>Beta testing part 81</h1>'.
				'</body>'.
			'</html>';
			mail(
				$mail,
				$subject,
				$content,
				$headers
				)
			;



			/*Mail::send( 'emails.test',   $mssgdata,  function($message) use ($maildata) {
			    $message->to($maildata['recipient'],$maildata['r_name'])
					->from($maildata['sender'],$maildata['s_name'])
					->subject($maildata['subject']);
			});*/

		}
		//check if email already exists
		/*city_recolhap
		clinic_recolhap
		ivt_name
		ivt_surname
		ivt_doc
		ivt_specialty
		ivt_mobile
		mail
		pwd1*/
		
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
		//
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