@extends('layouts.main')
@section('content')
<div class="container recolhap_left">
	<h1>Completar perfil</h1>
	<h2>Hola  {{Auth::user()->investigator->ivt_name}}, aun no has asociado alguna institución de salud a tu perfil. </h2>
	para poder continuar en el registro debes asociar alguna institución de salud.
	<br>
	<br>
	ciudad
	<a href="" id="change_city" class="text-info" >
		<spam class="text-info" id="selected_city"></spam>
		(cambiar)
	</a>
	<br>
	<select name="" id="city_recolhap" class="input-xlarge required_">
		<option value=""></option>
		@foreach(City::all() as $c)
			<option value="{{$c->id}}">{{$c->name}}</option>
		@endforeach
		<option value="newcity">...agregar (no esta en el listado)</option>
	</select>
	<div id="newcity_form">
		<input type="text" id='newcityname' class="input-xlarge" placeholder='agregar ciudad'>
		<br>
		<a href="" id="add_new_city">Agregar </a> |
		<a href="" id="newcity_form_cancel">cancelar</a>
	</div>
	<div id="cascade1_register">
		Instituci&oacute;n 
		<a href="" id="change_clinic" class="text-info" >
			<spam class="text-info" id="selected_clinic"></spam>
			(cambiar)
		</a>
		(a la cual est&aacute; principalmente vinculado)
		<br>
		<select name="" id="clinic_recolhap" class="input-xlarge required_"></select>
		<div id="newclinic_form">
			<input type="text" class="input-xlarge" id="newclinicname" placeholder='Agregar nombre instituci&oacute;n'>
			<br>
			<a href="" id="add_new_clinic">Agregar </a> |
			<a href="" id="newclinic_form_cancel">cancelar</a>
		</div>
		<div id="cascade2_register">
			<button id="accept_hospital" class="btn btn-success">
				Agregar
			</button>
		</div>
	</div>
</div>

@stop
@section('scripts')
{{HTML::script('assets/js/medic.js');}}
{{HTML::script('assets/js/completedata.js');}}
@stop