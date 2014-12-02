@extends('layouts.raw')
@section('content')
<div class="container recolhap_left">
	<div class="row">
		<div class="offset2 span8">
			<h1>Completar perfil</h1>
			Hola <b class="text-success">{{Auth::user()->email}}</b>, aun no tenemos todos tus datos
			<br>
			Por favor ingrésalos para que puedas continuar con el registro
			<br>
			{{Form::open(array('url'=>URL::to('complete/investigator')))}}
			<input type="text" name="ivt_name" id="ivt_name" placeholder="NOMBRES">
			<br>
			<input type="text" name="ivt_surname" id="ivt_surname" placeholder="APELLIDOS">
			<br>
			<input type="text" name="ivt_doc" id="ivt_doc" placeholder="CÉDULA">
			<br>
			<select name="ivt_specialty" id="ivt_specialty">
				<option value="">ESPECIALIDAD</option>
				<option value="NEUMOLOGIA">NEUMOLOGIA</option>
				<option value="MEDICINA INTERNA">MEDICINA INTERNA</option>
				<option value="MEDICINA GENERAL">MEDICINA GENERAL</option>
				<option value="DIGITADOR NO MEDICO">DIGITADOR NO MEDICO</option>
			</select>
			<br>
			<input type="text" name="ivt_mobile" id="ivt_mobile" placeholder="CELULAR">
			<br>
			<select name="ivt_city" id="ivt_city">
				<option value="">CIUDAD</option>
				@foreach(City::all() as $c)
					<option value="{{$c->id}}">{{$c->name}}</option>
				@endforeach
			</select>
			<input type="hidden" name="ivt_country" id="ivt_country" value='COLOMBIA' placeholder="enter data here"  disabled>
			<br>
			<select name="hospital_id" id="hospital_id">
				<option value="">HOSPITAL</option>
			</select>
			<br>
			<div class="text-info">
				Debes llenar todos los campos para poder ver el botón guardar
			</div>
			<input type="submit" class='btn' id='completeinvestigatordata'>
			{{Form::open()}}
		</div>
	</div>
</div>
@stop

@section('scripts')
{{HTML::script('assets/js/completeinvestigator.js');}}
@stop