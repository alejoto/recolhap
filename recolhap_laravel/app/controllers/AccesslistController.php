<?php

class AccesslistController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /accesslist
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::user()->rol<=3) {
			$u=Auth::user();
			$hid=$u->investigator->hospital_id;
			$rol=$u->rol;
			$admin=User::whereRol(2)->get();
			$coord=User::whereRol(3)->whereStatus(1)->get();
			$regular=Investigator::where('hospital_id','=',$hid)->get();
			//User::where('rol','<',1)->whereStatus(1)->get();
			$i_coord=User::whereRol(3)->where('status','<',1)->get();
			return View::make('accesslist.index',
				compact(
					'u',
					'rol',
					'admin',
					'coord',
					'regular',
					'i_coord'
					)
				)
			;
		} 
		else {
			return Redirect::to('patients');
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /accesslist/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /accesslist
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /accesslist/{id}
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
	 * GET /accesslist/{id}/edit
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
	 * PUT /accesslist/{id}
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
	 * DELETE /accesslist/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}