@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/imaging')}}" class="text-info">
	Regresar a lista imagenes diagnósticas (resultados)
</a>
@stop

@section('leftcontent')
	@include('imaging.leftmenu')
@stop

@section('maincontent')
	@include('imaging.include.ecocardio')
	@include('imaging.include.x_ray')
	@include('imaging.include.tc_angio')
	@include('imaging.include.mri')
	@include('imaging.include.pulm_arteriography')
	@include('imaging.include.gammagr')
	@include('imaging.include.duplex_legs')
	<br>
@stop


@section('scripts')
{{HTML::script('assets/js/diagnostic.js');}}
@stop