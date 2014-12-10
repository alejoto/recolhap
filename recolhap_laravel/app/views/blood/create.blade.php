@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/blood')}}" class="text-info">
	Regresar a lista pruebas en sangre
</a>
@stop

@section('leftcontent')
	@include('blood.leftmenu')
@stop

@section('maincontent')
	
	
	@include('blood.include.hemoglobine')
	@include('blood.include.arteries')
	@include('blood.include.renal')
	@include('blood.include.liver')
	@include('blood.include.reuma')
@stop

@section('scripts')
{{HTML::script('assets/js/blood_test.js');}}
@stop