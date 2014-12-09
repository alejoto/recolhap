@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/clinic')}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
	@include('clinical.includes.left')
@stop

@section('maincontent')

@include('clinical.includes.anamnesis')
@include('clinical.includes.ex_fc')
{{-- include('clinical.includes.hiperclot') --}} 
{{--  include('clinical.includes.treatment') --}}
@ include('clinical.includes.outcome')

<br>

@stop

@section('scripts')
{{HTML::script('assets/js/clinic_eval.js');}}
@stop
