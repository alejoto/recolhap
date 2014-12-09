@extends('layouts.clinical')
@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/cath')}}" class="text-info">
	<i class="icon-share-alt "></i>
	VOLVER A LISTA CATETERISMO DERECHO</a>
@stop

@section('leftcontent')
<h3 id="left_title">Im&aacute;genes diagn&oacute;sticas</h3>
<h4>Cateterismo derecho</h4>
<a class="btn span2" id="showbas">Datos basales</a>
<a class="btn span2" id="showrt" >Test vasorreactividad</a>
@stop

@section('maincontent')
@include('rightcath.basal')
@include('rightcath.reactive')
@include('rightcath.savesuccess')
@stop

@section('scripts')
{{HTML::script('assets/js/ajax_forms.js');}}
{{HTML::script('assets/js/right_catheter.js');}}
@stop