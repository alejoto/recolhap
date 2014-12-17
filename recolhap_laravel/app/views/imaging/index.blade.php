@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('activehospital/patient/'.$patient_id)}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
@stop

@section('maincontent')
	<h3 id="left_title">Estudios imagenología</h3>
	<a class='text-info' href="{{URL::to('patient/'.$patient_id.'/imaging/create')}}">Agregar registro resultado estudio imagenología</a>
@stop